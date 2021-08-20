<?php

use App\Model\Permission;
use App\Model\Role;
use App\Model\Setting;

use App\Model\User;
use Illuminate\Support\Facades\Auth;

function defaultimage(){

    $role= "assets/defaultimage/defaultimage.jpg";
    
    return $role;
}

function profileimage(){
  return $userimage="/upload/profile_image/".Auth::user()->image;
}

function userimage(){

  if(Auth::user()->image==null){
    return $userimage= "assets/defaultimage/defaultimage.jpg";
    }
else{
    return $userimage="/upload/user_image/".Auth::user()->image;
}
    
}

function site_logo(){

  $site_logo= Setting::where('name','site_logo')->first();

    return  "/upload/site_logo/".$site_logo->value;
 }

 function site_favicon_icon(){

  $site_favicon_icon= Setting::where('name','site_favicon_icon')->first();

    return  "/upload/site_favicon_icon/".$site_favicon_icon->value;
 }

 function permisionshow(){


 }
 




