<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DepartmentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    function DepartmentCreateForm(){
        return view('backend.page.department.createDepartment');
    }
    function DepartmentCreate(Request $request){
        $name = $request->input('DepartmentName');
        $description = $request->input('DepartmentDescription');
        $status = $request->input('Status');

        $checkExistingDepartmentName = DepartmentModel::where("department_name", "=", $name)->count();
        if($checkExistingDepartmentName < 1){
            //upload image
            $new_department_image = $request->file('DepartmentImage')->store('public/images');
            $new_department_image_explode = (explode('/', $new_department_image))[2];
            $new_department_image_url = "/storage/images/" . $new_department_image_explode;

            DepartmentModel::insertOrIgnore(
                [
                    ['department_name'=>$name, 'department_image'=>$new_department_image_url, 'department_description'=>$description, 'status'=>$status,]
                ]
            );
            return 1;
        }
        else{
            return 0;
        }
    }

    function AllDepartment(){
        $allDepartment = DepartmentModel::paginate(3);
        return view('backend.page.department.allDepartment', compact('allDepartment'));
    }

    function EditDepartment($id){
        $department = DepartmentModel::find($id);
        return view('backend.page.department.editDepartment', compact('department'));
    }

    function DepartmentUpdate(Request $request){
        $departmentId = $request->input('DepartmentId');
        $name = $request->input('DepartmentName');
        $image = $request->input('DepartmentImage');
        $description = $request->input('DepartmentDescription');
        $status = $request->input('Status');
        $checkExistingDepartment = DepartmentModel::where("id", "!=", $departmentId)->where("department_name", "=", $name)->count();
        if ($checkExistingDepartment < 1){
            if($image == "undefined"){
                DepartmentModel::where("id", "=", $departmentId)
                    ->update(["department_name" => $name, "department_description" => $description, "status" => $status]);

            }
            else{
                //delete present image
                $departmentImage = DepartmentModel::where("id", "=", $departmentId )->first();
                $present_image = (explode('/', $departmentImage->department_image))[3];
                Storage::delete("public/images/".$present_image);

                //upload new image
                $new_image = $request->file('DepartmentImage')->store('public/images');
                $new_image_explode = (explode('/', $new_image))[2];
                $new_image_url = "/storage/images/" . $new_image_explode;
                DepartmentModel::where("id", "=", $departmentId)
                    ->update(["department_name" => $name, "department_image" => $new_image_url, "department_description" => $description, "status" => $status]);
            }

            return 1;
        }
        else{
            return 0;
        }
    }

    function DepartmentStatusChange(Request $request){
        $id = $request->input("ID");
        $status = DepartmentModel::where("id", "=", $id )->first()->status;
        if($status == "true"){
            DepartmentModel::where("id", "=", $id)->update(["status"=>"false"]);
        }
        elseif ($status == "false"){
            DepartmentModel::where("id", "=", $id)->update(["status"=>"true"]);
        }
        return $status;
    }

    function DepartmentDelete($id){
        DepartmentModel::where("id", "=", $id)->delete();
        return redirect(route("allDepartment"));
    }
}
