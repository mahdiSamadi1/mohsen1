<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PriceListResource;
use App\Models\PriceList;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricelist = PriceList::all();
        return response(['pricelist' => PriceListResource::collection($pricelist), 'message' => 'Retrieved successfully'], 200);

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
     * @param  \App\Models\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function show(PriceList $priceList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceList $priceList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceList $priceList)
    {
        //
    }
}
