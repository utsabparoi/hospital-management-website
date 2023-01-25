<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::firstOrCreate([
            'id'            => 1
        ],
        [
            'title'         => 'PRIME HOSPITAL LTD IS ONE OF THE LEADING PRIVATE HEALTHCARE PROVIDER IN BANGLADESH. IT IS LOCATED IN NOAKHALI.',
            'image'         => '/backend/images/prime.jpeg',
            'description'   => 'Prime Hospital Ltd is one of the leading private healthcare provider in Bangladesh. It is located in Noakhali. As the first advanced technology homegrown healthcare unit serving for over 20 years in Bangladesh, Prime Hospital Ltd was commenced  operations from 1996 . Now it is top one multi-disciplinary private hospital in greater Noakhali district. The reputation of prime hospital ltd is the result of quality clinical outcome and comprehensive care, made achievable through world class integrated healthcare facilities by highly trained professionals. Staffed by a large team of dedicated professional and a diverse mix of  highly skilled specialists . Prime Hospital Ltd strives to meet patient’s standards through quality healthcare and making a different in their lives.

            The outpatient department (Outdoor)  of the hospital can serve up to 1000 patients daily, through 70+ consultants. The outpatients service are open everyday in a convenient morning, afternoon and late evening hours. Other than our Emergency department is fully operational 24/7 round the year. Besides 150 beded  excellent indoor healthcare service are providing with the highly skilled team.

            Prime Hospital Ltd aims to provide outstanding service to the people of  Bangladesh by delivering the highest possible level of care.',
            'status'        => 1,
        ]);
    }
}
