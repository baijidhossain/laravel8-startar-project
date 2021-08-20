<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use App\User;

class ProfileController extends Controller
{
    public function index(){
        $user=user::all();
     return view('backend.profile.index',compact(  $user));

    }

    public function update(Request $request){
    // $this->validate($request,[
    //                 'name'=>'required|string|max:255',
    //                 'email'=>'required|string|email|max:255',
                 
    //                 ]);


    //    $user=Auth::user();
    //    $user->update([
    //                 'name'=>$request->name,
    //                 'email'=>$request->email

    //    ]);
    //    if ($request->hasFile('avatar')) {
    //     $user->addMedia($request->avatar)->toMediaCollection('avatar');
    // }

           $data=User::find(Auth::user()->id);

            $data->name=$request->name;
            $data->email=$request->email;

    $requestimage=$request->file('image');
          
    $requestimage=$request->file('image');
          
                    if($requestimage){ 
                        $file=$requestimage;
                        $filename=date('YmdHi')."_".$file->getClientOriginalName();
                        $file->move(public_path('upload/user_image'),$filename);
                        $data['image']=$filename;
          
                       };

                       $data->save();
            notify()->success("Profile updated","Success");
            return redirect()->route('app.profile.index');



    }

    public function changepassword(){
      return view('backend.profile.password');
    }
    public function updatepassword(Request $request){

          $user=Auth::user();
        $hashpassword=$user->password;

        if(Hash::check($request->current_password,$hashpassword))
        {
            if($request->password==$request->password_confirmation)
            {
                if(!Hash::check($request->password,$hashpassword)){
                    $user->update([
    
                        'password'=>Hash::make($request->password)
    
                    ]);
                        Auth::logout();
                        return redirect()->route('login');
                    
    
                    }
           
            
                        else
                        {
                            notify()->Warning("New password can not be same as old password","Warning");
                        }

            }
            else{

                notify()->Warning("New password and confimation password dont match","Warning");
            }
          
            
        }
        else{

            notify()->Error("Current password not match","Error");
        }
        $this->validate($request,[

            'current_password'=>'required',
            'new_password'=>'required',
            'password'=>'required|confirmed',

        ]);
        return back();
        
        
    }
}
