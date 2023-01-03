<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DepartmentModel;
use App\Models\DoctorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    function DoctorInsertForm(){
        $department = DepartmentModel::all();
        return view('backend.page.doctor.insertDoctor', compact('department'));
    }
    function DoctorInsert(Request $request){
        $name = $request->input('DoctorName');
        $department = $request->input('DoctorDepartment');
        $position = $request->input('DoctorPosition');
        $visitStartTime = $request->input('DoctorVisitStartTime');
        $visitEndTime = $request->input('DoctorVisitEndTime');
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
                    ['doctor_name'=>$name, 'doctor_image'=>$new_doctor_image_url, 'doctor_department'=>$department, 'doctor_position'=>$position, 'doctor_visit_start_time'=>$visitStartTime, 'doctor_visit_end_time'=>$visitEndTime, 'doctor_description'=>$description, 'status'=>$status,]
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
       return view('backend.page.doctor.allDoctor', compact('doctor'));
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
        $department = DepartmentModel::all();
        return view('backend.page.doctor.editDoctor', compact('doctor', 'department'));
    }

    function DoctorUpdate(Request $request){
        $doctorId = $request->input('DoctorId');
        $name = $request->input('DoctorName');
        $image = $request->input('DoctorImage');
        $department = $request->input('DoctorDepartment');
        $position = $request->input('DoctorPosition');
        $visitStartTime = $request->input('DoctorVisitStartTime');
        $visitEndTime = $request->input('DoctorVisitEndTime');
        $description = $request->input('DoctorDescription');
        $status = $request->input('Status');
        $checkExistingDoctor = DoctorModel::where("id", "!=", $doctorId)->where("doctor_name", "=", $name)->count();
        if($checkExistingDoctor < 1){
            if($image == "undefined"){
                DoctorModel::where("id", "=", $doctorId)
                    ->update(["doctor_name" => $name, "doctor_department" => $department, "doctor_position" => $position, "doctor_visit_start_time" => $visitStartTime, "doctor_visit_end_time" => $visitEndTime, "doctor_description" => $description, "status" => $status]);

            }
            else{
                //delete present image
                $doctorImage = DoctorModel::where("id", "=", $doctorId )->first();
                $present_image = (explode('/', $doctorImage->doctor_image))[3];
                Storage::delete("public/images/".$present_image);

                //upload new image
                $new_image = $request->file('DoctorImage')->store('public/images');
                $new_image_explode = (explode('/', $new_image))[2];
                $new_image_url = "/storage/images/" . $new_image_explode;
                DoctorModel::where("id", "=", $doctorId)
                    ->update(["doctor_name" => $name, "doctor_image" => $new_image_url, "doctor_department" => $department, "doctor_position" => $position, "doctor_visit_start_time" => $visitStartTime, "doctor_visit_end_time" => $visitEndTime, "doctor_description" => $description, "status" => $status]);
            }

            return 1;
        }
        else{
            return 0;
        }
    }

    function DoctorDelete($id){
        DoctorModel::where("id", "=", $id)->delete();
        return redirect(route("allDoctor"));
    }
}
