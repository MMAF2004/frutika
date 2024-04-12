<?php
namespace App\Services\Services;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryService
{
    public function index()
    {
        $categories=Category::all();
        return view("categories.index",compact("categories"));
    }

    public function create()
    {
        return view("categories.create"); 
    }
    public function store(Request $request)
    {
        $category=$request->except("picture");
        $path=$request->picture->store("categories","public");
        $category["picture"]=$path;
        Category::create($category);
        Alert::success('WOW', 'Category Has Been Created Successfuly');
        return redirect()->route("category.index");
    }
    public function show($category)
    {
        Category::findorfail($category)->delete();       
        // Alert::success('WOW', 'Category Has Been Deleted Successfuly');
        return redirect()->route("category.index");
    }
}