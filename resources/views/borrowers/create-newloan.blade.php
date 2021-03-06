@extends('layouts.dashboard')
@section('custom_css')
.flyout.ember-view.flyout-sm {
    margin-top: -48px;
}

.flyout {
    right: 10px;
}

.separationline {
    border: 0px;
}
@endsection

@section('body') 
<!-- Customer Details -->
<div id="ember772" class="flyout ember-view flyout-sm" style="display:none">
  <div id="ember773" class="flyout-header ember-view">
    <div class="section header"> <a href="javascript:rightPanelSet();" class="close-details"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
      <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
      </svg> </a>
      <h4 class="text-semibold">Lander Details</h4>
    </div>
  </div>
  <div id="ember775" class="flyout-body contextual-sidebar ember-view">
    <div class="aliceblue-bg p-5 clearfix">
      <div class="float-left">
        <div> <strong class="font-xlarge">{{ucwords($info__ -> first_name." (".$info__ -> sur_name.")")}}</strong> <span id="ember776" class="tooltip-container ember-view"> <a target="_blank" rel="noreferrer noopener" href="{{url('landers/view/'.$info__->id)}}" class="ember-view"> <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xs">
          <path d="M432 319.3c-17.7 0-32 14.3-32 32v64.3c0 15.3-19.7 32.3-48 32.3l-240 .1c-12.7 0-24.7-5-33.9-14.1C69 424.8 64 412.7 64 400V160c0-26 16.4-48 35.9-48h67.9c17.7 0 32-14.3 32-32s-14.3-32-32-32H99.9C44.8 48 0 98.2 0 160v240c0 29.8 11.7 57.9 32.9 79.1C54.1 500.3 82.2 512 112 512l240-.1c61.8 0 112-43.2 112-96.3v-64.3c0-17.7-14.3-32-32-32z"></path>
          <path d="M512 52c0-28.7-23.3-52-52-52H344c-17.7 0-32 14.3-32 32s14.3 32 32 32h54.4L202.3 261.5c-12.5 12.5-12.4 32.8.2 45.3 6.2 6.2 14.4 9.3 22.5 9.3 8.2 0 16.5-3.2 22.7-9.5L448 104.9v63.3c0 17.7 14.3 32 32 32s32-14.3 32-32V52z"></path>
          </svg> </a> </span> </div>
      </div>
    </div>
    <div class="p-5">
      <div class="row">
        <div class="col-lg-7">
          <div class="text-muted">Outstanding Payable</div>
          <div class="font-xxlarge pt-2">$0.00</div>
        </div>
        <div class="col-lg-5 text-right">
          <div class="text-muted">Unused Credits</div>
          <div class="font-xxlarge pt-2">$0.00</div>
        </div>
      </div>
      <div id="ember778" class="ember-view accord-title-arrow pt-5"> <span id="ember779" class="ember-view accord-title text-blue cursor-pointer"> Other Details <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-blue arrow-down">
        <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
        </svg> </span>
        <div id="ember780" class="ember-view collapse show" style="">
          <div class="row pt-5">
            <label class="col-lg-5 text-muted"> Lander Type </label>
            <div class="col-lg-7"> Regular </div>
          </div>
          <div class="row pt-2">
            <label class="col-lg-5 text-muted"> Currency Code </label>
            <div class="col-lg-7"> ?? </div>
          </div>
          <div class="row pt-2">
            <label class="col-lg-5 text-muted"> Payment Terms </label>
            <div class="col-lg-7"> Due On Receipt </div>
          </div>
          <div class="row pt-2">
            <label class="col-lg-5 text-muted"> Portal Status </label>
            <div class="col-lg-7"><span class="text-muted"> Disabled </span></div>
          </div>
          <div class="row pt-2">
            <label class="col-lg-5 text-muted"> Source </label>
            <div class="col-lg-7"> {{ucwords($info__ -> ref)}} </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="mute-margin">
  </div>
</div>
<!-- Customer Details END --> 

<!-- Invoice -->
<div class="fixed-actions-top" id="fixed-actions-top"></div>
<div id="ember407" class="ember-view">
  <div id="ember408" class="ember-view"></div>
