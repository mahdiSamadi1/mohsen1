<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProjectReport;
use App\Services\WeatherService;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectReportResource;
use PDF;

class ProjectReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWeather(Request $request,WeatherService $weather){
        try {
            $weather=$weather->getWeatherInfo($request->lat,$request->lng,$request->city_id,'dailybylocation');
            return response()->json($weather);
        }catch (\Exception $e){
            return response(['error' => $e], 403);
        }
    }

    public  function getReports(Project $project){
        return $this->index($project);
    }

    public function getDeliveries(Project $project){
        return $this->index($project,126);
    }

    public function index(Project $project,$report_type_id = 7 )
    {
        // return response()->json($project);
//        $weather=$weather->getWeatherInfo($project->lat,$project->lng,'dailybylocation');
//        return response(['project_reports' => $report_type_id, 'message' => 'Retrieved successfully'], 200);

        $project_reports = $project->reports()->with(['RU' => function ($q) {
            $q->rightJoin('project_reports', function ($join) {
                $join->on('project_report_r_u.project_report_id', '=', 'project_reports.id');
            })->leftJoin('company_employees', function ($join) {
                $join->on('company_employees.id', '=', 'project_report_r_u.resource_id');
                $join->where('project_report_r_u.resource_type_id', 1);
            })->leftJoin('products', function ($join) {
                $join->on('products.id', '=', 'project_report_r_u.resource_id');
                $join->whereIn('project_report_r_u.resource_type_id', [2, 3]);
            })->leftJoin('skills', function ($join) {
                $join->on('skills.id', '=', 'project_report_r_u.skill_id');
                $join->where('project_report_r_u.resource_type_id', 1);
            })->leftJoin('base_info_values', function ($join) {
                $join->on('base_info_values.id', '=', 'project_report_r_u.unit_id');
                $join->whereIn('project_report_r_u.resource_type_id', [2, 3]);
            })->select(
                'project_report_r_u.*',
                DB::Raw("CONCAT(company_employees.name, ' ', company_employees.family) AS employee_name"),
                'company_employees.id as employee_id',
                'products.title as material_name',
                'products.id as material_id',
                'skills.title as skill_name',
                'base_info_values.value as unit_name');
        }, 'outcomes' => function ($q) {
            $q->rightJoin('project_reports', function ($join) {
                $join->on('project_report_outcomes.project_report_id', '=', 'project_reports.id');
            })->leftJoin('base_info_values', function ($join) {
                $join->on('base_info_values.id', '=', 'project_report_outcomes.unit_id');
            })->leftJoin('project_w_b_s', function ($join) {
                $join->on('project_w_b_s.id', '=', 'project_report_outcomes.project_wbs_id');
            })->leftJoin('price_lists', function ($join) {
                $join->on('price_lists.id', '=', 'project_w_b_s.price_list_id');
            })->leftJoin('project_w_b_s as wbs', 'project_w_b_s.parent_id', '=', 'wbs.id')
                ->select(
                'project_report_outcomes.*',
                DB::Raw("CONCAT(wbs.working_area, ' > ',price_lists.code, '-', price_lists.description, ' ',price_lists.unit) AS project_wbs_title"),
                'base_info_values.value as unit_name',
                'project_w_b_s.price_list_description as price_list_description');
        }])->where('project_reports.report_type_id',$report_type_id)->get();
        // return response()->json($project_reports);
//        dd($project_reports);
//        $project_reports = $project->reports()->with(['RU','outcomes'])->get();
        return response(['project_reports' => $project_reports, 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Project $project, Request $request)
    {

        $data = emptyStringToNull($request->all());
        $data['report_date'] = jalaliToGero($data['report_date']);
        $data['creator_id'] = $request->user()->id;
        $data['project_id'] = $project->id;
//        $data['weather_conditions'] =$weather->result->list[0]->weather[0]->description;
//
//        $data['low_temperature'] =$weather->result->list[0]->temp->min;
//
//        $data['high_temperature'] =$weather->result->list[0]->temp->max;

//        $data['site_active'] = 1;
        // $data['report_type_id'] = 7;

        $validator = Validator::make($data, [
            'project_id' => 'required|max:255',
            'description' => 'nullable|max:255',
            'report_type_id' => 'required|max:255',
            'report_date' => 'required|max:12',
            'creator_id' => 'required|max:255',
            'approved_date' => 'nullable|max:12',
            'confirmer_id' => 'nullable|max:255',
//            'project_site_id'=> 'nullable|max:255',
            'review_note' => 'nullable|max:255',
            'site_start_time' => 'nullable|max:8',
            'site_end_time' => 'nullable|max:8',
            'site_active' => 'nullable',
            'low_temperature' => 'nullable|max:25',
            'high_temperature' => 'nullable|max:25',
            'weather_conditions' => 'nullable|max:50',
        ]);
    //    return response($data['report_type_id']);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }

//        try {
            $report = $project->reports()->create($validator->valid());
//            $report->save();
//                    return response($report);

        $report = ProjectReport::query()->where('id',$report->id)->with(['RU', 'outcomes' ])->first();
        return response(['project_reports' => $report, 'message' => 'Created successfully'], 201);
//        } catch (\Exception $e) { // It's actually a QueryException but this works too
//            if ($e->getCode() == 23000) {
//                return response(['project_reports' => '', 'message' => 'امکان ثبت گزارش تکراری برای یک تاریخ وجود ندارد'], 403);
//            }
//            return response(['project_reports' => $e, 'message' => 'خطا در ثبت گزارش'], 403);
//
//        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectReport $projectReport
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectReport $projectReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectReport $projectReport
     * @return \Illuminate\Http\Response
     */
    public function updateReport(Request $request)
    {
        $data = emptyStringToNull($request->all());
        $data['report_date'] = jalaliToGero($data['report_date']);
        if (isset($data["approved_date"]))
            $data['approved_date'] = jalaliToGero($data['approved_date']);
        $report = null;
        if (isset($data["id"])) {
            $report = ProjectReport::find($data["id"]);
        }
        if ($report != null && $report->report_type_id === 7) {

            $validator = Validator::make($data, [
                'project_id' => 'required|max:255',
                'description' => 'nullable|max:255',
                'report_type_id' =>'required|max:255',
                'report_date' => 'required|max:12',
//                'creator_id' => 'required|max:255',
                'approved_date' => 'nullable|max:12',
                'confirmer_id' => 'nullable|max:255',
                'project_site_id' => 'max:255',
                'review_note' => 'nullable|max:255',
                'site_start_time' => 'required|max:8',
                'site_end_time' => 'required|max:8',
                'site_active' => 'required',
                'low_temperature' => 'required|max:25',
                'high_temperature' => 'required|max:25',
                'weather_conditions' => 'required|max:50',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'message' => 'Validation Error'], 422);
            }
            $report->update($validator->valid());
            $report = ProjectReport::query()->where('id',$report->id)->with(['RU', 'outcomes' ])->first();

            return response(['project_reports' => $report, 'message' => 'Created successfully'], 201);
        }elseif ($report != null && $report->report_type_id === 126) {

            $validator = Validator::make($data, [
                'project_id' => 'required|max:255',
                'description' => 'nullable|max:255',
                'report_type_id' =>'required|max:255',
                'report_date' => 'required|max:12',

            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'message' => 'Validation Error'], 422);
            }
            $report->update($validator->valid());
            $report = ProjectReport::query()->where('id',$report->id)->with(['RU', 'outcomes' ])->first();

            return response(['project_reports' => $report, 'message' => 'Created successfully'], 201);
        } else
            return response(['message' => 'Record not found'], 404);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectReport $projectReport
     * @return \Illuminate\Http\Response
     */
    public function destroy($projectReport_id)
    {
        $projectReport = ProjectReport::find($projectReport_id);
        if ($projectReport != null) {
            $projectReport->delete();
            return response(['message' => 'Deleted', 'report' => $projectReport], 200);
        } else {
            return response(['message' => 'Record not found', 'report' => $projectReport_id], 404);
        }
    }

    public function getReportWithDetails($projectReport_id)
    {
        $projectReport = ProjectReport::find($projectReport_id)->with(['RU', 'outcomes'])->get();
        return response(['project_report' => $projectReport, 'message' => $projectReport_id], 200);
    }

    public function updateProjectReport(Request $request)
    {
        try {
            return $this->updateReport($request);
        } catch (\Exception $e) {
            return response(['project_reports' => null, 'message' => 'خطا در انجام عملیات' . $e], 403);
        }
//        return response(['project_reports' => $request->all(), 'message' =>$request], 200);

    }

    public function printReport($report_id){
//        $shows = ProjectReport::all();

        return view('reports/list');
    }

    public function downloadPDF($id) {
//        return response($id);
        $project_report =ProjectReport::query()->where('id',$id)->with(['RU' => function ($q) {
            $q->rightJoin('project_reports', function ($join) {
                $join->on('project_report_r_u.project_report_id', '=', 'project_reports.id');
            })->leftJoin('company_employees', function ($join) {
                $join->on('company_employees.id', '=', 'project_report_r_u.resource_id');
                $join->where('project_report_r_u.resource_type_id', 1);
            })->leftJoin('products', function ($join) {
                $join->on('products.id', '=', 'project_report_r_u.resource_id');
                $join->whereIn('project_report_r_u.resource_type_id', [2, 3]);
            })->leftJoin('skills', function ($join) {
                $join->on('skills.id', '=', 'project_report_r_u.skill_id');
                $join->where('project_report_r_u.resource_type_id', 1);
            })->leftJoin('base_info_values', function ($join) {
                $join->on('base_info_values.id', '=', 'project_report_r_u.unit_id');
                $join->whereIn('project_report_r_u.resource_type_id', [2, 3]);
            })->select(
                'project_report_r_u.*',
                DB::Raw("CONCAT(company_employees.name, ' ', company_employees.family) AS employee_name"),
                'company_employees.id as employee_id',
                'products.title as material_name',
                'products.id as material_id',
                'skills.title as skill_name',
                'base_info_values.value as unit_name');
        }, 'outcomes' => function ($q) {
            $q->rightJoin('project_reports', function ($join) {
                $join->on('project_report_outcomes.project_report_id', '=', 'project_reports.id');
            })->leftJoin('base_info_values', function ($join) {
                $join->on('base_info_values.id', '=', 'project_report_outcomes.unit_id');
            })->leftJoin('project_w_b_s', function ($join) {
                $join->on('project_w_b_s.id', '=', 'project_report_outcomes.project_wbs_id');
            })->leftJoin('price_lists', function ($join) {
                $join->on('price_lists.id', '=', 'project_w_b_s.price_list_id');
            })->leftJoin('project_w_b_s as wbs', 'project_w_b_s.parent_id', '=', 'wbs.id')
                ->select(
                    'project_report_outcomes.*',
                    DB::Raw("CONCAT(wbs.working_area, ' > ',price_lists.code, '-', price_lists.description, ' ',price_lists.unit) AS project_wbs_title"),
                'base_info_values.value as unit_name',
                'project_w_b_s.price_list_description as price_list_description');
        },'project' => function($q) {
            $q->with('company');
        }])->first();
//return response($project_report);
        $pdf = PDF::loadView('reports.pdf', compact('project_report'));
//        return response()->download($pdf->download('document.pdf'));
        return response($pdf->Output('test.pdf',"I"),200)->header('Content-Type','application/pdf');

//        return response()->download($pdf->stream('document.pdf'));
    }
}
