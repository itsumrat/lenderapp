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

class UsersController extends Controller {
    
    public function __construct() {
        
    }
    
    public function index() {
        $data["list__"] = DB::table('users')->orderBy("name","asc")->get();
        return view("users.list",$data);
    }
    
    
    public function add() {
        return view("users.add");
    }
    
    public function addSubmit(Request $request) {
    
        $name = $request->input('name');
        $type = $request->input('user_type');
        $phone = $request->input('phone');
        $email_address = $request->input('email_address');
        $designation = $request->input('designation');
        $password = $request->input('password');
        
        
        $validator = Validator::make(
            [
                "name" => $name,
                "type" => $type,
                "email_address" => $email_address,
                "password" => $password
            ],
            [
                "name" => "required",
                "type" => "required",
                "email_address" => "required|email|unique:users",
                "password" => "required|min:3"
            ]
        );
        
        
        if( $validator -> fails() == true ) {
            return redirect()->back()->withInput()->withErrors($validator -> errors());
        }
        
        
        $user = new User();
        $user -> role = $type;  
        $user -> name = $name;
        $user -> email_address = $email_address;
        $user -> phone = $phone;
        $user -> designation = $designation;
        $user -> password = Hash::make($password);
        if( !$user -> save() ) {
            return redirect()->back()->withInput()->withErrors("A problem occur. Please try again.");
        }
        
        return Redirect::to('users')->with("success","User add successfully.");
    }
    
    
    public function edit($id) {
    
        if( strlen($id) == 0 ) {
            return Redirect::to('users')->withErrors("No id found.");
        }
        
        $info = User::find($id);
        if( empty($info) ) {
            return Redirect::to('users')->withErrors("No user information found.");
        }
        
        
        $data['info'] = $info;
        return view("users.edit",$data);
    }
    
    
    public function editSubmit($id,Request $request) {
        
        if( strlen($id) == 0 ) {
            return Redirect::to('users')->withErrors("No id found.");
        }
        
        $user = User::find($id);
        if( empty($user) ) {
            return Redirect::to('users')->withErrors("No User information found.");
        }
        
        
        $name = $request->input('name');
        $type = $request->input('user_type');
        $phone = $request->input('phone');
        $email_address = $request->input('email_address');
        $designation = $request->input('designation');
        $password = $request->input('password');
        
        
        $validator = Validator::make(
            [
                "name" => $name,
                "type" => $type,
                "email_address" => $email_address
            ],
            [
                "name" => "required",
                "type" => "required",
                "email_address" => "required|email",
            ]
        );
        
        
        if( $validator -> fails() == true ) {
            return redirect()->back()->withInput()->withErrors($validator -> errors());
        }
        
        
        $is_exists = User::where('id','<>',$id)->where('email_address',$email_address)->limit(1)->get();
        if( sizeof($is_exists) == 1 ) {
            return redirect()->back()->withInput()->withErrors("Email address already exists.");
        }
        
        
        $user -> name = $name;
        $user -> role = $type;
        $user -> email_address = $email_address;
        $user -> phone = $phone;
        $user -> designation = $designation;
        if( strlen($password) > 0 ) {
            $user -> password = Hash::make($password);
        }
        
        if( !$user -> save() ) {
            return redirect()->back()->withInput()->withErrors("A problem occur. Please try again.");
        }
        
        
        return redirect()->back()->with("success","User update successfully.");
    }
    
    
    public function remove($id) {
        if( Auth::user()->role != 'admin' ) {
            echo 'You are not authorized...';
            dd();
        }
        
        if( strlen($id) == 0 ) {
            return Redirect::to('users')->withErrors("No id found.");
        }
        
        $user = User::find($id);
        if( empty($user) ) {
            return Redirect::to('users')->withErrors("No User information found.");
        }
        
        $status = 'no';
        if( $user -> is_active == 'no' ) {
            $status = 'yes';
        }
        
        $user -> is_active = $status;
        if( !$user -> save() ) {
            return redirect()->back()->withInput()->withErrors("A problem occur. Please try again.");
        }
        
        return Redirect::to('users')->with("success","User update successfully.");
    }
    
}
