<?php
namespace App\Services\Services;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function index()
    {
        
        return view("products.index");
    }
}