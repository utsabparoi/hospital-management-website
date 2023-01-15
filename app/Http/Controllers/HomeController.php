<?php

namespace App\Http\Controllers;

use App\Models\backend\AboutUs;
use App\Models\backend\ArticleandNews;
use App\Models\backend\ClientReview;
use App\Models\backend\Doctor;
use App\Models\backend\Facility;
use App\Models\backend\Partner;
use App\Models\backend\Slider;
use App\Models\backend\SocialLink;
use App\Models\DepartmentModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['partner']   = Partner::where('status', '1')->take(7)->get();
        $data['review']    = ClientReview::where('status', '1')->take(5)->get();
        $data['departments']   = DepartmentModel::where('status', '1')->take(24)->get();
        // $data['aboutus']   = AboutUs::where('status', '1')->get();
        // $data['artciles']   = ArticleandNews::where('status', '1')->get();
        // $data['doctor']   = Doctor::where('status', '1')->get();
        $data['facilities']   = Facility::where('status', '1')->take(15)->get();
        // dd($data);
        // $data['slider']   = Slider::where('status', '1')->get();

        return view('frontend.page.home', $data);
    }

    // public function partner(){
    //     try {
    //         $data['partner']  = Partner::latest()->get();
    //         return view('frontend.feature.partner',$data);
    //     } catch (\Throwable $th) {
    //         return redirect()->back()->with('error',$th->getMessage());
    //     }
    // }
}
