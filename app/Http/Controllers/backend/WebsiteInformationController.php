<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInformationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteInformationController extends Controller
{
    function WebsiteInformation(){
        return view('backend.page.websiteInformation.websiteInformation');
    }
    function WebsiteInformationUpdate(Request $request){
        $favicon= $request->input("Favicon");
        $name = $request->input("Name");
        $title = $request->input("Title");
        $phoneOne = $request->input("PhoneOne");
        $phoneTwo = $request->input("PhoneTwo");
        $hotLine = $request->input("HotLine");
        $primaryEmail = $request->input("PrimaryEmail");
        $secondaryEmail = $request->input("SecondaryEmail");
        $primaryAddress = $request->input("PrimaryAddress");
        $companyLogo = $request->input("CompanyLogo");
        $website = $request->input("Website");
        $binNO = $request->input("BinNO");
        $googleMap = $request->input("GoogleMap");
        $secondaryAddress = $request->input("SecondaryAddress");
        $metaKeyword = $request->input("MetaKeyword");
        $metaDescription = $request->input("MetaDescription");

        if($name == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["name" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["name" => $name]);
        }

        if($title == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["title" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["title" => $title]);
        }

        if($phoneOne == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["phone_one" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["phone_one" => $phoneOne]);
        }

        if($phoneTwo == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["phone_two" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["phone_two" => $phoneTwo]);
        }
        if($hotLine == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["hot_line" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["hot_line" => $hotLine]);
        }

        if($primaryEmail == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["primary_email" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["primary_email" => $primaryEmail]);
        }

        if($secondaryEmail == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["secondary_email" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["secondary_email" => $secondaryEmail]);
        }

        if($primaryAddress == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["primary_address" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["primary_address" => $primaryAddress]);
        }

        if($website == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["website" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["website" => $website]);
        }

        if($binNO == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["bin_no" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["bin_no" => $binNO]);
        }

        if($googleMap == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["google_map" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["google_map" => $googleMap]);
        }

        if($secondaryAddress == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["secondary_address" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["secondary_address" => $secondaryAddress]);
        }

        if($metaKeyword == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["meta_keyword" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["meta_keyword" => $metaKeyword]);
        }

        if($metaDescription == ""){
            WebsiteInformationModel::where("id", "=", 1)->update(["meta_description" => ""]);
        }
        else{
            WebsiteInformationModel::where("id", "=", 1)->update(["meta_description" => $metaDescription]);
        }

        if($favicon ==  "undefined"){
            ;
        }
        else{
            //delete present favicon
            $websiteInformation = WebsiteInformationModel::find(1);
            $present_favicon = (explode('/', $websiteInformation->favicon))[3];
            Storage::delete("public/images/".$present_favicon);

            //upload new favicon
            $new_favicon = $request->file('Favicon')->store('public/images');
            $new_favicon_explode = (explode('/', $new_favicon))[2];
            $new_favicon_url = "/storage/images/" . $new_favicon_explode;
            WebsiteInformationModel::where("id", "=", 1)->update(["favicon"=>$new_favicon_url]);
        }



        if($companyLogo ==  "undefined"){

        }
        else{
            //delete present website logo
            $websiteInformation = WebsiteInformationModel::find(1);
            $present_website_logo = (explode('/', $websiteInformation->company_logo))[3];
            Storage::delete("public/images/".$present_website_logo);

            //upload new website logo
            $new_website_logo = $request->file('CompanyLogo')->store('public/images');
            $new_website_logo_explode = (explode('/', $new_website_logo))[2];
            $new_website_logo_url = "/storage/images/" . $new_website_logo_explode;
            WebsiteInformationModel::where("id", "=", 1)->update(["company_logo"=>$new_website_logo_url]);
        }

        return 1;
    }
}
