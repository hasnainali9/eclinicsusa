<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => "Dr. Qaisar Usmani, Rheumatology",
                'content' =>"EZMD has supported us tremendously in our challenging times. I ran a private clinic and wanted a company that would credential us with all the insurance companies and handle our billing and coding. Luckily, I came across EZMD Solutions on the internet. I am pleasantly surprised at how beneficial EZMD’s services have been to us.",
            ],
            [
                'name' => "Office Manager, SNS Rheumatology Associates",
                'content' =>"We have worked with various billing companies before knowing your company. We are satisfied that we found your company for medical support services. Your reports are timely and comprehensive. I will recommend your services to the ones who might be looking for a more reliable medical billing service.",
            ],
            [
                'name' => "Dr. Ajay Varma, Anesthesiology and Interventional Pain Medicine",
                'content' =>"I would like you to know how much we value your efforts. Your cooperation and expertise are greatly appreciated. I have been very pleased with your Medical Transcription services. Your transcription accuracy is always perfect and up to the mark.  On top of it, it is very economical",
            ],
            [
                'name' => "Manager, eClinicsUSA",
                'content' =>"We can personally vouch for their associate healthcare services. We were trying to establish our presence as a digital telemedicine portal and they had everything sorted from website to content to social media. Kudos for helping us achieve our goal!",
            ], 
        ]);
    }
}
