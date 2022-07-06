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
           <h3 class="float-left">New User</h3>
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
        
        <form class="contact-create" action="" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="row zb-txn-form">
                <div class="col-lg-8">
              
                 <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-lg-4 pt-0"> 
                            <span class="tooltip-container ember-view">User Type&nbsp;</span>
                            <span class="text-red">*</span>
                        </legend>
                        <div class="col-lg-8">
                            <div class="form-check form-check-inline">  
                                <input name="user_type" id="admin" class="form-check-input ember-view" type="radio" value="admin" @if(old('user_type')=="admin") checked="checked" @endif required> 
                                <label class="form-check-label" for="admin">Admin</label> 
                            </div>
                            <div class="form-check form-check-inline">  
                                <input name="user_type" id="manager"class="form-check-input ember-view" type="radio" value="manager" @if(old('user_type')=="manager") checked="checked" @endif required> 
                                <label class="form-check-label" for="manager">Manager</label> 
                            </div>
                            <div class="form-check form-check-inline">  
                                <input name="user_type" id="user"class="form-check-input ember-view" type="radio" value="user" @if(old('user_type')=="user") checked="checked" @endif required> 
                                <label class="form-check-label" for="user">User</label> 
                            </div>
                       </div>
                    </div>
                 </fieldset>
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-4">
                        Full Name&nbsp;<span class="text-red">*</span>
                    </label>
                    <div class="col-lg-6"> 
                        <input name="name" class="form-control ember-text-field ember-view" placeholder="User's Full Name" type="text" value="{{old('name')}}" required /> 
                    </div>
                 </div>
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-4">
                        Email Address&nbsp;<span class="text-red">*</span>
                    </label>
                    <div class="col-lg-6"> 
                        <input name="email_address" class="form-control ember-text-field ember-view" placeholder="User's Email Address" type="email" value="{{old('email_address')}}" required /> 
                    </div>
                 </div>
                 
                 <div class="row form-group">
                    <label class="col-form-label col-lg-4">
                        Phone
                    </label>
                    <div class="col-lg-6"> 
                        <input name="phone" value="{{old('phone')}}" class="form-control ember-text-field ember-view" placeholder="User's Phone" type="text" /> 
                    </div>
                 </div>
                 <div class="row form-group">
                    <label class="col-form-label col-lg-4">
                        Company (Designation)
                    </label>
                    <div class="col-lg-6"> 
                        <input name="designation" value="{{old('designation')}}" class="form-control ember-text-field ember-view" placeholder="User's Company (Designation)" type="text" /> 
                    </div>
                 </div>
                 <div class="row form-group">
                    <label class="col-form-label col-lg-4">
                        Password&nbsp;<span class="text-red">*</span>
                    </label>
                    <div class="col-lg-6">
                        <input name="password" class="form-control ember-text-field ember-view" placeholder="User's Login Password" type="text" required />
                    </div>
                    
                 </div>
                 
              </div>
           </div>
           
           
           
              
           <div class="btn-toolbar fixed-actions fill-container">
              <button class="btn btn-primary ember-view" type="submit">
                 Save 
              </button>
              <a href="{{Request::root()}}/users" class="btn btn-secondary">Cancel</a>
           </div>
        </form>
    </div>

@endsection

@section('custom_css')
@endsection