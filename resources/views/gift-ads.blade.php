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

@endsection

@section('body')

<!--

-->

    <div class="scroll-y noscroll-x fill body scrollbox">
        <div class="header">
           <h3 class="float-left">Gift Ads Settings</h3>
           <div id="ember1007" class="ember-view">
              <div id="ember1008" class="ember-view"></div>
           </div>
        </div>
        
        
        @if(Session::has('success'))
        <div class="alert alert-success">
            <img src="{{Request::root()}}/resources/images/success.png" alt="success" style="height:20px;margin-top:-5px;" />
            <span style="padding-left:10px; font-size:13px;">{{Session::get('success')}}</span>
        </div>
        <br/>
        @endif
        
        <?php session()->forget('success'); ?>
        
        
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
        
        <form class="contact-create" enctype="multipart/form-data" action="" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row zb-txn-form">
                <div class="col-lg-8">
              
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-3">
                        Gift Ads Amount&nbsp;<span class="text-red">*</span>
                    </label>
                    <div class="col-lg-5"> 
                        <input name="gift_ads_amount" class="form-control ember-text-field ember-view" placeholder="Enter Gift Ads Amount" type="text" id="gift_ads_amount" onkeyup="javascript:checkNumber('gift_ads_amount');" value="{{$settings -> gift_ads_amount}}" required /> 
                    </div>
                 </div>
                 
                 <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-lg-3 pt-0"> 
                            <span class="tooltip-container ember-view">Gift Ads Type&nbsp;</span>
                            <span class="text-red">*</span>
                        </legend>
                        <div class="col-lg-8">
                            <div class="form-check form-check-inline">  
                                <input name="gift_ads_type" id="admin" class="form-check-input ember-view" type="radio" value="flat" @if($settings -> gift_ads_type=="flat") checked="checked" @endif required> 
                                <label class="form-check-label" for="admin">Fixed / Flat</label> 
                            </div>
                            &nbsp;&nbsp;
                            <div class="form-check form-check-inline">  
                                <input name="gift_ads_type" id="manager"class="form-check-input ember-view" type="radio" value="percentage" @if($settings -> gift_ads_type=="percentage") checked="checked" @endif required> 
                                <label class="form-check-label" for="manager">Percentage</label> 
                            </div>
                       </div>
                    </div>
                 </fieldset>
                 
                 
              </div>
           </div>
           
           
           
              
           <div class="btn-toolbar fixed-actions fill-container">
              <button class="btn btn-primary ember-view" type="submit">
                 Save 
              </button>
           </div>
           
        </form>
    </div>

@endsection

@section('custom_js')
<script>
function checkNumber(div_id) {
    var data, len, new_value="", fl=0;
    data = document.getElementById(div_id);
    data.value.toString();
    len = data.value.length;
    for( var i = 0; i < len; i++ ) {
        if( isNaN( data.value[i] ) ) {
            if( data.value[i] == "." && fl < 1 ) {
                fl++;
            }
            else {
                continue;
            }
        }
        new_value += data.value[i];
    }
    data.value = new_value;
}
</script>
@endsection