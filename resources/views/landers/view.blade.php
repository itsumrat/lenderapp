@extends('layouts.dashboard')
@section('custom_css')
td .list-primary {
    padding-left: 10px;
}

.line-seperator small.coll {
    padding-right: 10px;
}
@endsection

@section('body')
    
    
    <!-- LEFT LIST -->
    <div class="column list-column d-print-none column-medium">
       <div class="fill list-header topgrad d-print-none">
          <div class="list-filter">
          
             <div class="btn-toolbar float-right">
                 
                <a href="{{url('landers/add')}}" class="tooltip-container ember-view btn btn-primary" type="button">
                    <span>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xsmall align-text-bottom mb-2">
                            <path d="M484 227H284V28c0-15.5-12.5-28-28-28s-28 12.5-28 28v199H28c-15.5 0-28 12.5-28 28v1c0 15.5 12.5 28 28 28h200v200c0 15.5 12.5 28 28 28s28-12.5 28-28V284h200c15.5 0 28-12.5 28-28v-1c0-15.5-12.5-28-28-28z"></path>
                        </svg>
                    </span>
                </a>
                
             </div>
             <div id="ember1761" class="dropdown ember-view clearfix list-title">
                <a id="ember1762" class="dropdown-toggle no-caret ember-view">
                    <span class="filter-title over-flow ">All Donors</span>
                </a>
             </div>
          </div>
       </div>
       <div class="scroll-y fill body scrollbox list-body">
          
          <div class="table-responsive overflow-initial customviews-table  ">
             <table id="ember1780" class="table zi-table table-hover ember-view header-fixed">
                 
                <tbody>
                    @foreach($list__ AS $list)
                    <tr class="ember-view @if($list->id==$info__->id) table-active @endif ">
                        <td>
                            <div class="list-primary">
                                <div class="name">
                                    <a href="{{url('landers/view/'.$list->id)}}" class="ember-view">
                                        {{ucwords($list->first_name." (".$list -> sur_name.")")}}
                                    </a>
                                </div>
                                <div class="text-muted">
									£{{ App\Models\LandersInvoiceModel::where('lander_id', $list->id)->sum('amount') }}
									
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
             </table>
          </div>
          
          <!-- Pagination -->
          <div class="ember-view">
             <div class="pagination clearfix d-print-none">
                
             </div>
          </div>
           
       </div>
    </div>
    <!-- LEFT LIST END -->
    
    
    <!-- RIGHT SIDE -->
    <div class="column content-column ">
       <div class="header no-border d-flex">
          <h3 class="over-flow header-title">
            <div class="btn-group visible-1279-inline-block">
                <button class="btn btn-secondary btn-back" data-ember-action="" data-ember-action-643="643">
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom">
                      <path d="M370 508c19.3 0 28.9-23.4 15.2-37.1L167.9 255.5 385.2 40.1C398.9 26.4 389.3 3 370 3c-5.7 0-11.1 2.2-15.2 5.3L122 239.1c-8.5 9.5-8.5 23.3 0 31.8l232.8 230.9c4.1 4 9.5 6.2 15.2 6.2z" id="Layer_2_2_"></path>
                   </svg>
                </button>
            </div>
            {{ucwords($info__ -> first_name." (".$info__ -> sur_name.")")}}
          </h3>
          <div>
             <div class="btn-toolbar">
                 <?php if(Auth::user()->role === 'admin' || Auth::user()->role === 'manager') { ?>
                <div class="btn-group">
                    <a href="{{url('landers/edit/'.$info__ -> id)}}" class="btn btn-secondary">Edit</a>
                </div>
                <div class="dropdown ember-view btn-group">
                    <a href="{{url('landers/create/invoice/'.$info__ -> id)}}" 
                        class="ember-view btn-primary btn"> 
                        New Transaction 
                    </a>
                </div>
                <?php } ?>
                
                <a href="{{url('landers')}}" title="Close" class="close-details ml-5">
                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm">
                      <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
                   </svg>
                </a>
             </div>
          </div>
       </div>
       <div class="sub-tab">
          <ul class="nav nav-tabs nav-tabs-dashed">
          
            <li class="ember-view nav-item tab2-btn">
                <a href="javascript:showTab(0);" class="active ember-view nav-link tab-btn">Overview</a>
            </li>
            <li class="ember-view nav-item">
                <a href="javascript:showTab(1);" class="ember-view nav-link tab-btn">Archive History</a>
            </li>
            <li class="ember-view nav-item">
                <a href="javascript:showTab(2);" class="ember-view nav-link tab-btn">Transactions</a>
            </li>
            <li class="ember-view nav-item">
                <a href="javascript:showTab(3);" class="ember-view nav-link tab-btn">Mails</a>
            </li>
            {{--<li class="ember-view nav-item">
                <a href="javascript:showTab(4);" class="ember-view nav-link tab-btn">Statement</a>
            </li>--}}
              
          </ul>
       </div>
       
       
        <div class="ember-view scroll-y noscroll-x fill body scrollbox pb-0">
        
            <!-- OVERVIEW TAB -->
            <div class="ember-view tab2-details">
                <div class="details fill-container noscroll-x" id="contact-details">
                    <div class="details-info">
                       <div class="group">
                          
                          <div class="person row">
                            
                             <div class="col-lg-12">
                                <strong>{{$info__ -> reg_no}}</strong>
                                @if(strlen($info__ -> ref) > 0)({{$info__ -> ref}})@endif <br> 
                                {{$info__ -> email_address}} <br>    
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
                                   <path d="M384 0H160c-17.7 0-32 14.3-32 32v448c0 17.7 14.3 32 32 32h224c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32zM224 24h96c4.4 0 8 3.6 8 8s-3.6 8-8 8h-96c-4.4 0-8-3.6-8-8s3.6-8 8-8zm48 466c-14.3 0-26-11.7-26-26s11.7-26 26-26 26 11.7 26 26-11.7 26-26 26zm112-90c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V80c0-8.8 7.2-16 16-16h192c8.8 0 16 7.2 16 16v320z"></path>
                                </svg>
                                {{$info__ -> mobile}}@if(strlen($info__ -> telephone) > 0), {{$info__ -> telephone}} @endif <br>  
                                {{--@if($info__ -> gift_ads == "yes")Gift Ads <br>@endif  
                                <div class="line-seperator">
                                    <small class="coll"> 
                                        <a href="javascript:;">Send Email</a> 
                                    </small> 
                                    <small class="coll">
                                        <a href="javascript:;">Delete</a>
                                    </small>  
                                </div>--}}
                             </div>
                          </div>
                       </div>
                       <div class="ember-view">
                          <div class="ember-view">
                             <div class="ember-view toggle-header cursor-pointer">
                                <div class="uppercase font-weight-light">
                                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xsmall align-text-bottom float-right icon-down-open-big">
                                      <path d="M255.5 450L1.5 193.2v62l254 256.8 254-256.8v-62z"></path>
                                   </svg>
                                   Address 
                                </div>
                             </div>
                             <div class="ember-view collapse show" style="">
                                <div class="group">
                                   <div class="popovercontainer address-group ember-view">
                                      <address id="ember894" class="text-muted font-small ember-view">
                                         <strong>{{ucwords($info__ -> address1)}}</strong> 
                                         <div class="preserve-wrap">{{ucwords($info__ -> address2)}}</div>
                                          {{ucwords($info__ -> city)}}, {{ucwords($info__ -> postcode)}}<br> 
                                          {{ucwords($info__ -> country)}}<br>   
                                      </address>
                                       
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="ember-view">
                             <div class="ember-view toggle-header cursor-pointer">
                                <div class="uppercase font-weight-light">
                                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xsmall align-text-bottom float-right icon-down-open-big">
                                      <path d="M255.5 450L1.5 193.2v62l254 256.8 254-256.8v-62z"></path>
                                   </svg>
                                   Remarks
                                </div>
                             </div>
                             <div class="ember-view collapse show">
                                <div class="group">
                                   <div class="row inline-fields">
                                      <div class="col-lg-12">{{$info__ -> remarks}}</div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          
                       </div>
                    </div>
                    <div class="entity-details">
                       
                        <div class="prim-info">
                          <div>
                             <ul id="ember918" class="row arapdetails ember-view">
                                <li class="col-lg-5 text-left">
                                   <h6 class="font-xlarge">Outstanding Receivables</h6>
                                   <span class="text-overdue outstanding-arap " data-ember-action="" data-ember-action-919="919">
									  £{{ App\Models\LandersInvoiceModel::where('lander_id', ucwords($info__ -> id))->sum('amount') + App\Models\LandersInvoiceModel::where('lander_id', ucwords($info__ -> id))->sum('gift_ads_tax') }}
									</span>
                                </li>
                                {{--<li class="col-lg-7">
                                   <div class="right-pane"><span class="text-muted section-width">Unused Credits</span> <span class="cursor-pointer right-pane-semibold" data-ember-action="" data-ember-action-920="920">£0.00</span></div>
                                   <div class="right-pane"> <span class="text-muted section-width">Payment due period</span> <span class="right-pane-semibold">Due On Receipt</span> </div>
                                </li>--}}
                             </ul>
                          </div>
                          <hr class="">
                         {{--  <div class="clearfix">
                             
                             <div class="comments-history" style="padding:0px;margin-top:-25px;">
                                <div class="tree-structure activities">
                                    @if(strlen($info__->updated_by__) > 0)
                                    <div>
                                      <div class="tree-node right">
                                         <div class="time"><small>
                                            {{date("d M, Y h:i A",strtotime($info__ -> updated_dt))}}</small>
                                         </div>
                                         <div class="sentimental-icon-contacts">
                                            <div id="ember944" class="ember-view">
                                               <div class="txn-comment-icon circle-box">
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon-comment icon icon-xs align-top mt-2 ">
                                                     <path d="M256.7.2C116.9.2 3.1 115 3.1 255.9 3.1 323.5 29.2 385 72 430.8c-13.5 17.1-45.6 56.7-59.8 63.7-27.6 13.7 9.6 21.3 52.4 12.5 23.1-4.8 47.8-14.2 64.9-30.1 37.5 22 81 34.7 127.3 34.7 139.9 0 253.7-114.8 253.7-255.7S396.6.2 256.7.2zm0 471.5c-118 0-214.1-96.9-214.1-215.8S138.7 40.1 256.7 40.1 470.8 137 470.8 255.9s-96.1 215.8-214.1 215.8z"></path>
                                                     <path d="M115.4 220.7h279.8c10.9 0 19.7-8.9 19.6-19.9 0-11-8.8-19.9-19.7-19.9H115.4c-10.9 0-19.7 8.9-19.7 19.9 0 11 8.8 19.9 19.7 19.9zM395.2 291.2H115.4c-10.9 0-19.7 8.9-19.7 19.9 0 11 8.8 19.9 19.7 19.9h279.8c10.9 0 19.6-8.9 19.6-19.9.1-11-8.7-19.9-19.6-19.9z"></path>
                                                  </svg>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="tree-node-leaf" style="margin-top: -15px">
                                            <div class="arrow"></div>
                                            <p class="text-regular">
                                                Donor updated
                                            </p>
                                            <div class="text-muted">
                                                Last updated by <strong>{{$updated_by__ -> name}}</strong> 
                                                from <strong>{{$info__ -> updated_ip}}</strong>    
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   @endif
                                   
                                   <div>
                                      <div class="tree-node right">
                                         <div class="time">
                                            <small>
                                                {{date("d M, Y",strtotime($info__ -> created_dt))}}&nbsp;<br/>
                                                {{date("h:i A",strtotime($info__ -> created_dt))}}&nbsp;
                                            </small>
                                         </div>
                                         <div class="sentimental-icon-contacts">
                                            <div id="ember944" class="ember-view">
                                               <div class="txn-comment-icon circle-box">
                                                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon-comment icon icon-xs align-top mt-2 ">
                                                     <path d="M256.7.2C116.9.2 3.1 115 3.1 255.9 3.1 323.5 29.2 385 72 430.8c-13.5 17.1-45.6 56.7-59.8 63.7-27.6 13.7 9.6 21.3 52.4 12.5 23.1-4.8 47.8-14.2 64.9-30.1 37.5 22 81 34.7 127.3 34.7 139.9 0 253.7-114.8 253.7-255.7S396.6.2 256.7.2zm0 471.5c-118 0-214.1-96.9-214.1-215.8S138.7 40.1 256.7 40.1 470.8 137 470.8 255.9s-96.1 215.8-214.1 215.8z"></path>
                                                     <path d="M115.4 220.7h279.8c10.9 0 19.7-8.9 19.6-19.9 0-11-8.8-19.9-19.7-19.9H115.4c-10.9 0-19.7 8.9-19.7 19.9 0 11 8.8 19.9 19.7 19.9zM395.2 291.2H115.4c-10.9 0-19.7 8.9-19.7 19.9 0 11 8.8 19.9 19.7 19.9h279.8c10.9 0 19.6-8.9 19.6-19.9.1-11-8.7-19.9-19.6-19.9z"></path>
                                                  </svg>
                                               </div>
                                            </div>
                                         </div>
                                        <div class="tree-node-leaf" style="margin-top: -15px">
                                            <div class="arrow"></div>
                                            <p class="text-regular">
                                                Donor added
                                            </p>
                                            <div class="text-muted">
                                                Donor added by <strong>{{$created_by__ -> name}}</strong> 
                                                from <strong>{{$info__ -> created_ip}}</strong>    
                                            </div>
                                         </div>
										  
                                      </div>
                                   </div>
                                   
                             </div>
                                <div id="ember948" class="sidebar sidebar-section mail-content ember-view">
                                    <div class="content-section header-section">
                                       <button class="close" type="button" data-ember-action="" data-ember-action-949="949">
                                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
                                             <path d="M484.8 511.9c-6.9 0-14-2.7-19.4-8.1L8.1 46.8c-10.8-10.7-10.8-28 0-38.6s28-10.7 38.6 0L504 465.3c10.8 10.7 10.8 28 0 38.6-5.2 5.4-12.2 8-19.2 8z"></path>
                                             <path d="M27.5 512c-6.9 0-14-2.7-19.4-8.1-10.8-10.7-10.8-28 0-38.6L465.4 8.2c10.8-10.7 28-10.7 38.6 0 10.8 10.7 10.8 28 0 38.6L46.7 504c-5.2 5.4-12.3 8-19.2 8z"></path>
                                          </svg>
                                       </button>
                                        
                                       <div class="over-flow font-xxlarge align-text-bottom" style="display: inline-block"></div>
                                    </div>
                                
                                    <div class="email-template-section">
                                        <div class="ember-view">
                                            <iframe class="email-html-template" frameborder="0" srcdoc=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- OVERVIEW TAB END -->
            
            
            <!-- COMMUNICATION TAB -->
            <div class="ember-view tab2-details hide">
                <br/>
                <div class="table-responsive overflow-initial ">
                    <table class="header-fixed table zi-table table-hover ember-view ">
                        <thead>
                        <tr>
                            <th class="sortable text-left ember-view" style="width:100px;">
                                Date
                            </th>
                            <th class="sortable text-left ember-view" style="width:120px;">
                                Staff
                            </th>
                            <th class="text-left ember-view text-center" style="width:80px;">
                                Method
                            </th>
                            <th class="text-left ember-view">
                                Communication Details
                            </th>
                            <th class="text-left ember-view text-center" style="width:100px;">
                                Attachments	
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($communication__ AS $list)
                        <tr class="ember-view">
                            <td>{{date("d M, Y",strtotime($list->cdate))}}</td>
                            <td>{{$list->staff}}</td>
                            <td class="text-center">{{$list->method}}</td>
                            <td>{{$list->details}}</td>
                            <td class="text-center">
                                @if(strlen($list->attachement)>0)
                                    <a href="{{url('/storage/app/public/landers/'.$list->attachement)}}" target="_blank">view</a>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
            <!-- COMMUNICATION TAB END -->
            
            <!-- INVOICE/TRANSACTION TAB -->
            <div class="ember-view tab2-details hide">
                <br/>
                <div class="table-responsive overflow-initial ">
                    <table class="header-fixed table zi-table table-hover ember-view ">
                        <thead>
                        <tr>
                            <th class="sortable text-left ember-view" style="width:100px;">
                                Date
                            </th>
                            <th class="sortable text-left ember-view" style="width:120px;">
                                Invoice No 
                            </th>
                            <th class="text-center ember-view text-center" style="width:80px;">
                                Amount
                            </th>
                            <th class="text-center ember-view text-center" style="width:120px;">
                                Payment Mode
                            </th>
                            <th class="text-center ember-view text-center" style="width:120px;">
                                Send Message
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($invoice__ AS $list)
                        <tr class="ember-view">
                            <td>{{date("d M, Y",strtotime($list->payment_dt))}}</td>
                            <td><a href="{{url('landers/invoice/view')}}/{{$list->id}}">{{$list->invoice_no}}</a></td>
                            <td class="text-center">{{number_format($list->amount,2)}}</td>
                            <td class="text-center">{{$list->payment_mode}}</td>
                            <td class="text-center">{{ucwords($list->is_mail)}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
            <!-- INVOICE/TRANSACTION TAB END -->
			 <!-- INVOICE/TRANSACTION TAB -->
            <div class="ember-view tab3-details hide">
                <br/>
                <div class="table-responsive overflow-initial ">
                    <table class="header-fixed table zi-table table-hover ember-view ">
                        <thead>
                        <tr>
                            <th class="sortable text-left ember-view" style="width:100px;">
                                Date
                            </th>
                            <th class="sortable text-left ember-view" style="width:120px;">
                                Invoice No 
                            </th>
                            <th class="text-center ember-view text-center" style="width:80px;">
                                Amount
                            </th>
                            <th class="text-center ember-view text-center" style="width:120px;">
                                Payment Mode
                            </th>
                            <th class="text-center ember-view text-center" style="width:120px;">
                                Send Message
                            </th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($invoice__ AS $list)
                        <tr class="ember-view">
                            <td>{{date("d M, Y",strtotime($list->payment_dt))}}</td>
                            <td><a href="{{url('landers/invoice/view')}}/{{$list->id}}">{{$list->invoice_no}}</a></td>
                            <td class="text-center">{{number_format($list->amount,2)}}</td>
                            <td class="text-center">{{$list->payment_mode}}</td>
                            <td class="text-center">{{ucwords($list->is_mail)}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
            <!-- INVOICE/TRANSACTION TAB END -->
            
        </div>
            
        
    </div>
    <!-- RIGHT SIDE END -->
    
@endsection

@section('custom_js')
<script>
function showTab(index) {
    $(".tab-btn").removeClass("active");
    $(".tab-btn").eq(index).addClass("active");
    
    
    $(".tab2-details").addClass("hide");
    $(".tab2-details").eq(index).removeClass("hide");
    
}
</script>
@endsection