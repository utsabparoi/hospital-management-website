<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DepartmentModel;

class DoctorDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_departments = array(
            array('id' => '1','department_name' => 'Vascular Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '2','department_name' => 'Thoracic Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '3','department_name' => 'Pain Clinic',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '4','department_name' => 'Psychiatry',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '5','department_name' => 'Accident and Emergency',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '6','department_name' => 'Anaesthesiology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '7','department_name' => 'Cardiac Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '8','department_name' => 'Cardiology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '9','department_name' => 'Child Development Center',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '10','department_name' => 'Critical Care',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '11','department_name' => 'Dental and Maxillofacial Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '12','department_name' => 'Endocrinology and Diabetology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '13','department_name' => 'Dermatology and Venereology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '14','department_name' => 'Dietetics and Nutrition',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '15','department_name' => 'ENT, Head and Neck Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '16','department_name' => 'Gastroenterology and Hepatology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '17','department_name' => 'General and Laparoscopic Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '18','department_name' => 'Haematology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '19','department_name' => 'Internal Medicine',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '20','department_name' => 'Laboratory Medicine',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '21','department_name' => 'Neonatology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '22','department_name' => 'Nephrology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '23','department_name' => 'Neurology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '24','department_name' => 'Neurosurgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '25','department_name' => 'Obstetrics and Gynaecology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '26','department_name' => 'Oncology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '27','department_name' => 'Ophthalmology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '28','department_name' => 'Orthopaedics and Trauma',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '29','department_name' => 'Paediatrics',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '30','department_name' => 'Paediatric Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '31','department_name' => 'Physical Medicine and Rehabilitation',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '32','department_name' => 'Plastic, Reconstructive and Cosmetic Surgery',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '33','department_name' => 'Radiology and Imaging',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '43','department_name' => 'Respiratory Medicine',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '35','department_name' => 'TRANSFUSION MEDICINE',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '36','department_name' => 'Urology and Andrology',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),
            array('id' => '37','department_name' => 'Vaccination',
                'department_image' => '', 'department_description' =>'' ,     'status' => 1),

        );

        foreach ($all_departments as $key => $item) {
            DepartmentModel::firstOrCreate(
                [ 'id'                => $item['id'] ],
                [
                    'department_name'           => $item['title'],
                    'department_image'     => $item['description'],
                    'department_description'            => $item['department_image'],
                    'image'           => $item['image'],
                    'status'          => $item['status'],
                ]
            );
        }
    }
}
