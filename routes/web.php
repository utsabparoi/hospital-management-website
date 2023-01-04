<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\UserController;
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
Route::get('/dashboard',[DashboardController::class, "Dashboard"])->name("dashboard")->middleware("AdminLogin");

//user
Route::get('/loginForm',[UserController::class, "LoginForm"])->name("loginForm");
Route::post('/login',[UserController::class, "Login"]);
Route::get('/logout',[UserController::class, "Logout"]);
Route::get('/user',[UserController::class, "User"])->name("user");
Route::get('/createUserForm',[UserController::class, "CreateUserForm"])->name("createUserForm");
Route::post('/createUser',[UserController::class, "CreateUser"])->name("createUser");
Route::get('/editUserForm/{id}',[UserController::class, "EditUserForm"])->name("editUserFrom");
Route::post('/updateUser',[UserController::class, "UserUpdate"])->name("userUpdate");
Route::get('/userDelete/{id}',[UserController::class, "UserDelete"])->name("deleteUser");

//website information view and update
Route::get('/websiteInformation', [WebsiteInformationController::class, "WebsiteInformation"])->name("websiteInformation")->middleware("AdminLogin");
Route::post("/websiteInformationUpdate", [WebsiteInformationController::class, "WebsiteInformationUpdate"])->middleware("AdminLogin");

//department CRUD
Route::get('/departmentCreate',[DepartmentController::class, "DepartmentCreateForm"])->name("departmentCreate")->middleware("AdminLogin");
Route::post("/createDepartment", [DepartmentController::class, "DepartmentCreate"])->middleware("AdminLogin");
Route::get('/allDepartment', [DepartmentController::class, "AllDepartment"])->name("allDepartment")->middleware("AdminLogin");
Route::get('/editDepartment/{id}', [DepartmentController::class, "EditDepartment"])->name("editDepartment")->middleware("AdminLogin");
Route::post('/departmentUpdate', [DepartmentController::class, "DepartmentUpdate"])->middleware("AdminLogin");
Route::post('/departmentStatusChange', [DepartmentController::class, "DepartmentStatusChange"])->middleware("AdminLogin");
Route::get('/departmentDelete/{id}', [DepartmentController::class, "DepartmentDelete"])->middleware("AdminLogin");

//doctor crud
Route::get('/doctor', [DoctorController::class, "DoctorInsertForm"])->name("doctor")->middleware("AdminLogin");
Route::post("/insertDoctor", [DoctorController::class, "DoctorInsert"])->middleware("AdminLogin");
Route::get('/allDoctor', [DoctorController::class, "AllDoctor"])->name("allDoctor")->middleware("AdminLogin");
Route::get('/editDoctor/{id}', [DoctorController::class, "EditDoctor"])->name("editDoctor")->middleware("AdminLogin");
Route::post('/doctorUpdate', [DoctorController::class, "DoctorUpdate"])->middleware("AdminLogin");
Route::post('/doctorStatusChange', [DoctorController::class, "DoctorStatusChange"])->middleware("AdminLogin");
Route::get('/doctorDelete/{id}', [DoctorController::class, "DoctorDelete"])->middleware("AdminLogin");


//health package

