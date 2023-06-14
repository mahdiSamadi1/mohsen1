<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ProjectResource;
use App\Models\Company;
use App\Models\CompanyEmployeeRoles;
use App\Models\CompanyLicense;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companies = $request->user()->companies()->get();
        return response([ 'companies' => CompanyResource::collection($companies), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
//        return response(['project' => $request->hasFile('logo'), 'message' => 'Update project successfully'], 200);
        $data['user_id'] = $request->user()->id;
        //return response(['project' =>$data["user_id"], 'message' => 'Created successfully'], 201);
        $user = $request->user();
        $validatedData = $request->validate([
            'company_name' => 'required|min:3',
            'email' => 'required|email|max:50|min:3',
            'national_code' =>  'nullable|string|max:20',
            'telegram_id' =>  'nullable|string|max:20',
            'instagram_id' => 'nullable|string|max:20',
            'contact_number' => 'nullable|string|max:20',
            'company_website' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:250',
        ]);

//        if ($validatedData->fails()) {
//            return response(['error' => $validatedData->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
//        }
        $path = '';
        $company = $request->user()->companies()->create($validatedData);
        if ($request->hasFile('logo')) {
            $path = $request->logo->storeAs(
                'uploads/companies_logo',
                $company->id . '.' . $request->logo->extension(),
                'public'
            );
            $company->logo = $path;
        }
        $company->save();

        $this->addCompanyLicense($company);

        $this->addCompanyEmployee($company);

        $user = User::find($request->user()->id);
        return response(['user' => $user,'company' => new CompanyResource($company), 'message' => 'Created successfully'], 201);

    }
    public function addCompanyLicense(Company $company)
    {
        $company->companylicense()->create(['license_id' => 2,'start_date' => date('Y-m-d', time()),'expiration_date' =>date('Y-m-d' , strtotime("+30 days")) ]);
    }

    public function addCompanyEmployee(Company $company)
    {
        $user = User::find($company->user_id);
        $skill = Skill::query()->where('title','ایجاد کننده')->first();
        $emp = $company->employees()->create([ 'name' => $user->name,'family' => $user->family,'mobile' => $user->phone,'skills' => $skill->id ]);
        $this->addCompanyEmployeeRole($emp->id,$skill->id);
    }
    public function addCompanyEmployeeRole($emp_id,$skill_id)
    {
        CompanyEmployeeRoles::create(['company_employee_id' =>$emp_id,'skill_id' =>$skill_id ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
//        $a=Auth::user()->getCompaniesRolesAttribute();//->find($company->id)
//        return response(['company' => $a, 'message' => 'Retrieved successfully'], 200);

        return response(['company' => $company, 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $data = $request->all();
        return response(['project' =>$request, 'message' => 'Update project successfully'], 200);
        $data['user_id'] = $request->user()->id;
        //return response(['project' =>$data["user_id"], 'message' => 'Created successfully'], 201);
        $user = $request->user();
        $validator = Validator::make($data, [
            'company_name' => 'required|min:3',
            'email' => 'required|email|max:50|min:3',
            'national_code' =>  'nullable|string|max:20',
            'telegram_id' =>  'nullable|string|max:20',
            'instagram_id' => 'nullable|string|max:20',
            'contact_number' => 'nullable|string|max:20',
            'company_website' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:250',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }
        if (isset($data["id"]))
            $mycompany = Company::find($data["id"]);
        else
            $mycompany = $company;
//        return response(['error' => $validator->valid(), 'Validation Error'], Response::HTTP_BAD_REQUEST);

        $mycompany->update($validator->valid());
        $path = '';
        if ($request->hasFile('logo')) {
            $path = $request->logo->storeAs(
                'uploads/companies_logo',
                $mycompany->id . '.' . $request->logo->extension(),
                'public'
            );
            $mycompany->logo = $path;
        }
        $mycompany->save();
        $user = User::find($request->user()->id);
        return response(['user' => $user,'company' => new CompanyResource($mycompany), 'message' => 'Created successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    function updateCompany(Request $request){
        $data = $request->all();
//        return response(['project' =>$data, 'message' => 'Update project successfully'], 200);
        $data['user_id'] = $request->user()->id;
//        return response(['project' =>$data["id"], 'message' => 'Created successfully'], 201);
        $user = $request->user();
        $validator = Validator::make($data, [
            'company_name' => 'required|min:3',
            'email' => 'required|email|max:50|min:3',
            'national_code' =>  'nullable|string|max:20',
            'telegram_id' =>  'nullable|string|max:20',
            'instagram_id' => 'nullable|string|max:20',
            'contact_number' => 'nullable|string|max:20',
            'company_website' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:250',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }
        if (isset($data["id"]))
        {
            $mycompany = Company::find($data["id"]);
//            return response(['project' =>$mycompany, 'message' => 'Created successfully'], 201);

            if(isset($mycompany) and $mycompany != null)
            {
                $mycompany->update($validator->valid());
                $path = '';
                if ($request->hasFile('logo')) {
                    $path = $request->logo->storeAs(
                        'uploads/companies_logo',
                        $mycompany->id . '.' . $request->logo->extension(),
                        'public'
                    );
                    $mycompany->logo = $path;
                }
                $mycompany->save();
                $user = User::find($request->user()->id);
                return response(['user' => $user,'company' => new CompanyResource($mycompany), 'message' => 'Created successfully'], 201);

            }

        }

//        else
//            $mycompany = $company;
//        return response(['error' => $validator->valid(), 'Validation Error'], Response::HTTP_BAD_REQUEST);



    }
}
