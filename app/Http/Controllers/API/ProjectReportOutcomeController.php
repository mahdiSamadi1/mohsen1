<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectReportOutcome;
use App\Models\ProjectReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectReportOutcomeResource;

class ProjectReportOutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($report_id)
    {
        $project_report = ProjectReport::find($report_id);
        if ($project_report != null) {
            $project_report_Outcomes = $project_report->outcomes()->get();
            return response(['project_ReportOut' => ProjectReportOutcomeResource::collection($project_report_Outcomes), 'message' => 'Retrieved successfully'], 200);
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
//        $data = $request->all();
//        $data = array_filter($request->all(), 'removeNulls');
        $data = emptyStringToNull($request->all());

//        return response([$data]);
//        $data['project_wbs_id'] = $data['project_wbs_id']==''?null:$data['project_wbs_id'];
        $validator = Validator::make($data, [
            'project_report_id' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
        if ($request->has('project_wbs_id')) {
            $validator = Validator::make($data, [
                'unit_id' => 'required|max:255',

            ]);
        } else {
            $validator = Validator::make($data, [
                'description' => 'required|max:255',
            ]);
        }


        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }
//        return response($validator->valid());
        $outcomes = ProjectReportOutcome::create($validator->valid());
        $outcomes = $project_report->outcomes()->save($outcomes);
//        $outcomes->save();

        $project_report_outs = $project_report->outcomes()->get();
//        return response(['project_report_outcomes' => $project_report_outs, 'message' => 'Created successfully'], 200);
        return $this->show($outcomes->id);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProjectReportOutcome $projectReportOutcome
     * @return \Illuminate\Http\Response
     */
    public function show($Report_out_id)
    {
        $ProjectReportOutcome = ProjectReportOutcome::find($Report_out_id);
        $prjRep = ProjectReport::find($ProjectReportOutcome->project_report_id);
        $prj = Project::find($prjRep->project_id);
        // return response()->json($prj);
        return app(ProjectReportController::class)->index($prj,126);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectReportOutcome $projectReportOutcome
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
    //    return response($request->all());

        $out = ProjectReportOutcome::find($request->id);
    //    return response($out);
        if ($out != null) {
//            $data = array_filter($request->all(), array($this, 'removeNulls'));
//            $data = array_filter($request->all(), 'removeNulls');
            $data = emptyStringToNull($request->all());
//            return  response($data);
            $validator = Validator::make($data, [
                'project_report_id' => 'required|max:255',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            if ($request->has('project_wbs_id')) {
                $validator = Validator::make($data, [
                    'unit_id' => 'required|max:255',
                ]);
            } else {
                $validator = Validator::make($data, [
                    'description' => 'required',
                ]);

            }


            if ($validator->fails()) {
                return response(['error' => $validator->errors(), 'Validation Error']);
            }
            $out->update($validator->valid());

            return $this->show($request->id);

        } else
            return response(['project_report_outcomes' => $request->id, 'message' => 'record not found'], 404);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProjectReportOutcome $projectReportOutcome
     * @return \Illuminate\Http\Response
     */
    public function destroy($projectReportOutcome_id)
    {
        $out = ProjectReportOutcome::find($projectReportOutcome_id);
        if ($out != null) {
            $prjRep = ProjectReport::find($out->project_report_id);
            $out->delete();
            $prj = Project::find($prjRep->project_id);
            return app(ProjectReportController::class)->index($prj,126);
        } else {
            return response(['message' => 'Record not found', 'reportOutcome' => $projectReportOutcome_id], 404);
        }
    }
}
