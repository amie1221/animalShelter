@extends('layouts.base')

@section('content')


    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ADOPTION LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('/adopt') }}" class="btn btn-success">VIEW ADOPTABLE</a></div>
        <br><br>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Name</th>
                        <th>Availability </th>
                         <th>Adoption Date </th>
                         <th>Adopter </th>
                         <th>--------- Preview--------</th>
                    </tr>


                </thead>
                @if(count($adoptlines))
                    @foreach($adoptlines as $pet)
                        <tr>
                            
                        <td >{{ $pet->animal->aniName }}</td>
                        <td >{{ $pet->animal->aniStatus }}</td> 

                        <td >{{ $pet->adoptLdate }}</td>   
                        <td >{{ $pet->adopter->first_name}}</td>    

                        <td > <img src="{{asset($pet->animal->aniImage)}}"width="150px" height="100px"></td>    
                        
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