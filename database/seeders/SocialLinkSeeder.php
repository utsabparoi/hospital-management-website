<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\SocialLink;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialLink::firstOrCreate([
            'id'            => 1
        ],
        [
            'name'          => 'Facebook',
            'url'           => 'https://facebook.com/smart',
            'icon'          => 'fab fa-facebook-f',
            'status'        => 1,
            'created_by'    => 1
        ]);
    }
}
