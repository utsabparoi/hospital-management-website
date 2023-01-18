<?php


use App\Http\Controllers\backend\BranchController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\PartnerController;
use App\Http\Controllers\backend\FacilityController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\HealthTestController;
use App\Http\Controllers\backend\SocialLinkController;
use App\Http\Controllers\backend\ClientReviewController;
use App\Http\Controllers\backend\HealthPackageController;
use App\Http\Controllers\backend\ArticleandNewsController;
use App\Http\Controllers\backend\WebsiteInformationController;

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
// Route::get('/', function () {
//     return view('frontend.page.home');
// });
Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('partner', [HomeController::class,'partner'])->name('partner');

Route::get('/single-department/{id}', [HomeController::class,'single_department'])->name('single-department');
Route::get('/news-details/{id}', [HomeController::class,'news_detail'])->name('news-details');

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
})->name('singleFacility');

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

//update-status route
Route::post('/update-status/{table}', [Controller::class, 'updateStatus'])->name('update-status');


// Slider List Route In Addmin Pannel
Route::resource('sliders', SliderController::class);

//Facility Route
Route::resource('facilities', FacilityController::class);

//Articles and News Route
Route::resource('articles_and_news', ArticleandNewsController::class);

// AboutUs Route
Route::resource('about_us', AboutUsController::class);

// Partner List Route
Route::resource('partners', PartnerController::class);

// Social Links Route
Route::resource('social_links', SocialLinkController::class);

// Social Links Route
Route::resource('clients_reviews', ClientReviewController::class);

//branch
Route::group(['middleware' => 'AdminLogin', 'prefix' => 'website-cms', 'as' => 'website.'], function () {
    Route::resource('branch',             BranchController::class);
});


//department CRUD
Route::get('/departmentCreate',[DepartmentController::class, "DepartmentCreateForm"])->name("departmentCreate")->middleware("AdminLogin");
Route::post("/createDepartment", [DepartmentController::class, "DepartmentCreate"])->middleware("AdminLogin");
Route::get('/allDepartment', [DepartmentController::class, "AllDepartment"])->name("allDepartment")->middleware("AdminLogin");
Route::get('/editDepartment/{id}', [DepartmentController::class, "EditDepartment"])->name("editDepartment")->middleware("AdminLogin");
Route::post('/departmentUpdate', [DepartmentController::class, "DepartmentUpdate"])->middleware("AdminLogin");
Route::post('/departmentStatusChange', [DepartmentController::class, "DepartmentStatusChange"])->middleware("AdminLogin");
Route::get('/departmentDelete/{id}', [DepartmentController::class, "DepartmentDelete"])->middleware("AdminLogin");

//doctor crud
// Route::get('/doctor', [DoctorController::class, "DoctorInsertForm"])->name("doctor")->middleware("AdminLogin");
// Route::post("/insertDoctor", [DoctorController::class, "DoctorInsert"])->middleware("AdminLogin");
// Route::get('/allDoctor', [DoctorController::class, "AllDoctor"])->name("allDoctor")->middleware("AdminLogin");
// Route::get('/editDoctor/{id}', [DoctorController::class, "EditDoctor"])->name("editDoctor")->middleware("AdminLogin");
// Route::post('/doctorUpdate', [DoctorController::class, "DoctorUpdate"])->middleware("AdminLogin");
// Route::post('/doctorStatusChange', [DoctorController::class, "DoctorStatusChange"])->middleware("AdminLogin");
// Route::get('/doctorDelete/{id}', [DoctorController::class, "DoctorDelete"])->middleware("AdminLogin");

// Doctor information route
Route::resource('doctors', DoctorController::class);

//diagnostic test
Route::get('/diagnosticTest',[HealthTestController::class, "HealthTest"])->name("diagnosticTest");
Route::get('/insertTestForm',[HealthTestController::class, "HealthTestInsertForm"])->name("insertTestForm");
Route::post('/testStatusChange', [HealthTestController::class, "TestStatusChange"]);
Route::get('/editTest/{id}',[HealthTestController::class, "EditTest"])->name("editTest");
Route::post('/updateTest',[HealthTestController::class, "TestUpdate"]);
Route::post('/insertTest',[HealthTestController::class, "HealthTestInsert"]);
Route::get('/testDelete/{id}', [HealthTestController::class, "TestDelete"]);

//health package
Route::get('/healthPackage',[HealthPackageController::class, "HealthPackage"])->name("healthPackage");
Route::get('/insertHealthPackageForm',[HealthPackageController::class, "HealthPackageInsertForm"])->name("insertHealthPackageForm");
Route::post('/insertPackage',[HealthPackageController::class, "HealthPackageInsert"]);
Route::get('/healthPackageEdit/{id}',[HealthPackageController::class, "EditHealthPackage"])->name("healthPackageEdit");
Route::post('/updatePackage',[HealthPackageController::class, "UpdatePackage"]);
Route::post('/packageStatusChange', [HealthPackageController::class, "PackageStatusChange"]);
Route::get('/healthPackageDelete/{id}', [HealthPackageController::class, "HealthPackageDelete"]);


