@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> RESCUER EDIT </h2>    
    </div>
    <br>
    <div class="container text-center">
        <div class="float-left">
            <a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a>
            <a href="{{ url('rescuer') }}" class="btn bg-dark text-light"><< RETURN TO RESCUER LIST</a>
        </div>
    </div>
    <br><br><br>
    <div class="container text-center">
	    {{	 Form::model($rescuer, ['method' => 'PUT', 'route' => ['rescuer.update', $rescuer]])	}}
	    <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('title', 'Title: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('title', old('title'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('first_name', 'First Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('first_name', old('first_name'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('last_name', 'Last Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('last_name', old('last_name'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('address', 'Address: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('address', old('address'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('town', 'Town: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('town', old('town'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('email', 'Email: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('email', old('email'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('gender', 'Gender: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('gender', old('gender'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('contact', 'Contact: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('contact', old('contact'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
                <div class="col-sm-offset-5 col-sm-2">
                	{!!	Form::submit('Update', ['class' => 'btn btn-primary'])	!!}
                </div>
            </div>
        </div>
		{!! Form::close() !!}
	</div>
@endsection