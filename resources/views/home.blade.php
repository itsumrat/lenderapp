@extends('layouts.dashboard')
@section('custom_css')
@endsection

@section('body')
    Welcome, {{ucwords(Auth::user()->name)}} 

	<div class='container'>	
		<div class='row'>
			<div class='col-lg-6 mb-5'>
				<div class="card">
				  <div class="card-body text-center">
					<h2 class="card-title">Total Landers</h2>
					<h3 class="card-subtitle mt-5 mb-5">{{ $total_landers }}</h3>
					  
				  </div>
				</div>
			</div>
			<div class='col-lg-6 mb-5'>
				<div class="card">
				  <div class="card-body text-center">
					<h2 class="card-title">Total Donors</h2>
					<h3 class="card-subtitle mt-5 mb-5">{{ $total_donors }}</h3>
					  
				  </div>
				</div>
			</div>
			<div class='col-lg-6 mb-5'>
				<div class="card">
				  <div class="card-body text-center">
					<h2 class="card-title">Total Loan Amount</h2>
					<h3 class="card-subtitle mt-5 mb-5">£ {{ $total_loan_amount }}</h3>
					  
				  </div>
				</div>
			</div>
			<div class='col-lg-6 mb-5'>
				<div class="card">
				  <div class="card-body text-center">
					<h2 class="card-title">Total Payble Amount</h2>
					<h3 class="card-subtitle mt-5 mb-5">£ {{ $total_payble_amount }}</h3>
					  
				  </div>
				</div>
			</div>
		</div>
	</div>
	
@endsection

@section('custom_js')
@endsection