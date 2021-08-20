<?php

namespace Database\Seeders;

use App\Model\prodactdate;
use Illuminate\Database\Seeder;

class ProdactdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <=10 ; $i++) { 
            prodactdate::updateOrCreate([
                'supplier_name'=>'Aci company',
                'purchase_date'=>'3'+$i.'/'.'1'+$i.'/'.'2021',
                'total_price'=>'100'
                
              
               ]);
        }
      
    }
}
