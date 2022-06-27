<?php
use App\Models\SettingsModel AS Settings;


$settings = Settings::find(1);
if( empty($settings) ) {
    echo "<center>Settings Mismatch...</center>";
    dd();
}
?>
<!DOCTYPE>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<html>
	<head>
		<link href="{{Request::root()}}/resources/css/signin.css" type="text/css" rel="stylesheet"/>
        <script src="{{Request::root()}}/resources/js/jquery-3_5_1.min.js" type="text/javascript"></script>
        <script src="{{Request::root()}}/resources/js/select2.full.min.js" type="text/javascript"></script>
        <script src="{{Request::root()}}/resources/js/signin.js" type="text/javascript"></script>
		
		<meta name="robots" content="noindex, nofollow"/>
        
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <title>Login | {{$settings -> title}}</title>
        <link href="{{Request::root()}}/storage/app/public/settings/{{$settings -> favicon}}" rel="shortcut icon">
        
        <style>
        .zoho_logo {
            background: url('{{Request::root()}}/storage/app/public/settings/{{$settings -> logo}}') no-repeat transparent !important;
            background-size: auto 100% !important;
        }
        </style>
	</head>
	<body>
    
     <div>   
        <div class="signin_container">
            <div class="signin_box" id="signin_flow">
                <div class='zoho_logo AaaServer'></div>
                    <div id="signin_div">
                        <form name="login" id="login" action="" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            
                            <div class="signin_head">
                                <span id="headtitle">Sign in</span>
                                <span id="trytitle"></span>
                                <div class="service_name">to access <span>Accounts</span></div>
                            </div>
                            
                            
                            @if(count($errors))
                            <div class="fielderror errorlabel" style="display: block; margin-top:-5px;margin-bottom:10px">
                                &nbsp;Email or Password is incorrect.
                            </div>
                            @endif
                            
                            <div class="fieldcontainer">
                                <div class="searchparent" id="login_id_container">
                                    <div class="textbox_div" id="getusername">
                                        <span>
                                            <label for="email_address" class="hide">Email Address</label>
                                            <input id="email_address" placeholder="Email address" value="{{old('email_address')}}" type="email" name="email_address" class="textbox" required="" autocapitalize="off" autocomplete="on" autocorrect="off"/>	
                                        </span>
                                    </div>
                                    <div class="textbox_div" style="margin-top:-15px;">
                                        <span>
                                            <label for="password" class="hide">Password</label>
                                            <input id="password" placeholder="Password" type="password" name="password" 
                                            class="textbox" required="" autocomplete="on" />	
                                        </span>	
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn blue" id="nextbtn" tabindex="2"><span>Submit</span></button>
                            <div class="text16 pointer" id="forgotpassword">
                                <a class="text16" href="{{Request::root()}}/forget-password">
                                    Forgot Password?
                                </a>
                            </div>
                        </form>
                    <div>
                </div>
                <!--
                <div class="line"></div>
                -->
            </div>
            
        </div>
        
        <!--
        <div class="rightside_box">
            <div class='mfa_panel'>
                <div class='pwlessBanner'>
                    <div class="pwless_img" id="product_img"></div>
                    <div class="pwless_head">Experience Passwordless Sign-in</div>
                    <div class="pwless_text">Move away from risky passwords and experience one-tap access to your Zoho account. Download and install Zoho OneAuth.</div>
                    <div class='MAppIcon'>
                        <a class='GPlayIcon' href='#'><span class="hide">Google Play</span></a>
                        <a class='AStoreIcon' href='#'><span class="hide">Apple Store</span></a>
                    </div>
                    <a class='OnaAuthHLink' href='#'>Learn more</a>
                </div>	
            </div>
        </div>
        -->
        
    </div>
        
    <div id="signuplink">&copy; {{date("Y")}}. All Rights Reserved.</div>
		
	</body>
</html>

<!-- DEVELOPED BY ONJON HOSSAIN -->
