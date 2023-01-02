<?php

namespace Database\Seeders;

use App\Models\WebsiteInformationModel;
use Illuminate\Database\Seeder;

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
            'favicon' => 'https://source.unsplash.com/random',
            'company_logo' => 'https://source.unsplash.com/random',
            'name' => 'Company Name',
            'title' => 'Website Title',
            'phone_one' => 'Phone No.1',
            'phone_two' => 'Phone No.1',
            'hot_line' => 'Hot Line No.',
            'primary_email' => 'comapnayemail@gmail.com',
            'secondary_email' => 'comapnayemail@gmail.com',
            'primary_address' => 'Company Address 1',
            'website' => 'websitename.com',
            'bin_no' => 'Your bin no',
            'google_map' => 'Google map link',
            'secondary_address' => 'Company Address 2',
            'meta_keyword' => 'Type Keyword',
            'meta_description' => 'Type Description',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
