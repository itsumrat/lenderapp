<?php
namespace App\Http\Controllers;


use App\Models\UsersModel AS User;
use App\Models\LandersModel AS Landers;
use App\Models\LandersCommunicationModel AS LC;
use App\Models\LandersInvoiceModel AS LI;
use App\Models\PaymentModeModel AS Payment;
use App\Models\SettingsModel AS Setting;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LandersController extends Controller {
    
    public function __construct() {
        
    }
    
    public function index() {
        $data["list__"] = Landers::orderBy("id","desc")->get();
        return view("landers.list",$data);
    }
    
    public function add() {
        $no = 1;
        $list = Landers::orderBy("id","desc")->limit(1)->get();
        if( !empty($list) ) {
            $no = $list[0]->id + 1;    
        }
        
        $data['no'] = $no;
        return view("landers.add",$data);
    }
    
    
    public function addSubmit(Request $request) {
        
        $landers = new Landers();
        $reg_no = $request -> reg_no;
        
        $validator = Validator::make(
            [
                "reg_no"=>$reg_no,
                "email_address"=>$request -> email_address
            ],
            [
                "reg_no"=>"required|unique:landers",
                "email_address"=>"required|email|unique:landers"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        
        $landers -> reg_no = $reg_no;
        $landers -> ref = $request -> ref;
        $landers -> gift_ads = $request -> gift_ads;
        $landers -> first_name = $request -> first_name;
        $landers -> sur_name = $request -> sur_name;
        $landers -> email_address = $request -> email_address;
        $landers -> mobile = $request -> mobile;
        $landers -> telephone = $request -> telephone;
        $landers -> address1 = $request -> address1;
        $landers -> address2 = $request -> address2;
        $landers -> city = $request -> city;
        $landers -> country = $request -> country;
        $landers -> postcode = $request -> postcode;
        $landers -> account_name = $request -> account_name;
        $landers -> bank = $request -> bank;
        $landers -> account_no = $request -> account_no;
        $landers -> bank_short_code = $request -> bank_short_code;
        $landers -> remarks = $request -> remarks;
        $landers -> created_by = Auth::user()->id;
        $landers -> created_dt = date("Y-m-d H:i:s");
        $landers -> created_ip = $_SERVER['REMOTE_ADDR'];
        
        
        if( !$landers -> save() ) {
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        // Communication
        $cdate = $request -> cdate;
        $staff = $request -> staff;
        $method = $request -> method;
        $attachement = $request -> file("attachement");
        
        
        $destination = base_path()."/storage/app/public/landers/";
        for( $i=0; $i<sizeof($staff); $i++ ) {
            
            if( strlen($cdate[$i]) == 0 && strlen($staff[$i]) == 0 && strlen($method[$i]) == 0 && strlen($details[$i]) == 0 && !isset($attachement[$i]) ) {
                continue;
            }
            
            $lc = new LC();
            $lc -> landers_id = $landers -> id;
            $lc -> cdate = date("Y-m-d",strtotime($cdate[$i]));
            $lc -> staff = $staff[$i];
            $lc -> method = $method[$i];
            
            
            if( isset($attachement[$i]) ) {
                if(strlen($attachement[$i]) > 0) {
                    $extenstion = $attachement[$i] -> getClientOriginalExtension();
                    $upload_logo = 'l_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
                    
                    if( $attachement[$i] -> move($destination, $upload_logo) == false ) {
                        $lc -> delete();
                        return redirect() -> back() -> withErrors("A problem occur while uploding the logo. Please try again !");
                    }
                    $lc -> attachement = $upload_logo;
                }
            }
            
            
            $lc -> created_by = Auth::user()->id;
            $lc -> created_dt = date("Y-m-d H:i:s");
            
            if( !$lc -> save() ) {
                $lc -> delete();
                return redirect()->back()->WithErrors("A problem occur. Please try again.");
            }
            
        }
        
        return Redirect::to("landers")->with("success","Donor has been added successfully.");
    }
    
    
    public function view($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('landers')->withErrors("No Donor Id found.");
        }
        
        $landers = Landers::find($id);
        if( empty($landers) ) {
            return Redirect::to('landers')->withErrors("No Donor information found.");
        }
        
        $data['info__'] = $landers;
        $data["invoice__"] = LI::where("lander_id",$id)->orderBy('payment_dt','desc')->get();
        $data["list__"] = Landers::orderBy("id","desc")->get();
        $data["communication__"] = LC::where("landers_id",$id)->orderBy('cdate','desc')->get();
        
        
        $data["created_by__"] = User::find($landers -> created_by);
        $data["updated_by__"] = User::find($landers -> updated_by);
        
        return view('landers.view',$data);
    }
    
    
    public function createInvoice($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('landers')->withErrors("No Donor Id found.");
        }
        
        $landers = Landers::find($id);
        if( empty($landers) ) {
            return Redirect::to('landers')->withErrors("No Donor information found.");
        }
        
        
        $no = 1;
        $bi = LI::orderBy("id","desc")->limit(1)->get();
        if( isset($bi[0]) ) {
            $no = $bi[0]->id + 1;    
        }
        
        $data['bi_no'] = $no;
        $data['info__'] = $landers;
        $data['payment__'] = Payment::where('is_active','yes')->orderBy('name','asc')->get();
        
        return view('landers.create-invoice',$data);
    }
    
    
    public function createInvoiceSubmit($id, Request $request) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Donor Id found.");
        }
        
        $borrowers = Landers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Donor information found.");
        }
        
        
        $invoice_no = $request -> invoice_no;
        
        $validator = Validator::make(
            [
                "invoice_no"=>$invoice_no
            ],
            [
                "invoice_no"=>"required|unique:landers_invoice"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
		
		
		
		$setting_gift_ads_amount = Setting::find(1)->gift_ads_amount;
		$main_amount = $request->amount;
		$gift_amount = 0;
		if($borrowers->gift_ads === 'yes'){
			if(Setting::find(1)->gift_ads_type == 'percentage'){
				$gift_amount = ($request->amount*$setting_gift_ads_amount)/100;
			}else{
				$gift_amount = $request->amount-($request->amount-$setting_gift_ads_amount);
			}
		}
        $bi = new LI();
        $bi -> lander_id = $id;
        $bi -> invoice_no = $invoice_no ;
        $bi -> amount = $request -> amount;
		$bi -> gift_ads_tax = $gift_amount;
        $bi -> payment_dt = date("Y-m-d",strtotime($request -> payment_dt));
        $bi -> payment_mode  = $request -> payment_mode ;
        $bi -> subject  = $request -> subject ;
        $bi -> note  = $request -> note ;
        $bi -> is_receive  = 'no';
        if( isset($request -> is_receive) ) {
            if( $request -> is_receive == '1' ) {
                $bi -> is_receive  = 'yes';
            }
        }
        $bi -> is_mail  = 'no';
        if( isset($request -> is_mail) ) {
            if( $request -> is_mail == '1' ) {
                $bi -> is_mail  = 'yes';
            }
        }
        
        
        $attachement = $request -> file("attachment");
        if( isset($attachement) ) {
            if(strlen($attachement) > 0) {
                $destination = base_path()."/storage/app/public/landers/invoice/";
                $extenstion = $attachement -> getClientOriginalExtension();
                $upload_logo = 'bi_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
                
                if( $attachement -> move($destination, $upload_logo) == false ) {
                    $bi -> delete();
                    return redirect() -> back() -> withErrors("A problem occur while uploding the attachment. Please try again !");
                }
                $bi -> attachment = $upload_logo;
            }
        }
        
        
        $bi -> is_active = 'yes';
        $bi -> lander__ = json_encode($borrowers);
        $bi -> created_dt = date('Y-m-d H:i:s');
        $bi -> created_by = Auth::user()->id;
        
        if( !$bi -> save() ) {
            $bi -> delete();
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        return Redirect::to("landers/view/".$id)->with("success","Donor Invoice has been created successfully.");
    }
    
    
    public function viewInvoice($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('landers')->withErrors("No Donor Invoice Id found.");
        }
        
        $bi = LI::find($id);
        if( empty($bi) ) {
            return Redirect::to('landers')->withErrors("No Donor Invoice information found.");
        }
        
        $borrowers = Landers::find($bi->lander_id);
        if( empty($borrowers) ) {
            return Redirect::to('landers')->withErrors("No Donor information found.");
        }
        
        $data['bi__'] = $bi;
        $data['info__'] = $borrowers;
        $data['payment__'] = Payment::where('is_active','yes')->orderBy('name','asc')->get();
        return view('landers.view-invoice',$data);
    }
    
    
}
