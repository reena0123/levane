<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryValidation;
use Auth;

class GalleryController extends Controller
{
    private Gallery $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::get();
        return view('Admin.gallery.view', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryValidation $request)
    {
        try{

            $this->props($request)
            ->save();
            return back()->withSuccess('gallery created successful');

        }catch(Exception $e){
            return back()->withError('Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('Admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryValidation $request, Gallery $gallery)
    {
        $this->gallery= $gallery;
        try { 
            $this->props($request)
            ->save();
            return back()->withSuccess("galleryUpdated");
        } catch (Exception $e) {
            return back()->withError("Somthing went wrong!");
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        try{

            $gallery->delete();
           
            return back()->withSuccess("gallery is Deleted");

        }catch (Exception $e) {

            return back()->withError("Somthing went wrong!");
        }
    }

    public function props(GalleryValidation $request):object
    {
        
        if ($request->hasFile('images')) {
            
            $this->gallery->images = $request->images->store('gallery/image','public');
        }
        $this->gallery->is_featured = $request->is_featured;
        return $this;
    }

    public function save()
    {
        $this->gallery->save();
        return $this;
    }
}
