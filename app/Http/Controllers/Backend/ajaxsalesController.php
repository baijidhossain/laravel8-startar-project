<?php

namespace App\Http\Controllers\Backend;

use App\Model\Prodact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajaxsalesController extends Controller
{
    public function index(){

        return view('backend.sales.ajaxseles');
 
    }

    public function ajaxsales(Request $request){
 
       
        //  return ['success'=>true,'message'=>$request->id];

        $getdata=Prodact::where('categories_id',$request->id)->get();
       
        //     return view('backend.sales.ajaxseles',compact('getdata'));
        // }
    
     return view('backend.sales.ajax',compact('getdata'));
   
       
    }
}
