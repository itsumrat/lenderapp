@extends('layouts.dashboard')

@section('custom_css')
.column.content-column.txn-creation-column {
    padding: 10px 25px;
}

.filter-title {
    font-size: 20px;
}

.customviews-table {
    margin-top: 10px;
}

.column .header {
    height: 60px;
}


.nav-pills-flat .nav-link.active {
    color: #FFF !important;
}
@endsection


@section('body')
<div class="scroll-y noscroll-x fill body scrollbox">
    <div class="header">
        <h3 class="float-left">New Donors</h3>
        <div id="ember1007" class="ember-view">
            <div id="ember1008" class="ember-view"></div>
        </div>
    </div>
    
    
    @if(count($errors))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <img src="{{Request::root()}}/resources/images/error.png" alt="error" style="height:20px;margin-top:-5px;" />
            <span style="padding-left:10px; font-size:13px;">{{$error}}</span><br/>
        @endforeach
    </div>
    <br/>
    @endif
    
    <div class="fill-container header-separator"></div>
    <form method="post" action="" enctype="multipart/form-data" class="contact-create">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        
       <div class="row zb-txn-form">
          <div class="col-lg-8">
            
          
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Donor No.&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-4"> 
                    <input name="reg_no" class="form-control ember-text-field ember-view" placeholder="Donor's Reg. No." type="text" value="L/{{date('m/y')}}/{{$no}}" required /> 
                </div>
            </div>
            
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Reference No.&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-4"> 
                    <input name="ref" class="form-control ember-text-field ember-view" placeholder="Donor's Reference No." type="text" value="{{old('ref')}}" required /> 
                </div>
            </div>    
            
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Donor's Name&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-4"> 
                    <input name="first_name" class="form-control ember-text-field ember-view" placeholder="First Name" type="text" value="{{old('first_name')}}" required /> 
                </div>
                <div class="col-lg-4"> 
                    <input name="sur_name" class="form-control ember-text-field ember-view" placeholder="Sur Name" type="text" value="{{old('sur_name')}}" required /> 
                </div>
            </div>
            
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Email Address&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-8"> 
                    <input name="email_address" class="form-control ember-text-field ember-view" placeholder="Donor's Email Address" type="email" value="{{old('email_address')}}" required /> 
                </div>
            </div>
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Donor's Phone&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-4"> 
                    <input name="mobile" value="{{old('mobile')}}" class="form-control ember-text-field ember-view" placeholder="Mobile No." type="text" required /> 
                </div>
                <div class="col-lg-4"> 
                    <input name="telephone" value="{{old('telephone')}}" class="form-control ember-text-field ember-view" placeholder="Telephone No. (optional)" type="text" /> 
                </div>
            </div>
            <div class="row form-group">
                <label class="col-form-label col-lg-3">
                    Gift Ads&nbsp;<span class="text-red">*</span>
                </label>
                <div class="col-lg-8" style="padding-top:5px;"> 
                    <div class="form-check form-check-inline">  
                        <input name="gift_ads" id="yes" class="form-check-input ember-view" type="radio" value="yes" @if(old('gift_ads')=="yes") checked="checked" @endif required> 
                        <label class="form-check-label" for="yes">Yes</label> 
                    </div>
                    <div class="form-check form-check-inline">  
                        <input name="gift_ads" checked="checked" id="no"class="form-check-input ember-view" type="radio" value="no" @if(old('gift_ads')=="no") checked="checked" @endif required> 
                        <label class="form-check-label" for="no">No</label> 
                    </div>
                </div>
            </div>
            
                      <div class="row form-group">
                         <label class="col-form-label col-lg-3">Address</label> 
                         <div class="col-lg-8"> 
                            <textarea placeholder="Address 1" name="address1" value="{{old('address1')}}" class="form-control ember-text-area ember-view" required ></textarea> 
                         </div>
                      </div>
                      <div class="row form-group">
                         <div class="col-lg-8 offset-lg-3"> 
                            <textarea placeholder="Address 2" name="address2" value="{{old('address2')}}" class="form-control ember-text-area ember-view"></textarea> 
                         </div>
                      </div>
                      
                      <div class="row form-group">
                         <label class="col-form-label col-lg-3">Zip Code&nbsp;<span class="text-red">*</span></label> 
                         <div class="col-lg-8"> 
                            <input name="postcode" value="{{old('postcode')}}" placeholder="Donor's Zip/Post Code" class="form-control ember-text-field ember-view" type="text" required /> 
                         </div>
                      </div>
                      <div class="row form-group">
                         <label class="col-form-label col-lg-3">City&nbsp;<span class="text-red">*</span></label> 
                         <div class="col-lg-8"> 
                            <input name="city" value="{{old('city')}}" placeholder="Donor's City" class="form-control ember-text-field ember-view" type="text" required /> 
                         </div>
                      </div>
                      <div class="row form-group">
                         <label class="col-form-label col-lg-3">Country&nbsp;<span class="text-red">*</span></label> 
                         <div class="col-lg-8"> 
                            <input name="country" value="{{old('country')}}" placeholder="Donor's Country" class="form-control ember-text-field ember-view" type="text" required /> 
                         </div>
                      </div>
          </div>
       </div>
       <div class="zb-txn-form">
          <ul class="nav nav-pills nav-pills-flat" role="tablist">
             <li class="nav-item form-tab"><span role="tab" class="nav-link text-blue cursor-pointer active">Archive</span></li>
             <li class="nav-item form-tab"><span role="tab" class="nav-link text-blue cursor-pointer">Bank Details</span></li>
          </ul>
       </div>
       <div class="tab-content">
          <div class="tab-pane active">
        <div class="fill-container line-item-section">
          <div class="zb-txn-form">
            <table class="line-item-table">
              <thead class="line-item-header">
              <th class="line-item-column over-flow" width="3%">Staff</th>
                <th class="line-item-column over-flow" width="2%" style="min-width: 35px;">Date</th>
                <th class="line-item-column over-flow " width="3%">Method</th>
                <!--<th class="line-item-column over-flow" width="11%" style="min-width: 200px;">Communication Details</th>-->
                <th class="line-item-column over-flow text-center" width="3%">Attachments</th>
                <!---->
                <th width="1%" style="min-width: 20px;"></th>
                  </thead>
              <tbody class="line-item-body">
                <tr id="cdata1" class="line-item new-line-item"> 
                  <!-- Staff -->
                  <td class="line-item-column"><input name="staff[]" class="form-control ember-text-field ember-view" type="text"></td>
                  
                  <!-- Date -->
                  <td class="line-item-column"><div id="ember1073" class="type-ahead ember-view">
                      <div id="ember1074" class="dropdown show ac-dropdown ember-view">
                        <div class="auto-select ac-selected" tabindex="-1">
                          <input name="cdate[]" class="ember-text-field form-control ac-search-txt ember-view" type="date">
                        </div>
                      </div>
                    </div></td>
                  
                  <!-- Method -->
                  <td class="line-item-column"><select name="method[]" class="form-control ember-text-field ember-view" type="text">
                      <option value="">----</option>
                      <option value="Call">Call</option>
                      <option value="Email">Email</option>
                      <option value="Text">Text</option>
                      <option value="Whatsapp">Whatsapp</option>
                    </select></td>
                  
                  <!-- Communication Details --> 
                  <!--<td class="line-item-column"><input name="details[]" class="form-control ember-text-field ember-view" type="text"></td>--> 
                  
                  <!-- Attachments -->
                  <td class="line-item-column text-center">
                  <div class="form-group ember-view" style="margin-bottom: 0px !important;">
                    <input name="attachement[]" type="file">
                    <div>
                    </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12"> <a href="javascript:addMoreCommunication1();">+ Add Archive</a> </div>
        </div>
        <!----> 
      </div>
          
      <div class="tab-pane ">
        <div class="zb-txn-form">
          <div class="row form-group">
            <label class="col-form-label col-lg-3"> Account Name <span class="text-red">*</span> </label>
            <div class="col-lg-4">
              <input name="account_name" value="{{old('account_name')}}" class="form-control ember-text-field ember-view" placeholder="Account Name" type="text" required />
            </div>
          </div>
          <div class="row form-group">
            <label class="col-form-label col-lg-3"> Bank <span class="text-red">*</span> </label>
            <div class="col-lg-4">
              <input name="bank" value="{{old('bank')}}" class="form-control ember-text-field ember-view" placeholder="Bank" type="text" required />
            </div>
          </div>
          <div class="row form-group">
            <label class="col-form-label col-lg-3"> Account No <span class="text-red">*</span> </label>
            <div class="col-lg-4">
              <input name="account_no" value="{{old('account_no')}}" class="form-control ember-text-field ember-view" placeholder="Account No" type="text" required />
            </div>
          </div>
          <div class="row form-group">
            <label class="col-form-label col-lg-3"> Sort Code <span class="text-red">*</span> </label>
            <div class="col-lg-4">
              <input name="bank_short_code" value="{{old('bank_short_code')}}" class="form-control ember-text-field ember-view" placeholder="Sort Code" type="text" required />
            </div>
          </div>
        </div>
      </div>
          
          <div class="tab-pane ">
             <div class="zb-txn-form">
                <div class="row">
                   <div class="col-lg-8">
                    <label class="col-form-label"> Remarks <span class="text-muted">(For Internal Use)</span></label> 
                    <textarea rows="6" placeholder="Optional" name="remarks" value="{{old('remarks')}}" maxlength="500" style="resize:none" class="form-control ember-text-area ember-view"></textarea> 
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="btn-toolbar fixed-actions fill-container">
		   <?php if(Auth::user()->role === 'admin' || Auth::user()->role === 'manager') { ?>
			  <button class="btn btn-primary ember-view" type="submit">
				Save 
			  </button>
			<?php } ?>
          <a href="{{url('landers')}}" class="btn btn-secondary" type="button">
            Cancel
          </a>
       </div>
    </form>
 </div>
