@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ANIMALS LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('animal/create') }}" class="btn btn-success">+ ADOPT</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Animal ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Color</th>
                        <th>Size</th>
                       <!--  <th>Preview</th> -->
                        <th>Type</th>
                        <th>Action by</th>
                        <th>Rescued by </th>
                        <th>Date Added</th>
                        <th>Availability </th>

                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @if(count($animals))
                    @foreach($animals as $animal)
                        <tr>
                        <td >{{ $animal->id }}</td>
                        <td >{{ $animal->aniName }}</td>
                        <td >{{ $animal->aniGender }}</td>
                        <td >{{ $animal->aniBreed }}</td>
                        <td >{{ $animal->aniAge }}</td>
                        <td >{{ $animal->aniColor }}</td>
                        <td >{{ $animal->aniSize }}</td>
                        <td >{{ $animal->aniType_id }}</td>
                        <td >{{ $animal->employee_id }}</td>
                        <td >{{ $animal->rescue_id }}</td>
                        <td >{{ $animal->date_added }}</td>
                        <td >{{ $animal->aniStatus }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ route ('animal.check', $animal->id) }}" class="btn btn-danger">Health Check</a>
                            <a href="{{ route ('animal.show', $animal->id) }}" class="btn btn-warning">View</a>
                            <a href="{{ route ('animal.edit', $animal->id) }}" class="btn btn-info">Edit</a>                            
                            
                            {{   Form::model($animal, ['method' => 'POST', 'route' => ['animal.destroy', $animal->id]])   }}
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger'])  !!} 
                            {!! Form::close() !!}
                          </div>
                        </td>
                      </tr>
                    @endforeach
                @else
                    <p> NO DATA YET!</p>
                @endif   
                </table>
            </div>
        </div>
    </div>
@endsection