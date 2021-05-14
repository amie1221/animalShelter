@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> DISEASES SHOW </h2>    
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
	    {{	 Form::model($disease)	}}
	    <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('name', 'Disease Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('name', old('name'), ['class' => 'form-control', 'readonly'])	!!}
		    	</div>

		    	{!!	Form::label('description', 'Description: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('description', old('description'), ['class' => 'form-control', 'readonly'])	!!}
		    	</div>
	    	</div>
		    </div>
	    </div>
		{!! Form::close() !!}
	</div>
@endsection