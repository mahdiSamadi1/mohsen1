<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    public function getLicense(Company $company)
    //SystemResource::menu()
    {
        

        $a = '[{ "message" : سلام , "license_name":لایسنس آزمایشی,"license_id":1,"licinse_expire_date":2023-02-31 ,"comany_id":3}]';
        
        return response([collect(json_decode($a))]);
        //return response('testtttt');

    }
}
