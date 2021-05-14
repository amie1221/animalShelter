@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ADOPTION </h2>    
    </div>
    <br>
    <div class="container text-center">
        <div class="float-left">
            <a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a>
            <a href="{{ url('adoptline') }}" class="btn bg-dark text-light"><< RETURN TO ADOPTION LIST</a>
        </div>
    </div>
  <br><br><br>
   <div class="container text-center">

   	 {!!	Form::open(['route' => 'adoptline.store', 'files'=> true])	!!}


       

	    <div class="form-group form-horizontal">
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('adoptLdate', 'Adoption Date: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!!	Form::date('adoptLdate', '', ['class' => 'form-control'])	!!}
		    	</div>

		    	{!!	Form::label('adopter_id', 'Adopter: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!! Form::select('adopter_id',$adopters, null,['class' => 'form-control']) !!}
		    	</div>
	    	</div>
	    	<div class="form-group form-group-sm" >
		    	{!!	Form::label('personnel_id', 'Actioned by: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!! Form::select('personnel_id',$personnels, null,['class' => 'form-control']) !!}
		    	</div>

		    	{!!	Form::label('animal_id', 'Animals: ', ['class' => 'control-label col-sm-2'])	!!}
		    	<div class="col-sm-3">
			    	{!! Form::select('animal_id',$animal, null,['class' => 'form-control']) !!}
		    	</div>
	    	</div>

                  <div class="col-sm-offset-5 col-sm-2">
                	{!!	Form::submit('Proceed', ['class' => 'btn btn-primary'])	!!}
                	</div>
                	    <div class="col-sm-offset-5 col-sm-2">
              </a>
                	</div>
                </div>
            </div>
        </div>
		{!! Form::close() !!}
	</div>
@endsection