<?php

namespace Database\Seeders;
use App\Models\Setting;  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $settings = [  
            [  
                'title' => 'Website Title',  
                'image' => 'logo.png',  
                'logo' => 'logo.png',  
                'favicon' => 'favicon.ico',  
                'aboutshort' => 'This is a short about section.',  
                'about' => 'This is a detailed about section.',  
                'contact' => 'sample@example.com',  
                'banner1' => 'banner1.jpg',  
                'banner2' => 'banner2.jpg',  
                'description' => 'This is the website description.',  
                'phone' => '123-456-7890',  
                'email' => 'info@example.com',  
                'description_seo' => 'This is the SEO description.',  
                'keywords' => 'website, example, laravel',  
                'title_seo' => 'Example Website',  
                'link' => 'https://www.example.com',  
                'code' => '<script>console.log("Hello, World!");</script>',  
                'description2' => 'This is the second description.',  
                'description3' => 'This is the third description.',  
            ]  
        ];  

        foreach ($settings as $setting) {  
            Setting::create($setting);  
        }  
    }  
}  

