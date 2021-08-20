<?php

namespace Database\Seeders;
use App\Model\Supplier;
use App\Model\Supplierdetails;
use App\Model\Supplierlastupdate;

use Illuminate\Database\Seeder;

class SupplierlastupdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=4; $i++) { 
            $supplierlastupdate=Supplierlastupdate::UpdateOrCreate([
                'purchase_date_id'=>'1',
                'date'=>'1'+$i.'/'.'08/'.'2021',
                'deposit_money'=>'1000',
                'owing'=>'9000',
            ]);
        }


        for ($i=1; $i <=3; $i++) { 
            $supplierlastupdate=Supplierlastupdate::UpdateOrCreate([
                'purchase_date_id'=>'2',
                'date'=>'1'+$i.'/'.'08/'.'2021',
                'deposit_money'=>'1000',
                'owing'=>'9000',
            ]);
        }


        for ($i=1; $i <=4; $i++) { 
            $supplierlastupdate=Supplierlastupdate::UpdateOrCreate([
                'purchase_date_id'=>'3',
                'date'=>'1'+$i.'/'.'08/'.'2021',
                'deposit_money'=>'1000',
                'owing'=>'9000',
            ]);
        }
     
    }
}
