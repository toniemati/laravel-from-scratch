@extends('layouts.app')

@section('title', 'Details for ' . $customer->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{$customer->name}} </h1>
        <div class="d-flex">
            <p>
                <a href="/customers/{{$customer->id}}/edit" class="btn btn-outline-warning m-1">Edit</a>
            </p>
    
            <form action="/customers/{{$customer->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger m-1">Delete</button>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{$customer->name}} </p>
        <p><strong>Email</strong> {{$customer->email}} </p>
        <p><strong>Company</strong> {{$customer->company->name}} </p>
    </div>
</div>
    @if ($customer->image)
        <div class="row">
            <div class="col-12">
                <img src="{{asset('storage/'.$customer->image)}}" alt="user pic" class="img-thumbnail w-50">
            </div>
        </div>
    @endif

@endsection