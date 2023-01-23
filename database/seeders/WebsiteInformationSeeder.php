<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteInformationModel;

class WebsiteInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteInformationModel::insertOrIgnore([
            'id' => '1',
            'favicon' => '/frontend/favicon/love.ico',
            'company_logo' => '/frontend/images/logo/prime-logo.png',
            'name' => 'Prime Hospital Ltd.',
            'title' => 'Prime Hospital Ltd.',
            'phone_one' => '01716566923',
            'phone_two' => '01712025995',
            'hot_line' => '1234',
            'primary_email' => 'primehospital12@gmail.com',
            'secondary_email' => 'comapnayemail@gmail.com',
            'primary_address' => 'General Hospital Road, Maijdee court, Noakhali-3800.',
            'website' => 'websitename.com',
            'bin_no' => 'Your bin no',
            'google_map' => 'Google map link',
            'secondary_address' => 'Chowmuhoni Chowrasta, Begumgonj, Noakhali',
            'meta_keyword' => 'Type Keyword',
            'meta_description' => 'Type Description',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
