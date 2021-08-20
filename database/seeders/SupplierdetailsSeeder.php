<?php

namespace Database\Seeders;
use App\Model\Supplier;
use App\Model\Supplierdetails;
use App\Model\Supplierlastupdate;

use Illuminate\Database\Seeder;

class SupplierdetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=4; $i++) { 
            $supplierdetails1=Supplierdetails::UpdateOrCreate([
                'supplier_id'=>'1',
                'date'=>'3'+$i.'/'.'1'+$i.'/'.'2021',
                'prodact_name'=>'1morgi',
                'qty'=>'10'*$i,
                'rate'=>'5',
                'total_price'=>'250',
            ]);
        }


        for ($i=1; $i <=6; $i++) { 
            $supplierdetails1=Supplierdetails::UpdateOrCreate([
                'supplier_id'=>'2',
                'date'=>'3'+$i.'/'.'1'+$i.'/'.'2021',
                'prodact_name'=>'duck',
                'qty'=>'10'*$i,
                'rate'=>'5',
                'total_price'=>'250',
                'due'=>'100'
            ]);
        }

        for ($i=1; $i <=3; $i++) { 
            $supplierdetails1=Supplierdetails::UpdateOrCreate([
                'supplier_id'=>'3',
                'date'=>'3'+$i.'/'.'1'+$i.'/'.'2021',
                'prodact_name'=>'duck',
                'qty'=>'10'*$i,
                'rate'=>'5',
                'total_price'=>'250',
                'due'=>'100'
            ]);
        }

        for ($i=1; $i <=4; $i++) { 
            $supplierdetails1=Supplierdetails::UpdateOrCreate([
                'supplier_id'=>'4',
                'date'=>'3'+$i.'/'.'1'+$i.'/'.'2021',
                'prodact_name'=>'duck',
                'qty'=>'10'*$i,
                'rate'=>'5',
                'total_price'=>'250',
                'due'=>'100'
            ]);
        }

    }
}
