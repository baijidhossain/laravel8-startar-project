<?php

namespace Database\Seeders;
use App\Model\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'name'=>'site_title',
            'value'=>'This is starter project',
           ]);
           
           Setting::updateOrCreate([
            'name'=>'site_description',
            'value'=>'site_description_site_description',
           ]);

           Setting::updateOrCreate([
            'name'=>'site_address',
            'value'=>'site_address_site_address',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_mailer',
            'value'=>'site_mailler',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_encryption',
            'value'=>'mail_encryption',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_host',
            'value'=>'mail_host',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_port',
            'value'=>'mail_port',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_username',
            'value'=>'mail_username',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_password',
            'value'=>'mail_password',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_from_address',
            'value'=>'mail_from_address',
           ]);

           Setting::updateOrCreate([
            'name'=>'mail_from_name',
            'value'=>'mail_from_name',
           ]);

           Setting::updateOrCreate([
            'name'=>'site_logo',
            'value'=>'',
           ]);

           Setting::updateOrCreate([
            'name'=>'site_favicon_icon',
            'value'=>'',
           ]);
    }
}
