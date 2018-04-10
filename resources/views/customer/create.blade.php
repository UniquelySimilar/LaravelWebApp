@extends('layouts.app')

@section('content')
<div id="create-container" class="container">
	 <form class="form-horizontal" method="POST" action="{{ route('customers.store') }}">
		
		{{ csrf_field() }}

		@component('customer.components.text-input',
			[
				'inputId' => 'name',
				'inputName' => 'name',
				'inputLabel' => 'Name',
				'oldValue' => old('name'),
				'validationError' => $errors->first('name'),
				'required' => true
			])
		@endcomponent

		@component('customer.components.text-input',
			[
				'inputId' => 'street',
				'inputName' => 'street',
				'inputLabel' => 'Street',
				'oldValue' => old('street'),
				'validationError' => $errors->first('street'),
				'required' => true
			])
		@endcomponent

		@component('customer.components.text-input',
			[
				'inputId' => 'city',
				'inputName' => 'city',
				'inputLabel' => 'City',
				'oldValue' => old('city'),
				'validationError' => $errors->first('city'),
				'required' => true
			])
		@endcomponent

		<!-- Global single file Vue component -->
		<state-select selected-state="CO"></state-select>

		@component('customer.components.text-input',
			[
				'inputId' => 'zipcode',
				'inputName' => 'zipcode',
				'inputLabel' => 'Zipcode',
				'oldValue' => old('zipcode'),
				'validationError' => $errors->first('zipcode'),
				'required' => true
			])
		@endcomponent

		@component('customer.components.text-input',
			[
				'inputId' => 'home-phone',
				'inputName' => 'home_phone',
				'inputLabel' => 'Home Phone',
				'oldValue' => old('home_phone'),
				'validationError' => $errors->first('home_phone'),
				'required' => true
			])
		@endcomponent

		@component('customer.components.text-input',
			[
				'inputId' => 'work-phone',
				'inputName' => 'work_phone',
				'inputLabel' => 'Work Phone',
				'oldValue' => old('work_phone'),
				'validationError' => $errors->first('work_phone'),
				'required' => false
			])
		@endcomponent

		@component('customer.components.text-input',
			[
				'inputId' => 'email',
				'inputName' => 'email',
				'inputLabel' => 'Email',
				'oldValue' => old('email'),
				'validationError' => $errors->first('email'),
				'required' => true
			])
		@endcomponent

		<button type="submit" class="btn btn-default">Submit</button>
		<a class="btn btn-default" href="{{ route('customers.index') }}">Cancel</a>
	</form>
</div>

<script>
	new Vue({
		el: '#create-container'
	});
</script>

@endsection
