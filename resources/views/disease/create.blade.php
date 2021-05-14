@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> 
        DISEASES CREATE </h2>    
    </div>
    <br>
    <div class="container text-center">
        <div class="float-left">
            <a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a>
            <a href="{{ url('disease') }}" class="btn bg-dark text-light"><< RETURN TO DISEASES LIST</a>
        </div>
    </div>
    <br><br><br>
    <div class="container text-center">
        {!! Form::open(['route' => 'disease.store'])    !!}
        <div class="form-group form-horizontal">
            <div class="form-group form-group-sm" >
                {!! Form::label('name', 'Disease Name: ', ['class' => 'control-label col-sm-2'])  !!}
                <div class="col-sm-3">
                    {!! Form::text('name', '', ['class' => 'form-control'])    !!}
                    @if ($errors->has('name'))
                <span class = "text-danger">{{ $errors->first('name') }}</span>
            @endif
                </div>
                {!! Form::label('description', 'Description: ', ['class' => 'control-label col-sm-2'])    !!}
                <div class="col-sm-3">
                    {!! Form::text('description', '', ['class' => 'form-control'])   !!}
                    @if ($errors->has('hiredate'))
                <span class = "text-danger">{{ $description->first('description') }}</span>
            @endif
                </div>
            </div>
            <div class="form-group form-group-sm" >
                <div class="col-sm-offset-5 col-sm-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary'])  !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection