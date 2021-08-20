<?php

namespace Database\Seeders;

use App\Model\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // for ($i=0; $i <40; $i++) { 
        //     $category=Category::UpdateOrCreate([
        //         'name'=>'সকাল',
        //     ]);
        // }

        $category=Category::UpdateOrCreate(['name'=>'সকাল']);
        $category=Category::UpdateOrCreate(['name'=>'দুপুর']);
        $category=Category::UpdateOrCreate(['name'=>'স্টাফ খাবার']);
        $category=Category::UpdateOrCreate(['name'=>'ফাস্ট ফুড']);
        $category=Category::UpdateOrCreate(['name'=>'পানি']);
        $category=Category::UpdateOrCreate(['name'=>'ড্রিংস']);
        $category=Category::UpdateOrCreate(['name'=>'কলেজ']);
        $category=Category::UpdateOrCreate(['name'=>'বিস্কুট']);
        $category=Category::UpdateOrCreate(['name'=>'মিস্টি']);
        $category=Category::UpdateOrCreate(['name'=>'চানাচুর']);
        $category=Category::UpdateOrCreate(['name'=>'আইস্ক্রিম']);
        $category=Category::UpdateOrCreate(['name'=>'চিপ্স']);
       
    }
}
