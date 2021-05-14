@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ANIMAL CREATE </h2>    
    </div>
    <br>
    <div class="container text-center">
        <div class="float-left">
            <a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a>
            <a href="{{ url('animal') }}" class="btn bg-dark text-light"><< RETURN TO ANIMAL LIST</a>
        </div>
    </div>
    <br><br><br>
    <div class="container text-center">
	    {!!	Form::open(['route' => 'animal.store', 'files'=> true])	!!}
	    <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniName', 'Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniName', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniName'))
                <span class = "text-danger">{{ $errors->first('aniName') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('aniGender', 'Gender: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniGender', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniGender'))
                <span class = "text-danger">{{ $errors->first('aniGender') }}</span>
            @endif
		    	</div>
	    	</div>
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniBreed', 'Breed: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniBreed', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniBreed'))
                <span class = "text-danger">{{ $errors->first('aniBreed') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('aniAge', 'Age: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniAge', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniAge'))
                <span class = "text-danger">{{ $errors->first('aniAge') }}</span>
            @endif
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniColor', 'Color: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniColor', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniColor'))
                <span class = "text-danger">{{ $errors->first('aniColor') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('aniSize', 'Size: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniSize', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('aniSize'))
                <span class = "text-danger">{{ $errors->first('aniSize') }}</span>
            @endif
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('animal_type_id', 'Type: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!! Form::select('animal_type_id',$animal_types, null,['class' => 'form-control']) !!}
			    	  @if ($errors->has('animal_type_id'))
                <span class = "text-danger">{{ $errors->first('animal_type_id') }}</span>
            @endif
		    	</div>

		    	{!!	Form::label('rescue_id', 'Rescued by: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    {!! Form::select('rescue_id',$rescuers, null,['class' => 'form-control']) !!}
			      @if ($errors->has('rescue_id'))
                <span class = "text-danger">{{ $errors->first('rescue_id') }}</span>
            @endif
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('employee_id', 'Actioned by: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!! Form::select('employee_id',$personnels, null,['class' => 'form-control']) !!}
			    	  @if ($errors->has('employee_id'))
                <span class = "text-danger">{{ $errors->first('employee_id') }}</span>
            @endif
		    	</div>
		    	{!!	Form::label('date_added', 'Date Added: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::date('date_added', '', ['class' => 'form-control'])	!!}
			    	  @if ($errors->has('date_added'))
                <span class = "text-danger">{{ $errors->first('date_added') }}</span>
            @endif
		    	</div>
	
		    </div>
           
	    	<div class="form-group form-group-sm" >	  
		    	<div class="col-sm-offset-5 col-sm-2">
			    	{{ Form::label('aniImage', 'Upload: ', ['class' => 'form-label']) }}
                    {{ Form::file('aniImage',null,array('class'=>'form-control','id'=>'aniImage'))}}
                 
               
		    	</div>

                <div class="col-sm-offset-5 col-sm-2">
                	{!!	Form::submit('Submit', ['class' => 'btn btn-primary'])	!!}
                </div>
            </div>

        </div>
		{!! Form::close() !!}
	</div>
@endsection