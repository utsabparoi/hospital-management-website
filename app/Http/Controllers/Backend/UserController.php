<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function LoginForm(){
        return view('backend.page.user.login');
    }

    function User(){
        $allUser = UserModel::all();
        return view('backend.page.user.user', compact('allUser'));
    }

    function CreateUserForm(){
        return view('backend.page.user.createUser');
    }

    function CreateUser(Request $request){
        $name = $request->input('Name');
        $email = $request->input('Email');
        $password = $request->input('Password');
        $hashPassword = hash('md5', $password);

        $checkExistingEmail = UserModel::where("email", "=", $email)->count();
        $checkExistingName = UserModel::where("name", "=", $name)->count();
        if($checkExistingEmail > 0){
            return 1;
        }
        else if($checkExistingName > 0){
            return 2;
        }
        else{
            UserModel::insertOrIgnore(
                [
                    ['name'=>$name, 'email'=>$email, 'password'=>$hashPassword, 'created_at'=>date('Y-m-d H:i:s'),]
                ]
            );
        }
    }

    function Login(Request $request){
        $email = $request->input('Email');
        $password = $request->input('Password');
        $hashPassword = hash('md5', $password);

        $userEmail = UserModel::where("email", "=", $email)->where("password", "=", $hashPassword)->count();

        $user = UserModel::where("email", "=", $email)->first()->name;

        if($userEmail == 1){
            $request->session()->put("AdminLoginSession", $user);
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function EditUserForm($id){
        $user = UserModel::where("id", "=", $id)->find($id);
        return view('backend.page.user.editUser', compact('user'));
    }

    function UserUpdate(Request $request){
        $id = $request->input('UserId');
        $name = $request->input('Name');
        $email = $request->input('Email');
        $password = $request->input('Password');
        $hashPassword = hash('md5', $password);

        $checkExistingName = UserModel::where("id", "!=", $id)->where("name", "=", $name)->count();
        $checkExistingEmail = UserModel::where("id", "!=", $id)->where("email", "=", $email)->count();
        if($checkExistingName > 0){
            return 1;
        }
        else if($checkExistingEmail > 0){
            return 2;
        }
        else{
            UserModel::where("id", "=", $id)
                ->update(["name" => $name, "email" => $email, "password" => $hashPassword]);
        }
    }

    function UserDelete($id){
        UserModel::where("id", "=", $id)->delete();
        return redirect(route("user"));
    }

    function Logout(Request $request){
        $request->session()->flush();
        return redirect("/loginForm");
    }
}
