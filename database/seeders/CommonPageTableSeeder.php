<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommonPageTableSeeder extends Seeder{

    public function run(){
        DB::table('common_page')->insert([
            [
                'page_name' => 'Products',
                'page_slug' => 'products',
                'page_type' => 'products',
                'seo_title' => NULL,
                'seo_description' => NULL,
            ],
            [
                'page_name' => 'Contact Us',
                'page_slug' => 'contact-us',
                'page_type' => 'contact-us',
                'seo_title' => NULL,
                'seo_description' => NULL,
            ],
            [
                'page_name' => 'Request a Catalog',
                'page_slug' => 'catalog',
                'page_type' => 'catalog',
                'seo_title' => NULL,
                'seo_description' => NULL,
            ]
        ]);
    }
}
