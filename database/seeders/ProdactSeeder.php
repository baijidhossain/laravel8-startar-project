<?php

namespace Database\Seeders;
use App\Model\Prodact;
use App\Model\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ProdactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $category_id=Category::all();


        // Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Xiaomi 1',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);
        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Xiaomi 2',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);
        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Xiaomi 3',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);
        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Xiaomi 4',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);
        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Xiaomi 5',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);


        // Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Samsung j1',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);


        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Samsung j2',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);


        //    Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>'Samsung j3',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);

        //    Prodact::updateOrCreate([
        //     'categories_id'=>'2',
        //     'english_name'=>'Samsung j4',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);

        //    Prodact::updateOrCreate([
        //     'categories_id'=>'2',
        //     'english_name'=>'Samsung j5',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);

        //    Prodact::updateOrCreate([
        //     'categories_id'=>'2',
        //     'english_name'=>'Samsung j6',
        //     'bangla_name'=>'samsung mobile',
        
        //    ]);


        // for ($i=0; $i <5; $i++) { 
        //     Prodact::updateOrCreate([
        //     'categories_id'=>'1',
        //     'english_name'=>str::random(10),
        //     'bangla_name'=>str::random(10).'বায়েজিদ',
        //     'bying_price'=>'50',
        //     'seling_price'=>'250'
        
        //    ]);
        // }

 

        // for ($i=0; $i <10; $i++) { 
        //     Prodact::updateOrCreate([
        //     'categories_id'=>'2',
        //     'english_name'=>str::random(10),
        //     'bangla_name'=>str::random(10).'বায়েজিদ',
        //     'bying_price'=>'100',
        //     'seling_price'=>'600'
        
        //    ]);
        // }

         //Morning items
             Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Porota',
            'bangla_name'=>'পরটা',
            'qty'=>'10',
            'bying_price'=>'8',
            'seling_price'=>'10'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Vaji',
            'bangla_name'=>'ভাজি',
            'qty'=>'10',

            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dal',
            'bangla_name'=>'ডাল',
            'qty'=>'10',
            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dal vaji',
            'bangla_name'=>'ডাল ভাজি',
            'qty'=>'10',
            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dim vaji',
            'bangla_name'=>'ডিম ভাজি',
            'qty'=>'10',         
            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dim siddho',
            'bangla_name'=>'ডিম সিদ্ধ',
            'qty'=>'10',
            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dim ponch',
            'bangla_name'=>'ডিম পোঁছ',
            'qty'=>'10',
            'bying_price'=>'10',
            'seling_price'=>'15'
        
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Haluya',
            'bangla_name'=>'হালুয়া',
            'qty'=>'10',
            'bying_price'=>'12',
            'seling_price'=>'15'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Dut cha',
            'bangla_name'=>'দুধ চা',
            'qty'=>'10',
            'bying_price'=>'8',
            'seling_price'=>'10'
        
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'1',
            'english_name'=>'Rong cha',
            'bangla_name'=>'রং চা',
            'qty'=>'10',
            'bying_price'=>'5',
            'seling_price'=>'8'
        
           ]);
         //end Morning items


        // lunche items
        Prodact::updateOrCreate([
            'categories_id'=>'2',
            'english_name'=>'Vat',
            'bangla_name'=>'ভাত',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'2',
            'english_name'=>'Half Vat',
            'bangla_name'=>'হাফ ভাত',
            'qty'=>'10',
            'bying_price'=>'8',
            'seling_price'=>'10'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'2',
            'english_name'=>'Rui mach',
            'bangla_name'=>'রুই মাছ',
            'qty'=>'10',
            'bying_price'=>'100',
            'seling_price'=>'110'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'2',
            'english_name'=>'Boyal mach',
            'bangla_name'=>'বোয়াল মাছ',
            'qty'=>'10',
            'bying_price'=>'100',
            'seling_price'=>'110'
           ]);

           //drinks items
           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'Sprite 250ml',
            'bangla_name'=>'স্প্রাইট ২৫০মিলি',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'Sprite 600ml',
            'bangla_name'=>'স্প্রাইট ৬০০মিলি',
            'qty'=>'10',
            'bying_price'=>'30',
            'seling_price'=>'35'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'Sprite 1 li',
            'bangla_name'=>'স্প্রাইট ১লিটার',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'Sprite 2 li',
            'bangla_name'=>'স্প্রাইট ২লিটার',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'7up 250ml',
            'bangla_name'=>'সেভেন আপ ২৫০মিলি',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'7up 500ml',
            'bangla_name'=>'সেভেন আপ ৫০০মিলি',
            'qty'=>'10',
            'bying_price'=>'30',
            'seling_price'=>'35'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'7up lLi',
            'bangla_name'=>'সেভেন আপ ১লি',
            'qty'=>'10',
            'bying_price'=>'50',
            'seling_price'=>'60'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'6',
            'english_name'=>'7up 2Li',
            'bangla_name'=>'সেভেন আপ ২লি',
            'qty'=>'10',
            'bying_price'=>'65',
            'seling_price'=>'100'
           ]);
           //end drinks item

           //water

           Prodact::updateOrCreate([
            'categories_id'=>'5',
            'english_name'=>'Water 5 liter',
            'bangla_name'=>'পানি ৫লিঃ',
            'qty'=>'10',
            'bying_price'=>'65',
            'seling_price'=>'75'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'5',
            'english_name'=>'Water 2 liter',
            'bangla_name'=>'পানি ২লিঃ',
            'qty'=>'10',
            'bying_price'=>'25',
            'seling_price'=>'30'
           ]);
           Prodact::updateOrCreate([
            'categories_id'=>'5',
            'english_name'=>'Water 500 ml',
            'bangla_name'=>'পানি ৫০০মিলিঃ',
            'qty'=>'1৫',
            'bying_price'=>'10',
            'seling_price'=>'15'
           ]);
           //end water

           //buiscut

           Prodact::updateOrCreate([
            'categories_id'=>'8',
            'english_name'=>'Buiscut 10tk',
            'bangla_name'=>'বিস্কুট ১০টাকা',
            'qty'=>'10',
            'bying_price'=>'5',
            'seling_price'=>'10'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'8',
            'english_name'=>'Buiscut 20tk',
            'bangla_name'=>'বিস্কুট ২০টাকা',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);
           

           //end buiscut

           //misti
           Prodact::updateOrCreate([
            'categories_id'=>'9',
            'english_name'=>'laddu 10tk',
            'bangla_name'=>'লাড্ডু ১০টাকা',
            'qty'=>'10',
            'bying_price'=>'8',
            'seling_price'=>'10'
           ]);

           Prodact::updateOrCreate([
            'categories_id'=>'9',
            'english_name'=>'laddu 20tk',
            'bangla_name'=>'লাড্ডু ২০টাকা',
            'qty'=>'10',
            'bying_price'=>'15',
            'seling_price'=>'20'
           ]);
           //end misti

    }
}
