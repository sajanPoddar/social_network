@extends('layouts.master')
@section('title')
welcome
@endsection

@section('content')
@include('includes.message-block')
<div class="row">
    <div class="col-md-6">
    <h3>sign up</h3>
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}" >
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
            </div>
            <div class="form-group {{ $errors->has('first_name') ? 'has-error': '' }}">
                <label for="first-name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="name" value="{{ Request::old('first_name') }}">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error': '' }} ">
                <label for="password">Your password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
    <div class="col-md-6">
    <h3>sign in</h3>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group {{ $errors->has('email') ? 'has-error': '' }} ">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
            </div>
            
            <div class="form-group {{ $errors->has('password') ? 'has-error': '' }} ">
                <label for="password">Your password</label>
                <input class="form-control" type="password" name="password" id="email">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
@endsection