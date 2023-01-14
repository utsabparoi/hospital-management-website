<?php

namespace App\Http\Controllers;
use App\Models\backend\Partner;
use App\Models\backend\ClientReview;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['partner']   = Partner::where('status', '1')->take(7)->get();
        $data['review']    = ClientReview::latest()->take(5)->get();

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
