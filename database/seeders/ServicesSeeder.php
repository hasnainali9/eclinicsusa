<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => "Medical Billing Services",
                'short_description' =>urlencode("Boost your revenue, with efficient claims processing through an expert and dedicated medical billing team.") ,
                'icon' => "fa fa-stethoscope",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
                'featured'=>true
            ],
            [
                'title' => "Medical Coding",
                'short_description' =>urlencode("Experience impeccable code assignments with regular coding audits and strict compliance with HIPAA through our team of expert aapc coders") ,
                'icon' => "fas fa-code",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
                'featured'=>true
            ],
            [
                'title' => "Transcription",
                'short_description' =>urlencode("Avail secure patient transcriptions with quick turnaround and error-free service with our team of diligent medical transcriptionists.") ,
                'icon' => "fas fa-language",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
                'featured'=>true
            ],
            [
                'title' => "Virtual Scribing",
                'short_description' =>urlencode("Our Virtual Scribe will handle all patients’ calls and appointments while working remotely during your practice hours.") ,
                'icon' => "fas fa-user-md",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
                'featured'=>true
            ]
        ]);
        DB::table('services')->insert([
            [
                'title' => "Clinic Website",
                'short_description' =>urlencode("Let the world know about your expertise and make your presence stand out with an interactive website or blog showcasing elegantly what you do.") ,
                'icon' => "fab fa-firefox-browser",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
            ],
            [
                'title' => "Medical Write-Ups",
                'short_description' =>urlencode("Captivate your audience with engaging content and copywriting; be it web content, marketing sales copy, email newsletters, medical infopedia, or your regular blog.") ,
                'icon' => "fas fa-notes-medical",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
            ],
            [
                'title' => "Digital Marketing",
                'short_description' =>urlencode("Revamp your online presence and reach out to the right audience through our targeted digital marketing campaigns and make your brand shine like a social media star.") ,
                'icon' => "fas fa-ad",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
            ],
            [
                'title' => "Medical SEO",
                'short_description' =>urlencode("Improve your Google standings and rank among the top results while implementing thoroughly researched keywords, SEO best practices, and White Hat search engine optimization techniques.") ,
                'icon' => "fas fa-chart-bar",
                'image'=>'https%3A%2F%2Fvia.placeholder.com%2F1920',
                'content'=>urlencode('<p></p>'),
            ],
        ]);
    }
}
