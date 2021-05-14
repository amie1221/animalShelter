
@extends('layouts.base')
@section('content')
<div class="container">

        <div div class="p-80">
            <h1 class="text-center title-container">Login</h1>
        </div>

        <form action="{{ route('check') }}" method="post">
            @if(Session::get('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

        @csrf

        <div class="form-group">
            {{ Form::label('Email', null, ['class' => 'control-label']) }}
            {{ Form::text('email',null,array('class'=>'form-control','id'=>'email'))}}

            @if ($errors->has('email'))
                <span class = "text-danger">{{ $errors->first('email') }}</span>
            @endif

        </div>

        <div class="form-group">
            {{ Form::label('Password', null, ['class' => 'control-label']) }}
            {{ Form::text('password',null,array('class'=>'form-control','id'=>'password'))}}

            @if ($errors->has('password'))
                <span class = "text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Sign In</button>
        <a href="{{ route('register') }}" class="btn btn-default " role="button">Create account!</a>
        
        </form>
       
    </div>

<!-- <h2>Hello User,</h2>
Email received from: {{ $name }}

User information:

Name: {{ $name }}
Email: {{ $email }}
Phone: {{ $phone }}
Subject: {{ $subject }}
Message: {{ $form_message }}

Thank you -->