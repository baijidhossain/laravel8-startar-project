<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Order;
use App\Model\OrderItem;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




      $order1=Order::UpdateOrCreate([
        'invoice_no'=>'BH'.date('Ymd').rand(10,50),
        'day'=>date('d/m/Y'),
        'month'=>date('m/Y'),
        'year'=>date('Y'),
        'pay_type'=>('Cash'),
        
      ]);
      $orderitems1=OrderItem::UpdateOrCreate([
              'order_id'=>'1',
              'invoice_no'=>$order1->invoice_no,
              'order_date'=>$order1->day,
              'order_month'=>$order1->month,
              'order_year'=>$order1->year,
              'p_name'=>'ভাত',
              'bying_price'=>'100',
              'selling_price'=>'120',
              'qty'=>'5',
              'total_price'=>'600',
              'itemvat'=>'10',
              'service_charge'=>'50',
              'service_charge_vat'=>'30',
              'sd'=>'5',
              'discount'=>'10',
              'return'=>'5',
              'net_value'=>'600',
              'pay_type'=>$order1->pay_type
              
            ]);


  //  for ($i=1; $i <=2 ; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'1',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'ভাত',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Card'
        
  //     ]);
  //  }



  //  for ($i=1; $i <=3 ; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'2',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'ডাল',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Cash'
        
  //     ]);
  //  }


  //  for ($i=1; $i <=5; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'3',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'মাছ',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Cash'
        
  //     ]);
  //  }

   
  //  for ($i=1; $i <=3; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'4',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'মাছ',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Cash'
        
  //     ]);
  //  }

  //  for ($i=1; $i <=2; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'5',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'cashiar_id'=>'1',
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'মাছ',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Cash'
        
  //     ]);
  //  }

  //  for ($i=1; $i <=2; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'6',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'cashiar_id'=>'1',
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'মাছ',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Card'
        
  //     ]);
  //  }


  //  for ($i=1; $i <=3; $i++) { 
  //   $orderitems1=OrderItem::UpdateOrCreate([
  //       'order_id'=>'7',
  //       'order_date'=>date('d/m/Y'),
  //       'order_month'=>date('m/Y'),
  //       'order_year'=>date('Y'),
  //       'cashiar_id'=>'1',
  //       'invoice_no'=>'BH'.date('Ymd').rand(10,50),
  //       'p_name'=>'মাছ',
  //       'bying_price'=>'100'.$i,
  //       'selling_price'=>'120',
  //       'qty'=>'5',
  //       'total_price'=>'600'.$i,
  //       'itemvat'=>'10',
  //       'service_charge'=>'50'.$i,
  //       'service_charge_vat'=>'30'.$i,
  //       'sd'=>'5',
  //       'discount'=>'10'.$i,
  //       'return'=>'5'.$i,
  //       'net_value'=>'600'.$i,
  //       'pay_type'=>'Rom_service'
        
  //     ]);
  //  }

    }
}
