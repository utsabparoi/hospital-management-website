<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DoctorModel;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function DoctorInsert(Request $request){
        $name = $request->input('DoctorName');
        $department = $request->input('DoctorDepartment');
        $position = $request->input('DoctorPosition');
        $visitTime = $request->input('DoctorVisitTime');
        $description = $request->input('DoctorDescription');
        $status = $request->input('Status');

        $checkExistingDoctorName = DoctorModel::where("doctor_name", "=", $name)->count();
        if($checkExistingDoctorName < 1){
            //upload image
            $new_doctor_image = $request->file('DoctorImage')->store('public/images');
            $new_doctor_image_explode = (explode('/', $new_doctor_image))[2];
            $new_doctor_image_url = "/storage/images/" . $new_doctor_image_explode;

            DoctorModel::insertOrIgnore(
                [
                    ['doctor_name'=>$name, 'doctor_image'=>$new_doctor_image_url, 'doctor_department'=>$department, 'doctor_position'=>$position, 'doctor_visit_time'=>$visitTime, 'doctor_description'=>$description, 'status'=>$status,]
                ]
            );
            return 1;
        }
        else{
            return 0;
        }
    }

    function AllDoctor(){
       $doctor = DoctorModel::paginate(5);
       return view('Backend.page.doctor.allDoctor', compact('doctor'));
    }

    function DoctorStatusChange(Request $request){
        $id = $request->input("ID");
        $status = DoctorModel::where("id", "=", $id )->first()->status;
        if($status == "true"){
            DoctorModel::where("id", "=", $id)->update(["status"=>"false"]);
        }
        elseif ($status == "false"){
            DoctorModel::where("id", "=", $id)->update(["status"=>"true"]);
        }
        return $status;
    }

    function EditDoctor($id){
        $doctor = DoctorModel::find($id);
        return view('Backend.page.doctor.editDoctor', compact('doctor'));
    }

    function DoctorDelete($id){
        DoctorModel::where("id", "=", $id)->delete();
        return redirect(route("allDoctor"));
    }
}
