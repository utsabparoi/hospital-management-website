<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HealthPackageAvailableTestModel;
use App\Models\HealthPackageModel;
use App\Models\HealthTestModel;
use Illuminate\Http\Request;

class HealthPackageController extends Controller
{
    function HealthPackage(){
        $allPackage = HealthPackageModel::paginate(3);
        $allTest = HealthPackageAvailableTestModel::all();
        return view("backend.page.healthPackage.allPackage", compact("allPackage", "allTest"));
    }

    function HealthPackageInsertForm(){
        $healthTest = HealthTestModel::all();
        return view("backend.page.healthPackage.insertPackage", compact('healthTest'));
    }

    function HealthPackageInsert(Request $request){
        $packageName = $request->input('PackageName');
        $packageForWho = $request->input('PackageForWho');
        $testName = $request->input('Test');
        $cost = $request->input('PackageCost');
        $discount = $request->input('PackageDiscount');
        $description = $request->input('PackageDescription');
        $status = $request->input('Status');
        $checkExistingPackageName = HealthPackageModel::where("package_name", "=", $packageName)->count();
        if($checkExistingPackageName < 1){
            HealthPackageModel::insertOrIgnore(
                [
                    ['package_name'=>$packageName, 'patient'=>$packageForWho,'package_cost'=>$cost, 'package_discount'=>$discount, 'package_details'=>$description, 'status'=>$status,]
                ]
            );

            for($i=0; $i<sizeof($testName); $i++){
                HealthPackageAvailableTestModel::insertOrIgnore(
                    [
                        ['package_name'=>$packageName, 'test_name'=>$testName[$i],]
                    ]
                );
            }
            return 1;
        }
        else{
            return 0;
        }
    }

    function EditHealthPackage($id){
        $healthPackage = HealthPackageModel::find($id);
        $packageName = HealthPackageModel::where("id", "=", $id )->first()->package_name;
        $packageTest = HealthPackageAvailableTestModel::where("package_name", "=", $packageName)->get();
        $healthTest = HealthTestModel::all();
        return view("backend.page.healthPackage.editPackage", compact('healthPackage', 'healthTest', 'packageTest'));
    }

    function UpdatePackage(Request $request){
        $packageId = $request->input('PackageId');
        $packageName = $request->input('PackageName');
        $packageForWho = $request->input('PackageForWho');
        $testName = $request->input('Test');
        $cost = $request->input('PackageCost');
        $discount = $request->input('PackageDiscount');
        $description = $request->input('PackageDescription');
        $status = $request->input('Status');
        $package_name = HealthPackageModel::where("id", "=", $packageId)->first()->package_name;
        $checkExistingPackage = HealthPackageModel::where("id", "!=", $packageId)->where("package_name", "=", $packageName)->count();
        if($checkExistingPackage < 1){
//            for($i=0; $i<sizeof($testName); $i++){
//                HealthPackageAvailableTestModel::where("package_name", "=", $package_name)
//                    ->update( ['test_name'=>$testName[$i],]);
//            }
            HealthPackageAvailableTestModel::where("package_name", "=", $package_name)->update(["package_name" => $packageName]);
            HealthPackageModel::where("id", "=", $packageId)
                ->update(["package_name" => $packageName, "patient"=>$packageForWho, "package_cost" => $cost, "package_discount" => $discount, "package_details" => $description, "status" => $status]);
            return 1;
        }
        else{
            return 0;
        }
    }

    function PackageStatusChange(Request $request){
        $id = $request->input("ID");
        $status = HealthPackageModel::where("id", "=", $id )->first()->status;
        if($status == "true"){
            HealthPackageModel::where("id", "=", $id)->update(["status"=>"false"]);
        }
        elseif ($status == "false"){
            HealthPackageModel::where("id", "=", $id)->update(["status"=>"true"]);
        }
        return $status;
    }

    function HealthPackageDelete($id){
        HealthPackageModel::where("id", "=", $id)->delete();
        return redirect(route("healthPackage"));
    }
}
