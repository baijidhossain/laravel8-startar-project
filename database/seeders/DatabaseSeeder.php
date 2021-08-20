<?php

namespace Database\Seeders;

use App\Model\pay_type;
use App\Model\prodactdate;
use App\Model\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ProdactSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderItemSeeder::class);
        $this->call(PayTypeSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(SupplierdetailsSeeder::class);
        $this->call(SupplierlastupdateSeeder::class);
        $this->call(ProdactdateSeeder::class);
        

    }
}
