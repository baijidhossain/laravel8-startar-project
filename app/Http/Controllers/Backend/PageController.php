<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.pages.index');
        $pages=Page::latest('id')->get();
        return view('backend.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.pages.create');
        return view('backend.pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.pages.create');
        $data= new Page();
        $data->title=$request->title;
        $data->slug= Str::slug($request->title);
        $data->excerpt=$request->excerpt;
        $data->body=$request->body;
        $data->meta_description=$request->meta_description;
        $data->meta_kywords=$request->meta_kywords;
        $data->status=$request->filled('status');
        
     

           //image upload
           if($request->hasFile('image')) {
            $data->addMedia($request->image)->toMediaCollection('image');

        }
        $data->save(); 
        
        notify()->success("Page created","Success");
        return redirect()->route('app.pages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.pages.form',compact('page'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        Gate::authorize('app.pages.edit');
        $data= Page::find($page->id);
        $data->title=$request->title;
        $data->slug= Str::slug($request->title);
        $data->excerpt=$request->excerpt;
        $data->body=$request->body;
        $data->meta_description=$request->meta_description;
        $data->meta_kywords=$request->meta_kywords;
        $data->status=$request->filled('status');
        
     

           //image upload
           if($request->hasFile('image')) {
            $data->addMedia($request->image)->toMediaCollection('image');

        }
        $data->save(); 
        
        notify()->success("Page Updated","Success");
        return redirect()->route('app.pages.index');












    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        Gate::authorize('app.pages.destroy');
        $page->delete();
        notify()->success("Page deleted","Success");
        return back();

    }
}
