<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HealthTestModel;

class HealthTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_tests = array(
            array('id' => '1','test_name' => 'CBC+ESR', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '2','test_name' => 'ECG', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '3','test_name' => 'Echo- 2D', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '4','test_name' => 'Lipid Profile Fasting', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '5','test_name' => 'Fasting Blood Sugar (FBS)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '6','test_name' => 'HbA1c', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '7','test_name' => 'Creatinine', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '8','test_name' => 'Urea', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '9','test_name' => 'Electrolytes', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '10','test_name' => 'Uric Acid', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '11','test_name' => 'Albumin', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '12','test_name' => 'Calcium', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '13','test_name' => 'Bilirubin', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '14','test_name' => 'SGOT (AST)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '15','test_name' => 'SGPT (ALT)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '16','test_name' => 'ALP ( Alkaline Phosphatase)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '17','test_name' => 'Urine Routine Examination (R/M/E)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '18','test_name' => 'Chest X-Ray (PA View)', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '19','test_name' => 'USG of Whole Abdomen', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '20','test_name' => 'Blood Grouping & Rh-Typing', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '21','test_name' => 'Gamma GT', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '22','test_name' => 'PSA', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '23','test_name' => 'TSH', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '24','test_name' => 'Complimentary Breakfast', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '25','test_name' => 'Diet Consultancy', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),
            array('id' => '26','test_name' => 'Consultation with Physician', 'test_details' => 'test','test_cost'=>'500','test_discount'=>'5', 'status' => 'true'),

        );

        foreach ($all_tests as $key => $item) {
            HealthTestModel::firstOrCreate(
                [ 'id'                 => $item['id'] ],
                [
                    'test_name'        => $item['test_name'],
                    'test_details'     => $item['test_details'],
                    'test_cost'        => $item['test_cost'],
                    'test_discount'    => $item['test_discount'],
                    'status'           => $item['status'],
                ]
            );
        }
    }
}
