<?php
namespace App\Http\Controllers;
use App\Models\LandersModel AS Landers;
use App\Models\BorrowersModel AS Borrowers;


use App\Models\UsersModel AS User;
use App\Models\SettingsModel AS Settings;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    
    public function home() {
		
		$total_donors = Landers::all()->count();
		$total_landers = Borrowers::all()->count();
		$total_loan_amount = Borrowers::get()->sum('loan_amount');
		$total_payble_amount = Borrowers::get()->sum('repay');
		return view('home',[
			'total_donors' => $total_donors,
			'total_landers' => $total_landers,
			'total_loan_amount' => $total_loan_amount,
			'total_payble_amount' => $total_payble_amount,
			]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect::to('/');
		
    }
}
