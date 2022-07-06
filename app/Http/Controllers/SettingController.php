<?php
namespace App\Http\Controllers;


use App\Models\UsersModel AS User;
use App\Models\SettingsModel AS Settings;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller {
    
    public function __construct() {
        $this->middleware('checkrole');
    }
    public function settings() {
        $data['settings'] = Settings::find(1);
        return view('settings',$data);
    }
    
    
    public function settingsSubmit(Request $request) {
    
        $title = $request -> title;
        $logo__ = $request -> file("logo");
        $favicon__ = $request -> file("favicon");
        
        
        $validator = Validator::make(
            [
                "title" => $title
            ],
            [
                "title" => "required"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        $settings__ = Settings::find(1);
        if( empty($settings__) ) {
            dd("Settings Misconfigure.");
        }
        
        $settings__ -> title = $title;
        

        $destination = base_path()."/storage/app/public/settings/";
        if(strlen($logo__) > 0) {
            $extenstion = $logo__ -> getClientOriginalExtension();
            $upload_logo = 'l_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
            
            if( $logo__ -> move( $destination, $upload_logo ) == false ) {
                return redirect() -> back() -> withErrors("A problem occur while uploding the logo. Please try again !");
            }
            $settings__ -> logo = $upload_logo;
        }
        
        
        if(strlen($favicon__) > 0) {
            $extenstion = $favicon__ -> getClientOriginalExtension();
            $upload_favicon = 'f_'.strtotime(date("Y-m-d H:i:s")).".".$extenstion;
            
            if( $favicon__ -> move( $destination, $upload_favicon ) == false ) {
                return redirect() -> back() -> withErrors("A problem occur while uploding the logo. Please try again !");
            }
            $settings__ -> favicon = $upload_favicon;
        }
        
        
        if($settings__ -> save() == false ) {
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        return redirect()->back()->with("success","Application Information has been update successfully.");
    }
    
    
    public function giftAds() {
        $data['settings'] = Settings::find(1);
        return view('gift-ads',$data);
    }
    
    
    public function giftAdsSubmit(Request $request) {
    
        $gift_ads_amount = $request -> gift_ads_amount;
        $gift_ads_type = $request -> gift_ads_type;
        
        
        $validator = Validator::make(
            [
                "gift_ads_amount" => $gift_ads_amount,
                "gift_ads_type" => $gift_ads_type
            ],
            [
                "gift_ads_amount" => "required",
                "gift_ads_type" => "required"
            ]
        );
        
        if( $validator -> fails() == true ) {
            return redirect() -> back() -> withErrors($validator -> errors());
        }
        
        
        $settings__ = Settings::find(1);
        if( empty($settings__) ) {
            dd("Settings Misconfigure.");
        }
        
        $settings__ -> gift_ads_amount = $gift_ads_amount;
        $settings__ -> gift_ads_type = $gift_ads_type;
        
        
        if($settings__ -> save() == false ) {
            return redirect()->back()->WithErrors("A problem occur. Please try again.");
        }
        return redirect()->back()->with("success","Gift Ads Settings Information has been update successfully.");
        
    }
    
}