</div>
<div id="ember409" class="ember-view">
  <div id="scroll-container" class="ember-view scroll-y noscroll-x fill body scrollbox">
    <div class="header"> 
      <!--
         <i class="close-details separationline" data-ember-action="" data-ember-action-410="410">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
               <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
            </svg>
         </i>
        -->
      <h3 class="float-left"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxlg align-text-bottom">
        <path d="M352 256.1H160c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h192c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8zM352 352H160c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h192c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8z"></path>
        <path d="M442.9 132.3c-.2-.2-.4-.4-.6-.7l-126-126c-.2-.2-.4-.4-.7-.6-2.9-3-7-5-11.6-5H96C78.3 0 64 14.3 64 32v448c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V144c0-4.6-2-8.7-5.1-11.7zM320 54.6l73.4 73.4H336c-8.8 0-16-7.2-16-16V54.6zM416 464c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h168c4.4 0 8 3.6 8 8v88c0 17.7 14.3 32 32 32h88c4.4 0 8 3.6 8 8v296z"></path>
        </svg> &nbsp; New Loan </h3>
    </div>
    <div class="fill-container row header-separator"></div>
    <form name="borrower_form" id="borrower_form" enctype="multipart/form-data" method="POST" action="" >
      <input type="hidden" name="_token" value="{{csrf_token()}}" />
      <div tabindex="-1" id="ember415" class="no-outline ember-view"></div>
      <div id="ember416" class="ember-view"> </div>
      <div>
        <div class="primary-info grey-bg">
          <div class="zb-txn-form">
            <div class="form-group">
              <div class="row">
                <label class="col-form-label col-lg-2 required">Lander Name</label>
                <div class="col-lg-6">
                  <div id="ember417" class="ember-view" data-integrity="customer_id">
                    <div class="ac-box "> <span class="ac-selected form-control " tabindex="0"> <span> {{ucwords($info__ -> first_name." (".$info__ -> sur_name.")")}} : {{$info__ -> reg_no}} </span>
                      <div> <i class="zf-ac-toggler"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                        <path d="M493.9 227.8c-21.4-21-56.1-21.1-77.6-.3L256 382.9 95.7 227.6c-21.5-20.8-56.3-20.7-77.6.3-10.6 10.4-15.9 24-15.9 37.7 0 13.8 5.4 27.5 16.2 38l199 192.9c21.4 20.7 55.9 20.7 77.3 0l199-192.9c21.4-20.9 21.6-54.8.2-75.8z"></path>
                        </svg> </i> </div>
                      </span> </div>
                  </div>
                </div>
                <div class="col-lg-3 px-0 align-middle">
                  <button class="btn btn-primary advance-search-btn" type="button" data-ember-action="" data-ember-action-419="419"> <span id="ember420" class="tooltip-container ember-view"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top ">
                  <path fill="#FFF" d="M421 97C365.3 4 244.4-26.3 151.5 29.4S28.3 205.9 83.9 298.8c49.5 82.6 150.5 115.7 237.5 83l66.3 110.7c10 16.7 31.7 22.1 48.4 12.1 16.7-10 22.1-31.7 12.1-48.4L382 345.6c70-61.4 88.4-166 39-248.6zm-85.6 239.5c-76.4 45.8-175.8 20.8-221.6-55.6S93 105.1 169.4 59.3 345.2 38.5 391 114.9s20.8 175.8-55.6 221.6z"></path>
                  </svg> </span> </button>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-10 offset-lg-2">
                  <div id="ember421" class="ember-view info-item cursor-pointer"> <a href="javascript:rightPanelSet();" class="btn-link"> <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-text-bottom">
                    <path d="M394.8 422h-90c-11 0-20-9-20-20s9-20 20-20h90c11 0 20 9 20 20s-9 20-20 20zm97-145h-187c-11 0-20-9-20-20s9-20 20-20h187c11 0 20 9 20 20s-9 20-20 20zm0-145h-187c-11 0-20-9-20-20s9-20 20-20h187c11 0 20 9 20 20s-9 20-20 20zM227.2 422c-11 0-20-9-20-20v-37.3c0-22.2-22.3-40.3-49.8-40.3H89.8c-27.4 0-49.8 18.1-49.8 40.3V402c0 11-9 20-20 20s-20-9-20-20v-37.3c0-44.3 40.3-80.3 89.8-80.3h67.6c49.5 0 89.8 36 89.8 80.3V402c0 11-8.9 20-20 20zM123.6 244.8C80.8 244.8 46 210 46 167.2s34.8-77.6 77.6-77.6 77.6 34.8 77.6 77.6-34.8 77.6-77.6 77.6zm0-115.1c-20.7 0-37.6 16.9-37.6 37.6 0 20.7 16.8 37.6 37.6 37.6s37.6-16.9 37.6-37.6c0-20.8-16.8-37.6-37.6-37.6z"></path>
                    </svg> &nbsp; View Lander Details </a>
                    <div id="ember422" class="ember-view">
                      <div id="ember423" class="ember-view"></div>
                    </div>
                  </div>
                  <div id="ember424" class="ember-view"></div>
                </div>
              </div>
            </div>
            <!--<div class="form-group placeholder-container row">
              <div class="col-lg-8 offset-lg-2">
                <div class="row">
                  <div class="col-lg-8">
                    <div id="ember425" class="popovercontainer address-group ember-view">
                      <div id="ember752" class="ember-view">
                        <div id="ember753" class="ember-view">
                          <div class="address-list">
                            <div> <span data-ember-action="" data-ember-action-754="754"> <span class="text-muted text-uppercase font-small"><span>Billing Address</span> &nbsp;&nbsp; <span class="text-blue font-xxs cursor-pointer" href="#">Change</span></span> </span> </div>
                          </div>
                        </div>
                      </div>
                      <address id="ember427" class="text-muted font-small ember-view">
                      <strong>{{$info__ -> address1}}</strong> @if(strlen($info__ -> address2)>0)
                      <div class="preserve-wrap">{{$info__ -> address2}}</div>
                      @endif
                      @if(strlen($info__ -> city)>0){{$info__ -> city}}@endif
                      @if(strlen($info__ -> postcode)>0)&nbsp;-&nbsp;{{$info__ -> postcode}}@endif<br>
                      {{$info__ -> country}}
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
        <div class="zb-txn-form">
          <div class="primary-content" id="primary-content">
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Loan No.</label>
              <div class="table-container col-lg-4">
                <input class="ember-text-field ember-view form-control" value="LI/{{date('dmy')}}/{{$bi_no}}" placeholder="Invoice Number" name="loan_no" type="text" required />
              </div>
              <div> </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Loan Amount</label>
              <div class="table-container col-lg-4">
                <input class="ember-text-field ember-view form-control" placeholder="Loan Amount" name="amount" type="number" required />
              </div>
              <div> </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Date Issued</label>
              <div class="col-lg-4">
                <input placeholder="dd MMM yyyy" id="ember433" class="ember-text-field zf-date-picker date-picker ember-view form-control" data-integrity="date" type="date" name="loan_dt" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Received By</label>
              <div class="table-container col-lg-4">
                <input class="ember-text-field ember-view form-control" placeholder="Received By" name="receivedby" type="text" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Receipt</label>
              <div class="table-container col-lg-4">
              	<input id="receipt" class="ember-checkbox ember-view" name="receipt" type="checkbox">
                <span id="receipt_attachement" class="btn btn-attachment file-upload hide">
                    <input name="receipt_attachement" type="file">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm align-text-top action-icons">
                    <path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path>
                    <path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path>
                    </svg> Attachment </span>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Witness Name</label>
              <div class="table-container col-lg-4">
                <input class="ember-text-field ember-view form-control" placeholder="Witness Name" name="witness_name" type="text" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Method of Payment</label>
              <div class="table-container col-lg-4">
                <select class="ember-text-field ember-view form-control" name="method_of_payment" required >
                    @foreach( $payment__ AS $list )
                        <option value="{{$list->name}}" />{{$list->name}}
                    @endforeach
                </select>
                
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Repayment Date</label>
              <div class="table-container col-lg-4">
                <input placeholder="dd MMM yyyy" id="ember433" class="ember-text-field zf-date-picker date-picker ember-view form-control" data-integrity="date" type="date" name="repayment_date" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-lg-2 required">Previous Payable Amount</label>
              <div class="table-container col-lg-4">
                <strong>?? {{$info__->loan_amount + $newloan - $info__->repay - $newrepayment}}</strong>
              </div>
            </div>
          </div>
          <hr class="bdr-light lg">
          <div class="form-group row">
            <label class="col-form-label col-lg-2"> Comments <span id="ember437" class="tooltip-container ember-view"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
              <path d="M255.4 31.9c30.2 0 59.4 5.9 87 17.5 26.6 11.2 50.4 27.4 71 47.9 20.5 20.5 36.6 44.3 47.9 71 11.6 27.6 17.5 56.7 17.5 87s-5.9 59.4-17.5 87c-11.2 26.6-27.4 50.4-47.9 71-20.5 20.5-44.3 36.6-71 47.9-27.6 11.6-56.7 17.5-87 17.5s-59.4-5.9-87-17.5c-26.6-11.2-50.4-27.4-71-47.9-20.5-20.5-36.6-44.3-47.9-71-11.6-27.6-17.5-56.7-17.5-87s5.9-59.4 17.5-87c11.2-26.6 27.4-50.4 47.9-71s44.3-36.6 71-47.9c27.5-11.6 56.7-17.5 87-17.5m0-31.9C114.3 0 0 114.3 0 255.4s114.3 255.4 255.4 255.4 255.4-114.3 255.4-255.4S396.4 0 255.4 0z"></path>
              <path d="M303.4 351.1h-8.2c-4.4 0-8-3.6-8-8v-94.4c0-15.3-11.4-28-26.6-29.7-2.5-.3-4.8-.5-6.7-.5-23.6 0-44.4 11.9-56.8 30l-.1.1v-.1c-1 2-1.7 5.2.7 6.5.6.3 1.2.5 1.8.5h15.9c4.4 0 8 3.6 8 8v79.8c0 4.4-3.6 8-8 8h-8.1c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h96.1c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.9-7.1-16-15.8-16zM255.4 127.7c-17.6 0-31.9 14.3-31.9 31.9s14.3 31.9 31.9 31.9 31.9-14.3 31.9-31.9-14.3-31.9-31.9-31.9z"></path>
              </svg> </span> </label>
            <div class="col-lg-6">
              <textarea rows="2" placeholder="Comments" maxlength="130" id="ember438" class="ember-text-area ember-view form-control" name="comments"  style="resize:none;"></textarea>
            </div>
          </div>
        </div>
        <div class="zb-txn-form">
          <div class="form-group">
            <p> <span>Email To</span> 
            <span id="ember561" class="popover-container ember-view"> <i id="ember562" class="ember-view"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom cursor-pointer text-muted">
            <path d="M255.4 31.9c30.2 0 59.4 5.9 87 17.5 26.6 11.2 50.4 27.4 71 47.9 20.5 20.5 36.6 44.3 47.9 71 11.6 27.6 17.5 56.7 17.5 87s-5.9 59.4-17.5 87c-11.2 26.6-27.4 50.4-47.9 71-20.5 20.5-44.3 36.6-71 47.9-27.6 11.6-56.7 17.5-87 17.5s-59.4-5.9-87-17.5c-26.6-11.2-50.4-27.4-71-47.9-20.5-20.5-36.6-44.3-47.9-71-11.6-27.6-17.5-56.7-17.5-87s5.9-59.4 17.5-87c11.2-26.6 27.4-50.4 47.9-71s44.3-36.6 71-47.9c27.5-11.6 56.7-17.5 87-17.5m0-31.9C114.3 0 0 114.3 0 255.4s114.3 255.4 255.4 255.4 255.4-114.3 255.4-255.4S396.4 0 255.4 0z"></path>
            <path d="M303.4 351.1h-8.2c-4.4 0-8-3.6-8-8v-94.4c0-15.3-11.4-28-26.6-29.7-2.5-.3-4.8-.5-6.7-.5-23.6 0-44.4 11.9-56.8 30l-.1.1v-.1c-1 2-1.7 5.2.7 6.5.6.3 1.2.5 1.8.5h15.9c4.4 0 8 3.6 8 8v79.8c0 4.4-3.6 8-8 8h-8.1c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h96.1c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.9-7.1-16-15.8-16zM255.4 127.7c-17.6 0-31.9 14.3-31.9 31.9s14.3 31.9 31.9 31.9 31.9-14.3 31.9-31.9-14.3-31.9-31.9-31.9z"></path>
            </svg> </i>
            <div id="ember563" class="d-none popover bs-popover-right ember-view popover-help"></div>
            </span>
            </p>
            <div class="font-small">
              <div class="form-check form-check-inline cf-label">
                <input id="a98990017" class="ember-checkbox ember-view form-check-input" name="is_mail" value="1" type="checkbox">
                <label for="a98990017" title="{{$info__->email_address}}" class="form-check-label"> {{$info__->first_name}} ({{$info__->sur_name}}) <&nbsp;{{$info__->email_address}}&nbsp;> </label>
              </div>
              <!--
                     <div><a href="#" data-ember-action="" data-ember-action-565="565">+ Add New</a></div>
                     --> 
            </div>
          </div>
        </div>
        <div class="zb-txn-form">
          <div class="btn-toolbar  fixed-actions fill-container">
            <div id="ember566" class="dropdown ember-view btn-group ">
              <button id="ember569" class="btn btn-secondary ember-view" type="button"> Save and Send </button>
            </div>
            <div id="ember568" class="dropdown ember-view btn-group dropup">
              <button id="ember567" class="btn btn-success ember-view" type="submit"> Save and Send Later </button>
              
              <!--
                     <button id="ember570" class="dropdown-toggle ember-view btn dropdown-toggle-split btn-primary" type="button"></button> 
                     <div id="ember571" class="dropdown-menu ember-view">
                        <button id="ember766" class="ember-view dropdown-item" type="button">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon align-text-bottom icon-sm">
                              <path d="M495 127h-76c-2.2 0-4-1.8-4-4V15c0-8.8-7.2-16-16-16H111c-8.8 0-16 7.2-16 16v108c0 2.2-1.8 4-4 4H15c-8.8 0-16 7.2-16 16v224c0 8.8 7.2 16 16 16h76c2.2 0 4 1.8 4 4l.4 108.6c0 8.8 7.2 15.9 16 15.9h288.1c8.8 0 16-7.2 16-16v-108c0-2.2 1.8-4 4-4l75.6-.4c8.8 0 15.9-7.2 15.9-16V143c0-8.8-7.2-16-16-16zM127 35c0-2.2 1.8-4 4-4h248c2.2 0 4 1.8 4 4v88c0 2.2-1.8 4-4 4H131c-2.2 0-4-1.8-4-4V35zm256.5 440.5c0 2.2-1.8 4-4 4h-248c-2.2 0-4-1.8-4-4v-152c0-2.2 1.8-4 4-4h248c2.2 0 4 1.8 4 4v152zm96-128.5c0 2.2-1.8 4-4 4H419c-2.2 0-4-1.8-4-4v-44c0-8.8-7.2-16-16-16H111c-8.8 0-16 7.2-16 16v44c0 2.2-1.8 4-4 4H35c-2.2 0-4-1.8-4-4V163c0-2.2 1.8-4 4-4l440.5.5c2.2 0 4 1.8 4 4V347z"></path>
                              <path d="M431.6 191.5h-32.3c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h32.3c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8zM303.6 351.5H175.3c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h128.3c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8zM239.6 415.5h-64.3c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h64.3c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8z"></path>
                           </svg>
                           &nbsp;&nbsp;  Save and Print 
                        </button>
                        <button id="ember768" class="ember-view dropdown-item" type="button">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon align-text-bottom icon-sm">
                              <path d="M421.2 329.8c-29.5 0-55.7 14.1-72.3 35.8L181.3 266c.4-3.3.6-6.7.6-10.1 0-3.9-.2-7.7-.7-11.4l165.7-101.3c16.5 23.3 43.7 38.5 74.3 38.5 50.2 0 91-40.8 91-91s-40.8-91-91-91-91 40.8-91 91c0 8.1 1.1 15.9 3 23.3l-162.1 99c-15.3-28.7-45.6-48.2-80.3-48.2-50.2 0-91 40.8-91 91s40.8 91 91 91c35.2 0 65.8-20.1 80.9-49.4l162.4 96.5c-2.6 8.4-4 17.4-4 26.7 0 50.2 40.8 91 91 91s91-40.8 91-91-40.8-90.8-90.9-90.8zm0-298c32.5 0 59 26.5 59 59s-26.5 59-59 59-59-26.5-59-59 26.4-59 59-59zM90.8 315c-32.5 0-59-26.5-59-59s26.5-59 59-59 59 26.5 59 59-26.4 59-59 59zm330.4 164.8c-32.5 0-59-26.5-59-59s26.5-59 59-59 59 26.5 59 59-26.5 59-59 59z"></path>
                           </svg>
                           &nbsp;&nbsp;Save and Share 
                        </button>
                        <button onclick="javascript:formSubmit(1)" id="ember770" class="ember-view dropdown-item" type="button">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon align-text-bottom icon-sm">
                              <path d="M256.3.4C115 .4.5 114.9.5 256.2S115 512 256.3 512s255.8-114.5 255.8-255.8S397.6.4 256.3.4zm158.3 414.1c-20.6 20.6-44.5 36.7-71.1 48-27.6 11.7-56.8 17.6-87.1 17.6-30.3 0-59.5-5.9-87.1-17.6-26.7-11.3-50.6-27.4-71.1-48-20.6-20.6-36.7-44.5-48-71.1-11.7-27.6-17.6-56.9-17.6-87.1 0-30.3 5.9-59.5 17.6-87.1 11.3-26.7 27.4-50.6 48-71.1 20.6-20.6 44.5-36.7 71.1-48 27.6-11.7 56.8-17.6 87.1-17.6 30.3 0 59.5 5.9 87.1 17.6 26.7 11.3 50.6 27.4 71.1 48 20.6 20.6 36.7 44.5 48 71.1 11.7 27.6 17.6 56.9 17.6 87.1s-5.9 59.5-17.6 87.1c-11.4 26.6-27.4 50.5-48 71.1z"></path>
                              <path d="M383 274.5H271V111c0-8.8-7.2-16-16-16s-16 7.2-16 16v179.5c0 8.8 7.2 16 16 16h128c8.8 0 16-7.2 16-16s-7.2-16-16-16z"></path>
                           </svg>
                           &nbsp;&nbsp;Save and Send Later 
                        </button>
                     </div>
                     --> 
            </div>
            <div class="btn-group"> <a href="{{url('borrowers/view')}}/{{$info__->id}}" class="btn btn-primary">Cancel</a> </div>
            
            <!--
                  <div class="line-seperator ml-auto ">
                    
                     <div class="px-4 coll d-inline-block">
                        <div id="ember579" class="ember-view">  Template: <span class="text-muted"><span>'Standard Template'</span> &nbsp; <span class="action-icons font-xs cursor-pointer text-blue" data-ember-action="" data-ember-action-580="580">Change</span></span> </div>
                     </div>
                     <button class="btn btn-link coll d-inline-block" data-ember-action="" data-ember-action-581="581">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon align-text-bottom">
                           <path d="M352 301c-6.6 0-12 5.4-12 12v59H216.1l21.8-22.1c4.7-4.7 4.7-12.3 0-17s-12.3-4.7-17 0l-40.6 42.6c-4.6 4.6-4.7 12-.3 16.7l41.3 44c2.4 2.5 5.6 3.8 8.7 3.8 2.9 0 5.9-1.1 8.2-3.3 4.8-4.5 5.1-12.1.5-17L218.1 397H352c6.6 0 12-4.7 12-11.3V313c0-6.6-5.3-12-12-12zM274.8 272.2c-4.7 4.7-4.7 12.3 0 17 2.3 2.3 5.4 3.5 8.5 3.5s6.1-1.2 8.5-3.5l40.7-40.7c4.6-4.6 4.7-12 .3-16.7l-41.3-44c-4.5-4.8-12.1-5.1-17-.5-4.8 4.5-5.1 12.1-.5 17l22.3 23.8H160c-6.6 0-12 5.4-12 12v70.7c0 6.6 5.4 12 12 12 11.4 0 12-5.4 12-12V252h122.9l-20.1 20.2z"></path>
                           <g>
                              <path d="M442.9 132.3c-.2-.2-.4-.4-.6-.7l-126-126c-.2-.2-.4-.4-.7-.6-2.9-3-7-5-11.6-5H95.8C78.1 0 64 14.3 64 32v448c0 17.7 14.1 32 31.8 32H416c17.7 0 32-14.3 32-32V144c0-4.6-2-8.7-5.1-11.7zM320 54.6l73.2 73.4H336c-8.8 0-16-7.2-16-16V54.6zM416 464c0 8.8-6.7 16-16 16H112c-10.3 0-16.2-7.2-16.2-16V48c0-8.8 7.2-16 16-16H280c4.4 0 8 3.6 8 8v88c0 17.7 14.3 32 32 32h88c4.4 0 8 3.6 8 8v296z"></path>
                           </g>
                        </svg>
                        &nbsp; Make Recurring 
                     </button>
                    
                  </div>
                  --> 
            
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('custom_js') 
<script>
function rightPanelSet() {
    $("#ember772").toggle('hide');
}

$("#ember570").on("click",function(){
    $("#ember571").toggleClass("show");
});

</script> 
@endsection