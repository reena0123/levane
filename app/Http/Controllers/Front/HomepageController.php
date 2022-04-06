<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Gallery;

class HomepageController extends Controller
{
    public function index()
    {
        $products = Product::where("is_featured",true)
        ->latest()
        ->take(4)
        ->get();
        $blogs = Blog::where("is_featured",true)
        ->latest()
        ->take(4)
        ->get();
        $gallery = Gallery::where("is_featured",true)
        ->latest()
        ->take(4)
        ->get();

    	return view('Front.index',compact('products','blogs','gallery'));
    }
}
