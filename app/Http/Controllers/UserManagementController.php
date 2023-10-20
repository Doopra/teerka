<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserManagementController extends Controller
{
    //index page
    public function login(){
        return view('admin.auth-login-basic');
    }
    public function register(){
       return view('admin.auth-register-basic');
    }

    public function registerPost(Request $request){
        
        // Define the validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'terms' => 'accepted', //  "terms" field to be checked
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/login');
    }

    public function loginPost(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
    
        // If validation passes, continue with authentication logic
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        // Authentication logic here...
    
        // If authentication fails, you can return with an error message
        if (!auth()->attempt($credentials)) {
            return redirect('/login')
                ->with('error', 'Invalid credentials');
        }

        // If authentication succeeds, redirect to the desired route
        return redirect()->route('redirect');
            


        
       
    }

    public function logout(){
        Auth::logout();
    //    return route('teerka');
    return redirect('/');
    }
}
