<?php

namespace Database\Seeders;

use App\Model\Order;
use App\Model\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {

      // for ($i=1; $i <=7; $i++) { 
      //   $order1231=Order::UpdateOrCreate([
      //     'invoice_no'=>'BH'.date('dmY').random_int(00,100000).$i
      //   ]);
      // }

     
    //     $order1231=Order::UpdateOrCreate(['invoice_no'=>'1231']);
    //     $orderitems1=OrderItem::UpdateOrCreate([
    //       'order_id'=>$order1231->id,
    //       'order_date'=>'BH'.date('Ymd').rand(10,50)
          
    //     ]);

    //     $order1232=Order::UpdateOrCreate(['invoice_no'=>'1232']);
    //     $orderitems2=OrderItem::UpdateOrCreate([
    //         'order_id'=>$order1232->id,
    //         'order_date'=>'BH'.date('Ymd').rand(10,50)
    //       ]);
                
          
    //     $order1233=Order::UpdateOrCreate(['invoice_no'=>'1233']);
    //     $orderitems3=OrderItem::UpdateOrCreate([
    //         'order_id'=>$order1233->id,
    //         'order_date'=>'BH'.date('Ymd').rand(10,50)
    //       ]);

    //       $order1234=Order::UpdateOrCreate(['invoice_no'=>'1234']);
    //       $orderitems4=OrderItem::UpdateOrCreate([
    //           'order_id'=>$order1234->id,
    //           'order_date'=>'BH'.date('Ymd').rand(10,50)
    //         ]);

    //         $order1235=Order::UpdateOrCreate(['invoice_no'=>'1235']);
    //         $orderitems5=OrderItem::UpdateOrCreate([
    //             'order_id'=>$order1235->id,
    //             'order_date'=>'BH'.date('Ymd').rand(10,50)
    //           ]);
     }
}
