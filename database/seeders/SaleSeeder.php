<?php

namespace Database\Seeders;

use App\Model\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sale=Sale::UpdateOrCreate([
            'name'=>'sale1'
        ]); 
    }
}
