<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Model\Category;
use App\Model\Prodact;
use App\Model\Role;

class CategoryController extends Controller
{



public function ajaxtest(Request $request){
    // // return ['success'=>true,'message'=>'data insert successfully'];
 

    // // return response()->json([
    // //     'alldata'=>$database,
    // // ]);
    // if ($request->ajax()) {
    //     $getdata=Prodact::where('categories_id',$request->id)->get();
    //     // return ['success'=>true,'message'=>$request->id];
    //     return view('backend.sale',compact('getdata'));
    // }

    // // return view('backend.sales.index',compact('getdata'));
  
   
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.categories.index');
        $data['categories']=category::all();
  
        return view('backend.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   Gate::authorize('app.categories.create');
        $categorie=Category::all();
        return view('backend.category.form',compact('categorie'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   Gate::authorize('app.categories.create');

        $this->validate($request,[
            'name'=>'required|unique:categories'
        ]);

        $data= new Category();
        $data->name=$request->name;
        if(  $data->save()){
            notify()->success("Category added","Succes");

            return redirect()->route('app.categories.index');
        }
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData']=Category::find($id);
        return view('backend.category.form',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('app.categories.edit');
        $data=Category::find($id);
        $data->name=$request->name;
        if(  $data->save()){
            notify()->success("Category Updated","Succes");

            return redirect()->route('app.categories.index');
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {


     dd("ggg");

   
    }
}
