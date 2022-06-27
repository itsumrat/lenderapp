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

@if(count($errors))
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <img src="{{Request::root()}}/resources/images/error.png" alt="error" style="height:20px;margin-top:-5px;" />
        <span style="padding-left:10px; font-size:13px;">{{$error}}</span><br/>
    @endforeach
</div>
@endif

<div class="header" style="padding:0px">
    <div id="ember1003" class="pagetips-title float-right ember-view">
      <a style="font-size: 14px" href="{{Request::root()}}/users/add">
        Add new user
      </a>
      <div id="ember1005" class="ember-view">
         <div id="ember1006" class="ember-view"></div>
      </div>
    </div>
    <h3 class="float-left">All Users</h3>
    <div id="ember1007" class="ember-view">
      <div id="ember1008" class="ember-view"></div>
    </div>
</div>

<div class="table-responsive overflow-initial customviews-table">
    <table id="ember465" class="header-fixed table zi-table table-hover ember-view">
        <thead>
        <tr>
            <th class="sortable asc text-left ember-view">
                Name
            </th>
            <th class="sortable text-left ember-view">
                Email Address
            </th>
            <th class="text-left ember-view">
                Phone 
            </th>
            <th class="  text-left ember-view">
                Company(Designation)
            </th>
            <th class="text-center ember-view" style="width:100px">
                Role
            </th>
            <th class="text-center ember-view" style="width:150px">
                Action
            </th>
         </tr>
      </thead>
      <tbody>
        @foreach( $list__ AS $data )
        <tr class="ember-view">
            <td>{{$data->name}}</td>
            <td>{{$data->email_address}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->designation}}</td>
            <td class="text-center">{{ucfirst($data->role)}}</td>
            <td class="text-center">
                @if($data->is_active=='yes')
                <a href="{{Request::root()}}/users/edit/{{$data->id}}">edit</a>
                &nbsp;-&nbsp;
                <a href="javascript:removeUser();">remove</a>
                @else
                <a href="javascript:removeUser();">undo</a>
                @endif
            </td>
        </tr>
        @endforeach
      </tbody>
   </table>
</div>

@endsection

@section('custom_js')
<script>
function removeUser() {
    if( confirm("Are you sure want to change status for this user?") ) {
        document.location.href="{{Request::root()}}/users/remove/{{$data->id}}";
    }
}
</script>
@endsection