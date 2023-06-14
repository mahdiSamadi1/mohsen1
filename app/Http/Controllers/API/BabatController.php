<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BabatResource;
use App\Models\Babat;
use Illuminate\Http\Request;

class BabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function babats()
    {
        $query = Babat::query();
        $items = $query->get();

        return response(['babats' => BabatResource::collection($items), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\babat  $babat
     * @return \Illuminate\Http\Response
     */
    public function show(babat $babat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\babat  $babat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, babat $babat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\babat  $babat
     * @return \Illuminate\Http\Response
     */
    public function destroy(babat $babat)
    {
        //
    }
}
