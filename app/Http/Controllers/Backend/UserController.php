<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        Gate::authorize('app.Users.index');
        $users=User::orderBy('created_at','desc')->get();
        return view('backend.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.Users.create');
        $roles=Role::all();
        return view('backend.users.form',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
                    Gate::authorize('app.Users.create');
                    // $this->validate($request,[
                    // 'name'=>'required|string|max:255',
                    // 'email'=>'required|string|email|max:255|unique:users',
                    // 'role'=>'required',
                    // 'password'=>'required|confirmed|string|min:8',
                    // 'avater'=>'required|image'
                    // ]);

                    $data= new User();
                    $data->name=$request->name;
                    $data->email=$request->email;
                    $data->password= Hash::make($request->password);
                    $data->role_id=$request->role;
                    $data->status=$request->filled('status');

                    // if ($request->hasFile('avatar')) {
                    //     $data->addMedia($request->avatar)->toMediaCollection('avatar');
                    // }
                    $requestimage=$request->file('image');
          
                    if($requestimage){ 
                        $file=$requestimage;
                        $filename=date('YmdHi')."_".$file->getClientOriginalName();
                        $file->move(public_path('upload/user_image'),$filename);
                        $data['image']=$filename;
          
                       };
          
                    $data->save();
                    notify()->success("User Added","Success");
                    return redirect()->route('app.users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Gate::authorize('app.Users.edit');
        $roles=Role::all();
        return view('backend.users.form',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        
        Gate::authorize('app.Users.edit');
        $this->validate($request,[
           'name'=>'required|string|max:255',
           'email'=>'required|string|email|max:255|',
           'role'=>'required',
           'password'=>'nullable|confirmed|string|min:8',
           'avater'=>'nullable|image'
        ]);
     
                    $data= User::find($user->id);
                    $data->name=$request->name;
                    $data->email=$request->email;
                    $data->password=isset($request->password)? Hash::make($request->password) :$user->password;
                    $data->role_id=$request->role;
                    $data->status=$request->filled('status');
       
                    // if ($request->hasFile('avatar')) {
                    //     $data->addMedia($request->avatar)->toMediaCollection('avatar');
                    // }


                    $requestimage=$request->file('image');
          
                    if($requestimage){ 
                        $file=$requestimage;
                        $filename=date('YmdHi')."_".$file->getClientOriginalName();
                        $file->move(public_path('upload/user_image'),$filename);
                        $data['image']=$filename;
          
                       };
          

                    $data->save();
                    notify()->success("User Updated","Success");
                    return redirect()->route('app.users.index');
                
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Gate::authorize('app.Users.destroy');

        if(file_exists('public/upload/user_image/'.$user->image) and ! empty($user->image))
        {
        	unlink('public/upload/user_image/'.$user->image);
        }
            if ($user->delete()) {
                notify()->success("User Deleted","Success");
            }

        return back();  
    }
}
