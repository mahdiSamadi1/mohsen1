<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\TempUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = Hash::make($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'created' => true, 'api_token' => $accessToken], 201);
    }
    public function testsms()
    {
        // create a new cURL resource
        $ch = curl_init();

// set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, "https://sms.3300.ir/api/wsSend.ashx?username=nbwa31675&password=carshive&line=&mobile=989156111781&message=1234&type=2&template=0");
        curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
        var_dump(curl_exec($ch));

// close cURL resource, and free up system resources
        curl_close($ch);
        /*
        $params = array(
            'username=nbwa31675',
            'password=carshive' ,
            'line=' ,//. self::LINE,
            'mobile=' . str_replace('+','','+989156111781'),
            'message=1234' ,
            'type=2' ,
            'template=0' ,
            //'life_time=60',
        );
        $result = Curl::send('GET', 'http://sms.3300.ir/api/wsSend.ashx', implode('&', $params));
        var_dump($result);
        if (!($result['responseCode'] == 200 && $result['body']['status'] < 0)) {
            return $result['responseCode'];
        } else {
            return true;
        }
        */
    }

    public function registerAndSetAuth(Request $request)
    {
//        return response(['status' => 'fail', 'message' => 'در ارسال کد تایید مشکلی رخ داده است لطفا مجددا تلاش کنید'], 200);
//        Auth::user()->hasAccessToCompany(82);
        $loginData = $request->validate([
            'mobile' => 'required|max:15'
        ]);

        $OTPcode =rand(1000, 9999);
//        $OTPcode = substr($loginData['mobile'], -4); ///
//        $TUser = TempUser::query()->where('mobile',$loginData['mobile'])->first();///
//        $OTPcode = $TUser?$TUser->auth_code:$OTPcode;
        $tempUser =  TempUser::updateOrCreate(
            ['mobile' => $loginData['mobile']],
            ['auth_code' => $OTPcode]
        );

        if (isset($tempUser->id)) {
//            $smsresult = \sms::send($loginData['mobile'], 'کد تایید شما ' . $OTPcode . ' می باشد');
            $smsresult = \sms::send($loginData['mobile'],$OTPcode);// 'کد تایید شما ' . $OTPcode . ' می باشد'
            return response(['status' => 'success', 'message' => 'کد تایید ارسال شد','smsresult'=>$smsresult], 200); //, 'user' => $tempUser
//            return response(['status' => 'success', 'message' => 'کد تایید ارسال شد','smsresult'=>'1'], 200); //, 'user' => $tempUser

        }

        return response(['status' => 'fail', 'message' => 'در ارسال کد تایید مشکلی رخ داده است لطفا مجددا تلاش کنید'], 200); //, 'user' => $tempUser
    }

    public function login(Request $request)
    {
        //        $loginData = $request->validate([
        //            'email' => 'email|required',
        //            'password' => 'required'
        //        ]);
        $loginData = $request->validate([
            'mobile' => 'required|max:15',
            'auth_code' => 'required|max:4'
        ]);
        //        dd($loginData['mobile']);
        if (TempUser::where('mobile', $loginData['mobile'])->where('auth_code', $loginData['auth_code'])->exists()) {//
            $user = User::firstOrCreate(
                ['phone' => $loginData['mobile']],
            );

            //            return response(['message' =>$user], 400);
            if (!auth()->loginUsingId($user->id)) {
                return response(['message' => 'This User does not exist, check your details'], 400);
            }

            /*
             * FOR React
             */
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response(['user' => auth()->user(), 'api_token' => $accessToken]);
            /*
             * FOR Vuejs
             */
            //            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            //
            //            $user = collect(auth()->user());
            //
            //            $user['api_token'] = $accessToken;
            //            return response($user);
        }
        return response(['message' => 'کد وارد شده صحیح نیست'], 400);
    }

    public function verify_token(Request $request)
    {
        $user = collect($request->user());
        $user['api_token'] = $request->api_token;
        return response($user, Response::HTTP_ACCEPTED);
        //        return $request->user();
    }

    public function complete_registration(Request $request)
    {
        $user = $request->user();
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'family' => 'required|min:3',
            'email' => 'required|email|max:50|min:3',
            'user_type' => 'required',
            'telegram_id' =>  'nullable|string|max:20',
            'instagram_id' => 'nullable|string|max:20',
        ]);
        $user->update($validatedData);
        // create a company for employee user
        if ($user->user_type === 'E') {
            $company = Company::firstOrCreate(['user_id' => $user->id], [
                'user_id' => $user->id,
                'company_name' => $user->name . ' ' . $user->family,
            ]);
            //            $user->companies()->associate($company);
            return response(['user' => $user, 'company' => $company], Response::HTTP_CREATED);
        }

        return response(['user' => $user], Response::HTTP_CREATED);
    }
    public function updateProfile(Request $request)
    {
        $user = $request->user();
        $validatedData = $request->validate([
            'name' => 'required|max:150|min:3',
            'family' => 'required|max:150|min:3',
            'company_name' => 'required|max:150|min:3',
            //            'phone' => 'required|size:11|unique:users,phone,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->family = $request->family;
        $user->company_name = $request->company_name;
        //        $user->phone = $request->phone;
        //        if ($photo = $this->upload()) {
        //            $user->avatar = $photo;
        //        }
        //return response(['user' => $request->avatar], Response::HTTP_CREATED);
        $path = '';
        if ($request->hasFile('avatar')) {
            $path = $request->avatar->storeAs(
                'uploads/avatars',
                $request->user()->id . '.' . $request->avatar->extension(),
                'public'
            );
            $user->avatar = $path;
        }
        $user->save();
        $user['api_token'] = $request->api_token;
        return response(auth()->user(), Response::HTTP_CREATED);
//        return response(['user' => $user], Response::HTTP_CREATED);
    }

    public function upload($folder = 'images', $key = 'photo', $validation = 'avatar|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
    {
        request()->validate([$key => $validation]);
        return request()->validate([$key => $validation]);
        $file = null;
        if (request()->hasFile($key)) {
            $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }

    public function getdefaulcompany(Request $request){
        $company = $request->user()->companies()->first();
        return response([ 'company' => $company, 'message' => 'Retrieved successfully'], 200);

//        return response([ 'company' => CompanyResource::collection($company), 'message' => 'Retrieved successfully'], 200);

    }
}
class Curl
{
    public static function send($method, $url, $data)
    {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_FORCE_OBJECT));
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
                break;
            default:
                if ($data) {
                    $url = sprintf("%s?%s", $url, $data);
                }
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);

        $response = curl_exec($curl);

        // prepare response
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        return array(
            'header' => $header,
            'body' => json_decode($body,true),
            'responseCode' => $httpCode
        );
    }
}
