@extends('layouts.app')

@section('content')
<div class="container">
	<form class="form-horizontal" method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
		
		{{ csrf_field() }}

		<input name="_method" type="hidden" value="PUT">

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-4">
				<input id="name" type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $customer->name }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('name'))
					<span style="color: red;">{{ $errors->first('name') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="street" class="col-md-2 col-md-offset-2 control-label">Street</label>
			<div class="col-md-4">
				<input id="street" type="text" name="street" class="form-control" value="{{ old('street') ? old('street') : $customer->street }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('street'))
					<span style="color: red;">{{ $errors->first('street') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-md-2 col-md-offset-2 control-label">City</label>
			<div class="col-md-4">
				<input id="city" type="text" name="city" class="form-control" value="{{ old('city') ? old('city') : $customer->city }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('city'))
					<span style="color: red;">{{ $errors->first('city') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-md-2 col-md-offset-2 control-label">State</label>
			<div class="col-md-4">
				<input id="state" type="text" name="state" class="form-control" value="{{ old('state') ? old('state') : $customer->state }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('state'))
					<span style="color: red;">{{ $errors->first('state') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="zipcode" class="col-md-2 col-md-offset-2 control-label">Zipcode</label>
			<div class="col-md-4">
				<input id="zipcode" type="text" name="zipcode" class="form-control" value="{{ old('zipcode') ? old('zipcode') : $customer->zipcode }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('zipcode'))
					<span style="color: red;">{{ $errors->first('zipcode') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="home-phone" class="col-md-2 col-md-offset-2 control-label">Home Phone</label>
			<div class="col-md-4">
				<input id="home-phone" type="text" name="home_phone" class="form-control" value="{{ old('home_phone') ? old('home_phone') : $customer->home_phone }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('home_phone'))
					<span style="color: red;">{{ $errors->first('home_phone') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="work-phone" class="col-md-2 col-md-offset-2 control-label">Work Phone</label>
			<div class="col-md-4">
				<input id="work-phone" type="text" name="work_phone" class="form-control" value="{{ old('work_phone') ? old('work_phone') : $customer->work_phone }}">
			</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('work_phone'))
					<span style="color: red;">{{ $errors->first('work_phone') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 col-md-offset-2 control-label">Email</label>
			<div class="col-md-4">
			<input id="email" type="email" name="email" class="form-control" value="{{ old('email') ? old('email') : $customer->email }}">
				</div>
			<div class="col-md-4" style="padding-left: 0">
				@if($errors->first('email'))
					<span style="color: red;">{{ $errors->first('email') }}</span>
				@else
					<span style="color: red; font-size: 2em;">*</span>
				@endif
			</div>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
		<a class="btn btn-default" href="{{ route('customers.index') }}">Cancel</a>
	</form>
</div>
@endsection
