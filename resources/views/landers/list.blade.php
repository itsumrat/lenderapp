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
      <a style="font-size: 14px" href="{{Request::root()}}/landers/add">
        Add new donor
      </a>
      <div id="ember1005" class="ember-view">
         <div id="ember1006" class="ember-view"></div>
      </div>
    </div>
    <h3 class="float-left">All Donors</h3>
    <div id="ember1007" class="ember-view">
      <div id="ember1008" class="ember-view"></div>
    </div>
</div>

<div class="table-responsive overflow-initial customviews-table">
    <table id="ember465" class="header-fixed table zi-table table-hover ember-view">
        <thead>
        <tr>
            <th class="sortable asc text-left ember-view">
                Donor No
            </th>
            <th class="sortable text-left ember-view">
                Name
            </th>
            <th class="text-left ember-view">
                Email Address 
            </th>
            <th class="text-left ember-view">
                Mobile
            </th>
            <th class="text-left ember-view">
                City
            </th>
            <th class="text-center ember-view" style="width:150px">
                Receivable (GBP £)
            </th>
         </tr>
      </thead>
      <tbody>
        @foreach($list__ AS $list)
        <tr class="ember-view">
            <td><a href="{{url('landers/view/'.$list->id)}}">{{$list->reg_no}}</a></td>
            <td>{{$list->first_name}}({{$list->sur_name}})</td>
            <td>{{$list->email_address}}</td>
            <td>{{$list->mobile}}</td>
            <td>{{$list->city}}</td>
            <td class="text-center">£{{ App\Models\LandersInvoiceModel::where('lander_id', ucwords($list -> id))->sum('amount') + App\Models\LandersInvoiceModel::where('lander_id', ucwords($list -> id))->sum('gift_ads_tax') }}</td>
        </tr>
        @endforeach
      </tbody>
   </table>
</div>

@endsection

@section('custom_css')
@endsection