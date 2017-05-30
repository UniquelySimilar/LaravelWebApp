@extends('layouts.app')

@section('content')
<div class="container">
	<form class="form-horizontal" method="POST" action="{{ route('customers.store') }}">
		
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-4">
				<input id="name" type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="street" class="col-md-2 col-md-offset-2 control-label">Street</label>
			<div class="col-md-4">
				<input id="street" type="text" name="street" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-md-2 col-md-offset-2 control-label">City</label>
			<div class="col-md-4">
				<input id="city" type="text" name="city" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-md-2 col-md-offset-2 control-label">State</label>
			<div class="col-md-4">
				<input id="state" type="text" name="state" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="zipcode" class="col-md-2 col-md-offset-2 control-label">Zipcode</label>
			<div class="col-md-4">
				<input id="zipcode" type="text" name="zipcode" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="home-phone" class="col-md-2 col-md-offset-2 control-label">Home Phone</label>
			<div class="col-md-4">
				<input id="home-phone" type="text" name="home_phone" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="work-phone" class="col-md-2 col-md-offset-2 control-label">Work Phone</label>
			<div class="col-md-4">
				<input id="work-phone" type="text" name="work_phone" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 col-md-offset-2 control-label">Email</label>
			<div class="col-md-4">
			<input id="email" type="email" name="email" class="form-control">
				</div>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
		<a class="btn btn-default" href="{{ route('customers.index') }}">Cancel</a>
	</form>
</div>
@endsection
