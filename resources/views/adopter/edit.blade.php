@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ADOPTER EDIT </h2>    
    </div>
    <br>
    <div class="container text-center">
        <div class="float-left">
            <a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a>
            <a href="{{ url('adopter') }}" class="btn bg-dark text-light"><< RETURN TO ADOPTER LIST</a>
        </div>
    </div>
    <br><br><br>
    <div class="container text-center">
	    {{	 Form::model($adopter, ['method' => 'PUT', 'route' => ['adopter.update', $adopter]])	}}
	    <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('title', 'Title: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('title', old('title'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('title'))
                <span class = "text-danger">{{ $errors->first('title') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('first_name', 'First Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('first_name', old('first_name'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('first_name'))
                <span class = "text-danger">{{ $errors->first('first_name') }}</span>
            @endif
		    	</div>
	    	</div>
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('last_name', 'Last Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('last_name', old('last_name'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('last_name'))
                <span class = "text-danger">{{ $errors->first('last_name') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('address', 'Address: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('address', old('address'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('address'))
                <span class = "text-danger">{{ $errors->first('address') }}</span>
            @endif
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('town', 'Town: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('town', old('town'), ['class' => 'form-control'])	!!}@if ($errors->has('town'))
                <span class = "text-danger">{{ $errors->first('town') }}</span>
            @endif		    	</div>

		    	{!!	Form::label('email', 'Email: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('email', old('email'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('email'))
                <span class = "text-danger">{{ $errors->first('email') }}</span>
            @endif
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('gender', 'Gender: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('gender', old('gender'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('gender'))
                <span class = "text-danger">{{ $errors->first('gender') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('contact', 'Contact: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('contact', old('contact'), ['class' => 'form-control'])	!!}
			    	@if ($errors->has('contact'))
                <span class = "text-danger">{{ $errors->first('contact') }}</span>
            @endif
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