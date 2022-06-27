<?php
namespace App\Http\Controllers;


use App\Models\UsersModel AS User;
use App\Models\BorrowersModel AS Borrowers;
use App\Models\BorrowersCommunicationModel AS BC;
use App\Models\PaymentModeModel AS Payment;
use App\Models\BorrowersInvoiceModel AS BI;
use App\Models\BorrowersNewloanModel AS BN;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BorrowersController extends Controller {
    
    public function __construct() {
        
    }
    
    public function index() {
        $data["list__"] = Borrowers::orderBy("id","asc")->get();
		$loanByID = array();
		foreach($data["list__"] as $list){
			$repay = BI::where('borrower_id', $list->id)->sum('amount');
			$totalrepay = $repaymentByID[$list->id] = $repay + $list->repay;
			$loan = BN::where('borrower_id', $list->id)->sum('amount');
			$toalloan = $loanByID[$list->id] = $loan + $list->loan_amount;
			$payable[$list->id] = $toalloan - $totalrepay;
		}
		$data["repaymentByID"] = $repaymentByID;
		$data["loanByID"] = $loanByID;
		$data["payable"] = $payable;
        return view("borrowers.list",$data);
    }
    
    public function add() {
        $no = 1;
        $list = Borrowers::orderBy("id","desc")->limit(1)->get();
        if( !empty($list) ) {
            $no = $list[0]->id + 1;    
        }
        
        $data['no'] = $no;
        return view("borrowers.add",$data);
    }
    
    
    public function addSubmit(Request $request) {
        
        $borrowers = new Borrowers();
        $reg_no = $request -> reg_no;
        
        $validator = Validator::make(
            [
                "reg_no"=>$reg_no,
                "email_address"=>$request -> email_address
            ],
            [
                "reg_no"=>"required|unique:borrowers",
                "email_address"=>"required|email|unique:borrowers"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        
        $borrowers -> reg_no = $reg_no;
        $borrowers -> ref = $request -> ref;
        $borrowers -> first_name = $request -> first_name;
        $borrowers -> sur_name = $request -> sur_name;
        $borrowers -> email_address = $request -> email_address;
        $borrowers -> mobile = $request -> mobile;
        $borrowers -> telephone = $request -> telephone;
        $borrowers -> loan_amount = $request -> loan_amount;
        $borrowers -> repay = $request -> repay;
        $borrowers -> address1 = $request -> address1;
        $borrowers -> address2 = $request -> address2;
        $borrowers -> city = $request -> city;
        $borrowers -> country = "";
        $borrowers -> postcode = $request -> postcode;
        $borrowers -> remarks = "";
        $borrowers -> account_name = $request -> account_name;
        $borrowers -> bank = $request -> bank;
        $borrowers -> account_no = $request -> account_no;
        $borrowers -> bank_short_code = $request -> bank_short_code;
        $borrowers -> created_by = Auth::user()->id;
        $borrowers -> created_dt = date("Y-m-d H:i:s");
        $borrowers -> created_ip = $_SERVER['REMOTE_ADDR'];
        
        
        if( !$borrowers -> save() ) {
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        
        // Communication
        $cdate = $request -> cdate;
        $staff = $request -> staff;
        $method = $request -> method;
        $details = array();
        $attachement = $request -> file("attachement");
        
        
        $destination = base_path()."/storage/app/public/borrowers/";
        for( $i=0; $i<sizeof($staff); $i++ ) {
            
            if( strlen($cdate[$i]) == 0 && strlen($staff[$i]) == 0 && strlen($method[$i]) == 0 && strlen($details[$i]) == 0 && !isset($attachement[$i]) ) {
                continue;
            }
            
            $lc = new BC();
            $lc -> borrowers_id = $borrowers -> id;
            $lc -> cdate = date("Y-m-d",strtotime($cdate[$i]));
            $lc -> staff = $staff[$i];
            $lc -> method = $method[$i];
            $lc -> details = "";
            
            
            if( isset($attachement[$i]) ) {
                if(strlen($attachement[$i]) > 0) {
                    $extenstion = $attachement[$i] -> getClientOriginalExtension();
                    $upload_logo = 'b_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
                    
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
        
        return Redirect::to("borrowers")->with("success","Lander has been added successfully.");
    }
	
    public function edit($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        $data['info'] = $borrowers;
        $no = 1;
        $list = Borrowers::orderBy("id","desc")->limit(1)->get();
        if( !empty($list) ) {
            $no = $list[0]->id + 1;    
        }
        
        $data['no'] = $no;
        $data["communication__"] = BC::where("borrowers_id",$id)->orderBy('cdate','desc')->get();
        $data["invoice__"] = BI::where("borrower_id",$id)->orderBy('payment_dt','desc')->get();
        return view("borrowers.edit",$data);
    }

	public function editSubmit($id,Request $request) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }        
        
        //$borrowers -> reg_no = $request ->reg_no;
        //$borrowers -> ref = $request -> ref;
        $borrowers -> first_name = $request -> first_name;
        $borrowers -> sur_name = $request -> sur_name;
        //$borrowers -> email_address = $request -> email_address;
        $borrowers -> mobile = $request -> mobile;
        $borrowers -> telephone = $request -> telephone;
        $borrowers -> loan_amount = $request -> loan_amount;
        $borrowers -> repay = $request -> repay;
        $borrowers -> address1 = $request -> address1;
        $borrowers -> address2 = $request -> address2;
        $borrowers -> city = $request -> city;
        //$borrowers -> country = $request -> country;
        $borrowers -> postcode = $request -> postcode;
        //$borrowers -> remarks = $request -> remarks;
        $borrowers -> account_name = $request -> account_name;
        $borrowers -> bank = $request -> bank;
        $borrowers -> account_no = $request -> account_no;
        $borrowers -> bank_short_code = $request -> bank_short_code;
        $borrowers -> updated_by = Auth::user()->id;
        $borrowers -> updated_dt = date("Y-m-d H:i:s");
        $borrowers -> updated_ip = $_SERVER['REMOTE_ADDR'];
		
        
        if( !$borrowers -> save() ) {
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        
        // Communication
        $cdate = $request -> cdate;
        $staff = $request -> staff;
        $method = $request -> method;
        $details = array();
        $attachement = $request -> file("attachement");
        
        
        $destination = base_path()."/storage/app/public/borrowers/";
        for( $i=0; $i<sizeof($staff); $i++ ) {
            
            if( strlen($cdate[$i]) == 0 && strlen($staff[$i]) == 0 && strlen($method[$i]) == 0 && strlen($details[$i]) == 0 && !isset($attachement[$i]) ) {
                continue;
            }
            
            $lc = new BC();
            $lc -> borrowers_id = $borrowers -> id;
            $lc -> cdate = date("Y-m-d",strtotime($cdate[$i]));
            $lc -> staff = $staff[$i];
            $lc -> method = $method[$i];
            $lc -> details = "";
            
            
            if( isset($attachement[$i]) ) {
                if(strlen($attachement[$i]) > 0) {
                    $extenstion = $attachement[$i] -> getClientOriginalExtension();
                    $upload_logo = 'b_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
                    
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
        
        return Redirect::to("borrowers")->with("success","Lander has been added successfully.");
	}    
    
    public function view($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        $data['info__'] = $borrowers;
        $data["list__"] = Borrowers::where('is_active','yes')->orderBy("id","desc")->get();
        $data["communication__"] = BC::where("borrowers_id",$id)->orderBy('cdate','desc')->get();
        $data["invoice__"] = BI::where("borrower_id",$id)->orderBy('payment_dt','desc')->get();
		$data["newrepayment"] = BI::where('borrower_id',$id)->sum('amount');        
		$data["newloan"] = BN::where('borrower_id',$id)->sum('amount');        
        
        $data["created_by__"] = User::find($borrowers -> created_by);
        $data["updated_by__"] = User::find($borrowers -> updated_by);
        
        return view('borrowers.view',$data);
    }
    
    
    public function createInvoice($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        $no = 1;
        $bi = BI::orderBy("id","desc")->limit(1)->get();
        if( isset($bi[0]) ) {
            $no = $bi[0]->id + 1;    
        }
        
        $data['bi_no'] = $no;
        $data['info__'] = $borrowers;
        $data['payment__'] = Payment::where('is_active','yes')->orderBy('name','asc')->get();
        return view('borrowers.create-invoice',$data);
    }
    
    
    public function createInvoiceSubmit($id, Request $request) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        
        $invoice_no = $request -> invoice_no;
        
        $validator = Validator::make(
            [
                "invoice_no"=>$invoice_no
            ],
            [
                "invoice_no"=>"required|unique:borrowers_invoice"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        
        $bi = new BI();
        $bi -> borrower_id = $id;
        $bi -> invoice_no = $invoice_no ;
        $bi -> amount = $request -> amount;
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
                $destination = base_path()."/storage/app/public/borrowers/invoice/";
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
        $bi -> borrower__ = json_encode($borrowers);
        $bi -> created_dt = date('Y-m-d H:i:s');
        $bi -> created_by = Auth::user()->id;
        
        if( !$bi -> save() ) {
            $bi -> delete();
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        return Redirect::to("borrowers/view/".$id)->with("success","Landers Invoice has been created successfully.");
    }
    
    
    public function viewInvoice($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Invoice Id found.");
        }
        
        $bi = BN::find($id);
        if( empty($bi) ) {
            return Redirect::to('borrowers')->withErrors("No Lander Invoice information found.");
        }
        
        $borrowers = Borrowers::find($bi->borrower_id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        $data['bi__'] = $bi;
        $data['info__'] = $borrowers;
        $data['payment__'] = Payment::where('is_active','yes')->orderBy('name','asc')->get();
        return view('borrowers.view-invoice',$data);
    }
	
    public function createNewloan($id) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        $no = 1;
        $bi = BN::orderBy("id","desc")->limit(1)->get();
        if( isset($bi[0]) ) {
            $no = $bi[0]->id + 1;    
        }
		$data["newrepayment"] = BI::where('borrower_id',$id)->sum('amount');        
		$data["newloan"] = BN::where('borrower_id',$id)->sum('amount');        
        $data['bi_no'] = $no;
        $data['info__'] = $borrowers;
        $data['payment__'] = Payment::where('is_active','yes')->orderBy('name','asc')->get();
        return view('borrowers.create-newloan',$data);
    }
	
	public function createNewloanSubmit($id, Request $request) {
        if( strlen($id) == 0 ) {
            return Redirect::to('borrowers')->withErrors("No Lander Id found.");
        }
        
        $borrowers = Borrowers::find($id);
        if( empty($borrowers) ) {
            return Redirect::to('borrowers')->withErrors("No Lander information found.");
        }
        
        
        $loan_no = $request -> loan_no;
        
        $validator = Validator::make(
            [
                "invoice_no"=>$loan_no
            ],
            [
                "invoice_no"=>"required|unique:borrowers_invoice"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        
        $bn = new BN();
        $bn -> borrower_id = $id;
        $bn -> loan_no = $loan_no ;
        $bn -> amount = $request -> amount;
        $bn -> loan_dt = date("Y-m-d",strtotime($request -> loan_dt));
        $bn -> receivedby  = $request -> receivedby ;
        $bn -> receipt  = $request -> receipt ;
        $bn -> witness_name  = $request -> witness_name ;
        $bn -> method_of_payment  = $request -> method_of_payment ;
        $bn -> repayment_date  = date("Y-m-d",strtotime($request -> repayment_date));
        $bn -> comments  = $request -> comments ;

        $bn -> is_mail  = 'no';
        if( isset($request -> is_mail) ) {
            if( $request -> is_mail == '1' ) {
                $bn -> is_mail  = 'yes';
            }
        }
        
        $bn -> is_active = 'yes';
        $bn -> created_dt = date('Y-m-d H:i:s');
        $bn -> created_by = Auth::user()->id;
        
        if( !$bn -> save() ) {
            $bn -> delete();
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        
        return Redirect::to("borrowers/view/".$id)->with("success","Landers Invoice has been created successfully.");
    }
    
}
