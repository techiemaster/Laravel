@extends('customers.master')

@section('content')

<!-- Breadcomb area Start-->
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-windows"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Customers</h2>
                    <p>The customer list</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                <div class="breadcomb-report">
                  <a class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="left" title="Create a new customer" href="{{ route('customers.create') }}">New</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcomb area End-->


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