<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Module;
use App\Model\Permission;
use App\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{



                public function routepermision(Request $request)
                {
            //    $dd=$request->filled('routepermision');
                $routepermision=Role::find($request->role_id);
                $routepermision->routepermission=$request->filled('routepermision');
                $routepermision->save();
                notify()->success("routepermission","Update");
      
                return back();
                }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.roles.index');
        $roles=Role::all();
        return view('backend.roles.index',compact(  'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.roles.create');
    //    $modules =  Module::with('permission')->get();   
                $modules=Module::all();
    
       return view('backend.roles.form',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.roles.create');
        $this->validate($request,[
              'name'=>'required|unique:roles',
              'permissions'=>'required|array',
              'permissions.*'=>'integer',
              

        ]);


        Role::create([
                'name'=>$request->name,
                'slug'=>$request->name,

        ])->permissions()->sync($request->input('permissions'),[]);
        notify()->success("Role added","Succes");
       return redirect()->route('app.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        Gate::authorize('app.roles.edit');
        $modules=Module::all();
     
        return view('backend.roles.form',compact('modules','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
          


        $role->update([
            'name'=>$request->name,
            'slug'=>$request->name,
           
        ]);

        $role->permissions()->sync($request->input('permissions'));
        notify()->success("Role Updated","Success");
        return redirect()->route('app.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {

        Gate::authorize('app.roles.destroy');
        if($role->delatable==0){

            $role->delete();
            notify()->success("Role Deleted","Success");
        }
        else{

            notify()->error("You can\'t delete system role","Error");
        }

    
      
     return back();

    }
}
