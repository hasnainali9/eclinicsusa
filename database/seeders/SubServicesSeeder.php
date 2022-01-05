<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_services')->insert([
            [
                'title' => "Medical Website",
                'short_description' =>urlencode("Make Your Presence Standout") ,
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Medical Writeups",
                'short_description' =>urlencode("Captivate with engaging content"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Medical Media",
                'short_description' =>urlencode("Captivate with engaging content"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],

            
        ]);
    }
}
