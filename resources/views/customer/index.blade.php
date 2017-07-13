@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-default" href="{{ route('customers.create') }}">Add Customer</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zipcode</th>
                <th>Home Phone</th>
                <th>Work Phone</th>
                <th>Email</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->street }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->zipcode }}</td>
                    <td>{{ $customer->home_phone }}</td>
                    <td>{{ $customer->work_phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <a class="btn btn-default" href="{{ route('customers.edit', ['customer' => $customer->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
