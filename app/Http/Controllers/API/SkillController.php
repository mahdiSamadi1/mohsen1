<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyEmployeeResource;
use App\Http\Resources\SkillResource;
use App\Models\CompanyEmployee;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        $skills = collect($skills)->map(function ($item) {
            return collect($item)->only(['id', 'title'])->mapWithKeys(function ($item, $key) {
                $key = ($key == 'id') ? 'value' : (($key == 'title') ? 'label' : '');
                return [$key => $item];
            });
        });
        return response(['options' => $skills, 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
