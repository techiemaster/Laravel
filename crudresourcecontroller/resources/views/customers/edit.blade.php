@extends('customers.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>Edit Customer</h3>
			</div>
		</div>
	</div>

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!!</strong> There were some problems with your input.

			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($customer, ['method'=>'PATCH','route'=>['customers.update', $customer->id]]) !!}
		@include('customers.form')
	{!! Form::close() !!}
	

@endsection	