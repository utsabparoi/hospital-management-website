<?php

use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\WebsiteInformationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//------------------------Frontend All Routes--------------------------
Route::get('/', function () {
    return view('frontend.page.home');
});
Route::get('/consultants', function () {
    return view('frontend.page.consultants');
});
Route::get('/about', function () {
    return view('frontend.page.about');
});
Route::get('/allFacilities', function () {
    return view('frontend.page.allFacilities');
});
Route::get('/singleFacilities', function () {
    return view('frontend.page.singleFacilities');
});
Route::get('/allDepartment', function () {
    return view('frontend.page.allDepartment');
});
Route::get('/singleDepartment', function () {
    return view('frontend.page.singleDepartment');
});
Route::get('/allHealthPackage', function () {
    return view('frontend.page.allHealthPackage');
});
Route::get('/singleHealthPackage', function () {
    return view('frontend.page.singleHealthPackage');
});
Route::get('/onlineAppointment', function () {
    return view('frontend.page.onlineAppointment');
});
Route::get('/onlinePayment', function () {
    return view('frontend.page.onlinePayment');
});
Route::get('/onlineRegistration', function () {
    return view('frontend.page.onlineRegistration');
});
Route::get('/onlineDiagnosticReport', function () {
    return view('frontend.page.onlineDiagnosticReport');
});

















//------------------------Backend All Routes--------------------------
Route::get('/dashboard', function () {
    return view('backend.page.dashboard.dashboard');
})->name("dashboard");

//website information view and update
Route::get('/websiteInformation', [WebsiteInformationController::class, "WebsiteInformation"])->name("websiteInformation");
Route::post("/websiteInformationUpdate", [WebsiteInformationController::class, "WebsiteInformationUpdate"]);

//department CRUD
Route::get('/departmentCreate',[DepartmentController::class, "DepartmentCreateForm"])->name("departmentCreate");
Route::post("/createDepartment", [DepartmentController::class, "DepartmentCreate"]);
Route::get('/allDepartment', [DepartmentController::class, "AllDepartment"])->name("allDepartment");
Route::get('/editDepartment/{id}', [DepartmentController::class, "EditDepartment"])->name("editDepartment");
Route::post('/departmentUpdate', [DepartmentController::class, "DepartmentUpdate"]);
Route::post('/departmentStatusChange', [DepartmentController::class, "DepartmentStatusChange"]);
Route::get('/departmentDelete/{id}', [DepartmentController::class, "DepartmentDelete"]);

//doctor crud
Route::get('/doctor', [DoctorController::class, "DoctorInsertForm"])->name("doctor");
Route::post("/insertDoctor", [DoctorController::class, "DoctorInsert"]);
Route::get('/allDoctor', [DoctorController::class, "AllDoctor"])->name("allDoctor");
Route::get('/editDoctor/{id}', [DoctorController::class, "EditDoctor"])->name("editDoctor");
Route::post('/doctorUpdate', [DoctorController::class, "DoctorUpdate"]);
Route::post('/doctorStatusChange', [DoctorController::class, "DoctorStatusChange"]);
Route::get('/doctorDelete/{id}', [DoctorController::class, "DoctorDelete"]);
