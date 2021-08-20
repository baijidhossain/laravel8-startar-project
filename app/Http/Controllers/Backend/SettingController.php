<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\model\Setting;
use App\Setting as AppSetting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;


class SettingController extends Controller
{


            public function general(){
              Gate::authorize('app.settings.general');
            return view('backend.settings.general');
                
            }


            public function generalupdate(Request $request){

              Gate::authorize('app.settings.general.update');

            // Setting::updateOrCreate(['name'=>'site_title'], ['value'=>$request->get('site_title')]);
            // // Setting::updateOrCreate(['name'=>'site_description'],['value'=>$request->get('site_description')]);
            // // Setting::updateOrCreate(['name'=>'site_address'],['value'=>$request->get('site_address')]);
            // notify()->success("Settings updated","Success");
            // return back();
                    //    $request->site_title;

            $Setting_site_title=Setting::where('name','site_title')->first();
            $Setting_site_description=Setting::where('name','site_description')->first();
            $Setting_address=Setting::where('name','site_address')->first();
         


            //title 
            if( $Setting_site_title||$Setting_site_description||$Setting_address){

              Artisan::call("env:set APP_NAME='".str::upper(str::slug($request->get('site_title')))."'");

              $Setting_site_title->name='site_title';
              $Setting_site_description->name='site_description';
              $Setting_address->name='site_address';

              $Setting_site_title->value= str::upper(str::slug($request->get('site_title')));
              $Setting_site_description->value= $request->get('site_description');
              $Setting_address->value= $request->get('site_address');
              $Setting_address->save();
              $Setting_site_description->save();
              $Setting_site_title->save();
              notify()->success("settings updated","Success");
              return back();
            }
            else{
              $Setting=new Setting();
              $Setting->name='site_title';
              $Setting->name='site_description';
              $Setting->name='site_address';
              $Setting->value=str::slug($request->site_title) ;
              $Setting->value= $request->get('site_description');
              $Setting->value= $request->get('site_address');
              $Setting->save();
              $Setting->save();
              $Setting->save();
              notify()->success("settings created","Success");
              return back();

            }
            //
          }

          public function appaerance(){
            Gate::authorize('app.settings.appaerance.update');
            $site_logo=Setting::where('name','site_logo')->first();
             return view('backend.settings.appaerance',compact( $site_logo));
          }

          
         public function appaeranceupdate(Request $request){
          //   //update logo
         $site_logo=Setting::where('name','site_logo')->first();
       
         
         if($request->hasFile('site_logo')){
          // $site_logo->value=Storage::disk('public')->putFile('logos',$request->file('site_logo'));
          // $site_logo->save();
          @unlink(public_path('upload/site_logo/'.$site_logo->value));

          $requestimage=$request->file('site_logo');
          
          if($requestimage){ 
              $file=$requestimage;
              $filename=date('YmdHi')."_".$file->getClientOriginalName();
              $file->move(public_path('upload/site_logo'),$filename);
              $site_logo['value']=$filename;

             };


          $site_logo->save();
          notify()->success("settings updated","Success");
          return back();

         }


      }
      



      public function mail(){

        return view('backend.settings.mail');
       
        }

        public function  mailupdate(Request $request){
          $mail_mailer=Setting::where('name','mail_mailer')->first();
          $mail_encryption=Setting::where('name','mail_encryption')->first();
          $mail_host=Setting::where('name','mail_host')->first();
          $mail_port=Setting::where('name','mail_port')->first();
          $mail_username=Setting::where('name','mail_username')->first();
          $mail_password=Setting::where('name','mail_password')->first();
          $mail_from_address=Setting::where('name','mail_from_address')->first();
          $mail_from_name=Setting::where('name','mail_from_name')->first();
          

         if($mail_mailer||$mail_encryption||$mail_host||$mail_port||$mail_username|| $mail_from_address||$mail_from_name){

          $mail_mailer->value=str::slug($request->get('mail_mailer'));
           Artisan::call("env:set MAIL_MAILER='".str::slug($request->get('mail_mailer'))."'");
          $mail_mailer->save();

          $mail_encryption->value=str::slug($request->get('mail_encryption'));
          Artisan::call("env:set MAIL_ENCRYPTION='".str::slug($request->get('mail_encryption'))."'");
          $mail_encryption->save();

          $mail_host->value=str::slug($request->get('mail_host'));
          Artisan::call("env:set MAIL_HOST='".str::slug($request->get('mail_host'))."'");
          $mail_host->save();
          
          $mail_port->value=str::slug( $request->get('mail_port'));
          Artisan::call("env:set MAIL_PORT='".str::slug( $request->get('mail_port'))."'");
          $mail_port->save();

          $mail_username->value=str::slug($request->get('mail_username')) ;
          Artisan::call("env:set MAIL_USERNAME='".str::slug($request->get('mail_username'))."'");
          $mail_username->save();

          $mail_password->value=str::slug($request->get('mail_password'));
          Artisan::call("env:set MAIL_PASSWORD='".str::slug($request->get('mail_password'))."'");
          $mail_password->save();

          $mail_from_address->value=str::slug($request->get('mail_from_address'));
          Artisan::call("env:set MAIL_FROM_ADDRESS='".str::slug($request->get('mail_from_address'))."'");
          $mail_from_address->save();

          $mail_from_name->value=str::slug($request->get('mail_from_name'));
          Artisan::call("env:set MAIL_FROM_NAME='".str::slug($request->get('mail_from_name'))."'");
          $mail_from_name->save();


          notify()->success("settings updated","Success");
          return back();
         }
         else{
          notify()->Error("mail setting reset","Pleasse");
          return back();
         }

      
   }









        public function faviconicon(Request $request){
        
          Gate::authorize('app.settings.faviconicon.update');
          $site_favicon_icon=Setting::where('name','site_favicon_icon')->first();
          @unlink(public_path('upload/site_favicon_icon/'.$site_favicon_icon->value));
         if($request->hasFile('site_favicon_icon')){

          $requestimage=$request->file('site_favicon_icon');
          if($requestimage){ 
              $file=$requestimage;
            
              $filename=date('YmdHi')."_".$file->getClientOriginalName();
              $file->move(public_path('upload/site_favicon_icon'),$filename);
              $site_favicon_icon['value']=$filename;

             };
          $site_favicon_icon->save();
          notify()->success("Favicon icon update success","success");
          return back();

         }

        }
  }
