<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HealthPackageAvailableTestModel;
use App\Models\HealthTestModel;
use Illuminate\Http\Request;

class HealthTestController extends Controller
{
    function HealthTest(){
        $allTest = HealthTestModel::paginate(8);
        return view("backend.page.diagnosticTest.allTest", compact("allTest"));
    }

    function HealthTestInsertForm(){
        return view("backend.page.diagnosticTest.insertTest");
    }

    function HealthTestInsert(Request $request){
        $testName = $request->input('TestName');
        $cost = $request->input('TestCost');
        $discount = $request->input('TestDiscount');
        $description = $request->input('TestDescription');
        $status = $request->input('Status');

        $checkExistingTestName = HealthTestModel::where("test_name", "=", $testName)->count();
        if($checkExistingTestName < 1){
            HealthTestModel::insertOrIgnore(
                [
                    ['test_name'=>$testName,'test_cost'=>$cost, 'test_discount'=>$discount, 'test_details'=>$description, 'status'=>$status,]
                ]
            );
            return 1;
        }
        else{
            return 0;
        }
    }

    function TestStatusChange(Request $request){
        $id = $request->input("ID");
        $status = HealthTestModel::where("id", "=", $id )->first()->status;
        if($status == "true"){
            HealthTestModel::where("id", "=", $id)->update(["status"=>"false"]);
        }
        elseif ($status == "false"){
            HealthTestModel::where("id", "=", $id)->update(["status"=>"true"]);
        }
        return $status;
    }

    function EditTest($id){
        $test = HealthTestModel::find($id);
        return view('backend.page.diagnosticTest.editTest', compact('test'));
    }

    function TestUpdate(Request $request){
        $testId = $request->input('TestId');
        $testName = $request->input('TestName');
        $cost = $request->input('TestCost');
        $discount = $request->input('TestDiscount');
        $description = $request->input('TestDescription');
        $status = $request->input('Status');
        $test_name = HealthTestModel::where("id", "=", $testId)->first()->test_name;
        $checkExistingTest = HealthTestModel::where("id", "!=", $testId)->where("test_name", "=", $testName)->count();
        if($checkExistingTest < 1){
            HealthPackageAvailableTestModel::where("test_name", "=", $test_name)->update(["test_name" => $testName]);
            HealthPackageAvailableTestModel::where("test_name", "=", $test_name)->update(["test_name" => $testName]);
            HealthTestModel::where("id", "=", $testId)
                    ->update(["test_name" => $testName, "test_cost" => $cost, "test_discount" => $discount, "test_details" => $description, "status" => $status]);
            return 1;
        }
        else{
            return 0;
        }
    }

    function TestDelete($id){
        HealthTestModel::where("id", "=", $id)->delete();
        return redirect(route("diagnosticTest"));
    }
}
