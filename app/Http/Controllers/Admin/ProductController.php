<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductValidation;
use Auth;

class ProductController extends Controller
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::get();
        return view('Admin.products.view', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidation $request)
    {
        try { 
            $this->props($request)
            ->save();
            return back()->withSuccess("Product Created");
        } catch (Exception $e) {
            return back()->withError("Somthing went wrong!");
        }
       
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductValidation $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductValidation $request, Product $product)
    {   
        $this->product = $product;
        try { 
            $this->props($request)
            ->save();
            return back()->withSuccess("Product Updated");
        } catch (Exception $e) {
            return back()->withError("Somthing went wrong!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try{

            $product->delete();
           
            return back()->withSuccess("Product is Deleted");

        }catch (Exception $e) {

            return back()->withError("Somthing went wrong!");
        }
    }

    /**
     * Set Props
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
    private function props(ProductValidation $request):object
    {
        
        
        $this->product->title = $request->title;
        $this->product->description = $request->description;
        $this->product->pdf_title = $request->pdf_title;
        if ($request->hasFile('pdf_file')) {
            
            $this->product->pdf_file = $request->pdf_file->store('product/pdf','public');
        }
        
        $this->product->is_featured = $request->is_featured;
        return $this;
    }
    /**
     * store the specified resource.
     *
     */
    private function save()
    {
        $this->product->save();
        return $this;
    }
}
