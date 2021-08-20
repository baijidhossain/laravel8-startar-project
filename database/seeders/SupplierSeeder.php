<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Supplier;
use App\Model\Supplierdetails;
use App\Model\Supplierlastupdate;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier1=Supplier::UpdateOrCreate([
            'logo'=>'nopic.jpg',
            'name'=>'aci company',
            'mobile_no'=>'01775051601',
            'email'=>'aci@gmail.com',
            'address'=>'dhaka bonany',
        ]); 

        $supplier2=Supplier::UpdateOrCreate([
            'logo'=>'nopic.jpg',
            'name'=>'walton',
            'mobile_no'=>'01775051601',
            'email'=>'walton@gmail.com',
            'address'=>'bogura bonany',
        ]); 

        $supplier=Supplier::UpdateOrCreate([
            'logo'=>'nopic.jpg',
            'name'=>'Acme company',
            'mobile_no'=>'01775051601',
            'email'=>'acme@gmail.com',
            'address'=>'rongpur bonany',
        ]); 

        $supplier=Supplier::UpdateOrCreate([
            'logo'=>'nopic.jpg',
            'name'=>'akij group of company',
            'mobile_no'=>'01775051601',
            'email'=>'akij@gmail.com',
            'address'=>'borguna bonany',
        ]); 
    }
}
