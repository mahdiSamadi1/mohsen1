<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectReportRUResource;
use App\Models\Project;
use App\Models\ProjectReport;
use App\Models\ProjectReportRU;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProjectReportRUController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectReport $project_report
     * @return \Illuminate\Http\Response
     */
    public function index($report_id)
    {
        $project_report = ProjectReport::find($report_id);
        if ($project_report != null) {
            $project_reportRU = $project_report->RU()->get();
            return response(['project_ReportRUs' => ProjectReportRUResource::collection($project_reportRU), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response(['message' => 'Record not found', 'reportHR' => $report_id], 404);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($project_report_id, Request $request)
    {
        $project_report = ProjectReport::find($project_report_id);
        $data = array_filter($request->all(), 'removeNulls');
//        $data['resource_id'] = null;
//        unset($data['resource_id']);
//        return response($data['resource_id']);

        if($data['resource_id'] == '' || $data['resource_id'] == 'null' ){
            $data['resource_id'] = null;
        }
        //return response($data);
        $validator = Validator::make($data, [
            'resource_type_id' => 'required|max:255',
            'project_report_id' => 'required|max:255',
            'unit_id' => 'required|max:255',
//            'resource_id' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }
        $reportType = $data['resource_type_id'];
//        return response($data);
        //return response($reportType);
        if ($reportType == 1) {
            $validator = Validator::make($data, [
                'skill_id' => 'required|max:255',
                'work_start_time' => 'required|max:8',
                'work_end_time' => 'required|max:8',
            ]);
        } else {
            $validator = Validator::make($data, [
                'resource_usage' => 'required|max:255',
            ]);
        }


        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error'], Response::HTTP_BAD_REQUEST);
        }
        //return response($validator->valid());
        $RU = ProjectReportRU::create($validator->valid());
//        $RU = $project_report->RU()->save($RU);
//        $RU->save();
        return $this->show($RU->id);
//        $project_reportRUs = $project_report->RU()->get();
//        return response(['project_report_ru' => $project_reportRUs, 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($Report_RU_id)
    {
        $ProjectReportRU = ProjectReportRU::find($Report_RU_id);
        $prjRep = ProjectReport::find($ProjectReportRU->project_report_id);
        $prj = Project::find($prjRep->project_id);
        return app(ProjectReportController::class)->index($prj);

        /*
        $ProjectReportRU = ProjectReportRU::find($Report_RU_id);

        if ($ProjectReportRU!=null && $ProjectReportRU->id==$Report_RU_id ){
            return response(['project_report_ru' => new ProjectReportRUResource($ProjectReportRU), 'message' => 'Retrieved successfully'], 200);
        }
        else{
            return response(['project_report_ru' => '$Report_HR_id', 'message' => 'record not found'], 404);
        }

*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectEmployee $projectEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_reportRU_id)
    {
        $RU = ProjectReportRU::find($project_reportRU_id);
        if ($RU != null) {
            $data = $request->all();
            if($data['resource_id'] == '' || $data['resource_id'] == 'null' ){
                $data['resource_id'] = null;
            }
            $validator = Validator::make($data, [
                'resource_type_id' => 'required|max:255',
                'unit_id' => 'required|max:255',
//                'resource_id' => 'required|max:255',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $reportType = $data['resource_type_id'];
            //return response($reportType);
            if ($reportType == 1) {
                $validator = Validator::make($data, [
                    'skill_id' => 'required|max:255',
                    'work_start_time' => 'required|max:8',
                    'work_end_time' => 'required|max:8',
                ]);
            } else {
                $validator = Validator::make($data, [
                    'resource_usage' => 'required|max:255',
                ]);
            }
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $RU->update($validator->valid());
            return response(['project_report_hrs' => $RU, 'message' => 'updated successfully'], 201);
        } else
            return response(['project_report_hrs' => $project_reportRU_id, 'message' => 'record not found'], 404);

    }

    public function destroy($project_reportRU_id)
    {
        $RU = ProjectReportRU::find($project_reportRU_id);
        if ($RU != null) {
            $prjRep = ProjectReport::find($RU->project_report_id);
            $RU->delete();
            $prj = Project::find($prjRep->project_id);
            return app(ProjectReportController::class)->index($prj);
        } else {
            return response(['message' => 'Record not found', 'reportHR' => $project_reportRU_id], 404);
        }

    }

}
