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
            [
                'title' => "Digital Marketing",
                'short_description' =>urlencode("Revamp your online presence"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Medical SEO",
                'short_description' =>urlencode("Improve your Google Standing"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Google Ad Marketing",
                'short_description' =>urlencode("Reach out to potential patients"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Phone, Email, and Chat Support",
                'short_description' =>urlencode("24/7 support, uninterrupted"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Project Management",
                'short_description' =>urlencode("Manage your medical clinic"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Product Management",
                'short_description' =>urlencode("Ongoing software support"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Virtual Assistance",
                'short_description' =>urlencode("Your personal assistant on the go"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Document Management",
                'short_description' =>urlencode("Access electronic patient data"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Quality Reporting",
                'short_description' =>urlencode("Ensure top-notch quality assurance"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Specialty specific coding",
                'short_description' =>urlencode("Custom coding for every specialty"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Denial Management",
                'short_description' =>urlencode("Predictive thorough denial analysis"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Credentialing and Contracting",
                'short_description' =>urlencode("Successful approval and contract extension"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Eligibility Management",
                'short_description' =>urlencode("Instant identification of insurance changes"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Transcription",
                'short_description' =>urlencode("Impeccable and accurate transcriptions"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Virtual Scribe",
                'short_description' =>urlencode("Unburden redundant data matrix"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "ERA Setup",
                'short_description' =>urlencode("Avail speedy payments with Electronic Remittance Advice"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            [
                'title' => "Revenue Cycle Management (RCM )",
                'short_description' =>urlencode("Efficient Medical Billing and Coding"),
                'image' => "https%3A%2F%2Fvia.placeholder.com%2F270"
            ],
            

            
        ]);
    }
}
