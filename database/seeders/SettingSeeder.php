<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'Index'=>'web_title',
                'value'=>'EZMD Solutions'
            ],
            [
                'Index'=>'web_name',
                'value'=>'EZMD%20Solutions'
            ],
            [
                'Index'=>'web_logo_dark',
                'value'=>'%2Fimages%2Fdefault_logo_dark.svg'
            ],
            [
                'Index'=>'web_logo_light',
                'value'=>'%2Fimages%2Fdefault_logo_light.svg'
            ],
            [
                'Index'=>'web_phone_no',
                'value'=>'8669183963'
            ],
            [
                'Index'=>'web_address',
                'value'=>'30%20N%20Gould%20Street%2C%20Suite%203090%20%3Cbr%3E%20Sheridan%2C%20WY%2082801'
            ],
            [
                'Index'=>'web_footer_email',
                'value'=>'info@ezmdsolutions.com'
            ],
            [
                'Index'=>'web_contactus_email',
                'value'=>'contact@ezmdsolutions.com'
            ],
            [
                'Index'=>'web_footer_content',
                'value'=>'EZMD%20Solutions%20is%20a%20company%20offering%20top-notch%20medical%20support%20services%20in%20the%20areas%20of%20Medical%20Billing%2C%20Medical%20Coding%2C%20Medical%20Transcription%2C%20and%20Document%20Indexing.'
            ],
            [
                'Index'=>'web_copyright',
                'value'=>'Copyrights%20%C2%A92014%3A%20EzMd%20Solution-%20All%20right%20reserve'
            ],
            
        ]);
    }
}
