<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProductResource;
use Spatie\QueryBuilder\QueryBuilder;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->id) {
            $query->where('id', $request->id);
        }

        if ($request->type_id) {
            $query->where('type_id', $request->type_id);
        }

        if ($request->title) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        $items = $query->get();

        return response(['products' => ProductResource::collection($items), 'message' => 'Retrieved successfully'], 200);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'type_id' => 'required',
            'base_unit_id' => 'required',
            'conversion_rate' => 'required',
            'product_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $product = Product::create($data);

        return response(['product' => new ProductResource($product), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response(['product' => new ProductResource($product), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response(['product' => new ProductResource($product), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response(['message' => 'Deleted']);
    }

    public function machineries(Request $request)
    {
        $query = Product::query();
        $query->where('type_id','4');
        $items = $query->get();

        return response(['machineries' => ProductResource::collection($items), 'message' => 'Retrieved successfully'], 200);
    }

    public function materials(Request $request)
    {
        $query = Product::query();
        $query->where('type_id','5');
        $items = $query->get();

        return response(['materials' => ProductResource::collection($items), 'message' => 'Retrieved successfully'], 200);
    }


}
