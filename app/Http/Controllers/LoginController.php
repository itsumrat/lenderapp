<?php
namespace App\Http\Controllers;


use App\Models\UsersModel AS User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {
    
    public function __construct() {
        if(Auth::check() == true )  {
            return Redirect::to('home');
        }
    }
    
    public function login() {
        return view('login');
    }
    
    public function loginSubmit(Request $request) {
        
        $email_address = $request->input('email_address');
        $password = $request->input('password');
        
        $validator = Validator::make(
            [
                "email_address" => $email_address,
                "password" => $password
            ],
            [
                "email_address" => "required|email",
                "password" => "required"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect()->back()->withInput()->withErrors($validator -> errors());
        }
        
        if( Auth::attempt(['email_address' => $email_address, 'password' => $password, 'is_active'=>'yes']) ) {
            return Redirect::to("/home");
        }
        
        return redirect()->back()->withInput()->withErrors("error");
    }
    
}
