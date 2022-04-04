<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

    	return view('Front.product',compact('products'));
    }

    public function productDetail(Product $product)
    {
        return view('Front.product_detail',compact('product'));
    }
}
