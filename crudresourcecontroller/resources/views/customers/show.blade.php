@extends('customers.master')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>The Customer</h3>
				<a class="btn btn-xs btn-primary" href="{{ route('customers.index') }}">Back</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<strong>Name : </strong>
				{{ $customer->name }}
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group">
				<strong>Description : </strong>
				{{ $customer->description }}
			</div>
		</div>
	</div>

@endsection