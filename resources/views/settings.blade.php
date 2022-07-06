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
           <h3 class="float-left">Application Settings</h3>
           <div id="ember1007" class="ember-view">
              <div id="ember1008" class="ember-view"></div>
           </div>
        </div>
        
        
        @if(Session::has('success'))
        <div class="alert alert-success">
            <img src="{{Request::root()}}/resources/images/success.png" alt="success" style="height:20px;margin-top:-5px;" />
            <span style="padding-left:10px; font-size:13px;">{{Session::get('success')}}</span>
        </div>
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
                        Application Title &nbsp;<span class="text-red">*</span>
                    </label>
                    <div class="col-lg-6"> 
                        <input name="title" class="form-control ember-text-field ember-view" placeholder="Enter Title" type="text" value="{{$settings -> title}}" required /> 
                    </div>
                 </div>
                 
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-3">
                        Application Logo
                    </label>
                    <div class="col-lg-4"> 
                        <input type="file" name="logo" />
                    </div>
                    <label class="col-form-label col-lg-3">
                        <img src="{{Request::root()}}/storage/app/public/settings/{{$settings -> logo}}" alt="Logo" style="height:60px"/>
                    </label>
                 </div>
                 
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-3">
                        Application Favicon
                    </label>
                    <div class="col-lg-4">
                        <input type="file" name="favicon" />
                    </div>
                    <label class="col-form-label col-lg-3">
                        <img src="{{Request::root()}}/storage/app/public/settings/{{$settings -> favicon}}" alt="Favicon" style="height:40px"/>
                    </label>
                 </div>
                 
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
@endsection