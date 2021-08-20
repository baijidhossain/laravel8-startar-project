<?php

namespace Database\Seeders;

use App\Model\pay_type;
use Illuminate\Database\Seeder;

class PayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pay_type=pay_type::UpdateOrCreate([
            'pay_type'=>'Cash'
        ]); 
        $pay_type=pay_type::UpdateOrCreate([
            'pay_type'=>'Card'
        ]); 
        $pay_type=pay_type::UpdateOrCreate([
            'pay_type'=>'Room-service'
        ]);
    }
}
