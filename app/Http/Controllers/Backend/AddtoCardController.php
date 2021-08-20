<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\str;
use App\Model\OrderItem;
use App\Model\Prodact;
use Illuminate\Support\Facades\Redirect;

class AddtoCardController extends Controller
{
public function addtocard(Request $request){


// return $request->p_name;

  // dd($request->p_name);
    if( $request){
      

      $day = date('d/m/Y');
      $ym = date('m/Y');
      $y = date('Y');
      $data=new Order();
      $invoice_no='BH'.date('dmY').rand(50,100000);
      $data->cashier_id=auth()->user()->id;
      $data->invoice_no=$invoice_no;
      $data->day=$day;
      $data->month=$ym;
      $data->year=$y;
      $data->pay_type=$request->pay_type;
      

      foreach ($request->p_id as $key => $pid) {
        $prodact=Prodact::find($pid);
         
        if ($prodact->qty>=$request->p_qty[$key]) {
          $prodact->qty=$prodact->qty-$request->p_qty[$key];
          $prodact->save();
        }
        else{
         
            return ['success'=>true,'message'=>$prodact->english_name.': no availbe'];
          
        }


      }
           

    
      if( $data->save()){


        foreach(  $request->p_name as $item=>$v){
    

        

          /// OrderItem
            $data2= array(
              'order_id'=>$data->id,
              'cashiar_id'=>Auth()->user()->id,
              'order_date'=>$day,
              'order_month'=>$ym,
              'order_year'=>$y,
              'invoice_no'=>$data->invoice_no,
                'p_name'=>$request->p_name[$item],
                'bying_price'=>$request->p_price[$item],
                'selling_price'=>$request->p_price[$item],
                'qty'=>$request->p_qty[$item],
                'total_price'=>$request->p_qty[$item]*$request->p_price[$item],
                'itemvat'=>10/100*$request->p_price[$item],
                'service_charge'=>'40',
                'service_charge_vat'=>'10',
                'sd'=>'3',
                'discount'=>'2',
                'return'=>'3',
                'net_value'=>'200',
                'pay_type'=>$request->pay_type
                
    
            );
            $OrderItem= OrderItem::insert($data2);

           
              
         }
      }
    
      return ['success'=>true,'message'=>'data insert successfully'];
    }
    else{
      return ['error'=>true,'message'=>'No item selected'];
    }

 


}
}
