@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ANIMAL SHOW </h2>    
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
	    {{	 Form::model($animal)	}}
	  <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniName', 'Name: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniName', old('aniName'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('aniGender', ' Gender: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniGender', old('aniGender'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniBreed', 'Last Breed: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniBreed', old('aniBreed'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('aniAge', 'Age: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniAge', old('aniAge'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('aniColor', 'Color: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniColor', old('aniColor'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('aniSize', 'Size: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('aniSize', old('aniSize'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('animal_type_id', 'Type: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('animal_type_id', old('animal_type_id'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('rescue_id', 'Rescued by: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::text('rescue_id', old('rescue_id'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('employee_id', 'Actioned by: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    {!!	Form::text('employee_id', old('employee_id'), ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('date_added', 'Role: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::date('date_added', old('date_added'), ['class' => 'form-control'])	!!}
		    	</div>
	    	</div>

	    	<div class="form-group form-group-sm" >	  
                <div class="col-sm-3 col-sm-offset-3">
           		<img src="{{asset($animal->aniImage)}}">
                </div>
            </div>
	    	</div>
        </div>
		{!! Form::close() !!}
	</div>
@endsection