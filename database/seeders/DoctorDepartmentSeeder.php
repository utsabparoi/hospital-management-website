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
            array('id' => '1','department_name' => 'Vascular Surgery', 'department_image' => '/backend/images/department/department.jpg',
                'department_description' =>'The Department of Vascular Surgery provides comprehensive services for patients with all types of peripheral vascular disorders, including the new technology of catheter-based intervention as well as traditional surgical treatments.


                Our staff provides dialysis access to allow those individuals with end-stage renal disease to begin treatment. Many patients are also treated for cerebrovascular disease to reduce the risk of stroke.' ,
                'status' => 1),

            array('id' => '2','department_name' => 'Thoracic Surgery', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Department of Thoracic Surgery encompasses the emergency and routine procedures of chest diseases. Emergency procedures include chest trauma and its consequences pleural effusion, pneumothorax, accidental inhalation of foreign body in aero digestive tract.


            Routine pulmonary procedures include lung cancer surgery (Lobectomy pneumonectomy), bronchiectasis, lung abscess, hydatid diseases, aspergilloma other component of chest include

            ==> Chest wall tumours, deformity, sternal diseases.
            ==> Pleural diseases like empyema thoraces, thickened pleura, mesothelioma, chylothorax.
            ==> Mediastinal tumour like, thymoma, Nero fibroma. Mediastinal cyst dermoid, giant lymph node.
            ==> Oesophageal Surgeries for benign and malignant strictures. Carcinoma oesothagus achalasia.
            ==> Diaphragmatic surgeries like ruptured diaphragm, event ration placation, hiatus hernia.
            ==> Tracheal surgeries like tracheal tumour, stenosis.
            ==> Pediatric thoracic procedures include congenital lobar emphysema pneumatocle, cystic hygroma, bochdaleks hernia.
            ==> Special and advanced procedures video bronchoscopy, cryobiopsy, laser ablation of tomour, pleuroscopy, video assisted thoracic surgery (vats).' ,
            'status' => 1),

            array('id' => '3','department_name' => 'Pain Clinic', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'
            The primary goal of the pain clinic is to help patients achieve the highest functional capacity possible within their medical and psychosocial limits by reducing narcotic medication, attempting to reduce pain, increasing activity level, and modifying pain-reinforcing behaviour.' ,
            'status' => 1),

            array('id' => '4','department_name' => 'Psychiatry', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'The Department of Psychiatry at Bangladesh Specialized Hospital, treats adults and children with mental and behavioral disorders.  It is rich in both clinical and research areas with current focuses on addiction, brain aging, trauma, schizophrenia, and obesity.The department provides innovative psychiatric evaluations, treatment and follow-up care for the spectrum of behavioral, learning and emotional problems.

            Among the many conditions that the average psychiatrist encounters in private practice are Personality-maladjustments, Phobias and Morbid fears, Marital troubles, Sexual problems, Mental depression, Alcoholism, Feeling of inferiority and inadequacy, Health complaints that fail to respond to medication, "Nervous breakdowns," and Psychoses.The duration of treatment, just as in physical disturbances, depends upon each individual case. Some conditions respond to relatively short treatment.

            Our caring clinical psychologist focuses on solving your most troubling problems with insight and compassion, and without judgement.

            Counseling commonly aids in the treatment of:

            ==> Mood and anxiety disorders
            ==> Marital and other relational problems
            ==> Anger problems
            ==> Substance abuse
            ==> Child and Adolescent psychological problems
            ==> Brain trauma

            Clients also benefit from Specific Therapies as Cognitive Behavior Therapy, Client Centered Approaches, Psycho Analysis, Hypnotherapy, Play Therapy etc.' ,
            'status' => 1),

            array('id' => '5','department_name' => 'Accident and Emergency', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'An accident and emergency department (A&E), emergency room (ER), emergency ward (EW) or casualty department, is a medical treatment facility specializing in emergency medicine, the acute care of patients who present without prior appointment; either by their own means or by that of an ambulance. The emergency department is usually found in a hospital or other primary care center. ' ,
            'status' => 1),

            array('id' => '6','department_name' => 'Anaesthesiology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Department of Anesthesiology is one of the busiest departments, which has over the years expanded from simple and traditional to complex and advanced services.

            Over the years, along with the development of medical sciences, the department has set up its own high standards in patient care. All clinical departments are anchored to this specialty. The department follows an integrated approach and standard protocols for patient care and research.

            The Department of Anaesthesiology provides anaesthesia services to all surgical specialties including general surgery, orthopaedics, obstetrics and gynaecology, otolaryngology, maxillofacial surgery, paediatric, plastic, neuro and cardiac surgery ,ENT head and neck surgery, gynaecologic, urologic and general and minimally invasive surgery.

            Other than services in the Operation theatres anaesthesia services are also offered for procedures like ERCP, Colonoscopy, dental procedures etc.

            The department has a 24 hours peri-operative service, apt enough to handle any kind of surgical emergencies and critical care of the patients and is committed to evidence based practice and continuous quality improvement. ' ,
            'status' => 1),

            array('id' => '7','department_name' => 'Cardiac Surgery','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'The department of cardiac surgery functions with a core team of best cardiac/ heart surgeons, interventional cardiologists, electrophysiologists in Dhaka, Bangladesh. They are further supported by a team of the best clinical cardiologists, cardiac anesthesiologists, interventional radiologists, cardiac intensivists and rehabilitation therapists.' ,
            'status' => 1),

            array('id' => '8','department_name' => 'Cardiology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'The Cardiology Department of Evercare Hospital Dhaka has gained reputation for its dynamic and innovation in the diagnosis, investigation and treatment of patients with all forms of heart diseases, both generally encountered and complex cases. We have a dedicated unit of full-time Consultants, and a team of junior doctors, nurses, and technicians trained to the highest standard in cardiac assessment. Our specialists diagnose and manage full range of heart conditions, and we are fully equipped with state-of-the-art facilities and complete range of services – from cardiac investigations to Interventional Cardiology procedures in ultramodern Catheterization Lab (Cath Lab). Cardio-pulmonary rehabilitation program is offered to patients through our Physical Medicine & Rehabilitation Centre. The hospital offers a multidisciplinary in-patient program, and also has complete Coronary Care Unit and Cardiothoracic ICU for critical cardiac patients. For emergency patients, we have 24-hour Accident & Emergency Centre and specialized team for stabilization and treatment of the patient.' ,
            'status' => 1),

            array('id' => '9','department_name' => 'Child Development Center','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'The children, who have come for the first time, are taken to our ‘Walk-In-Clinic’, the already diagnosed epilepsy children to ‘Epilepsy Clinic, the ‘High Risk Baby’ to ‘Multiple disability clinic: We always encourage and welcome parents to accompany their children as we strongly believe that parents are the ones who know their children the best and without their active participation it is impossible to make any changes for these affected children.' ,
            'status' => 1),

            array('id' => '10','department_name' => 'Critical Care','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Critical care units (CCUs) are specialist hospital department that treat patients who are seriously ill and need constant monitoring. These patients might, for example, have problems with one or more vital organ or be unable to breathe without support' ,
            'status' => 1),

            array('id' => '11','department_name' => 'Dental and Maxillofacial Surgery','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '12','department_name' => 'Endocrinology and Diabetology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '13','department_name' => 'Dermatology and Venereology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '14','department_name' => 'Dietetics and Nutrition','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '15','department_name' => 'ENT, Head and Neck Surgery','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '16','department_name' => 'Gastroenterology and Hepatology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '17','department_name' => 'General and Laparoscopic Surgery','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '18','department_name' => 'Haematology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '19','department_name' => 'Internal Medicine','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '20','department_name' => 'Laboratory Medicine','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '21','department_name' => 'Neonatology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '22','department_name' => 'Nephrology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '23','department_name' => 'Neurology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '24','department_name' => 'Neurosurgery','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '25','department_name' => 'Obstetrics and Gynaecology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '26','department_name' => 'Oncology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some dscription' ,
            'status' => 1),

            array('id' => '27','department_name' => 'Ophthalmology','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some dscription' ,
            'status' => 1),

            array('id' => '28','department_name' => 'Orthopaedics and Trauma','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some dscription' ,
            'status' => 1),

            array('id' => '29','department_name' => 'Paediatrics','department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some dscription' ,
            'status' => 1),

            array('id' => '30','department_name' => 'Paediatric Surgery', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some dscription' ,
            'status' => 1),

            array('id' => '31','department_name' => 'Physical Medicine and Rehabilitation', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '32','department_name' => 'Plastic, Reconstructive and Cosmetic Surgery', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '33','department_name' => 'Radiology and Imaging', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '43','department_name' => 'Respiratory Medicine', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '35','department_name' => 'TRANSFUSION MEDICINE', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '36','department_name' => 'Urology and Andrology', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

            array('id' => '37','department_name' => 'Vaccination', 'department_image' => '/backend/images/department/department.jpg',
            'department_description' =>'Write some description' ,
            'status' => 1),

        );

        foreach ($all_departments as $key => $item) {
            DepartmentModel::firstOrCreate(
                [ 'id'                => $item['id'] ],
                [
                    'department_name'           => $item['department_name'],
                    'department_image'     => $item['department_image'],
                    'department_description'            => $item['department_image'],
                    'status'          => $item['status'],
                ]
            );
        }
    }
}