@endsection


@section('custom_js')
<script>
$('.nav-item.form-tab').click(function(){
    $(".nav-item.form-tab").each(function(i){
        $(".nav-item.form-tab>span").eq(i).removeClass("active");
        $(".nav-item.form-tab>span").eq(i).removeClass("text-blue");
        $('.nav-item.form-tab>span').eq(no).addClass("text-blue");
        
        $(".tab-content>.tab-pane").eq(i).removeClass("active");
    });
    
    var no = $('.nav-item.form-tab').index(this);
    $('.nav-item.form-tab>span').eq(no).addClass("active");
    $('.nav-item.form-tab>span').eq(no).removeClass("text-blue");
    $(".tab-content>.tab-pane").eq(no).addClass("active");
});


function addMoreCommunication1() {
    var data = '<tr class="line-item new-line-item"><td class="line-item-column"> <input name="staff[]" class="form-control ember-text-field ember-view" type="text"></td><td class="line-item-column"><div class="type-ahead ember-view"><div class="dropdown show ac-dropdown ember-view"><div class="auto-select ac-selected" tabindex="-1"><input name="cdate[]" class="ember-text-field form-control ac-search-txt ember-view" type="date"></div></div></div></td><td class="line-item-column"><select name="method[]" class="form-control ember-text-field ember-view" type="text"><option value="">----</option><option value="Call">Call</option><option value="Email">Email</option><option value="Text">Text</option><option value="Whatsapp">Whatsapp</option></select></td><td class="line-item-column text-center"><div class="form-group ember-view" style="margin-bottom: 0px !important;"><span class="btn btn-attachment file-upload"><input name="attachement[]" type="file"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm align-text-top action-icons"><path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path><path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path></svg>Attachment</span><div></td><td><div onclick="$(this).closest(\'tr\').remove();" class="item-actions-container cross-btn"><div class="item-actions"><span class="cursor-pointer tooltip-container ember-view"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm icon-cancel-circled"><path d="M256 32c30.3 0 59.6 5.9 87.2 17.6 26.7 11.3 50.6 27.4 71.2 48s36.7 44.5 48 71.2c11.7 27.6 17.6 56.9 17.6 87.2s-5.9 59.6-17.6 87.2c-11.3 26.7-27.4 50.6-48 71.2s-44.5 36.7-71.2 48C315.6 474.1 286.3 480 256 480s-59.6-5.9-87.2-17.6c-26.7-11.3-50.6-27.4-71.2-48s-36.7-44.5-48-71.2C37.9 315.6 32 286.3 32 256s5.9-59.6 17.6-87.2c11.3-26.7 27.4-50.6 48-71.2s44.5-36.7 71.2-48C196.4 37.9 225.7 32 256 32m0-32C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0z"></path><path d="M284.3 250.3l62.3-62.3c6.2-6.2 6.2-16.2 0-22.4l-.2-.2c-6.2-6.2-16.2-6.2-22.4 0l-62.3 62.3c-3.1 3.1-8.2 3.1-11.3 0L188 165.4c-6.2-6.2-16.2-6.2-22.4 0l-.2.2c-6.2 6.2-6.2 16.2 0 22.4l62.3 62.3c3.1 3.1 3.1 8.2 0 11.3L165.4 324c-6.2 6.2-6.2 16.2 0 22.4l.2.2c6.2 6.2 16.2 6.2 22.4 0l62.3-62.3c3.1-3.1 8.2-3.1 11.3 0l62.3 62.3c6.2 6.2 16.2 6.2 22.4 0l.2-.2c6.2-6.2 6.2-16.2 0-22.4l-62.3-62.3c-3-3.2-3-8.2.1-11.4z"></path></svg></span></div></div></td></tr>';
    
    $("#cdata1").after(data);
    
}
	
	

