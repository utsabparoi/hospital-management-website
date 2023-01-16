<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::firstOrCreate([
            'id'            => 1
        ],
        [
            'title'          => '24/7 Accident &amp; Emergency Service',
            'image'           => '/assets/images/slider/2023/Jan/11673865518-847832.webp',
            'description'          => 'we are ready with our 24/7 Accident &amp; Emergency team.',
            'subtitle'          => 'For any serious accidents Injuries or Conditions,',
            'status'        => 1,
        ]);
    }
}
