@extends('layouts.app')

@section('title', 'Customer List')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p>
            <a href="/customers/create" class="btn btn-primary">Add New Customer</a>
        </p>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Company Name</th>
        <th>Active</th>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td> {{$customer->id}} </td>
                <td>
                    <a href="/customers/{{$customer->id}}" class="text-info">{{$customer->name}}</a>
                </td>
                <td> {{$customer->company->name}} </td>
                <td> {{$customer->active}} </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection