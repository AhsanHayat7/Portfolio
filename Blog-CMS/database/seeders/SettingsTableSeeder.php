<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $setting = Setting::create([
            'site_name'=>"Laravel's Blogs",
            'address'=>'Pakistan Karachi',
            'contact_number'=> "021908765",
            'contact_email'=> "info@laravel_blog.com"

        ]);

    }
}
