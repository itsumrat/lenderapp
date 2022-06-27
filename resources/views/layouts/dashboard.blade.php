<?php 
use App\Models\SettingsModel AS Settings;


$settings = Settings::find(1);
if( empty($settings) ) {
    echo "<center>Settings Mismatch...</center>";
    dd();
}


$current_url = Request::url();
if( strstr($current_url,"/users") && ($current_url != Request::root()."/users/edit/".Auth::user()->id) ) {
    if( Auth::user()->role != 'admin' ) {
        echo '<center>You are not authorized...</center>';
        dd();
    }
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Accounts | {{$settings -> title}}</title>
      <meta name="viewport" content="width=1024">
      <link href="{{Request::root()}}/storage/app/public/settings/{{$settings -> favicon}}" rel="shortcut icon">
      <link title="zf-font-src" href="//fonts.googleapis.com/css2?family=Inter:wght@300..700&amp;family=Source+Sans+Pro:wght@400&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{Request::root()}}/resources/css/vendor-962ce9a43109a5c1785e05d6a8186c42.css">
      <link rel="stylesheet" href="{{Request::root()}}/resources/css/zb-2cd27052d221643d3c9b7bfe82585086.css">
      <link rel="stylesheet" href="{{Request::root()}}/resources/css/wmsbar.css">
      
      
      
      <!-- Onjon -->
      <style>
      #ember70 {
        margin-left: 30px;
      }
      
      .hide {
        display: none;
      }
      
      #ember704 {
        margin-bottom: -10px;
      }
      
      .column.content-column.txn-creation-column {
        padding: 20px 25px;
      }
      
      .alert {
        margin-bottom: 0px !important;
      }
      
      
      @yield('custom_css')
      
      </style>
      
      
      
   </head>
   <body>
    
    <!-- TOP AND LEFT MENU -->
    <div class="top-band d-print-none " id="top-band">
       <div id="ember5" class="zf-products    dropdown ember-view">
          <a id="ember6" class="text-center dropdown-toggle no-caret ember-view">
            <img src="{{Request::root()}}/storage/app/public/settings/{{$settings -> logo}}" alt="{{$settings -> title}}" style="max-height: 100%;margin-top: -6px;" />
          </a>
       </div>
       
       <div id="ember125" class="dropdown orglist-topband float-right top-item top-item-fixed-width ember-view">
          <div id="ember126" class="ember-view">
             <span class="cursor-pointer" data-ember-action="" data-ember-action-127="127">
                <div class="over-flow" style="display: inline-block; max-width: 155px;" title="4Deals">
                   {{ucwords(Auth::user()->name)}}&nbsp; 
                </div>
                <div class="arrow-bottom aliceblue-bg login-info hide"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 165.4 512 512" class="icon icon-xsmall align-top orglist-dropdown down_arrow">
                   <path d="M512 331.2c0 4.6-2 9.1-6 12.1L265 523.7c-5.3 4-12.7 4-18 0L6 343.3c-6.7-5-8-14.4-3.1-21.1 5-6.7 14.4-8 21.1-3.1l232 173.7 231.9-173.7c6.7-5 16.1-3.6 21.1 3.1 2 2.6 3 5.8 3 9z"></path>
                </svg>
             </span>
          </div>
       </div>
       
    </div>

    <div id="flyout-with-topbar" class="d-print-none">
        <!-- LOGIN INFO -->
        <div class="login-info hide">
           <div id="ember708" class="flyout-sm   flyout ember-view">
              <div tabindex="-1" id="ember709" class="ember-view">
                 <div class="flyout-header">
                    <div class="section aliceblue-bg" style="border-bottom: 1px solid #EDEDED;">
                       <a href="javascript:loginInfoControl();" class="close-details">
                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
                             <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                          </svg>
                       </a>
                       <div class="user-pro clearfix text-center">
                          <h3><img class="profile-pic" src="{{Request::root()}}/resources/images/user-thumbnail.png"></h3>
                          <div class="over-flow uppercase">{{ucwords(Auth::user()->name)}}</div>
                          <div class="text-muted font-xxs user-id"> User ID: {{ucwords(Auth::user()->id)}}</div>
                          <p><small class="text-muted over-flow">{{Auth::user()->email_address}}</small></p>
                          <p class="profile-accounts">
                            <a href="{{Request::root()}}/users/edit/{{Auth::user()->id}}" rel="nofollow noreferrer noopener"> 
                                My Account 
                            </a> 
                            <span class="text-muted" style="padding:0 10px;">|</span> 
                            <a class="signout" href="{{url('logout')}}">Sign Out</a>
                          </p>
                       </div>
                    </div>
                 </div>
                 
              </div>
           </div>
        </div>
        <!-- LOGIN INFO END -->
        
        
        
    </div>


    
    <div id="main-nav-tab" class="   noscroll-x column tab-column main-tab-column d-print-none ember-view">
       <ul class="nav nav-pills fill nav-bottom-spacing flex-column ">
          <li id="ember649" class="nav-item active ember-view">
            <a href="{{Request::root()}}/home" id="ember650" 
            class="nav-link ember-view <?php if(strstr(Request::url(), "/home")) {echo "active"; } ?>" >
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon lpanel">
                   <path d="M256 180c8.8 0 16-7.2 16-16v-22c0-8.8-7.2-16-16-16s-16 7.2-16 16v22c0 8.8 7.2 16 16 16zM123 320h-21c-8.8 0-16 7.2-16 16s7.2 16 16 16h21c8.8 0 16-7.2 16-16s-7.2-16-16-16zM411 320h-21c-8.8 0-16 7-16 15.8s7.2 16 16 16h21c8.8 0 16-7.2 16-16s-7.2-15.8-16-15.8zM272 336.5v-64.6c0-8.8-7.2-16-16-16s-16 7.2-16 16v64.6c-10.3 5.7-17.4 16.9-17.4 29.7 0 18.7 14.9 33.8 33.4 33.8s33.4-15.1 33.4-33.8c0-12.8-7.1-24-17.4-29.7zM155.7 195.9c-6.1-6.4-16.2-6.7-22.6-.6-6.4 6.1-6.7 16.2-.6 22.6l14.7 15.4c6.1 6.4 16.2 6.7 22.6.6 6.4-6.1 6.7-16.2.6-22.6l-14.7-15.4zM379 197.4c-6.1-6.4-16.2-6.6-22.6-.5l-16.3 15.6c-6.4 6.1-6.6 16.2-.5 22.6 6.1 6.4 16.2 6.6 22.6.5l16.3-15.6c6.4-6.1 6.6-16.2.5-22.6z"></path>
                   <path d="M436.7 122.8C388.4 74.6 324.3 48 256 48S123.6 74.6 75.3 122.8C27.1 171.1.5 231 .5 299.3c0 64.6 16.6 112.8 59.1 158.7 4.7 5.1 11.4 6 18.3 6H438c7.1 0 13.8-1 18.5-6.2 42-45.8 55-94.1 55-158.5 0-68.3-26.5-128.2-74.8-176.5zm6.2 298.2c-4.6 7-12.5 11.2-20.9 11.2L90 432c-8.4 0-16.3-2.9-20.9-10-23.8-36.1-36.6-78.4-36.6-122.7 0-59.7 23.2-115.8 65.4-158C140.2 99.1 196.3 80 256 80s115.8 19 158.2 61.2c42.2 42.3 65.5 98.4 65.5 158.1 0 30.4-12.8 85.5-36.8 121.7z"></path>
                </svg>
                Dashboard
             </a>
          </li>
          
          <li id="ember655" class="nav-item ember-view">
             <a href="{{Request::root()}}/borrowers" id="ember656" class="nav-link ember-view <?php if(strstr(Request::url(), "/borrowers")) {echo "active"; } ?>">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon lpanel">
                    <path d="M428 128h-76V96c0-53-43-96-96-96s-96 43-96 96v32H84c-11 0-20 9-20 20v344c0 11 9 20 20 20h344c11 0 20-9 20-20V148c0-11-9-20-20-20zM192 96c0-35.3 28.7-64 64-64s64 28.7 64 64v32H192V96zm224 384H96V160h320v320z"></path>
                    <circle cx="176" cy="213" r="23"></circle>
                    <circle cx="334" cy="213" r="23"></circle>
                </svg>
                Lenders
             </a>
          </li>
          
          <li id="ember653" class="nav-item ember-view">
             <a href="{{Request::root()}}/landers" id="ember654" class="nav-link ember-view <?php if(strstr(Request::url(), "/landers")) {echo "active"; } ?>">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon lpanel">
                   <path d="M45.5 404c0 8.8 7.2 16 16 16h390.1c8.8 0 16-7.2 16-16s-7.2-16-16-16H61.5c-8.8 0-16 7.2-16 16zM484.6 463H28.5c-8.8 0-16 7.2-16 16s7.2 16 16 16h456.1c8.8 0 16-7.2 16-16s-7.1-16-16-16zM501.1 128.2L266.7 3.5c-4.7-2.4-10.2-2.5-14.9 0L12.2 128.1c-7.8 4.1-10.9 13.7-6.8 21.6 2.9 5.5 8.4 8.6 14.2 8.6 2.5 0 5-.6 7.4-1.8L259.1 35.8l227 120.7c7.8 4.1 17.5 1.2 21.6-6.6 4.2-7.9 1.2-17.6-6.6-21.7zM256.6 344.8c8.8 0 16-7.2 16-16V206h12c8.8 0 16-7.2 16-16s-7.2-16-16-16h-56c-8.8 0-16 7.2-16 16s7.2 16 16 16h12v122.8c0 8.8 7.1 16 16 16zM115.6 344.8c8.8 0 16-7.2 16-16V206h12c8.8 0 16-7.2 16-16s-7.2-16-16-16h-56c-8.8 0-16 7.2-16 16s7.2 16 16 16h12v122.8c0 8.8 7.1 16 16 16zM397.6 344.8c8.8 0 16-7.2 16-16V206h12c8.8 0 16-7.2 16-16s-7.2-16-16-16h-56c-8.8 0-16 7.2-16 16s7.2 16 16 16h12v122.8c0 8.8 7.1 16 16 16z"></path>
                </svg>
                Donors
             </a>
          </li>
          <li class="divider"></li>
          
          <?php 
          $style = "collapse";
          $style2 = "collapsed";
          $style3 = "";
          if( strstr(Request::url(),"/users") || strstr(Request::url(),"/settings") || strstr(Request::url(),"/gift-ads") ) {
            $style = "";
            $style2 = "";
            $style3 = "active";
          }
          ?>
          <li class="nav-item">
             <ul id="ember694" class="nav nav-pills flex-column ember-view">
                <li id="ember695" class="lhs-accordion nav-item ember-view">
                   <a id="ember696" class="nav-link ember-view {{$style2}}">
                      <span class="tab-element-right">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle arrow-down">
                            <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
                         </svg>
                      </span>
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon lpanel">
                       <path d="M449.8 63.6c-33.9 0-61.4 27.5-61.4 61.4 0 16.3 6.4 31.2 16.8 42.2l-61.7 116.1c-5.6-1.7-11.5-2.6-17.6-2.6-9.2 0-18 2.1-25.9 5.7l-43-52.9c6-9.5 9.5-20.7 9.5-32.7 0-33.9-27.5-61.4-61.4-61.4s-61.4 27.5-61.4 61.4c0 14.5 5 27.7 13.4 38.2l-73.2 90.4c-6.6-2.4-13.7-3.7-21.1-3.7-33.9 0-61.4 27.5-61.4 61.4s27.5 61.4 61.4 61.4 61.4-27.5 61.4-61.4c0-14.7-5.2-28.2-13.8-38.8l73-90.1c6.8 2.6 14.1 4 21.7 4 10.1 0 19.5-2.4 27.9-6.7l42.2 51.9c-6.8 9.9-10.7 21.8-10.7 34.7 0 33.9 27.5 61.4 61.4 61.4s61.4-27.5 61.4-61.4c0-16-6.1-30.5-16.1-41.4L433 184.2c5.3 1.5 10.9 2.3 16.7 2.3 33.9 0 61.4-27.5 61.4-61.4.1-33.9-27.5-61.5-61.3-61.5zM62.7 417.9c-17 0-30.7-13.7-30.7-30.7s13.7-30.7 30.7-30.7 30.7 13.7 30.7 30.7-13.7 30.7-30.7 30.7zm111.6-217.1c0-17 13.7-30.7 30.7-30.7s30.7 13.7 30.7 30.7-13.7 30.7-30.7 30.7c-17 .1-30.7-13.7-30.7-30.7zm151.5 172.1c-17 0-30.7-13.7-30.7-30.7s13.7-30.7 30.7-30.7 30.7 13.7 30.7 30.7c.1 17-13.7 30.7-30.7 30.7zm124-217.1c-17 0-30.7-13.7-30.7-30.7s13.7-30.7 30.7-30.7 30.7 13.7 30.7 30.7-13.8 30.7-30.7 30.7z"></path>
                    </svg>
                      Settings 
                   </a>
                   <ul id="ember697" class="nav nav-pills flex-column flex-nowrap ember-view {{$style}}">
                        <?php if(Auth::user()->role == 'admin' ) { ?>
                      <li id="ember700" class="nav-item ember-view">
                         <a href="{{Request::root()}}/users" id="ember701" class="nav-link ember-view 
                         @if(strstr(Request::url(),'/users')) active @endif ">
                            <span id="ember702" class="add-new tab-element-right ember-view">
                               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-bottom">
                                  <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                               </svg>
                            </span>
                            Users
                         </a>
                      </li>
                        <?php } ?>
                      <li id="ember702" class="nav-item ember-view">
                         <a href="{{url('gift-ads')}}" id="ember703" class="nav-link ember-view
                         @if(strstr(Request::url(),'/gift-ads')) active @endif ">
                            <span class="add-new tab-element-right ember-view">
                               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-bottom">
                                  <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                               </svg>
                            </span>
                            Gift Ads
                         </a>
                      </li>
                      
                      <li id="ember700" class="nav-item ember-view">
                         <a href="{{Request::root()}}/settings" id="ember701" class="nav-link ember-view
                         @if(strstr(Request::url(),'/settings')) active @endif">
                            <span id="ember702" class="add-new tab-element-right ember-view">
                               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs align-text-bottom">
                                  <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                               </svg>
                            </span>
                            Application
                         </a>
                      </li>
                   </ul>
                </li>
             </ul>
          </li>
          
       </ul>
       
    </div>
          
    
    <!-- MAIN BODY -->
    <div @if( !strstr($current_url,"landers/view/") && !strstr($current_url,"borrowers/view/") ) class="column content-column txn-creation-column" @endif >
        
        
        @if(!strstr($current_url,"users/edit") || !strstr($current_url,"/settings") )
            @if(Session::has('success'))
            <div class="alert alert-success">
                <img src="{{Request::root()}}/resources/images/success.png" alt="success" style="height:20px;margin-top:-5px;" />
                <span style="padding-left:10px; font-size:13px;">{{Session::get('success')}}</span>
            </div>
            @endif
            
            <?php session()->forget('success'); ?>
        @endif
        
        
                    
        @yield('body')
    </div>
    <!-- MAIN BODY END -->
      
      
      
      
      
      
    <script type="text/javascript" src="{{Request::root()}}/resources/js/jquery-3.6.0.min.8fb8fee4fcc3cc86ff6c724154c49c42.js"></script>
    <script type="text/javascript" src="{{Request::root()}}/resources/js/validator.js"></script>
    <script>
      $("#ember70").click(function(){
        $("#ember78").removeClass("open");
        $("#ember81").removeClass("show");
        $("#ember7").removeClass("show");
      
        $("#ember71").toggleClass("open");
        $("#ember73").toggleClass("show");
      });
      
      $("#ember79").click(function(){
        $("#ember71").removeClass("open");
        $("#ember73").removeClass("show");
        $("#ember7").removeClass("show");
      
        $("#ember78").toggleClass("open");
        $("#ember81").toggleClass("show");
      });
      
      $("#ember125").click(function(){
        loginInfoControl();
      });
      
      
      
      function loginInfoControl() {
        $(".ref-info, .notification-info, .settings-top-info, .help-info").addClass("hide");
        $(".login-info").toggleClass("hide");
      }
      
      
      $("#ember123, #reg-info-close-btn").click(function(){
        $(".login-info, .notification-info, .settings-top-info, .help-info").addClass("hide");
        $(".ref-info").toggleClass("hide");
      });
      
      $("#ember121, #notification-info-close-btn").click(function(){
        $(".login-info, .ref-info, .settings-top-info, .help-info").addClass("hide");
        $(".notification-info").toggleClass("hide");
      });
      
      $("#ember119, #settings-top-info-close-btn").click(function(){
        $(".login-info, .ref-info, .notification-info, .help-info").addClass("hide");
        $(".settings-top-info").toggleClass("hide");
      });
      
      
      $("#ember117, #help-info-close-btn").click(function(){
        $(".login-info, .ref-info, .notification-info, .settings-top-info").addClass("hide");
        $(".help-info").toggleClass("hide");
      });
      
      $("#ember6").click(function(){
        $("#ember7").toggleClass("show");
        $("#ember73, #ember81").removeClass("show");
        $("#ember71, #ember78").removeClass("open");
      });
      
      
      // SALES
      $("#ember657").click(function(){
        $("#ember658m").toggleClass("collapsed");
        $("#ember659m").toggleClass("hide");
      });
      
      
      // PURCHASE
      $("#ember695").click(function(){
        $("#ember696").toggleClass("collapsed");
        $("#ember697").toggleClass("show");
      });
      
       
      $(".alert-success").click(function(){
        $(".alert-success").hide();
      });
      
      
    </script>
    
    @yield('custom_js')
    
    
   </body>
</html>