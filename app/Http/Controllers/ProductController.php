<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware(['permission:product-list|product-create|product-edit|product-delete'], ['only' => ['index', 'show']]);
    //     $this->middleware(['permission:product-create'], ['only' => ['create', 'store']]);
    //     $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
    //     $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductFacade::index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
