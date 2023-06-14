<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyEmployeeResource;
use App\Models\Company;
use App\Models\CompanyEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class CompanyEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company,Request $request)
    {
        try{
            $company_employees = $company->employees()->get();
            return response([ 'company_employees' => CompanyEmployeeResource::collection($company_employees), 'message' => 'Retrieved successfully'], 200);
        }catch (\Exception $exception){
            return response([ 'company_employees' => null, 'message' => 'Bad request or server error: '.$exception], 404);
        }
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
//        return response(['error' => $request->skills, 'Validation Error']);
        $data['skills']=implode(",", Arr::pluck($request->skills, 'value'));
        $validator = Validator::make($data, [
            'skills' => 'required|max:255',
            'name' => 'required|max:255',
            'family' => 'required|max:255',
            'mobile' => 'nullable|string|max:255',
        ]);
        //aaa
//        return response(['error' =>$validator->valid(), 'Validation Error']);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $company_employee = $request->user()
            ->companies()->find($data['company_id'])
            ->employees()->create($validator->valid());
        $company_employee->skills()->attach(explode(',',$data['skills']));
//        $company_employees = CompanyEmployee::create($data);
        $company_employees = $request->user()->companies()->first()->employees()->get();
        return response(['company_employee' => new CompanyEmployeeResource($company_employee),'employees'=>$company_employees, 'message' => 'Created successfully'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyEmployee  $companyEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyEmployee $companyemployee)
    {
        return response(['company_employee' => new CompanyEmployeeResource($companyemployee), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyEmployee  $companyEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyEmployee $companyemployee)
    {
        $data = $request->all();
//       return response(['error' => $companyemployee, 'Validation Error']);
        $data['skills']=implode(",", Arr::pluck($request->skills, 'value'));
//       return response(['error' => $data['skills'], 'Validation Error']);
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'family' => 'required|max:255',
            'skills' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        $companyemployee->update($validator->valid());
//        return response(['error' => $companyemployee, 'Validation Error']);
        $companyemployee->skills()->sync(explode(',',$data['skills']));
//        $company_employees = CompanyEmployee::create($data);
//        $company_employees = $request->user()->companies()->first()->employees()->get();
        return response(['company_employee' => null,'employees'=>$companyemployee, 'message' => 'updated successfully'], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyEmployee  $companyEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyEmployee $companyemployee)
    {
//        return response(['message' => $companyemployee->id], 200);

        $companyemployee->delete();

        return response(['message' => 'Deleted'], 200);
    }
}
