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
<div id="ember772" class="flyout ember-view  flyout-sm">
   <div id="ember773" class="flyout-header ember-view">
      <div class="section header">
         <a href="javascript:;" class="close-details">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
               <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
            </svg>
         </a>
         <h4 class="text-semibold">Customer Details</h4>
      </div>
   </div>
   <div id="ember775" class="flyout-body contextual-sidebar ember-view">
      <div class="aliceblue-bg p-5 clearfix">
         <div class="float-left">
            <div>
               <strong class="font-xlarge">{{ucwords($info__ -> first_name." (".$info__ -> sur_name.")")}}</strong> 
               <span id="ember776" class="tooltip-container ember-view">
                  <a target="_blank" rel="noreferrer noopener" href="{{url('landers/view/'.$info__->id)}}" class="ember-view">
                     <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xs">
                        <path d="M432 319.3c-17.7 0-32 14.3-32 32v64.3c0 15.3-19.7 32.3-48 32.3l-240 .1c-12.7 0-24.7-5-33.9-14.1C69 424.8 64 412.7 64 400V160c0-26 16.4-48 35.9-48h67.9c17.7 0 32-14.3 32-32s-14.3-32-32-32H99.9C44.8 48 0 98.2 0 160v240c0 29.8 11.7 57.9 32.9 79.1C54.1 500.3 82.2 512 112 512l240-.1c61.8 0 112-43.2 112-96.3v-64.3c0-17.7-14.3-32-32-32z"></path>
                        <path d="M512 52c0-28.7-23.3-52-52-52H344c-17.7 0-32 14.3-32 32s14.3 32 32 32h54.4L202.3 261.5c-12.5 12.5-12.4 32.8.2 45.3 6.2 6.2 14.4 9.3 22.5 9.3 8.2 0 16.5-3.2 22.7-9.5L448 104.9v63.3c0 17.7 14.3 32 32 32s32-14.3 32-32V52z"></path>
                     </svg>
                  </a>
               </span>
            </div>
         </div>
      </div>
      <div class="p-5">
         <div class="row">
            <div class="col-lg-7">
               <div class="text-muted">Outstanding Receivables</div>
               <div class="font-xxlarge pt-2">$0.00</div>
            </div>
            <div class="col-lg-5 text-right">
               <div class="text-muted">Unused Credits</div>
               <div class="font-xxlarge pt-2">$0.00</div>
            </div>
         </div>
         <div id="ember778" class="ember-view accord-title-arrow pt-5">
            <span id="ember779" class="ember-view accord-title text-blue cursor-pointer">
               Other Details 
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xxs align-middle text-blue arrow-down">
                  <path d="M481.6 74.4H30.4c-9.6 0-15.3 10.6-10 18.6l223.3 339.2c4.7 7.2 15.2 7.2 20 .1 39.5-58.8 184.2-274.2 227.8-339.2 5.4-7.9-.3-18.7-9.9-18.7z"></path>
               </svg>
            </span>
            <div id="ember780" class="ember-view collapse show" style="">
               <div class="row pt-5">
                  <label class="col-lg-5 text-muted"> Customer Type </label> 
                  <div class="col-lg-7"> Business </div>
               </div>
               <div class="row pt-2">
                  <label class="col-lg-5 text-muted"> Currency Code </label> 
                  <div class="col-lg-7"> USD </div>
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
                  <div class="col-lg-7"> Zoho Workerly </div>
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
         <i class="close-details separationline" data-ember-action="" data-ember-action-410="410">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
               <path d="M455.2 9.2L256 208.4 56.8 9.2C44.5-3.1 24.6-3.1 12.2 9.2l-2.9 2.9C-3 24.4-3 44.4 9.3 56.7L208.4 256 9.2 455.2c-12.3 12.3-12.3 32.3 0 44.6l2.9 2.9c12.3 12.3 32.3 12.3 44.6 0L256 303.6l199.2 199.2c12.3 12.3 32.3 12.3 44.6 0l2.9-2.9c12.3-12.3 12.3-32.3 0-44.6L303.6 256 502.8 56.8c12.3-12.3 12.3-32.3 0-44.6l-2.9-2.9c-12.5-12.4-32.4-12.4-44.7-.1z"></path>
            </svg>
         </i>
         <h3 class="float-left">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xxlg align-text-bottom">
               <path d="M352 256.1H160c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h192c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8zM352 352H160c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h192c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.7-7.1-15.8-15.8-15.8z"></path>
               <path d="M442.9 132.3c-.2-.2-.4-.4-.6-.7l-126-126c-.2-.2-.4-.4-.7-.6-2.9-3-7-5-11.6-5H96C78.3 0 64 14.3 64 32v448c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V144c0-4.6-2-8.7-5.1-11.7zM320 54.6l73.4 73.4H336c-8.8 0-16-7.2-16-16V54.6zM416 464c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h168c4.4 0 8 3.6 8 8v88c0 17.7 14.3 32 32 32h88c4.4 0 8 3.6 8 8v296z"></path>
            </svg>
            &nbsp; New Invoice
         </h3>
      </div>
      <div class="fill-container row header-separator"></div>
      <form data-integrity-form="invoices/invoice-data">
         <div tabindex="-1" id="ember415" class="no-outline ember-view"></div>
         <div id="ember416" class="ember-view">  </div>
         <div>
            <div class="primary-info grey-bg">
               <div class="zb-txn-form">
                  <div class="form-group">
                     <div class="row">
                        <label class="col-form-label col-lg-2 required">Customer Name</label> 
                        <div class="col-lg-6">
                           <div id="ember417" class="ember-view" data-integrity="customer_id">
                              <div class="ac-box ">
                                 <span class="ac-selected form-control " tabindex="0">
                                    <span data-integrity-label="">Zylker (Sample Client)</span>
                                    <div>
                                       <i class="zf-ac-toggler">
                                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                             <path d="M493.9 227.8c-21.4-21-56.1-21.1-77.6-.3L256 382.9 95.7 227.6c-21.5-20.8-56.3-20.7-77.6.3-10.6 10.4-15.9 24-15.9 37.7 0 13.8 5.4 27.5 16.2 38l199 192.9c21.4 20.7 55.9 20.7 77.3 0l199-192.9c21.4-20.9 21.6-54.8.2-75.8z"></path>
                                          </svg>
                                       </i>
                                    </div>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 px-0 align-middle">
                           <button class="btn btn-primary advance-search-btn" type="button" data-ember-action="" data-ember-action-419="419">
                              <span id="ember420" class="tooltip-container ember-view">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top ">
                                    <path fill="#FFF" d="M421 97C365.3 4 244.4-26.3 151.5 29.4S28.3 205.9 83.9 298.8c49.5 82.6 150.5 115.7 237.5 83l66.3 110.7c10 16.7 31.7 22.1 48.4 12.1 16.7-10 22.1-31.7 12.1-48.4L382 345.6c70-61.4 88.4-166 39-248.6zm-85.6 239.5c-76.4 45.8-175.8 20.8-221.6-55.6S93 105.1 169.4 59.3 345.2 38.5 391 114.9s20.8 175.8-55.6 221.6z"></path>
                                 </svg>
                              </span>
                           </button>
                           <span class="badge badge-success text-semibold">USD</span> 
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-10 offset-lg-2">
                           <div id="ember421" class="ember-view info-item cursor-pointer">
                              <span class="btn-link">
                                 <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-text-bottom">
                                    <path d="M394.8 422h-90c-11 0-20-9-20-20s9-20 20-20h90c11 0 20 9 20 20s-9 20-20 20zm97-145h-187c-11 0-20-9-20-20s9-20 20-20h187c11 0 20 9 20 20s-9 20-20 20zm0-145h-187c-11 0-20-9-20-20s9-20 20-20h187c11 0 20 9 20 20s-9 20-20 20zM227.2 422c-11 0-20-9-20-20v-37.3c0-22.2-22.3-40.3-49.8-40.3H89.8c-27.4 0-49.8 18.1-49.8 40.3V402c0 11-9 20-20 20s-20-9-20-20v-37.3c0-44.3 40.3-80.3 89.8-80.3h67.6c49.5 0 89.8 36 89.8 80.3V402c0 11-8.9 20-20 20zM123.6 244.8C80.8 244.8 46 210 46 167.2s34.8-77.6 77.6-77.6 77.6 34.8 77.6 77.6-34.8 77.6-77.6 77.6zm0-115.1c-20.7 0-37.6 16.9-37.6 37.6 0 20.7 16.8 37.6 37.6 37.6s37.6-16.9 37.6-37.6c0-20.8-16.8-37.6-37.6-37.6z"></path>
                                 </svg>
                                 &nbsp; View Customer Details 
                              </span>
                              <div id="ember422" class="ember-view">
                                 <div id="ember423" class="ember-view"></div>
                              </div>
                           </div>
                           <div id="ember424" class="ember-view"></div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group placeholder-container row">
                     <div class="col-lg-8 offset-lg-2">
                        <div class="row">
                           <div class="col-lg-4">
                              <div id="ember425" class="popovercontainer address-group ember-view">
                                 <div id="ember752" class="ember-view">
                                    <div id="ember753" class="ember-view">
                                       <div class="address-list">
                                          <div><span data-ember-action="" data-ember-action-754="754"> <span class="text-muted text-uppercase font-small"><span>Billing Address</span>&nbsp;&nbsp;&nbsp;<span class="text-blue font-xxs cursor-pointer" href="#">Change</span></span> </span>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <address id="ember427" class="text-muted font-small ember-view">
                                    <strong>Sample Address</strong> 
                                    <div class="preserve-wrap">Sample Street Name</div>
                                    Austin, Texas, 560047<br> United States<br>   
                                 </address>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div id="ember428" class="popovercontainer address-group ember-view">
                                 <div class="text-uppercase text-muted">Shipping Address</div>
                                 <p><a class="font-xs" href="#" data-ember-action="" data-ember-action-429="429">Add new address</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="zb-txn-form">
               <div class="primary-content" id="primary-content">
                  <div class="form-group row">
                     <label class="col-form-label col-lg-2 required">Invoice#</label>  
                     <div class="table-container col-lg-4"> <input tabindex="-1" id="ember430" class="ember-text-field ember-view form-control" data-integrity="invoice_number" type="text">  </div>
                     <i id="ember431" class="tooltip-container form-control-help text-blue ember-view">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
                           <path d="M258.3 149.8c-57.3 0-103.9 46.6-103.9 103.9 0 57.3 46.6 103.9 103.9 103.9s104-46.6 104-103.9c0-57.3-46.6-103.9-104-103.9zm0 175.9c-39.7 0-71.9-32.3-71.9-71.9 0-39.7 32.3-71.9 71.9-71.9 39.7 0 71.9 32.3 71.9 71.9.1 39.6-32.2 71.9-71.9 71.9z"></path>
                           <path d="M491.4 202.9l-38.7-14c-3-9.5-6.6-18.6-10.7-27.1l18.3-38.3c5.6-11.8 3.2-26-6-35.2l-30.5-30.6c-9.3-9.3-23.4-11.7-35.2-6.1l-38.2 18.1c-8.1-3.8-16.7-7.1-27.1-10.3l-14-38.7C304.9 8.5 293.2.4 280.2.4h-43.6c-12.9 0-24.6 8.2-29.1 20.4l-14.1 38.8c-9.7 3.1-18.8 6.7-27.1 10.7l-38.2-18.4c-11.8-5.6-26-3.2-35.2 6L62.1 88.3c-9.3 9.3-11.7 23.5-6 35.3l18 37.8c-5.2 9.8-9.2 18.7-12.2 27l-40.8 14.2C8.6 207 .2 218.7.2 232v43.3c0 13.2 8.4 25 20.7 29.2l40.9 14.3c3.1 8.8 6.9 17.7 11.7 27.1L55.6 384c-5.6 11.9-3.2 26 6.2 35.2L92.6 450c9.2 9.2 23.4 11.7 35.2 6l38.1-18.1c9.7 5.2 18.6 9.2 27.1 12.2l14.2 40.8c4.3 12.5 16 20.8 29.3 20.8h43.3c13.2 0 25-8.4 29.3-20.8l14.2-40.9c8.9-3.1 18-7 27.1-11.7l38.1 17.9c11.8 5.6 26 3.1 35.3-6.2l30.7-30.9c9.2-9.2 11.6-23.3 6-35.2l-18.2-38.4c3.8-8 7.1-16.6 10.3-27.1l38.6-14c12.3-4.3 20.6-16 20.6-29V232c0-13-8.2-24.7-20.4-29.1zm-11.6 71.8l-38.5 14c-9.2 3.3-16.1 10.6-19 19.9v.1c-2.8 9.3-5.7 16.8-8.9 23.5-4.1 8.5-4.2 18.3-.1 26.7l18.2 38.3-29.7 29.9-38-17.9c-8.9-4.1-18.8-4-27.3.5-8 4.1-16 7.6-23.7 10.3-8.9 2.9-16.1 10.1-19.3 19.1l-14.2 40.7h-41.8L223.2 439c-3.1-8.9-10-15.9-19-19-7.3-2.6-15-6.1-23.7-10.7s-19.1-4.8-27.9-.6l-37.9 18-29.9-29.8 17.9-37.9c4.1-8.9 4-18.9-.5-27.3-4.3-8.3-7.7-16.1-10.3-23.9-3.1-8.9-10.2-16-19.1-19.1l-40.6-14.2v-41.8l40.7-14.2c8.9-3.1 15.9-10 19-18.9 2.5-7 6-14.7 10.7-23.5 4.6-8.6 4.9-19 .6-27.9l-18-37.8L115 80.9l38 18.3c8.5 4.1 18.6 4 27.1-.2 7.1-3.5 15.1-6.6 23.6-9.3 9-2.9 16.3-9.9 19.6-19l14-38.5h42.1l13.9 38.4c3.3 9.2 10.6 16.1 19.9 19h.1c9.2 2.8 16.6 5.6 23.4 8.9 8.6 4.1 18.3 4.1 26.8.1l38-18 29.5 29.6-18.2 38-.1.2c-4 8.7-4 18.5.2 26.9 3.6 7.4 6.7 15.3 9.3 23.5 2.7 9 9.8 16.4 18.9 19.8l38.5 14v42.1z"></path>
                        </svg>
                     </i>
                     <div> </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-form-label col-lg-2"> Order Number </label> 
                     <div class="col-lg-4"><input id="ember432" class="ember-text-field ember-view form-control" type="text"></div>
                  </div>
                  <div class="form-group row">
                     <label class="col-form-label col-lg-2 required">Invoice Date</label> 
                     <div class="col-lg-4"><input placeholder="dd MMM yyyy" id="ember433" class="ember-text-field zf-date-picker date-picker ember-view form-control" data-integrity="date" type="text">  </div>
                     <div class="col-lg-1">
                        <p class="form-control-plaintext">Terms</p>
                     </div>
                     <div class="col-lg-2">
                        <div id="ember434" class="ember-view">
                           <div class="ac-box ">
                              <span class="ac-selected form-control " tabindex="0">
                                 <span data-integrity-label="">Due on Receipt</span>
                                 <div>
                                    <i class="zf-ac-toggler">
                                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                          <path d="M493.9 227.8c-21.4-21-56.1-21.1-77.6-.3L256 382.9 95.7 227.6c-21.5-20.8-56.3-20.7-77.6.3-10.6 10.4-15.9 24-15.9 37.7 0 13.8 5.4 27.5 16.2 38l199 192.9c21.4 20.7 55.9 20.7 77.3 0l199-192.9c21.4-20.9 21.6-54.8.2-75.8z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-1">
                        <p class="form-control-plaintext">Due Date</p>
                     </div>
                     <div class="col-lg-2 badge-editable">
                        <input placeholder="dd MMM yyyy" id="ember435" class="ember-text-field zf-date-picker date-picker ember-view form-control editable" type="text"> 
                        <div class="text-danger d-none" style="clear: both;"> Choose a due date on or after the invoice date. </div>
                     </div>
                  </div>
                  <hr class="bdr-light xlg">
                  <div class="form-group row">
                     <label class="col-form-label col-lg-2 ">Salesperson</label> 
                     <div class="col-lg-4">
                        <div id="ember436" class="ember-view" data-integrity="salesperson_id">
                           <div class="ac-box ">
                              <span class="ac-selected form-control " tabindex="0">
                                 <span class="text-muted">  Select or Add Salesperson  </span>
                                 <div>
                                    <i class="zf-ac-toggler">
                                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                          <path d="M493.9 227.8c-21.4-21-56.1-21.1-77.6-.3L256 382.9 95.7 227.6c-21.5-20.8-56.3-20.7-77.6.3-10.6 10.4-15.9 24-15.9 37.7 0 13.8 5.4 27.5 16.2 38l199 192.9c21.4 20.7 55.9 20.7 77.3 0l199-192.9c21.4-20.9 21.6-54.8.2-75.8z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row"> </div>
               </div>
               <hr class="bdr-light lg">
               <div class="form-group row">
                  <label class="col-form-label col-lg-2">
                     Subject&nbsp; 
                     <span id="ember437" class="tooltip-container ember-view">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
                           <path d="M255.4 31.9c30.2 0 59.4 5.9 87 17.5 26.6 11.2 50.4 27.4 71 47.9 20.5 20.5 36.6 44.3 47.9 71 11.6 27.6 17.5 56.7 17.5 87s-5.9 59.4-17.5 87c-11.2 26.6-27.4 50.4-47.9 71-20.5 20.5-44.3 36.6-71 47.9-27.6 11.6-56.7 17.5-87 17.5s-59.4-5.9-87-17.5c-26.6-11.2-50.4-27.4-71-47.9-20.5-20.5-36.6-44.3-47.9-71-11.6-27.6-17.5-56.7-17.5-87s5.9-59.4 17.5-87c11.2-26.6 27.4-50.4 47.9-71s44.3-36.6 71-47.9c27.5-11.6 56.7-17.5 87-17.5m0-31.9C114.3 0 0 114.3 0 255.4s114.3 255.4 255.4 255.4 255.4-114.3 255.4-255.4S396.4 0 255.4 0z"></path>
                           <path d="M303.4 351.1h-8.2c-4.4 0-8-3.6-8-8v-94.4c0-15.3-11.4-28-26.6-29.7-2.5-.3-4.8-.5-6.7-.5-23.6 0-44.4 11.9-56.8 30l-.1.1v-.1c-1 2-1.7 5.2.7 6.5.6.3 1.2.5 1.8.5h15.9c4.4 0 8 3.6 8 8v79.8c0 4.4-3.6 8-8 8h-8.1c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h96.1c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.9-7.1-16-15.8-16zM255.4 127.7c-17.6 0-31.9 14.3-31.9 31.9s14.3 31.9 31.9 31.9 31.9-14.3 31.9-31.9-14.3-31.9-31.9-31.9z"></path>
                        </svg>
                     </span>
                  </label>
                  <div class="col-lg-6"><textarea rows="1" placeholder="Let your customer know what this Invoice is for" maxlength="250" id="ember438" class="ember-text-area ember-view form-control"></textarea></div>
               </div>
            </div>
            <div class="fill-container line-item-section item-table-width">
               <div class="zb-txn-form">
                  <hr class="bdr-light lg">
                  <button class="btn btn-link font-small float-right " type="button" data-ember-action="" data-ember-action-439="439">
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-top">
                        <path d="M258.3 149.8c-57.3 0-103.9 46.6-103.9 103.9 0 57.3 46.6 103.9 103.9 103.9s104-46.6 104-103.9c0-57.3-46.6-103.9-104-103.9zm0 175.9c-39.7 0-71.9-32.3-71.9-71.9 0-39.7 32.3-71.9 71.9-71.9 39.7 0 71.9 32.3 71.9 71.9.1 39.6-32.2 71.9-71.9 71.9z"></path>
                        <path d="M491.4 202.9l-38.7-14c-3-9.5-6.6-18.6-10.7-27.1l18.3-38.3c5.6-11.8 3.2-26-6-35.2l-30.5-30.6c-9.3-9.3-23.4-11.7-35.2-6.1l-38.2 18.1c-8.1-3.8-16.7-7.1-27.1-10.3l-14-38.7C304.9 8.5 293.2.4 280.2.4h-43.6c-12.9 0-24.6 8.2-29.1 20.4l-14.1 38.8c-9.7 3.1-18.8 6.7-27.1 10.7l-38.2-18.4c-11.8-5.6-26-3.2-35.2 6L62.1 88.3c-9.3 9.3-11.7 23.5-6 35.3l18 37.8c-5.2 9.8-9.2 18.7-12.2 27l-40.8 14.2C8.6 207 .2 218.7.2 232v43.3c0 13.2 8.4 25 20.7 29.2l40.9 14.3c3.1 8.8 6.9 17.7 11.7 27.1L55.6 384c-5.6 11.9-3.2 26 6.2 35.2L92.6 450c9.2 9.2 23.4 11.7 35.2 6l38.1-18.1c9.7 5.2 18.6 9.2 27.1 12.2l14.2 40.8c4.3 12.5 16 20.8 29.3 20.8h43.3c13.2 0 25-8.4 29.3-20.8l14.2-40.9c8.9-3.1 18-7 27.1-11.7l38.1 17.9c11.8 5.6 26 3.1 35.3-6.2l30.7-30.9c9.2-9.2 11.6-23.3 6-35.2l-18.2-38.4c3.8-8 7.1-16.6 10.3-27.1l38.6-14c12.3-4.3 20.6-16 20.6-29V232c0-13-8.2-24.7-20.4-29.1zm-11.6 71.8l-38.5 14c-9.2 3.3-16.1 10.6-19 19.9v.1c-2.8 9.3-5.7 16.8-8.9 23.5-4.1 8.5-4.2 18.3-.1 26.7l18.2 38.3-29.7 29.9-38-17.9c-8.9-4.1-18.8-4-27.3.5-8 4.1-16 7.6-23.7 10.3-8.9 2.9-16.1 10.1-19.3 19.1l-14.2 40.7h-41.8L223.2 439c-3.1-8.9-10-15.9-19-19-7.3-2.6-15-6.1-23.7-10.7s-19.1-4.8-27.9-.6l-37.9 18-29.9-29.8 17.9-37.9c4.1-8.9 4-18.9-.5-27.3-4.3-8.3-7.7-16.1-10.3-23.9-3.1-8.9-10.2-16-19.1-19.1l-40.6-14.2v-41.8l40.7-14.2c8.9-3.1 15.9-10 19-18.9 2.5-7 6-14.7 10.7-23.5 4.6-8.6 4.9-19 .6-27.9l-18-37.8L115 80.9l38 18.3c8.5 4.1 18.6 4 27.1-.2 7.1-3.5 15.1-6.6 23.6-9.3 9-2.9 16.3-9.9 19.6-19l14-38.5h42.1l13.9 38.4c3.3 9.2 10.6 16.1 19.9 19h.1c9.2 2.8 16.6 5.6 23.4 8.9 8.6 4.1 18.3 4.1 26.8.1l38-18 29.5 29.6-18.2 38-.1.2c-4 8.7-4 18.5.2 26.9 3.6 7.4 6.7 15.3 9.3 23.5 2.7 9 9.8 16.4 18.9 19.8l38.5 14v42.1z"></path>
                     </svg>
                     &nbsp;Bulk Update Line Items 
                  </button>
                  <div class="form-group font-xs ">
                     <div class="float-right d-none">
                        <div class="row">
                           <div id="ember440" class="ember-view col-lg-12">
                              <div class="text-right txn-exrate float-right" style="position:relative">
                                 <div class="text-muted ">As on 21 Jul 2021,</div>
                                 <div>
                                    1 USD = 0 USD 
                                    <a href="#" data-ember-action="" data-ember-action-441="441">
                                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-xs">
                                          <path d="M469.6 42.4C420.9-6.2 382.3-.2 378.1.7l-4.8 1L42.1 332.8c-3.4 3.4-5.8 7.8-6.8 12.5L1.3 506c-.6 2.8 1.9 5.3 4.7 4.7l160.7-34.1c4.7-1 9.1-3.4 12.5-6.8l331.2-331.2.9-4.9c.9-4.1 6.7-42.8-41.7-91.3zM43.2 464l20.2-95.2c.5-2.3 2.8-3.7 5.1-3 12.4 3.9 29.7 12 46.3 28.6 17.1 17.1 26 35.8 30.5 49.2.8 2.3-.6 4.7-3 5.2l-94.4 20c-2.8.6-5.3-1.9-4.7-4.8zm135.6-39.4c-2 2-5.4 1.3-6.5-1.3-6.5-15.6-17.1-34.3-34.6-51.8C121.2 355 104 345 89.4 339c-2.6-1.1-3.3-4.5-1.3-6.5l150.8-150.8 95.5-95.5c1-1 2.3-1.4 3.7-1.1 11.8 2.5 34.1 9.9 55.1 30.9 21.4 21.4 29.9 45.4 33.2 58.2.3 1.4 0 2.8-1 3.8l-95.1 95.1-151.5 151.5zm278.4-278.4c-2 2-5.4 1.3-6.5-1.3-6.5-15.6-17.1-34.3-34.6-51.8-16.5-16.5-33.7-26.5-48.3-32.5-2.6-1.1-3.3-4.5-1.3-6.5L387 33.7c.9-.9 2-1.3 3.2-1.2 9.8 1 30.3 6.6 56.5 32.8 26.2 26.2 31.8 46.8 32.8 56.5.1 1.2-.3 2.4-1.2 3.2l-21.1 21.2z"></path>
                                       </svg>
                                    </a>
                                 </div>
                                 <div id="ember442" class="popover-container ember-view">
                                    <div id="ember443" class="d-none popover bs-popover-bottom ember-view pop-over-div"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-scroll-element="">
                     <table class="line-item-table line-item-table-light " id="lineitems-section">
                        <thead class="line-item-header invoice-nodiscount line-item-us">
                           <tr>
                              <th class="drag-icon-container"></th>
                              <th class="line-item-column over-flow" colspan="1">Item Details</th>
                              <th class="line-item-column over-flow item-qty text-right ">Quantity</th>
                              <th class="line-item-column over-flow item-rate text-right ">Rate</th>
                              <th class="line-item-column  item-amount text-right ">
                                 Amount
                                 <div id="ember760" class="item-actions-container ember-view">
                                    <div class="item-actions" style="right: -32px;">
                                       <span id="ember761" class="dropdown ember-view">
                                          <a id="ember762" class="dropdown-toggle no-caret ember-view">
                                             <svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-blue">
                                                <path d="M162 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32M256 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32M350 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32" id="Path"></path>
                                                <path d="M256 480c123.712 0 224-100.288 224-224S379.712 32 256 32 32 132.288 32 256s100.288 224 224 224zm0 32C114.615 512 0 397.385 0 256S114.615 0 256 0s256 114.615 256 256-114.615 256-256 256z" id="Oval-1"></path>
                                             </svg>
                                          </a>
                                          <div id="ember763" class="dropdown-menu dropdown-menu-right ember-view"><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-764="764"> Show All Additional Information </button></div>
                                       </span>
                                    </div>
                                 </div>
                              </th>
                           </tr>
                        </thead>
                        <tbody id="ember454" class="ember-view line-item-body invoice-nodiscount ">
                           <tr draggable="true" id="ember456" class="ember-view line-item new-line-item  line-item-us  ">
                              <td class="drag-icon-container">
                                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-drag align-text-bottom">
                                    <circle cx="153.6" cy="451" r="61"></circle>
                                    <circle cx="153.6" cy="256" r="61"></circle>
                                    <circle cx="153.6" cy="61" r="61"></circle>
                                    <circle cx="358.4" cy="256" r="61"></circle>
                                    <circle cx="358.4" cy="61" r="61"></circle>
                                    <circle cx="358.4" cy="451" r="61"></circle>
                                 </svg>
                              </td>
                              <td id="ember458" class="line-item-column item-details ember-view">
                                 <div>
                                    <span class="item-field float-left">
                                       <div id="ember459" class="item-autocomplete ember-view" data-integrity="line_items.0.item_id">
                                          <div>
                                             <textarea placeholder="Type or click to select an item." id="ember460" class="zb-invoice-item-textarea ember-text-area form-control item-description ember-view"></textarea>
                                          </div>
                                       </div>
                                    </span>
                                 </div>
                              </td>
                              <td id="ember461" class="line-item-column item-qty ember-view">
                                 <div>
                                    <input id="ember462" class="ember-text-field text-right ember-view form-control qty-field" data-integrity="line_items.0.quantity" type="text"> 
                                    <div id="ember463" class="ember-view">
                                       <div class="font-xs text-right px-3">    </div>
                                    </div>
                                 </div>
                              </td>
                              <td id="ember464" class="line-item-column item-rate ember-view">
                                 <div> <input id="ember465" class="ember-text-field text-right ember-view form-control" data-integrity="line_items.0.rate" type="text">    </div>
                              </td>
                              <td id="ember467" class="line-item-column item-tax d-none  ember-view">
                                 <div>
                                    <div id="ember468" class="tax-select ember-view">
                                       <span>
                                          <div id="ember469" class="ember-view">
                                             <div class="ac-box ">
                                                <span class="ac-selected form-control " tabindex="0">
                                                   <span class="text-muted">  Select a Tax  </span>
                                                   <div>
                                                      <i class="zf-ac-toggler">
                                                         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                                            <path d="M493.9 227.8c-21.4-21-56.1-21.1-77.6-.3L256 382.9 95.7 227.6c-21.5-20.8-56.3-20.7-77.6.3-10.6 10.4-15.9 24-15.9 37.7 0 13.8 5.4 27.5 16.2 38l199 192.9c21.4 20.7 55.9 20.7 77.3 0l199-192.9c21.4-20.9 21.6-54.8.2-75.8z"></path>
                                                         </svg>
                                                      </i>
                                                   </div>
                                                </span>
                                             </div>
                                          </div>
                                       </span>
                                    </div>
                                    <div class="txn-salestax text-muted container">
                                       <div id="ember470" class="popover-container ember-view">
                                          <div id="ember471" class="d-none popover bs-popover-bottom ember-view pop-over-div"></div>
                                       </div>
                                    </div>
                                    <div id="ember472" class="left-right-space ember-view"></div>
                                 </div>
                              </td>
                              <td id="ember473" class="line-item-column item-amount text-right ember-view">
                                 <div>
                                    0.00  
                                    <div class="item-actions-container">
                                       <div class="item-actions">
                                          <span id="ember474" class="dropdown ember-view">
                                             <a id="ember475" class="dropdown-toggle no-caret ember-view">
                                                <svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-blue">
                                                   <path d="M162 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32M256 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32M350 224c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32" id="Path"></path>
                                                   <path d="M256 480c123.712 0 224-100.288 224-224S379.712 32 256 32 32 132.288 32 256s100.288 224 224 224zm0 32C114.615 512 0 397.385 0 256S114.615 0 256 0s256 114.615 256 256-114.615 256-256 256z" id="Oval-1"></path>
                                                </svg>
                                             </a>
                                             <div id="ember476" class="dropdown-menu dropdown-menu-right ember-view">
                                                <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-477="477"> Show Additional Information </button> 
                                                <div class="dropdown-divider"></div>
                                                <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-478="478">Clone</button>
                                             </div>
                                          </span>
                                          <span class="action" data-ember-action="" data-ember-action-479="479">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm icon-cancel-circled">
                                                <path d="M256 32c30.3 0 59.6 5.9 87.2 17.6 26.7 11.3 50.6 27.4 71.2 48s36.7 44.5 48 71.2c11.7 27.6 17.6 56.9 17.6 87.2s-5.9 59.6-17.6 87.2c-11.3 26.7-27.4 50.6-48 71.2s-44.5 36.7-71.2 48C315.6 474.1 286.3 480 256 480s-59.6-5.9-87.2-17.6c-26.7-11.3-50.6-27.4-71.2-48s-36.7-44.5-48-71.2C37.9 315.6 32 286.3 32 256s5.9-59.6 17.6-87.2c11.3-26.7 27.4-50.6 48-71.2s44.5-36.7 71.2-48C196.4 37.9 225.7 32 256 32m0-32C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0z"></path>
                                                <path d="M284.3 250.3l62.3-62.3c6.2-6.2 6.2-16.2 0-22.4l-.2-.2c-6.2-6.2-16.2-6.2-22.4 0l-62.3 62.3c-3.1 3.1-8.2 3.1-11.3 0L188 165.4c-6.2-6.2-16.2-6.2-22.4 0l-.2.2c-6.2 6.2-6.2 16.2 0 22.4l62.3 62.3c3.1 3.1 3.1 8.2 0 11.3L165.4 324c-6.2 6.2-6.2 16.2 0 22.4l.2.2c6.2 6.2 16.2 6.2 22.4 0l62.3-62.3c3.1-3.1 8.2-3.1 11.3 0l62.3 62.3c6.2 6.2 16.2 6.2 22.4 0l.2-.2c6.2-6.2 6.2-16.2 0-22.4l-62.3-62.3c-3-3.2-3-8.2.1-11.4z"></path>
                                             </svg>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="row ">
                     <div class="add-line-item col-lg-5 d-flex flex-column">
                        <div id="ember481" class="dropdown ember-view btn-group line-seperator align-self-start add-line-item-btn">
                           <a class="btn btn-md" href="#" data-ember-action="" data-ember-action-482="482">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon align-middle" style="color: #188dfa">
                                 <path d="M256 15C122.9 15 15 122.9 15 256s107.9 241 241 241 241-107.9 241-241S389.1 15 256 15zm122 263H278v100c0 12.2-9.8 22-22 22s-22-9.8-22-22V278H134c-12.2 0-22-9.8-22-22s9.8-22 22-22h100V134c0-12.2 9.8-22 22-22s22 9.8 22 22v100h100c12.2 0 22 9.8 22 22s-9.8 22-22 22z"></path>
                                 <path fill="#FFF" d="M378 234H278V134c0-12.2-9.8-22-22-22s-22 9.8-22 22v100H134c-12.2 0-22 9.8-22 22s9.8 22 22 22h100v100c0 12.2 9.8 22 22 22s22-9.8 22-22V278h100c12.2 0 22-9.8 22-22s-9.8-22-22-22z"></path>
                              </svg>
                              Add another line 
                           </a>
                           <a id="ember483" class="dropdown-toggle ember-view add-line-item-separator"></a> 
                           <div id="ember484" class="dropdown-menu ember-view"> <button class="dropdown-item text-capitalize" type="button" data-ember-action="" data-ember-action-487="487"> Add items in bulk </button><button class="dropdown-item text-capitalize" type="button" data-ember-action="" data-ember-action-489="489"> Add Item Header </button>  
                           </div>
                        </div>
                        <div class="pt-7 mt-auto">
                           <div class="mb-2">Customer Notes</div>
                           <div>
                              <textarea rows="2" id="ember492" class="ember-text-area ember-view form-control"></textarea>
                              <div class="form-check form-check-inline d-none"> <input id="abae78522" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="abae78522" class="form-check-label"><span class="hightlight">Use this in future.</span></label> </div>
                              <small class="form-text font-weight-light "> Will be displayed on the invoice </small>
                           </div>
                        </div>
                     </div>
                     <div class="total-section ml-auto invoice-discount col-lg-6 mt-5 rounded-xlg mr-4 grey-bg" id="total-section">
                        <div id="ember493" class="ember-view">
                           <div id="ember494" class="ember-view">
                              <div id="ember495" class="ember-view collapse show" style="">
                                 <div class="total-row sub-total  mt-3">
                                    <div class="total-label"> Sub Total <br>  </div>
                                    <div class="total-amount">  0.00  </div>
                                 </div>
                                 <div class="total-row">
                                    <div class="total-label">
                                       <div class="row">
                                          <div class="col-lg-5 col-sm-5 col-5">
                                             <div class="form-control-plaintext"> Discount    </div>
                                          </div>
                                          <div class="col-lg-5 col-sm-5 col-5">
                                             <div id="ember496" class="input-group ember-view">
                                                <input id="ember497" class="ember-text-field text-right ember-view form-control text-right" type="text">  
                                                <div id="ember498" class="dropdown ember-view input-group-append">
                                                   <button id="ember499" class="dropdown-toggle ember-view btn btn-secondary discount-btn" type="button"> $ </button> 
                                                   <div id="ember500" class="dropdown-menu dropdown-menu-right ember-view"><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-501="501">%</button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-502="502">$</button></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="total-amount" style="line-height: 2;"><span> 0.00 </span></div>
                                 </div>
                                 <div id="ember503" class="ember-view">
                                    <div class="table-row">
                                       <div class="total-row">
                                          <div class="total-label">
                                             <div class="row">
                                                <div class="col-lg-5 col-sm-5 col-5">
                                                   <div class="form-control-plaintext"> Shipping Charges  </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4"><input id="ember504" class="ember-text-field text-right ember-view form-control" type="text">  </div>
                                                <span id="ember506" class="popover-container ember-view">
                                                   <i id="ember507" class="ember-view popover-help-trigger">
                                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom cursor-pointer text-muted">
                                                         <path d="M317.1 147.5c-15.1-13.8-35.5-20.8-60.5-20.8-23.7 0-43.1 6.5-57.7 19.4-14.6 12.9-23.5 31.5-26.4 55.5l-.6 4.9 40.4 4.8.7-4.6c2.5-15.8 7.7-27.5 15.4-34.7 7.7-7.2 17.1-10.7 28.7-10.7 12 0 21.9 3.9 30.1 11.9 8.2 8 12.2 16.9 12.2 27.3 0 5.6-1.3 10.7-4 15.4-2.8 4.9-9.3 11.9-19.3 20.7-10.7 9.4-17.9 16.5-22.1 21.5-5.8 7-10 14-12.6 20.8-3.5 9.1-5.3 19.9-5.3 32.3 0 2.1.1 5.1.2 9l.1 4.7h38.4l.1-4.8c.3-14.3 1.4-21.4 2.3-24.7 1.3-4.7 3.2-8.8 5.9-12.5 2.8-3.8 9-10 18.5-18.4 15.1-13.4 25.1-24.6 30.4-34.2 5.4-9.7 8.1-20.4 8.1-31.9 0-19.9-7.7-37-23-50.9zM256.3 385.3c12.1 0 22-9.8 22-22 0-12.1-9.8-22-22-22-12.1 0-22 9.8-22 22s9.8 22 22 22z"></path>
                                                         <path d="M437.4 74.6C388.9 26.1 324.5-.5 256-.5S123.1 26.2 74.6 74.6C26.1 123.1-.5 187.5-.5 256s26.7 132.9 75.1 181.4c48.5 48.5 112.9 75.1 181.4 75.1s132.9-26.7 181.4-75.1c48.5-48.5 75.1-112.9 75.1-181.4s-26.6-132.9-75.1-181.4zm-22.6 340.2c-42.4 42.4-98.8 65.8-158.8 65.8s-116.4-23.4-158.8-65.8C54.8 372.4 31.5 316 31.5 256S54.8 139.6 97.2 97.2C139.6 54.8 196 31.5 256 31.5s116.4 23.4 158.8 65.8c42.4 42.4 65.8 98.8 65.8 158.8s-23.4 116.3-65.8 158.7z"></path>
                                                      </svg>
                                                   </i>
                                                   <div id="ember508" class="d-none popover bs-popover-top ember-view popover-help"></div>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="total-amount" style="line-height: 2"> 0.00 </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="ember509" class="ember-view"></div>
                                 <div class="table-row">
                                    <div class="total-row">
                                       <div class="badge-editable total-label">
                                          <div class="row">
                                             <div class="col-lg-5 col-sm-5 col-5"><input id="ember510" class="ember-text-field ember-view form-control editable" type="text"></div>
                                             <div class="col-lg-4 col-sm-4 col-4"><input id="ember511" class="ember-text-field text-right ember-view form-control" type="text"></div>
                                             <span id="ember513" class="popover-container ember-view">
                                                <i id="ember514" class="ember-view popover-help-trigger">
                                                   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom cursor-pointer text-muted">
                                                      <path d="M317.1 147.5c-15.1-13.8-35.5-20.8-60.5-20.8-23.7 0-43.1 6.5-57.7 19.4-14.6 12.9-23.5 31.5-26.4 55.5l-.6 4.9 40.4 4.8.7-4.6c2.5-15.8 7.7-27.5 15.4-34.7 7.7-7.2 17.1-10.7 28.7-10.7 12 0 21.9 3.9 30.1 11.9 8.2 8 12.2 16.9 12.2 27.3 0 5.6-1.3 10.7-4 15.4-2.8 4.9-9.3 11.9-19.3 20.7-10.7 9.4-17.9 16.5-22.1 21.5-5.8 7-10 14-12.6 20.8-3.5 9.1-5.3 19.9-5.3 32.3 0 2.1.1 5.1.2 9l.1 4.7h38.4l.1-4.8c.3-14.3 1.4-21.4 2.3-24.7 1.3-4.7 3.2-8.8 5.9-12.5 2.8-3.8 9-10 18.5-18.4 15.1-13.4 25.1-24.6 30.4-34.2 5.4-9.7 8.1-20.4 8.1-31.9 0-19.9-7.7-37-23-50.9zM256.3 385.3c12.1 0 22-9.8 22-22 0-12.1-9.8-22-22-22-12.1 0-22 9.8-22 22s9.8 22 22 22z"></path>
                                                      <path d="M437.4 74.6C388.9 26.1 324.5-.5 256-.5S123.1 26.2 74.6 74.6C26.1 123.1-.5 187.5-.5 256s26.7 132.9 75.1 181.4c48.5 48.5 112.9 75.1 181.4 75.1s132.9-26.7 181.4-75.1c48.5-48.5 75.1-112.9 75.1-181.4s-26.6-132.9-75.1-181.4zm-22.6 340.2c-42.4 42.4-98.8 65.8-158.8 65.8s-116.4-23.4-158.8-65.8C54.8 372.4 31.5 316 31.5 256S54.8 139.6 97.2 97.2C139.6 54.8 196 31.5 256 31.5s116.4 23.4 158.8 65.8c42.4 42.4 65.8 98.8 65.8 158.8s-23.4 116.3-65.8 158.7z"></path>
                                                   </svg>
                                                </i>
                                                <div id="ember515" class="d-none popover bs-popover-top ember-view popover-help"></div>
                                             </span>
                                          </div>
                                       </div>
                                       <div class="total-amount " style="line-height: 2"> 0.00 </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="total-row gross-total mb-3  ">
                                 <div class="total-label"> Total ( $ )  </div>
                                 <div class="total-amount ">  0.00  </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="fill-container txn-bottom-form grey-bg mt-4">
               <div class="zb-txn-form">
                  <div class="row seperator-col">
                     <div class="col-lg-8 coll">
                        <div class="form-group">
                           <div class="mb-2">Terms &amp; Conditions</div>
                           <div>
                              <textarea rows="4" placeholder="Enter the terms and conditions of your business to be displayed in your transaction" id="ember516" class="ember-text-area ember-view form-control"></textarea>
                              <div class="form-check form-check-inline d-none"> <input id="ae1f25a98" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="ae1f25a98" class="form-check-label"><span class="hightlight">Use this in future.</span></label> </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 coll">
                        <div id="ember517" class="form-group ember-view">
                           <p class="form-control-plaintext">
                           <div><span class="font-xs">Attach File(s) to Invoice</span></div>
                           <div id="ember518" class="dropdown ember-view btn-group mt-2">
                              <span class="btn btn-attachment file-upload">
                                 <input multiple="" accept="image/gif,image/jpeg,image/png,image/bmp,application/pdf,application/doc, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/xml, text/csv, .xml, text/xml" id="ember519" class="upload ember-view" type="file"> 
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm align-text-top action-icons">
                                    <path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path>
                                    <path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path>
                                 </svg>
                              </span>
                              <button id="ember520" class="dropdown-toggle ember-view btn btn-attachment" type="button"> Upload File </button> 
                              <div id="ember521" class="dropdown-menu ember-view text-left"><button class="file-upload dropdown-item" type="button"><input multiple="" accept="image/gif,image/jpeg,image/png,image/bmp,application/pdf,application/doc, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/xml, text/csv, .xml, text/xml" id="ember522" class="upload ember-view" type="file"> Attach from Desktop </button> <button class="dropdown-item" type="button" data-ember-action="" data-ember-action-523="523">Attach from Cloud</button><button class="dropdown-item" type="button" data-ember-action="" data-ember-action-524="524">Attach from Documents</button> </div>
                           </div>
                           </p> 
                           <div>
                              <div>
                                 <div><small class="text-muted">  You can upload a maximum of 10 files, 5MB each  </small></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <hr class="md">
                        <div class="form-group">
                           <div id="ember525" class="d-none ember-view">
                              <div class="modal-backdrop show"></div>
                              <div class="loader bank-loader">
                                 <h4></h4>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;"></div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <p class="clearfix">
                                 Want to get paid faster?  
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 262 162" class="icon icon-xlg align-bottom">
                                    <ellipse fill="#FF5F00" cx="130.4" cy="81.2" rx="30.1" ry="62.3"></ellipse>
                                    <path fill="#EB001B" d="M100.3 81.2c0-25.3 11.9-47.7 30.1-62.3C117 8.4 100 2 81.6 2 37.8 2 2.4 37.4 2.4 81.2c0 43.8 35.4 79.2 79.2 79.2 18.5 0 35.4-6.4 48.8-16.9-18.5-14.6-30.1-37.2-30.1-62.3z"></path>
                                    <path fill="#F79E1B" d="M179.2 2c-18.5 0-35.4 6.4-48.8 16.9 18.3 14.5 30.1 37 30.1 62.3 0 25.3-11.7 47.7-30.1 62.3 13.4 10.6 30.4 16.9 48.8 16.9 43.8 0 79.2-35.4 79.2-79.2C258.4 37.4 223 2 179.2 2z"></path>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 170" class="icon icon-xlg align-bottom">
                                    <linearGradient id="payment-option-visa-1" gradientUnits="userSpaceOnUse" x1="1.735" y1="1.521" x2="2.751" y2="1.521" gradientTransform="rotate(-20.218 -987.747 2450.033) scale(447.2655)">
                                       <stop offset="0" stop-color="#222357"></stop>
                                       <stop offset="1" stop-color="#254aa5"></stop>
                                    </linearGradient>
                                    <path fill="url(#payment-option-visa-1)" d="M307.2 49.6c.1-5.7 5.5-11.7 17.4-13.2 5.9-.8 22-1.3 40.3 7.1l7.2-33.5c-9.9-3.6-22.5-7-38.3-7-40.4 0-68.9 21.4-69.1 52.2-.3 22.8 20.3 35.5 35.8 43 16 7.7 21.2 12.7 21.2 19.6-.1 10.6-12.7 15.2-24.5 15.4-20.5.3-32.5-5.6-42-10l-7.4 34.6c9.6 4.4 27.1 8.2 45.4 8.4 43 0 71-21.2 71.2-54.1.2-41.5-57.6-43.9-57.2-62.5z"></path>
                                    <linearGradient id="payment-option-visa-2" gradientUnits="userSpaceOnUse" x1="1.735" y1="1.33" x2="2.751" y2="1.33" gradientTransform="rotate(-20.218 -987.747 2450.033) scale(447.2655)">
                                       <stop offset="0" stop-color="#222357"></stop>
                                       <stop offset="1" stop-color="#254aa5"></stop>
                                    </linearGradient>
                                    <path fill="url(#payment-option-visa-2)" d="M152.4 6l-42.7 107.5L92.4 22c-2-10.2-10-16-18.9-16H4l-1 4.5c14.3 3.1 30.5 8 40.3 13.4 6 3.3 7.7 5.9 9.8 13.7l32.6 125.9h43.2L195.1 6h-42.7z"></path>
                                    <linearGradient id="payment-option-visa-3" gradientUnits="userSpaceOnUse" x1="1.736" y1="1.446" x2="2.75" y2="1.446" gradientTransform="rotate(-20.218 -987.747 2450.033) scale(447.2655)">
                                       <stop offset="0" stop-color="#222357"></stop>
                                       <stop offset="1" stop-color="#254aa5"></stop>
                                    </linearGradient>
                                    <path fill="url(#payment-option-visa-3)" d="M212.7 6l-33.8 157.4h40.8L253.6 6z"></path>
                                    <linearGradient id="payment-option-visa-4" gradientUnits="userSpaceOnUse" x1="1.736" y1="1.644" x2="2.751" y2="1.644" gradientTransform="rotate(-20.218 -987.747 2450.033) scale(447.2655)">
                                       <stop offset="0" stop-color="#222357"></stop>
                                       <stop offset="1" stop-color="#254aa5"></stop>
                                    </linearGradient>
                                    <path fill="url(#payment-option-visa-4)" d="M476 6h-35.1c-8.1 0-14.3 4.4-17.3 11.4l-61.3 146.2h42.9l8.5-23.4h52.4l5 23.4H509L476 6zm-50.4 101.6l21.5-59.3 12.4 59.3h-33.9z"></path>
                                 </svg>
                              <div class="text-muted mt-2">
                                 <div class="d-inline-block">Configure payment gateways and receive payments online.</div>
                                 <div id="ember526" class="ember-view d-inline-block">
                                    <span id="ember527" class="dropdown ember-view">
                                       <span id="ember528" class="dropdown-toggle no-caret ember-view text-blue cursor-pointer"> Set up Payment Gateway </span> 
                                       <div id="ember529" class="dropdown-menu dropdown-menu-right ember-view paymentgw">
                                          <div class="gw-list">
                                             <h5>Configure and add more gateways from here!..</h5>
                                             <div class="flex-wrap-vcenter">
                                                <div class="m-2" data-ember-action="" data-ember-action-532="532">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 362 155.5" class="icon icon-landscape align-text-bottom cursor-pointer stripe-darkbg">
                                                         <path fill="#32325d" d="M361 79.9c0-25.6-12.4-45.8-36.1-45.8-23.8 0-38.2 20.2-38.2 45.6 0 30.1 17 45.3 41.4 45.3 11.9 0 20.9-2.7 27.7-6.5v-20c-6.8 3.4-14.6 5.5-24.5 5.5-9.7 0-18.3-3.4-19.4-15.2h48.9c0-1.3.2-6.5.2-8.9zm-49.4-9.5c0-11.3 6.9-16 13.2-16 6.1 0 12.6 4.7 12.6 16h-25.8zm-63.5-36.3c-9.8 0-16.1 4.6-19.6 7.8l-1.3-6.2h-22v116.6l25-5.3.1-28.3c3.6 2.6 8.9 6.3 17.7 6.3 17.9 0 34.2-14.4 34.2-46.1-.1-29-16.6-44.8-34.1-44.8zm-6 68.9c-5.9 0-9.4-2.1-11.8-4.7l-.1-37.1c2.6-2.9 6.2-4.9 11.9-4.9 9.1 0 15.4 10.2 15.4 23.3 0 13.4-6.2 23.4-15.4 23.4zm-71.3-74.8l25.1-5.4V2.5l-25.1 5.3zm0 7.6h25.1v87.5h-25.1zm-26.9 7.4l-1.6-7.4h-21.6v87.5h25V64c5.9-7.7 15.9-6.3 19-5.2v-23c-3.2-1.2-14.9-3.4-20.8 7.4zm-50-29.1l-24.4 5.2-.1 80.1c0 14.8 11.1 25.7 25.9 25.7 8.2 0 14.2-1.5 17.5-3.3v-20.3c-3.2 1.3-19 5.9-19-8.9V57.1h19V35.8h-19l.1-21.7zM26.3 61.2c0-3.9 3.2-5.4 8.5-5.4 7.6 0 17.2 2.3 24.8 6.4V38.7c-8.3-3.3-16.5-4.6-24.8-4.6C14.5 34.1 1 44.7 1 62.4 1 90 39 85.6 39 97.5c0 4.6-4 6.1-9.6 6.1-8.3 0-18.9-3.4-27.3-8v23.8c9.3 4 18.7 5.7 27.3 5.7 20.8 0 35.1-10.3 35.1-28.2-.1-29.8-38.2-24.5-38.2-35.7z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-535="535">
                                                   <span>
                                                      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 56.67" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path id="_Compound_Path_" data-name="<Compound Path>" d="M27.08 27.23h-2.6L19.1 10.51H19l-5.37 16.72h-2.55L1.79 2.39h5l5.52 16.14h.09l5.13-16.14h3l5.16 16.14h.09L31.3 2.39h5z" fill="#508ecb"></path>
                                                         <path id="_Compound_Path_2" data-name="<Compound Path>" d="M41.26 16.83a8.43 8.43 0 008.16 6.77 7.94 7.94 0 007.09-4.17h4.66a12.66 12.66 0 01-11.92 8.43c-7 0-12.65-6.06-12.65-13.1a12.69 12.69 0 1125.4-.31c0 .81-.09 2.06-.13 2.38zm16.06-3.59a8.07 8.07 0 00-16.06 0z" fill="#508ecb"></path>
                                                         <path id="_Compound_Path_3" data-name="<Compound Path>" d="M65.52 2.39h4.26V6.2h.09a10.49 10.49 0 018.84-4.48c8.43 0 12.86 6.77 12.86 13.4A12.52 12.52 0 0179 27.86c-5.2 0-7.8-2.65-8.74-4.22h-.09v11.89h-4.65zM78.39 6c-4.89 0-8.29 4.21-8.29 8.78a8.41 8.41 0 1016.81.09c0-4.45-3.45-8.87-8.52-8.87z" fill="#32af4a"></path>
                                                         <path id="_Compound_Path_4" data-name="<Compound Path>" d="M115.56 27.23v-3.86h-.09a9.5 9.5 0 01-8.47 4.49 12.75 12.75 0 01-13.18-13c0-6.05 4.26-13.18 13.18-13.18a9.82 9.82 0 018.43 4.17h.09V2.39h4.67v24.84zM107 6c-5.74 0-8.52 5-8.52 8.87a8.57 8.57 0 1017.13 0A8.48 8.48 0 00107 6z" fill="#32af4a"></path>
                                                         <path id="_Compound_Path_5" data-name="<Compound Path>" d="M133.68 35.53h-4.84l3.63-8.79-9.91-24.35h5l7.31 19.28 7.49-19.28h5z" fill="#32af4a"></path>
                                                         <path d="M78 41.32a.46.46 0 00-.45.46V45h8.49l-3.87-3.68zM86.4 46a.47.47 0 00-.46-.46h-3.22V54l3.68-3.87zm-4.65 8.32a.46.46 0 00.45-.46v-3.22h-8.5l3.87 3.68zm-8.36-4.65a.47.47 0 00.46.46h3.22v-8.5l-3.68 3.87zm-38.95-6.8v3.93H29v-3.93h-2v9.9h2v-4.25h5.47v4.25h2v-9.9zm26.49 0v9.89h8.74L68.56 51h-5.63v-2.5h5.46v-1.66h-5.46v-2.27h5.62l1.09-1.7zm-41.36 0A2.84 2.84 0 0016.46 46v3.7a2.85 2.85 0 003.1 3.11h6.25L24.65 51H20c-1 0-1.43-.36-1.43-1.48v-3.39c0-1.09.36-1.51 1.46-1.51h4.67l1.11-1.75zm32.62 0a2.33 2.33 0 00-2.42 2.57v.47a2.34 2.34 0 002.36 2.67h4.14c.43 0 .78.07.78.8v.84c0 .65-.33.8-.79.8h-5.45l-1.12 1.74h6.7a2.41 2.41 0 002.71-2.65v-.69a2.37 2.37 0 00-2.6-2.64h-4c-.43 0-.74-.12-.74-.77v-.68c0-.56.21-.76.72-.76h5.19l1.09-1.71zm-9.97 0l-4.69 9.9h2.21l.92-2.05h5.1l.91 2.05h2.22l-4.7-9.9zm1 2.06L45 49h-3.6zm-33.05 6.55l-.17-.91h-.07a2.88 2.88 0 01-.95.82 3 3 0 01-1.19.21 2.14 2.14 0 01-1.5-.49 1.81 1.81 0 01-.54-1.4c0-1.29 1-2 3.11-2h1.08v-.4a1.6 1.6 0 00-.32-1.11 1.34 1.34 0 00-1-.36 4.18 4.18 0 00-1.81.49l-.3-.74A4.48 4.48 0 018.64 45a2.5 2.5 0 011.7.5 2.14 2.14 0 01.55 1.64v4.37zM8 50.8a2 2 0 001.42-.5 1.83 1.83 0 00.52-1.39v-.58h-1a3.6 3.6 0 00-1.67.36 1.08 1.08 0 00-.51 1 1 1 0 00.32.8 1.28 1.28 0 00.92.31zm86 .8a2.75 2.75 0 01-2.16-.86 3.51 3.51 0 01-.76-2.42 3.67 3.67 0 01.77-2.49 2.83 2.83 0 012.2-.83 4.9 4.9 0 01.93.1 3 3 0 01.72.24l-.3.82a4.13 4.13 0 00-.7-.21 2.88 2.88 0 00-.67-.09c-1.3 0-2 .83-2 2.5a3 3 0 00.47 1.81 1.67 1.67 0 001.42.63 4.3 4.3 0 001.64-.34v.86a3.54 3.54 0 01-1.56.28zm8.57-3.33a3.52 3.52 0 01-.79 2.45 2.77 2.77 0 01-2.18.88 3 3 0 01-1.53-.4A2.71 2.71 0 0197 50a4.08 4.08 0 01-.36-1.77 3.54 3.54 0 01.78-2.44 2.75 2.75 0 012.22-.79 2.72 2.72 0 012.14.9 3.56 3.56 0 01.79 2.37zm-4.89 0a3 3 0 00.5 1.87 1.68 1.68 0 001.44.65 1.74 1.74 0 001.45-.64 3.05 3.05 0 00.49-1.88 3 3 0 00-.49-1.86 1.75 1.75 0 00-1.46-.63 1.72 1.72 0 00-1.44.62 3 3 0 00-.49 1.87zm14.67 3.21v-4.17a1.73 1.73 0 00-.33-1.15 1.29 1.29 0 00-1-.38 1.64 1.64 0 00-1.34.52 2.47 2.47 0 00-.43 1.6v3.58h-1v-4.17a1.73 1.73 0 00-.33-1.15 1.29 1.29 0 00-1-.38 1.57 1.57 0 00-1.34.55 3 3 0 00-.42 1.79v3.36h-1v-6.41h.84l.15.88a1.84 1.84 0 01.78-.73 2.29 2.29 0 011.12-.27A1.91 1.91 0 01109 46a2 2 0 01.83-.79 2.5 2.5 0 011.24-.3 2.19 2.19 0 011.63.56 2.5 2.5 0 01.54 1.79v4.18zm5.86.12a2.88 2.88 0 01-1.15-.23 2.28 2.28 0 01-.87-.71h-.07a8 8 0 01.07 1.06v2.64h-1v-9.29h.81l.14.88a2.18 2.18 0 01.88-.76 2.58 2.58 0 011.14-.24 2.36 2.36 0 012 .88 4.62 4.62 0 010 4.89 2.35 2.35 0 01-1.95.88zm-.14-5.82a1.75 1.75 0 00-1.43.54 2.82 2.82 0 00-.45 1.73v.22a3.18 3.18 0 00.45 1.93 1.73 1.73 0 001.45.59 1.5 1.5 0 001.3-.68 3.2 3.2 0 00.47-1.85 3.1 3.1 0 00-.47-1.84 1.53 1.53 0 00-1.32-.64zm8.34 5.7l-.19-.91a2.88 2.88 0 01-1 .82 3 3 0 01-1.19.21 2.14 2.14 0 01-1.5-.49 1.81 1.81 0 01-.54-1.4c0-1.29 1-2 3.11-2h1.08v-.4a1.6 1.6 0 00-.32-1.11 1.34 1.34 0 00-1-.36 4.18 4.18 0 00-1.81.49l-.3-.74a4.48 4.48 0 012.17-.55 2.5 2.5 0 011.7.5 2.14 2.14 0 01.55 1.64v4.37zm-2.19-.68a2 2 0 001.42-.5 1.83 1.83 0 00.52-1.39v-.58h-1a3.6 3.6 0 00-1.67.36 1.08 1.08 0 00-.51 1 1 1 0 00.32.8 1.28 1.28 0 00.92.31zm9.2.68v-4.15a1.72 1.72 0 00-.35-1.17 1.49 1.49 0 00-1.12-.38 1.84 1.84 0 00-1.47.54 2.7 2.7 0 00-.47 1.8v3.36h-1v-6.41h.79l.2.93a2 2 0 01.84-.74 2.78 2.78 0 011.2-.26 2.44 2.44 0 011.74.56 2.38 2.38 0 01.59 1.79v4.18zm1.86-6.41h1l1.4 3.66a12.69 12.69 0 01.57 1.8h.05c0-.19.16-.53.32-1s.69-2 1.59-4.44h1l-2.76 7.3a3.74 3.74 0 01-.95 1.54 2 2 0 01-1.34.45 3.71 3.71 0 01-.88-.1v-.78a3.14 3.14 0 00.72.07 1.47 1.47 0 001.42-1.12l.36-.91z" fill="#231f20"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-538="538">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 135.6" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path d="M87.4 80.3c0 2-1.6 3.6-3.6 3.6H58.4c-2 0-3.6-1.6-3.6-3.6V54.9c0-2 1.6-3.6 3.6-3.6h25.4c2 0 3.6 1.6 3.6 3.6v25.4zm21.8 19c0 3.5-2.9 6.3-6.3 6.3H39.4c-3.5 0-6.3-2.8-6.3-6.3V35.9c0-3.5 2.9-6.3 6.3-6.3h63.5c3.5 0 6.3 2.9 6.3 6.3v63.4zM111 7.8H31.2c-11 0-19.9 9-19.9 19.9v79.8c0 11 9 19.9 19.9 19.9H111c11 0 19.9-9 19.9-19.9V27.7c0-10.9-8.9-19.9-19.9-19.9m75.3 99.1c-7.1 0-13.9-2.7-18.7-7.5-4.3-4.3-6.7-9.8-6.7-15.6h7.2c0 3.9 1.6 7.6 4.6 10.6 3.5 3.4 8.4 5.4 13.6 5.4h.1c10 0 18.2-7 18.2-15.6 0-6.5-3.6-11.6-21-15.6-7.1-1.6-11.9-3.8-15-6.9-3.4-3.3-5-7.6-5-13.3 0-11.2 10.1-20.4 22.5-20.4 5.9 0 11.5 2 15.8 5.8 4.4 3.8 6.8 9 6.8 14.6h-7.2c0-7.3-6.9-13.1-15.4-13.1-8.3 0-15.3 6.1-15.3 13.2 0 6.6 2.3 10.4 14.5 13.2 13.1 3 26.5 8.1 26.5 22.6 0 6.2-2.7 12-7.5 16.3-4.9 4-11.2 6.3-18 6.3zM249.6 56c-12.9 0-22.2 9.6-22.2 22.4 0 12.7 9.5 22 22.2 22 12.3 0 21.7-10 21.7-22.1 0-12.1-9.4-22.3-21.7-22.3m21.3 71.3V95.9h-.2c-4.7 7.1-12.7 10.8-21.1 10.8-16.3 0-29.2-12.2-29.2-28.6 0-16.3 13.2-28.4 29.2-28.4 8.4 0 16.5 3.7 21.1 10.9h.2v-9.5h6.9v76.2h-6.9zM377.5 56c-12.9 0-22.2 9.6-22.2 22.4 0 12.7 9.5 22 22.2 22 12.3 0 21.7-10 21.7-22.1 0-12.1-9.4-22.3-21.7-22.3m21.4 49.4v-9.5h-.2c-4.8 7.1-12.7 10.8-21.1 10.8-16.3 0-29.2-12.2-29.2-28.6 0-16.3 13.2-28.4 29.2-28.4 8.5 0 16.5 3.6 21.1 10.9h.2v-9.5h6.9v54.3h-6.9zm27.7-31.8v31.8h-7V51.1h7v7.8h.2c3-6.9 8.2-8.7 15.3-9.2V57c-9.5.9-15.5 6.9-15.5 16.6M473.2 56c-10.8 0-19.4 7.9-21.1 18.6h42.4C492.6 63.9 484.1 56 473.2 56m28.2 24.8H452c.5 10.7 10.4 19.6 21 19.6 8.3 0 16.5-4.8 19.4-12.8h7.3c-4 11.3-14.7 19-26.7 19-15.7 0-28.3-12.8-28.3-28.4 0-15.5 12.6-28.6 28.2-28.6 15.9 0 28.5 13.4 28.5 29.1.2.8 0 1.4 0 2.1m-169.6 24.7V97h-.2c-3.2 6.7-10.3 9.8-17.4 9.8-7.1 0-14.3-2.5-18.7-8.2-3.9-4.9-4.8-11.5-4.8-17.5V50.9h7v30c0 11.3 4.1 19.5 16.5 19.5 4.6 0 8.2-1.2 11.6-4.4 4.8-4.6 5.7-10 5.7-16.3V50.9h7v54.5h-6.7z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-541="541">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 60" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path fill="#2790C3" d="M190.4 26.4c-.7 4.8-4.4 4.8-8 4.8h-2l1.4-9c.1-.5.6-.9 1.1-.9h.9c2.4 0 4.7 0 5.9 1.4.8.8 1 2 .7 3.7zm-1.5-12.6h-13.5c-.9 0-1.7.7-1.9 1.6L168.1 50c-.1.7.4 1.3 1.1 1.3h6.9c.6 0 1.2-.5 1.3-1.1l1.5-9.8c.1-.9.9-1.6 1.9-1.6h4.3c8.9 0 14-4.3 15.3-12.8.6-3.7 0-6.7-1.7-8.7-1.9-2.3-5.3-3.5-9.8-3.5z"></path>
                                                         <path fill="#27346A" d="M94.2 26.4c-.7 4.8-4.4 4.8-8 4.8h-2l1.4-9c.1-.5.6-.9 1.1-.9h.9c2.4 0 4.7 0 5.9 1.4.8.8 1 2 .7 3.7zm-1.5-12.6H79.2c-.9 0-1.7.7-1.9 1.6L71.9 50c-.1.7.4 1.3 1.1 1.3h6.4c.9 0 1.7-.7 1.9-1.6l1.5-9.3c.1-.9.9-1.6 1.9-1.6H89c8.9 0 14-4.3 15.3-12.8.6-3.7 0-6.7-1.7-8.7-2-2.3-5.4-3.5-9.9-3.5zm31.3 25c-.6 3.7-3.6 6.2-7.3 6.2-1.9 0-3.4-.6-4.3-1.7-1-1.1-1.3-2.7-1-4.5.6-3.7 3.6-6.2 7.2-6.2 1.8 0 3.3.6 4.3 1.8 1 1 1.4 2.7 1.1 4.4zm9-12.5h-6.5c-.6 0-1 .4-1.1.9l-.3 1.8-.5-.7c-1.4-2-4.5-2.7-7.6-2.7-7.1 0-13.2 5.4-14.4 13-.6 3.8.3 7.4 2.4 9.9 2 2.3 4.8 3.3 8.1 3.3 5.8 0 8.9-3.7 8.9-3.7l-.3 1.8c-.1.7.4 1.3 1.1 1.3h5.8c.9 0 1.7-.7 1.9-1.6l3.5-22.1c.2-.6-.3-1.2-1-1.2z"></path>
                                                         <path fill="#2790C3" d="M220.2 38.8c-.6 3.7-3.6 6.2-7.3 6.2-1.9 0-3.4-.6-4.3-1.7-1-1.1-1.3-2.7-1-4.5.6-3.7 3.6-6.2 7.2-6.2 1.8 0 3.3.6 4.3 1.8 1 1 1.4 2.7 1.1 4.4zm9-12.5h-6.5c-.6 0-1 .4-1.1.9l-.3 1.8-.5-.7c-1.4-2-4.5-2.7-7.6-2.7-7.1 0-13.2 5.4-14.4 13-.6 3.8.3 7.4 2.4 9.9 2 2.3 4.8 3.3 8.1 3.3 5.8 0 8.9-3.7 8.9-3.7L218 50c-.1.7.4 1.3 1.1 1.3h5.8c.9 0 1.7-.7 1.9-1.6l3.5-22.1c.1-.7-.4-1.3-1.1-1.3z"></path>
                                                         <path fill="#27346A" d="M167.4 26.3h-6.5c-.6 0-1.2.3-1.5.8l-9 13.2-3.8-12.7c-.2-.8-1-1.3-1.8-1.3h-6.4c-.8 0-1.3.8-1.1 1.5l7.1 21-6.7 9.5c-.5.7 0 1.8.9 1.8h6.5c.6 0 1.2-.3 1.5-.8L168.3 28c.5-.7 0-1.7-.9-1.7"></path>
                                                         <path fill="#2790C3" d="M236.8 14.8L231.2 50c-.1.7.4 1.3 1.1 1.3h5.6c.9 0 1.7-.7 1.9-1.6l5.5-34.6c.1-.7-.4-1.3-1.1-1.3H238c-.7 0-1.1.4-1.2 1"></path>
                                                         <path fill="#27346A" d="M25.5 57.5L27.3 46l.1-.6c.1-.6.4-1.1.8-1.4s1-.6 1.5-.6h1.4c2.4 0 4.6-.3 6.6-.8 2.1-.5 3.9-1.4 5.5-2.5 1.7-1.2 3.1-2.7 4.1-4.5 1.2-1.9 2-4.3 2.5-6.9.5-2.3.5-4.4.3-6.2-.3-1.9-1-3.5-2.2-4.8-.7-.8-1.6-1.5-2.6-2 .4-2.3.4-4.3 0-6C45 8 44.2 6.4 42.9 5 40.3 2 35.6.5 28.8.5H10.3c-.6 0-1.2.2-1.7.6-.5.4-.8 1-.9 1.6L.1 51.6c-.1.4 0 .9.3 1.2.3.3.7.5 1.2.5h11.5v.1l-.8 5c-.1.4.1.8.3 1.1.3.3.6.5 1 .5h9.6c.5 0 1.1-.2 1.5-.5.4-.4.7-.8.8-1.4v-.6"></path>
                                                         <path fill="#27346A" d="M19 15.7c.1-.8.6-1.4 1.3-1.7.3-.1.6-.2 1-.2h14.5c1.7 0 3.3.1 4.8.3.4.1.8.1 1.2.2l1.2.3c.2.1.4.1.5.2.7.2 1.4.5 2 .8.7-4.6 0-7.8-2.5-10.6C40.2 1.9 35.3.5 28.9.5H10.3c-1.3 0-2.4.9-2.6 2.2L0 51.6c-.2 1 .6 1.8 1.6 1.8H13l6-37.7"></path>
                                                         <path fill="#2790C3" d="M45.4 15.6c-.1.4-.1.7-.2 1.1-2.4 12.5-10.8 16.9-21.4 16.9h-5.4c-1.3 0-2.4.9-2.6 2.2l-3.6 22.6c-.1.8.5 1.6 1.4 1.6h9.6c1.1 0 2.1-.8 2.3-2l.1-.5L27.4 46l.1-.6c.2-1.1 1.1-2 2.3-2h1.4c9.3 0 16.6-3.8 18.8-14.7.9-4.6.4-8.4-1.9-11.1-.7-.8-1.6-1.4-2.7-2"></path>
                                                         <path fill="#1F264F" d="M42.9 14.6l-1.2-.3c-.4-.1-.8-.2-1.2-.2-1.5-.2-3.1-.3-4.8-.3H21.2c-.4 0-.7.1-1 .2-.7.3-1.2 1-1.3 1.7l-3.1 19.5-.1.6c.2-1.3 1.3-2.2 2.6-2.2h5.4c10.7 0 19-4.3 21.4-16.9.1-.4.1-.7.2-1.1-.6-.3-1.3-.6-2-.8 0-.1-.2-.1-.4-.2"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-544="544">
                                                   <div class="inv-gw">
                                                      <div class="pmtgtw-payflowpro"></div>
                                                   </div>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-547="547">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 214.6 512 84.4" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path fill="#231F20" d="M470.2 286.8h15.5v-42.4h16.8v-13.7h-49.2v13.6h16.8v42.5h.1zm-46.8 1c15.9 0 26.3-7.9 26.3-26v-31.1h-15.8v31.6c0 7.8-4.1 11.5-10.3 11.5-6.2 0-10.3-3.8-10.3-11.9v-31.2h-15.8v31.5c0 17.6 10 25.6 25.9 25.6m-61-13.9c-8.5 0-14.3-7.1-14.3-15.1v-.2c0-8.1 5.7-15 14.2-15 8.6 0 14.4 7 14.4 15.1v.2c0 8.1-5.7 15-14.3 15m-.1 14c17.3 0 30.3-13.1 30.3-29.1v-.2c0-16.1-12.8-29-30.1-29s-30.3 13.1-30.3 29.2v.2c-.1 16 12.8 28.9 30.1 28.9m-79.9-1.1h15.5v-14.5l5.7-6.3 14.1 20.8h18.7l-21.9-31.9 21.2-24.1h-18.4L298 253.5v-22.8h-15.5v56.1h-.1zm-29.1 1.1c12.4 0 19.5-5.4 24.8-12.7l-11.7-8.3c-3.4 4.1-6.8 6.8-12.6 6.8-7.8 0-13.4-6.6-13.4-15v-.1c0-8.2 5.5-14.8 13.4-14.8 5.4 0 9 2.6 12.3 6.6l11.7-9c-5-6.9-12.3-11.7-23.8-11.7-17 0-29.6 12.8-29.6 29.2v.2c0 16.6 12.9 28.8 28.9 28.8m-77.6-1.1h45.5v-13.2h-30.1v-8.9H218v-12.3h-26.9v-8.5h29.7v-13.2h-45.1v56.1zm-58.5 0h15.5v-21.3h19.9v21.3h15.5v-56.1h-15.5v21h-19.9v-21h-15.5v56.1zm-29.1 1.1c12.4 0 19.5-5.4 24.8-12.7l-11.7-8.3c-3.4 4.1-6.8 6.8-12.6 6.8-7.8 0-13.4-6.6-13.4-15v-.1c0-8.2 5.5-14.8 13.4-14.8 5.4 0 9 2.6 12.2 6.6l11.7-9c-5-6.9-12.3-11.7-23.8-11.7-17 0-29.6 12.8-29.6 29.2v.2c.1 16.6 13 28.8 29 28.8m-76.8-1.1h44.4v-12.7H32.5l9.6-6.7c8.3-6 13-10.7 13-19.6v-.2c0-10.6-8.4-17.9-20.7-17.9-10.9 0-16.8 4.2-22.8 12l10.5 8.7c4.4-5 7.4-7.2 11.1-7.2s6.2 2.2 6.2 5.7c0 3.4-2 6-7.2 10.1l-21 16v11.8h.1z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-550="550">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 82" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path fill="none" d="M44.1 46.7H33.7v16.6h11.1c8.6 0 12.9-2.8 12.9-8.3 0-5.3-4.6-8.3-13.6-8.3zM54.6 31c0-5.1-3.9-7.7-11.2-7.7h-9.7v15.4h9.8c7.3 0 11.1-2.7 11.1-7.7zm82.3 28.8c0 3.7 3.3 5.5 7.9 5.5 6.4 0 13.5-3.4 13.5-9.3v-1.2c-2.7-1-6.8-1.8-10.7-1.8-5.4.1-10.7 1.8-10.7 6.8zm281.5-23.2c-6.6 0-11.7 4.1-13.2 10h25.6c-1.2-6-6.5-10-12.4-10zm53.5 0c-6.6 0-11.7 4.1-13.2 10h25.6c-1.2-6-6.5-10-12.4-10z"></path>
                                                         <path d="M55.3 42.3c4.7-1.9 8.4-5.8 8.4-12.1 0-9.7-7.3-15.3-19.4-15.3H18.1v8.3h6.6v40.1h-6.6v8.3h27.6c13.1 0 21.1-5.8 21.1-16.1 0-6.5-4.8-11.3-11.5-13.2zm-21.6-19h9.7c7.3 0 11.2 2.6 11.2 7.7 0 5-3.8 7.7-11.1 7.7h-9.8V23.3zm11.1 40H33.7V46.7h10.5c9 0 13.6 2.9 13.6 8.3-.1 5.5-4.4 8.3-13 8.3zm63.3-34.7c-7.1 0-12.5 3.5-15.2 8.4v-7H77.2v8.3h7.2v25h-9.2v8.3h32.3v-8.3H93V52.6c0-10.2 7.1-15.7 14.7-15.7 3.2 0 5.7 2 6.6 5.3l8.2-2.3c-1.4-6.7-6.4-11.3-14.4-11.3zm59 16.2c0-10.6-8.1-16.1-18.6-16.1-8.4 0-14 3.3-17.9 6.9l5.7 6.2c3.3-3 7.4-5 12.2-5 5.1 0 9.8 2.4 9.8 8.3v2.3c-2.8-.8-6.6-1.7-11-1.7-9.2 0-19.3 3.9-19.3 14.2 0 8.7 7.4 13.1 16 13.1 6 0 12-2.2 14.3-5.8v4.4h14.9v-8.3h-6.1V44.8zM158.3 56c0 5.9-7.1 9.3-13.5 9.3-4.6 0-7.9-1.8-7.9-5.5 0-5 5.3-6.7 10.8-6.7 3.8 0 7.9.8 10.7 1.8V56zm51.1-26h-21.9v8.3h13.3v25h-17.4v8.4h42v-8.4h-16zm-9.7-21h9.7v12.7h-9.7zm81.2 35c0-9.5-6.6-15.4-15.9-15.4-6.5 0-11.7 2.6-14.3 6.7V30h-14.5v8.3h6v25h-6.4v8.3h21.6v-8.3h-6.6V49.5c0-7.5 6.6-12.4 13.1-12.4 4 0 8.4 2.1 8.4 9.3v17h-6.6v8.3h21.6v-8.3h-6.4V44zm36.4 20.9c-5.2 0-9.7-2.6-9.7-9.1V38.3h20.2V30h-20.2V14.9H299V30h-10.9v8.3H299v17.8c0 11.1 7.8 16.9 18.3 16.9 8.1 0 14-3.8 17.8-7.9l-5.8-6c-3 3.1-7.1 5.8-12 5.8zm58.5-36.3c-7.1 0-12.5 3.5-15.2 8.4v-7h-15.7v8.3h7.2v25h-9.2v8.3h32.3v-8.3h-14.5V52.6c0-10.2 7.1-15.7 14.7-15.7 3.2 0 5.7 2 6.6 5.3l8.2-2.3c-1.4-6.7-6.4-11.3-14.4-11.3zm42.6 0c-13.2 0-22.7 9.4-22.7 22.2S405.5 73 419.5 73c8.5 0 16.1-3.2 20.4-7.7l-5.8-6.1c-2.9 3.2-8.3 5.8-14.6 5.8-7.5 0-13.3-4.2-14.8-11.1h35.9v-1.5c.1-13.7-9.1-23.8-22.2-23.8zm-13.2 17.9c1.5-5.9 6.6-10 13.2-10 5.9 0 11.1 4 12.4 10h-25.6zm89 5.9c0-13.7-9.2-23.8-22.3-23.8-13.2 0-22.7 9.4-22.7 22.2S459 73 473 73c8.5 0 16.1-3.2 20.4-7.7l-5.8-6.1c-2.9 3.2-8.3 5.8-14.6 5.8-7.5 0-13.3-4.2-14.8-11.1h35.9v-1.5zm-35.5-5.9c1.5-5.9 6.6-10 13.2-10 5.9 0 11.1 4 12.4 10h-25.6z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-553="553">
                                                   <div class="inv-gw">
                                                      <div class="pmtgtw-paymentspro"></div>
                                                   </div>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-556="556">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 204.7 512 104.3" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path fill="#919292" d="M162.5 283.1l12.6-40.6c.4-1.2.7-1.6 2.3-1.9l3.4-.5v-4.9h-17.7l-1 4.9 6.1.7-10.4 33.6-9.1-37.9H139l-10.8 38-10.5-33.7 6-.7v-4.9h-18.8l-1.1 4.9 4 .8c1.1.3 1.6.5 2 1.6l13.2 40.6h10.3l10.3-37.1 9 37.1h9.9zm41.8-5.8c-9.2 0-13.9-6-13.9-18.4 0-12.3 5.3-17.8 14.4-17.8 9 0 13.5 5.4 13.5 17.7-.1 12.8-5 18.5-14 18.5zm-.3 6.8c15.9 0 23-10.2 23-25.9 0-14-6.2-24.1-22.1-24.1s-23.4 10-23.4 24.7c0 14.9 6.3 25.3 22.5 25.3zm51.6-1.1v-4.9l-8.8-.7c-1.4-.1-1.5-.4-1.5-1.9v-28.2c2.2-2.1 7.1-5.9 11.4-5.9.9 0 1 .2 1.1.9l1.1 6.5 6.5.3V235c-1.7-.5-4.5-.9-6.6-.9-6.5 0-11.2 4-14.3 7.5l-.3-.1-.9-6.4h-12.1l-.8 5 5.3 1.8c.9.3 1.2.9 1.2 2v31.8c0 1.4-.2 1.7-1.5 1.9l-4.7.6v5h24.9v-.2zm33.3 0v-4.9l-5.6-.7c-1.4-.2-1.5-.4-1.5-1.9v-63.1h-14.3l-.8 5 5.6 1.8c.9.3 1.2.9 1.2 2v54.5c0 1.4-.2 1.8-1.5 1.9l-5.8.6v5h22.7v-.2zm36.5-13.7c-4.1 4.1-8.6 7.8-14.1 7.8-6.5 0-10.9-4.2-10.9-17.2 0-11.1 3.5-18.8 12.2-18.8 5 0 10 2.7 12.8 5v23.2zm14.6 13.8v-5l-4.8-.7c-1.4-.2-1.5-.4-1.5-1.9v-63.1h-14.1l-.8 5 5.6 1.8c.8.3 1.2.9 1.2 1.9v17.5c-3.6-2.6-8.7-4.5-14.3-4.5-11.2 0-19.5 7.6-19.5 26 0 17.1 7 24 17.6 24 7.3 0 12.2-3.2 16.4-7.3l.4.1.7 6.2H340z"></path>
                                                         <path fill="#E52A21" d="M357.4 247c2.7-2.1 8.3-5.8 14.3-5.8 5.8 0 10.8 4 10.8 16.7 0 11.8-3.4 19.2-12.2 19.2-5 0-9.6-3-12.8-6.1l-.1-24zm10.3 55.8v-4.9l-8.8-.7c-1.4-.1-1.5-.4-1.5-1.9V279c4.4 3.8 8.9 5.1 14.2 5.1 14.7 0 19.4-12.9 19.4-26.9 0-16.5-7.1-23-17.5-23-6.4 0-11.6 2.6-16.7 6.3l-.3-.1-.8-5.3h-12.3l-.8 5 5.3 1.8c.9.3 1.2.9 1.2 1.9v51.5c0 1.4-.3 1.7-1.6 1.9l-3.8.6v5h24zm57.8-32.4c-2.9 2.7-8.8 7.2-14.2 7.2-4.4 0-6.5-2-6.5-7.1 0-4.8 2.2-7.2 10.2-7.9l10.5-.9v8.7zm14.6 12.7v-5l-4.8-.7c-1.4-.2-1.5-.4-1.5-1.9v-24.7c0-13-4.4-16.7-17.6-16.7-7.3 0-18 1.3-18 12.9l8 .9c.1-7.1 4.2-7.2 9.9-7.2 8.1 0 9.4 3.4 9.4 10.2v5l-12.6 1c-11.2.9-17 5.3-17 14.6 0 4.7 1.5 12.7 13.2 12.7 7.2 0 12.4-3 16.9-7.2l.3.1.8 6.1 13-.1zm32.6 19.7V298l-9-.9 22.7-54.9c.5-1 1.2-1.4 2.3-1.6l3.2-.5v-4.9h-18.5l-1 4.9 6.3.7-13 31.5-12.4-31.5 6.2-.7v-4.9h-19.3l-1.1 4.9 3.8.9c1.1.3 1.5.5 2 1.6l16.8 40-5.4 12.5c-.6 1.3-.9 1.9-2 2l-6.7.8v4.9h25.1zM65.8 287.5c2.9-1.3 6.1-2.9 9.2-4.8-3 3.4-6.2 4.3-9.2 4.8zm-7.2 6c-.3 0-2.8 0-2.8-.9 0-.5.8-2.1 1.5-2.3 1.5-.6 4.7-1.4 4.9-1.4.3 0 2.9.3 3.2.3.2 0 2.1-.1 3.2-.4 1.3-.3 2.9-.9 4.4-1.8 1.5-.9 3.7-2.8 4.7-4.4.6-.9.9-2.1 1.6-2.9.9-1.2 2.6-2.2 4-3.5 1.4-1.4 2.8-2.9 4.1-4.5-2.6 12.6-19 21.8-28.8 21.8zm6.2-68.2c5.1 1.1 10.9 3.3 15.9 8.3 1.6 1.6 3 3.8 3.6 5.5.3.7.3 1.8.8 2.5.8 1.2 2.2 2.2 3.2 3.5 1.3 1.4 2.1 2.9 2.8 4.5.3.5.4 1.2.7 1.8.4.8 1.1 4.6 1.1 6 0 2.9-1 6.5-2.3 9.2 0 .1.1.1.1.4v2.5c-1.1 15.2-19.6 26.3-31.3 26.3-1.4 0-5.4-.2-5.4-3 0-.3.2-1.2.4-1.9-2.2.3-6.5 1.1-9 1.1-1.9 0-10.6-.1-10.6-4.8 0-4.4 7.8-4.7 9.3-4.7 4.2 0 8.6 1.2 12.9 3.2-.7.2-2 .6-2.2.6-.3 0-.7-.3-1.1-.4-2.8-1-6-1.6-8.9-1.6-1.7 0-2-.1-4 .4-.2 0-3.7.9-3.7 2.3 0 1 2.8 1.6 3.4 1.7 1.2.2 3.7.4 3.9.4 17.8 0 45.5-14.7 45.5-32.3 0-3.3-1.5-8-4.5-10.9-.2 1.3-.5 2.7-1 4.1-.3.9-1.1 2.5-1.1 2.7 0 0 5 5.5 5 6.7 0 .7-1.1 3.8-1.1 3.9-1-2.7-2.4-5.4-5.2-8.1-.4.4-.8 1-1.2 1.5-.5.7-1.1 1.4-1.7 2.1-1.3 1.5-4.3 4.1-4.3 4.4 0 0 3.6 3.6 4.8 7.8.2.6.5 1.8.5 2 0 .6-2 1.9-2 2-.1-3.4-1.5-7-5.2-10.3-4.3 3.2-8.8 5.8-13.1 7.9 2.6 2.2 4.1 5.4 4.1 7.7 0 1.1-.6 3.5-1.1 3.8-.6.4-1.3.6-2 .8.8-1 1.5-3.3 1.5-4.3 0-1.8-1.2-4.6-3.2-6.1-.5-.3-1.2-1-1.4-1-.3 0-2.8 1.1-4.2 1.6-1.6.6-3.3 1.1-5 1.6-5.1 1.5-9.9 2.4-14.8 2.4-1.9 0-10.2-.2-10.2-4.7 0-6.7 15.4-7.3 17.5-7.3 4.6 0 9 .5 13.7 2.6-.9.3-2.6 1-2.8 1-.3 0-5.5-1.5-10.2-1.5-2.1 0-4.7.2-6.7.6-1.6.3-3.2.7-4.6 1.3-.5.1-4.2 1.7-4.2 3.1 0 .2.6.6 1 .8 2 1 3.8.9 5.8.9 18.9 0 48-14.8 49.7-30.2v-2.5c-.9-10-16.5-16.5-24.1-16.5-.2 0-1.5.1-2.3.3.5.2 1.1.2 1.6.4.4.1.9.3 1.4.5.8.3 2.2 1 3.1 1.8.7.6 1.1 1.5 1.8 2 .5.5 1.5.4 2.3.7 2.6.8 5.8 2 8.5 3.2 1.1.6 2.5 1.2 3.7 1.9.4.3.7.9 1 1.4.5.8 1.1 2.1 1.3 3.2-5.2-3.9-10.4-5.9-15.6-7.6H65c.2 2.7-.9 5.4-2.8 8.1 5.7 1.5 11.7 3.7 17.6 7.8-.3.7-.7 1.5-1.2 2.2-2.5-1.8-5.2-3.2-7.7-4.4-.6-.3-9-3.4-10.3-3.4-.3 0-2.3 2-3.4 2.9-2.7 2.2-5.4 3.9-8.1 5.5 7.3 1 14.6 2.6 21.9 7.4-.5.5-1.6 1.5-1.9 1.5-.2 0-2.1-1.4-3.2-1.9-5.1-2.5-14.8-4.9-20.7-4.9-.5 0-6.3 2.5-7.7 2.9-4.1 1.2-8.6 2.7-12.8 2.7-1.4 0-4.2-.1-4.2-2.4 0-4.5 15.9-5.6 17-5.6H41c-2.5 1-5.5 2.1-7.9 2.7-2.3.6-4.7 1-6.9 1.7-.4.1-.8.4-1.2.6 0 0-.1.1.2.1.2 0 3.5-.5 5.3-.9 9.1-2.2 18.9-5.8 28-14 2.2-2.1 3.8-4.7 4.3-7v-2c-.3-2.2-3.5-4.5-5.5-5.1-1.3-.4-3.8-.9-4.1-.9-.5 0-1.2.3-1.7 1.1 3.2.7 6.9 0 9.7 4 0 0 .1.1 0 .3-.8-.3-10.6-2.6-12.2-2.6-.6 0-5.3 3.3-6.4 4-3 1.8-6.1 3.5-9.1 5l10.3.1c4.5.3 9.6.9 14.2 1.8-.2.1-2 2-2.4 2-.2 0-3.4-.6-5-.8-2.9-.4-5.9-.5-8.9-.7l-13 .3c-.7-.1-2.1-.2-2.1-1.4 0-.9 1.1-1.5 1.9-1.8.6-.2 1.3-.6 1.9-.8 6.4-2.7 13-6.3 19.5-10.4-.2-.1-.6-.1-.8-.1-.3 0-1.1.1-1.7.3.1.1.2.1.3.1-.9.5-2.4 1.5-2.7 1.5-.7 0-1.7-.9-1.7-1.5 0-1.8 4.1-1.9 4.4-1.9 4.1-.1 4.4.1 4.7.1.2 0 1.9-.9 3-1.1 1.6-.4 2.4-.4 3.9-.4 1.6-.5 3.6-.3 5.5.1z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                                <div class="m-2" data-ember-action="" data-ember-action-559="559">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 147.2 512 218.8" class="icon icon-landscape align-text-bottom cursor-pointer ">
                                                         <path fill="#EF7A00" d="M9.8 253.1c16.1 0 18.4-9 18.6-17 0-6.4-.9-12.9-1.8-19.1-.9-6.7-1.8-13.1-1.8-19.3 0-21.2 14.1-30.2 33.6-30.2H63v12.7h-3.9c-13.6.2-18.4 7.4-18.4 19.8 0 5.3.9 10.8 1.6 16.4.9 5.8 1.8 11.3 1.8 17.5.2 14.7-6.4 22.1-16.8 24.9v.5c10.4 2.8 16.8 10.4 16.8 25.1 0 6.2-.9 12-1.8 17.7-.7 5.5-1.6 11.1-1.6 16.6 0 12.9 5.5 19.8 18.4 20H63v12.5h-4.8c-18.9 0-33.4-8.3-33.4-31.5 0-6.2.9-12.7 2.1-18.9.7-6.4 1.6-12.7 1.6-18.7 0-7.4-2.3-17.3-18.6-17.3l-.1-11.7zm489.1 11.7c-16.3 0-18.6 9.9-18.6 17.3 0 6 .9 12.2 1.6 18.7 1.1 6.2 2.1 12.7 2.1 18.9 0 23.3-14.5 31.5-33.4 31.5h-4.8v-12.7h3.9c12.9-.2 18.4-7.1 18.4-20 0-5.5-.9-11.1-1.6-16.6-.9-5.8-1.8-11.5-1.8-17.7 0-14.7 6.5-22.3 16.8-25.1v-.5c-10.4-2.8-17-10.1-16.8-24.9 0-6.2.9-11.7 1.8-17.5.7-5.5 1.6-11.1 1.6-16.4 0-12.4-4.8-19.6-18.4-19.8h-3.9v-12.6h4.6c19.6 0 33.6 9 33.6 30.2 0 6.2-.9 12.7-1.8 19.3-.9 6.2-1.8 12.7-1.8 19.1.2 8.1 2.5 17 18.6 17v11.8h-.1z"></path>
                                                         <path fill="#13110C" d="M138 201.6l4.6 13.6h-6.2c-6 0-10.2 1.4-12.7 4.1-2.5 2.8-3.7 7.4-3.7 14v1.5h19v13.7h-19v66.8l-15.3 1.2v-68.1h-12l4-13.7h8c0-11.2 2.5-19.6 7.4-25.1s12.4-8.3 22.4-8.3c.4 0 .9 0 1.7.1.7.1 1.3.2 1.8.2zm1.9 73.3c0-5.8 1.1-11.3 3.3-16.4 2.2-5.1 5.3-9.6 9.5-13.6 4.1-3.9 8.7-7 13.9-9 5.2-2.1 10.7-3.1 16.5-3.1s11.3 1 16.6 3.1 9.9 5 13.9 8.9c4.1 3.9 7.3 8.5 9.5 13.7 2.2 5.2 3.3 10.7 3.3 16.4 0 5.9-1.1 11.4-3.2 16.5-2.2 5.1-5.3 9.7-9.5 13.7-4.1 3.9-8.7 7-13.9 9-5.2 2.1-10.7 3.1-16.5 3.1-6 0-11.5-1-16.7-3.1-5.1-2-9.7-5.1-13.8-9.1-4.2-4-7.3-8.6-9.5-13.7-2.3-5.1-3.4-10.5-3.4-16.4zm15.7 0c0 8.2 2.6 14.9 7.9 20.3 5.2 5.4 11.8 8.1 19.7 8.1s14.5-2.7 19.8-8.1c5.3-5.4 8-12.1 8-20.2s-2.6-14.8-7.9-20.2c-5.3-5.4-11.9-8.1-19.9-8.1-7.9 0-14.5 2.7-19.7 8-5.3 5.3-7.9 12.1-7.9 20.2zm80 41.8v-82h15.6L251 252c2.9-6 6.7-10.4 11.4-13.3s10.5-4.4 17.3-4.4h2.1c.5 0 .9.1 1.4.1l-6.5 13.9c-9.3.8-16.1 4.4-19.9 10.4-3.8 6-5.8 16.4-5.8 31V315l-15.4 1.7zm77.6-106v24.1h21.5v13.7h-21.5v32.4c0 9.8 1.1 16 3.4 18.4 2.3 2.5 6.6 3.7 13 3.7 1.4 0 2.8-.1 4.3-.3s3-.6 4.6-1.1l-3.8 14.5c-1.8.3-3.4.5-5 .6s-2.9.2-4 .2c-10.1 0-17.3-2.6-21.5-7.9-4.2-5.3-6.3-14.6-6.3-28v-32.6H284l5.9-13.7h7.9v-20.4l15.4-3.6zm102.9 93.9c-5.5 4.2-11.1 7.3-16.7 9.4-5.6 2.1-11.2 3.2-16.7 3.2-6 0-11.5-1-16.7-3.1-5.1-2-9.7-5.1-13.8-9.1-4.2-4-7.3-8.6-9.5-13.7s-3.3-10.6-3.3-16.4 1.1-11.3 3.2-16.5c2.1-5.2 5.2-9.8 9.2-13.7 4-4 8.5-7 13.4-9s10.3-3 16.1-3c7.9 0 15 1.8 21.3 5.5 6.3 3.7 11.4 9 15.3 15.9l-58.6 36.2c2.1 3.7 5.3 6.7 9.4 9 4.2 2.3 8.7 3.4 13.7 3.4 4.5 0 9.2-1.1 14.3-3.3 5-2.2 10.4-5.6 16-10.1l3.4 15.3zm-60.9-27.8l40.8-25c-2-1.8-4.2-3.2-6.7-4.1-2.4-.9-5-1.4-7.8-1.4-7.7 0-14.1 2.7-19 8.1s-7.4 12.4-7.4 21v1.4h.1z"></path>
                                                         <path d="M492.1 344c0-1.2.3-2.4.9-3.5s1.5-1.9 2.6-2.6c1.1-.6 2.3-.9 3.5-.9s2.4.3 3.5.9 1.9 1.5 2.6 2.6c.6 1.1.9 2.3.9 3.5s-.3 2.4-.9 3.4c-.6 1.1-1.4 1.9-2.5 2.6-1.1.6-2.3 1-3.6 1-1.3 0-2.5-.3-3.6-1-1.1-.6-1.9-1.5-2.5-2.6-.6-1-.9-2.2-.9-3.4zm1 0c0 1.1.3 2.1.8 3s1.3 1.7 2.2 2.2c.9.5 1.9.8 3 .8s2.1-.3 3-.8 1.7-1.3 2.2-2.2.8-1.9.8-3-.3-2.1-.8-3-1.3-1.7-2.2-2.2c-.9-.5-1.9-.8-3-.8s-2.1.3-3 .8-1.7 1.3-2.2 2.2-.8 1.9-.8 3zm8.9-1.7c0 .5-.1.9-.4 1.3s-.6.7-1.1.9l2.2 3.7h-1.6l-1.9-3.3h-1.3v3.3h-1.4v-8.3h2.4c1 0 1.8.2 2.3.6.5.3.8.9.8 1.8zm-4.1 1.4h1c.5 0 .9-.1 1.2-.4.3-.3.5-.6.5-1 0-.5-.1-.8-.4-1-.3-.2-.7-.3-1.3-.3h-1v2.7z"></path>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </span>
                                 </div>
                              </div>
                              </p> 
                              <p>  </p>
                           </div>
                        </div>
                        <hr class="md">
                        <div><label class=" form-check form-check-inline form-control-plaintext"> <input id="a38957d1b" class="ember-checkbox ember-view form-check-input" type="checkbox"> &nbsp; <label for="a38957d1b" class="form-check-label"><span class="text-bold"> I have received the payment </span></label> </label></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="zb-txn-form">
               <div class="form-group">
                  <p>
                     <span>Email To</span> 
                     <span id="ember561" class="popover-container ember-view">
                        <i id="ember562" class="ember-view">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm align-text-bottom cursor-pointer text-muted">
                              <path d="M255.4 31.9c30.2 0 59.4 5.9 87 17.5 26.6 11.2 50.4 27.4 71 47.9 20.5 20.5 36.6 44.3 47.9 71 11.6 27.6 17.5 56.7 17.5 87s-5.9 59.4-17.5 87c-11.2 26.6-27.4 50.4-47.9 71-20.5 20.5-44.3 36.6-71 47.9-27.6 11.6-56.7 17.5-87 17.5s-59.4-5.9-87-17.5c-26.6-11.2-50.4-27.4-71-47.9-20.5-20.5-36.6-44.3-47.9-71-11.6-27.6-17.5-56.7-17.5-87s5.9-59.4 17.5-87c11.2-26.6 27.4-50.4 47.9-71s44.3-36.6 71-47.9c27.5-11.6 56.7-17.5 87-17.5m0-31.9C114.3 0 0 114.3 0 255.4s114.3 255.4 255.4 255.4 255.4-114.3 255.4-255.4S396.4 0 255.4 0z"></path>
                              <path d="M303.4 351.1h-8.2c-4.4 0-8-3.6-8-8v-94.4c0-15.3-11.4-28-26.6-29.7-2.5-.3-4.8-.5-6.7-.5-23.6 0-44.4 11.9-56.8 30l-.1.1v-.1c-1 2-1.7 5.2.7 6.5.6.3 1.2.5 1.8.5h15.9c4.4 0 8 3.6 8 8v79.8c0 4.4-3.6 8-8 8h-8.1c-8.7 0-15.8 7.1-15.8 15.8v.3c0 8.7 7.1 15.8 15.8 15.8h96.1c8.7 0 15.8-7.1 15.8-15.8v-.3c0-8.9-7.1-16-15.8-16zM255.4 127.7c-17.6 0-31.9 14.3-31.9 31.9s14.3 31.9 31.9 31.9 31.9-14.3 31.9-31.9-14.3-31.9-31.9-31.9z"></path>
                           </svg>
                        </i>
                  <div id="ember563" class="d-none popover bs-popover-right ember-view popover-help"></div></span></p> 
                  <div class="font-small">
                     <div class="form-check form-check-inline cf-label"> <input id="a98990017" class="ember-checkbox ember-view form-check-input" type="checkbox"> <label for="a98990017" title="terrence@example.com" class="form-check-label"> Terrence Boyle (Sample Contact) &lt;terrence@example.com&gt; </label> </div>
                     <div><a href="#" data-ember-action="" data-ember-action-565="565">+ Add New</a></div>
                  </div>
               </div>
            </div>
            <div class="zb-txn-form">
               <div class="text-muted" style="margin-top:40px;">
                  <b>Additional Fields: </b>Start adding custom fields for your invoices by going to 
                  <i>
                     Settings 
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm">
                        <path d="M14.5 429.9h244c6.6 0 12 5.4 12 12V500c0 9.9 11.2 15.5 19.2 9.6L502.1 352c6.5-4.8 6.5-14.5 0-19.3L289.7 175.1c-7.9-5.9-19.2-.2-19.2 9.6v58.1c0 6.6-5.4 12-12 12h-244c-6.6 0-12 5.4-12 12v151c0 6.7 5.4 12.1 12 12.1z" id="Layer_2_1_"></path>
                     </svg>
                     Preferences 
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm">
                        <path d="M14.5 429.9h244c6.6 0 12 5.4 12 12V500c0 9.9 11.2 15.5 19.2 9.6L502.1 352c6.5-4.8 6.5-14.5 0-19.3L289.7 175.1c-7.9-5.9-19.2-.2-19.2 9.6v58.1c0 6.6-5.4 12-12 12h-244c-6.6 0-12 5.4-12 12v151c0 6.7 5.4 12.1 12 12.1z" id="Layer_2_1_"></path>
                     </svg>
                     Invoices
                  </i>
                  . 
               </div>
               <div class="btn-toolbar  fixed-actions fill-container">
                  <div id="ember566" class="dropdown ember-view btn-group "><button id="ember567" class="btn btn-secondary ember-view" type="button"> Save as Draft </button>   </div>
                  <div id="ember568" class="dropdown ember-view btn-group dropup">
                     <button id="ember569" class="btn btn-primary ember-view" type="submit"> Save and Send </button> <button id="ember570" class="dropdown-toggle ember-view btn dropdown-toggle-split btn-primary" type="button"></button> 
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
                           &nbsp;&nbsp;  Save and Share 
                        </button>
                        <button id="ember770" class="ember-view dropdown-item" type="button">
                           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon align-text-bottom icon-sm">
                              <path d="M256.3.4C115 .4.5 114.9.5 256.2S115 512 256.3 512s255.8-114.5 255.8-255.8S397.6.4 256.3.4zm158.3 414.1c-20.6 20.6-44.5 36.7-71.1 48-27.6 11.7-56.8 17.6-87.1 17.6-30.3 0-59.5-5.9-87.1-17.6-26.7-11.3-50.6-27.4-71.1-48-20.6-20.6-36.7-44.5-48-71.1-11.7-27.6-17.6-56.9-17.6-87.1 0-30.3 5.9-59.5 17.6-87.1 11.3-26.7 27.4-50.6 48-71.1 20.6-20.6 44.5-36.7 71.1-48 27.6-11.7 56.8-17.6 87.1-17.6 30.3 0 59.5 5.9 87.1 17.6 26.7 11.3 50.6 27.4 71.1 48 20.6 20.6 36.7 44.5 48 71.1 11.7 27.6 17.6 56.9 17.6 87.1s-5.9 59.5-17.6 87.1c-11.4 26.6-27.4 50.5-48 71.1z"></path>
                              <path d="M383 274.5H271V111c0-8.8-7.2-16-16-16s-16 7.2-16 16v179.5c0 8.8 7.2 16 16 16h128c8.8 0 16-7.2 16-16s-7.2-16-16-16z"></path>
                           </svg>
                           &nbsp;&nbsp;  Save and Send Later 
                        </button>
                     </div>
                  </div>
                  <div class="btn-group"><button class="btn btn-secondary" type="button" data-ember-action="" data-ember-action-578="578">Cancel</button></div>
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
               </div>
            </div>
         </div>
      </form>
   </div>
</div>






@endsection

@section('custom_js')
@endsection