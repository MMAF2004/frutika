<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Hash;
class categoryController extends Controller
{
    public function index()
    {
          $categories=Category::all();
       
         return CategoryResource::collection($categories);
        //  return  response()->json(["data"=>$categories,"error"=>""],200);;   
        
    }
    public function login(Request $request)
    {
       $user= User::where("email",$request->email)->first();
       if(Hash::check("password", $user->password))
       {
        return $user;
       }
       return "cannot access";
    }
}
