<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Prodact;
use App\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Str;


class ProdactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.prodacts.index');
        $data['prodacts']=Prodact::orderBy('id','desc')->get();
        return view('backend.prodact.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.prodacts.create');
        $data['categories']=Category::all();
      
       return view("backend.prodact.form",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  Gate::authorize('app.prodacts.store');
                    $request->validate([
                    'p_english_name'=>'required|unique:Prodacts,english_name',
                    'p_bangla_name'=>'required|unique:Prodacts,bangla_name',
                    'p_qty'=>'required',
                    'bying_price'=>'required',
                    'seling_price'=>'required'
                    ]);

                    $data= new Prodact();
                    $data->categories_id= $request->category_id;
                    $data->english_name=str::slug($request->p_english_name);
                    $data->bangla_name=$request->p_bangla_name;
                    $data->qty=$request->p_qty;
                    $data->bying_price=$request->bying_price;
                    $data->seling_price=$request->seling_price;
                    $data->save();

                    notify()->success("Prodact Added","Success");
                    return redirect()->route('app.prodacts.create');


      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('app.prodacts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.prodacts.edit');
        $data['categories']=Category::all(); 
        $data['editData']=Prodact::find($id);
        return view('backend.prodact.form',$data);
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
        Gate::authorize('app.prodacts.update');



        $request->validate([
            'p_english_name'=>'required',
            'p_bangla_name'=>'required',
            'p_qty'=>'required',
            'bying_price'=>'required',
            'seling_price'=>'required'
            ]);

            $data= Prodact::find($id);
            $data->categories_id= $request->category_id;
            $data->english_name=str::slug($request->p_english_name);
            $data->bangla_name=$request->p_bangla_name;
            $data->qty=$request->p_qty;
            $data->bying_price=$request->bying_price;
            $data->seling_price=$request->seling_price;
            $data->save();

            notify()->success("Prodact update","Success");
            return redirect()->route('app.prodacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodact $prodact)
    {
        Gate::authorize('app.prodacts.destroy');

        
   

      if ($prodact->delete()) {
        notify()->success("Prodact Deleted");
    }

    return back();
    }
}
