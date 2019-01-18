@extends('customers.master')

@section('content')


<div class="row newbox">
	<div class="col-sm-6">
		<h2>Customers</h2>
	</div>
	<div class="col-sm-6">
		<div class="pull-right">
		<a class="btn btn-xs btn-success" href="{{ route('customers.create') }}">Create New Customer</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))
	<div class="alert alert-success"><p>{{ $message }}</p></div> 
@endif

<table class="table table-bordered">
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Description</th>
		<th width="300px">Actions</th>
	</tr>

	@foreach ($customers as $customer)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $customer->name }}</td>
			<td>{{ $customer->description }}</td>
			<td>
				<a class="btn btn-xs btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
				<a class="btn btn-xs btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>

				{!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->id], 'style'=> 'display:inline']) !!}

				{!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach	

</table>


	{!! $customers->links() !!}

@endsection