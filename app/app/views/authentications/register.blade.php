@extends('layouts.master')

@section('content')

    <h1> Register </h1>

    @include('layouts.partials.errors')

    {{ Form::open(['route' => 'register', 'role' => 'form']) }}
        <div class="form-group">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Password Confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}

@stop