function addMoreCommunication2() {
    var data = '<tr class="line-item new-line-item"><td class="line-item-column"><div class="type-ahead ember-view"><div class="dropdown show ac-dropdown ember-view"><div class="auto-select ac-selected" tabindex="-1"><input name="cdate[]" class="ember-text-field form-control ac-search-txt ember-view" type="date"></div></div></div></td><td class="line-item-column"> <input name="staff[]" class="form-control ember-text-field ember-view" type="text"></td><td class="line-item-column"><select name="method[]" class="form-control ember-text-field ember-view" type="text"><option value="">----</option><option value="Call">Call</option><option value="Email">Email</option><option value="Text">Text</option><option value="Whatsapp">Whatsapp</option></select></td><td class="line-item-column"> <input name="details[]" class="form-control ember-text-field ember-view" type="text"> </td><td class="line-item-column text-center"><div class="form-group ember-view" style="margin-bottom: 0px !important;"><span class="btn btn-attachment file-upload"><input name="attachement[]" type="file"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm align-text-top action-icons"><path d="M446.3 270.7c-8.7 0-15.8 7.1-15.8 15.8v141.7h-349V286.6c0-8.7-7.1-15.8-15.8-15.8s-15.8 7.1-15.8 15.8v157.6c0 8.7 7.1 15.8 15.8 15.8h380.6c8.7 0 15.8-7.1 15.8-15.8V286.6c.1-8.8-7-15.9-15.8-15.9z"></path><path d="M267.2 56.6c-.4-.4-.8-.7-1.2-1.1-.2-.1-.4-.3-.5-.4-.2-.2-.5-.4-.7-.5-.2-.1-.4-.3-.7-.4-.2-.1-.4-.3-.7-.4-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.2-.1-.5-.2-.7-.3-.3-.1-.5-.2-.8-.3-.2-.1-.5-.1-.7-.2-.3-.1-.5-.1-.8-.2-.3-.1-.6-.1-.8-.1-.2 0-.5-.1-.7-.1-.5-.1-1-.1-1.6-.1-.5 0-1 0-1.6.1-.2 0-.5.1-.7.1-.3 0-.6.1-.8.1-.3.1-.5.1-.8.2-.2.1-.5.1-.7.2-.3.1-.5.2-.8.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.5.2-.7.3-.2.1-.4.3-.7.4-.2.1-.4.3-.7.4-.3.2-.5.4-.7.5-.2.1-.3.2-.5.4-.4.3-.8.7-1.2 1.1L150.4 151c-6.2 6.2-6.2 16.2 0 22.4 6.2 6.2 16.2 6.2 22.4 0l67.3-67.3v210.7c0 8.7 7.1 15.8 15.8 15.8 8.7 0 15.8-7.1 15.8-15.8V106.1l67.3 67.3c6.2 6.2 16.2 6.2 22.4 0 6.2-6.2 6.2-16.2 0-22.4l-94.2-94.4z"></path></svg>Attachment</span><div></td><td><div onclick="$(this).closest(\'tr\').remove();" class="item-actions-container cross-btn"><div class="item-actions"><span class="cursor-pointer tooltip-container ember-view"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-sm icon-cancel-circled"><path d="M256 32c30.3 0 59.6 5.9 87.2 17.6 26.7 11.3 50.6 27.4 71.2 48s36.7 44.5 48 71.2c11.7 27.6 17.6 56.9 17.6 87.2s-5.9 59.6-17.6 87.2c-11.3 26.7-27.4 50.6-48 71.2s-44.5 36.7-71.2 48C315.6 474.1 286.3 480 256 480s-59.6-5.9-87.2-17.6c-26.7-11.3-50.6-27.4-71.2-48s-36.7-44.5-48-71.2C37.9 315.6 32 286.3 32 256s5.9-59.6 17.6-87.2c11.3-26.7 27.4-50.6 48-71.2s44.5-36.7 71.2-48C196.4 37.9 225.7 32 256 32m0-32C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0z"></path><path d="M284.3 250.3l62.3-62.3c6.2-6.2 6.2-16.2 0-22.4l-.2-.2c-6.2-6.2-16.2-6.2-22.4 0l-62.3 62.3c-3.1 3.1-8.2 3.1-11.3 0L188 165.4c-6.2-6.2-16.2-6.2-22.4 0l-.2.2c-6.2 6.2-6.2 16.2 0 22.4l62.3 62.3c3.1 3.1 3.1 8.2 0 11.3L165.4 324c-6.2 6.2-6.2 16.2 0 22.4l.2.2c6.2 6.2 16.2 6.2 22.4 0l62.3-62.3c3.1-3.1 8.2-3.1 11.3 0l62.3 62.3c6.2 6.2 16.2 6.2 22.4 0l.2-.2c6.2-6.2 6.2-16.2 0-22.4l-62.3-62.3c-3-3.2-3-8.2.1-11.4z"></path></svg></span></div></div></td></tr>';
    
    $("#cdata2").after(data);
    
}

</script>
@endsection