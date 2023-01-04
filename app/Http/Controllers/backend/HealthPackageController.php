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
        $allPackage = HealthPackageModel::paginate(8);
        return view("backend.page.healthPackage.allPackage", compact("allPackage"));
    }

    function HealthPackageInsertForm(){
        $healthTest = HealthTestModel::all();
        return view("backend.page.healthPackage.insertPackage", compact('healthTest'));
    }

    function HealthPackageInsert(Request $request){
        $packageName = $request->input('PackageName');
        $packageForWho = $request->input('PackageForWho');
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
            $testName= array('CSB', 'ECG', 'IGE');

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

    function HealthPackageDelete($id){
        HealthPackageModel::where("id", "=", $id)->delete();
        return redirect(route("healthPackage"));
    }
}
