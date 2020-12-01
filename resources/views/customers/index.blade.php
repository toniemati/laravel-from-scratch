@extends('layouts.app')

@section('title', 'Customer List')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
    </div>
</div>

@can('create', User::class)
<div class="row">
    <div class="col-12">
        <p>
            <a href="/customers/create" class="btn btn-primary">Add New Customer</a>
        </p>
    </div>
</div>
@endcan

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
                    @can('view', $customer)
                        <a href="/customers/{{$customer->id}}" class="text-info">
                            {{$customer->name}}
                        </a>
                    @endcan
                    @cannot('view', $customer)
                        {{ $customer->name }}
                    @endcannot
                </td>
                <td> {{$customer->company->name}} </td>
                <td> {{$customer->active}} </td>
            </tr>
        @endforeach
    </tbody>
</table>

    <div class="row">
        <div class="col-12 text-center">
            {{ $customers->render() }}
        </div>
    </div>

@endsection