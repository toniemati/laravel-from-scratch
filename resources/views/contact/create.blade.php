@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<h1>Contact Us</h1>

@if (!session()->has('message'))
<form action="{{route('contact.store')}}" method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" class="form-control" value="{{old('name')}}">
        <p class="form-text text-danger">
            {{$errors->first('name')}}
        </p>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" id="email" type="text" class="form-control" value="{{old('email')}}">
        <span class="form-text text-danger">
            {{$errors->first('email')}}
        </span>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="{{old('message')}}"></textarea>
        <span class="form-text text-danger">
            {{$errors->first('message')}}
        </span>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
    @csrf
</form>    
@endif

@endsection

