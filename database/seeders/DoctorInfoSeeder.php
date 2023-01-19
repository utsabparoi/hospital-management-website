<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\backend\Doctor;

class DoctorInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor_infos = array(
            array('id' => '1','name' => 'DR. ASHRAFUZZAMAN DINAR', 'degree' => 'MBBS (Dhaka), BCS (H), MD (Critical Care Medicine), Intensive Care Unit (ICU), Dhaka Medical College Hospital, Dhaka.','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Medicine Specialist','position'=>'Consultant','details'=>'MBBS (Dhaka), BCS (H), MD (Critical Care Medicine), Intensive Care Unit (ICU), Dhaka Medical College Hospital, Dhaka.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '2','name' => 'DR. RAHIM ULLAH CHOWDHURY', 'degree' => 'BDS (DHAKA), DDS (DHAKA), MCPS; MS (ORAL AND MAXILLOFACIAL SURGERY)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Dentist','position'=>'Assistant Professor','details'=>'Assistant Professor, Dental unit. Chittagong Medical College. BMDC Reg. No. A 614','weekday'=>'Sunday', 'status' => 1),
            array('id' => '3','name' => 'DR. DEWAN MONIRUL ISLAM', 'degree' => 'MBBS; MD(Neurology)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Neuromedicine Specialist','position'=>'Senior Consultant','details'=>'Senior Consultant, Chittagong Medical College & Hospital. BMDC Reg. No. A 26185','weekday'=>'Saturday', 'status' => 1),
            array('id' => '4','name' => 'DR. WAHID MURAD CHOWDHURY', 'degree' => 'MBBS, DEM (UK), DIABETES (RCP LONDON), MEMBER (ENDOCRINE SOCIETY, USA)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Diabetes, Thyroid & Hormone Specialist (Endocrinologist)','position'=>'Senior Consultant','details'=>'MBBS, Diploma in Endocrinology (UK) Diabetes (RCP-London) Member-Endocrine Society (USA) Assistant Professor and Head of Department Asian Medical College and Hospital','weekday'=>'Saturday', 'status' => 1),
            array('id' => '5','name' => 'PROFESSOR DR. AFTABUN NAHAR', 'degree' => 'MBBS(DMC), DGO (Gynae & Obs), FCPS (Gynae & Obs)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Obstetrician & Gynecologist','position'=>'Professor','details'=>'MBBS (DMC), DGO (Gynae & Obs.) FCPS (Gynecology and Obstetrics) Professor Gynae Department, Dhaka Medical College Hospital, Dhaka.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '6','name' => 'DR. MD. MAHBUBUL ALAM CHOWDHURY', 'degree' => 'MBBS (DMC), MRCS (ADIN, UK); MS(Pediatric Surgery)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Child-Pediatric Surgeon','position'=>'Assistant Professor','details'=>'Assistant Professor, Child Pediatric Surgery Department, Abdul Malek Ukil Medical Collage, Noakhali.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '7','name' => 'DR. JUWEL DAS', 'degree' => 'MBBS (CU), DCH (CHILD HEALTH), SPECIALIZED TRAINED IN NEONATALOGY & NICU REG. NO. A-60868','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Pediatrician','position'=>'Consultant','details'=>'MBBS (CU), DCH (Child Health) Specialized Train in Neonatology and NICU Bangabandhu Sheikh Mujib Medical University, Dhaka Children Hospital Assistant Professor, Brahmanbaria Medical College and Hospital.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '8','name' => 'DR. MD. EUNUS JAHID', 'degree' => 'MBBS, DSM (MEDICINE), MCCP (USA), FRSH (LONDON), AST (OXFORD, UK), MEMBER (BSU)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Gastroenterologist','position'=>'Senior Consultant','details'=>'MBBS, DSM (Austria) MCCP (USA), FRSH (LONDON), AST (OXFORD, UK), MEMBER (BSU) Consultant, Asian Medical College Hospital, Dhaka Department of Medicine, Gastroenterology','weekday'=>'Saturday', 'status' => 1),
            array('id' => '9','name' => 'ASSOCIATE PROFESSOR DR. MD. MOTAHHAR HOSSAIN', 'degree' => 'MBBS, BCS (HEALTH), MS (SURGERY), FMAS (INDIA)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'General Surgeon','position'=>'Consultant','details'=>'PLASTIC & COSMETIC SURGEON MBBS, BCS (HEALTH), MS (SURGERY), FMAS (INDIA) Associate Professor, Surgery Department, CHOTTOGRAM MEDICAL COLLEGE HOSPITAL, CHOTTOGRAM.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '10','name' => 'DR. MD. SAIF ULLAH SUJON', 'degree' => 'MBBS (SSMC), MS (UROLOGY)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Urologist & Laparoscopic Surgeon','position'=>'Consultant','details'=>'MBBS (S.S.M.C), MS (Urology), Bangabandhu Sheikh Mujib Medical University, Dhaka Assistant Professor (Department of Urology) Shaheed Mansoor Ali Medical College, Dhaka','weekday'=>'Saturday', 'status' => 1),
            array('id' => '11','name' => 'DR. NAFIS RAHMAN', 'degree' => 'MBBS(Dhaka); BCS (H); DDV(Dermatology) BSMMU Dhaka.','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Dermatologist','position'=>'Consultant','details'=>'MBBS(Dhaka); BCS (H); DDV(Dermatology) BSMMU Dhaka.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '12','name' => 'DR. M A AWAL', 'degree' => 'MBBS; DCO (Curse End) Pahartoli Chokkhu Hospital, Chittagong.','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Eye Specialist (Ophthalmologist)','position'=>'Consultant','details'=>'Senior Consultant, Department of Ophthalmology Noakhali Eye Hospital & Diabetic Center Ltd.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '13','name' => 'DR. ASHRAFUZZAMAN DINAR', 'degree' => 'MBBS (Dhaka), BCS (H), MD (Critical Care Medicine), Intensive Care Unit (ICU), Dhaka Medical College Hospital, Dhaka.','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Medicine Specialist','position'=>'Consultant','details'=>'MBBS (Dhaka), BCS (H), MD (Critical Care Medicine), Intensive Care Unit (ICU), Dhaka Medical College Hospital, Dhaka.','weekday'=>'Saturday', 'status' => 1),
            array('id' => '14','name' => 'DR. RAHIM ULLAH CHOWDHURY', 'degree' => 'BDS (DHAKA), DDS (DHAKA), MCPS; MS (ORAL AND MAXILLOFACIAL SURGERY)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Dentist','position'=>'Assistant Professor','details'=>'Assistant Professor, Dental unit. Chittagong Medical College. BMDC Reg. No. A 614','weekday'=>'Sunday', 'status' => 1),
            array('id' => '15','name' => 'DR. DEWAN MONIRUL ISLAM', 'degree' => 'MBBS; MD(Neurology)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Neuromedicine Specialist','position'=>'Senior Consultant','details'=>'Senior Consultant, Chittagong Medical College & Hospital. BMDC Reg. No. A 26185','weekday'=>'Saturday', 'status' => 1),
            array('id' => '16','name' => 'DR. WAHID MURAD CHOWDHURY', 'degree' => 'MBBS, DEM (UK), DIABETES (RCP LONDON), MEMBER (ENDOCRINE SOCIETY, USA)','image'=>'/frontend/images/doctors/demo-doc.jpg','branch'=>'Chowmuhoni','department'=>'Diabetes, Thyroid & Hormone Specialist (Endocrinologist)','position'=>'Senior Consultant','details'=>'MBBS, Diploma in Endocrinology (UK) Diabetes (RCP-London) Member-Endocrine Society (USA) Assistant Professor and Head of Department Asian Medical College and Hospital','weekday'=>'Saturday', 'status' => 1),

        );

        foreach ($doctor_infos as $key => $item) {
            Doctor::firstOrCreate(
                [ 'id'                 => $item['id'] ],
                [
                    'name'             => $item['name'],
                    'degree'           => $item['degree'],
                    'image'            => $item['image'],
                    'branch'           => $item['branch'],
                    'department'       => $item['department'],
                    'position'         => $item['position'],
                    'details'          => $item['details'],
                    'weekday'          => $item['weekday'],
                    'status'           => $item['status'],
                ]
            );
        }
    }
}
