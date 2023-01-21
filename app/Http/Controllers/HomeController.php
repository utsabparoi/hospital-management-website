<?php

namespace App\Http\Controllers;

use App\Models\backend\AboutUs;
use App\Models\backend\ArticleandNews;
use App\Models\backend\ClientReview;
use App\Models\backend\Doctor;
use App\Models\HealthPackageModel;
use App\Models\backend\Facility;
use App\Models\backend\HealthPackageCategory;
use App\Models\backend\HealthPackageFacility;
use App\Models\backend\Partner;
use App\Models\backend\Slider;
use App\Models\backend\SocialLink;
use App\Models\DepartmentModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['partner']            = Partner::where('status', '1')->take(7)->get();
        $data['sliders']            = Slider::where('status', '1')->get();
        $data['review']             = ClientReview::where('status', '1')->take(8)->get();
        $data['aboutus']            = AboutUs::latest()->get();
        $data['facilities']         = Facility::where('status', '1')->take(12)->get();
        $data['review']             = ClientReview::where('status', '1')->take(5)->get();
        $data['doctor']             = Doctor::where('status', '1')->paginate();
        // $data['health_pkg']     = HealthPackageModel::where('status', '1')->take(3)->get();
        $data['health_pkg_cat']     = HealthPackageCategory::where('status', '1')->take(4)->get();
        $data['hlth_pkg_facility']  = HealthPackageFacility::where('status', 1)->get();
        // dd($data['hlth_pkg_facility']);
        $data['departments']        = DepartmentModel::where('status', 'true')->paginate();
        $data['articles']           = ArticleandNews::latest()->where('status', '1')->take(10)->get();
        $data['social_link']        = SocialLink::where('status', '1')->get();

        return view('frontend.page.home', $data);
    }

    // Single Department Page
    public function single_department($id){
        try {
            $department  = DepartmentModel::find($id);
            return view('frontend.page.singleDepartment', compact('department'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    // Single News Detail Page
    public function news_detail($id){
        try {
            $data['news']  = ArticleandNews::find($id);
            $data['recent_news']  = ArticleandNews::latest()->take(4)->get();
            return view('frontend.page.news-details', $data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    // Single Facility Page
    public function single_facility($id){
        try {
            $data  = Facility::find($id);
            return view('frontend.page.singleFacilities', compact('data'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    // Aboutus Page
    public function about_us(){
        try {
            $data  = AboutUs::find(1);
            return view('frontend.page.about', compact('data'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    //Health Package Page
    public function health_pkg_category($id){
        try {
            $data  = HealthPackageCategory::find($id);
            return view('frontend.page.singleHealthPackage', compact('data'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
