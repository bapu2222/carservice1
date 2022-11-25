<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    function registerView()
    {
        return view("CreateAccount");
    }

    function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {
            //validations are passed try login using laravel auth attemp
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                if(auth()->user()->is_admin == 1){
                    return redirect(route('dashboard.index'))->with('success', 'Login Successful');
                }else{
                    return redirect('/')->with('success', 'Login Successful');
                }

            } else {
                return back()->withErrors( "Invalid credentials"); // auth fail redirect with error
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation
            'confirm_password' => 'required|same:password',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form
        } else {
            //validations are passed, save new user in database
            $User = new User;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->save();

            return redirect("login")->with('success', 'You have successfully registered, Login to access your dashboard');
        }
    }
    // show dashboard
    function dashboard()
    {
        return view("dashboard");
    }

    // logout method to clear the sesson of logged in user
    function logout()
    {
        Auth::logout();
        return redirect("login")->with('success', 'Logout successfully');;
    }
}