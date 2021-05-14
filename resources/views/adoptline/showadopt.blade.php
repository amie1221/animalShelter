@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ANIMALS AVAILABLE FOR ADOPTION </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
<!--         <div class="float-right"><a href="{{ url('adoptline/create') }}" class="btn btn-success">ADOPT</a></div> -->
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

                        <th>Date Added</th>
                        <th>Availability </th>
                         <th>--------- Preview--------</th>
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
                        <td >{{ $animal->date_added }}</td>
                        <td >{{ $animal->aniStatus }}</td>   
                        <td > <img src="{{asset($animal->aniImage)}}"width="150px" height="100px"></td>    
                        </div>
                        <td>
                             <div class="btn-group">
                            <a href="{{ route ('adoptline.create') }}" class="btn btn-success">Adopt</a>  
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