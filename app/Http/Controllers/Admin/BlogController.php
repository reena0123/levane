<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogValidation;
use Auth;

class BlogController extends Controller
{ 
    private Blog $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get();
        return view('Admin.blogs.view', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.blogs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogValidation $request)
    {

        try{

            $this->props($request)
            ->save();
            return back()->withSuccess('Blog created successful');

        }catch(Exception $e){
            return back()->withError('Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(BlogValidation $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('Admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogValidation $request, Blog $blog)
    {
        $this->blog = $blog;
        try { 
            $this->props($request)
            ->save();
            return back()->withSuccess("blog Updated");
        } catch (Exception $e) {
            return back()->withError("Somthing went wrong!");
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        try{

            $blog->delete();
           
            return back()->withSuccess("blog is Deleted");

        }catch (Exception $e) {

            return back()->withError("Somthing went wrong!");
        }
    }

    public function props(BlogValidation $request):object
    {
        $this->blog->name = $request->name;
        if ($request->hasFile('image')) {
            
            $this->blog->image = $request->image->store('blog/image','public');
        }
        $this->blog->is_featured = $request->is_featured;
        return $this;
    }

    public function save()
    {
        $this->blog->save();
        return $this;
    }
}
