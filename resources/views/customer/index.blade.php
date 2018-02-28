@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-default" href="{{ route('customers.create') }}" style="margin-bottom: 10px;">Add Customer</a>
    <table id="customer-table" class="table table-striped">
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
                    <td>
                        <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-default btn-delete" value="Delete" >
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="dialog-confirm">
<div>

<script>
$(function() {
    $('#customer-table').dataTable({
        columns: [
            null,
            {'orderable': false, 'searchable': false},
            null,
            null,
            null,
            {'orderable': false, 'searchable': false},
            {'orderable': false, 'searchable': false},
            null,
            {'orderable': false, 'searchable': false},
            {'orderable': false, 'searchable': false}
        ]
    });

    $('#customer-table').on('click', '.btn-delete', function(event) {
        event.preventDefault();
        var parentForm = $(this).parent();

        $( "#dialog-confirm" ).dialog({
            title: 'Delete this customer?',
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
                "Delete": function() {
                    $( this ).dialog( "close" );
                    parentForm.submit();
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    });
});
</script>
@endsection
