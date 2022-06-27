@extends('layouts.dashboard')
@section('custom_css')
@endsection

@section('body')
    Welcome, {{ucwords(Auth::user()->name)}} 
@endsection

@section('custom_js')
@endsection