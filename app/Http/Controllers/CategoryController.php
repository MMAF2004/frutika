<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\Facades\CategoryFacade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return CategoryFacade::index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return CategoryFacade::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::success('WOW', 'Category Has Been Created Successfuly');
        return CategoryFacade::store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show( $category)
    {
         return CategoryFacade::show($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        return $category;
        // return CategoryFacade::destroy($category);
    }
}
