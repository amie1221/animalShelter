@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> ADOPTER LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('adopter/create') }}" class="btn btn-success">+ CREATE</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Adopter ID</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Town</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Contacts</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @if(count($adopters))
                    @foreach($adopters as $adopter)
                        <tr>
                        <td >{{ $adopter->id }}</td>
                        <td >{{ $adopter->title }}</td>
                        <td >{{ $adopter->first_name }}</td>
                        <td >{{ $adopter->last_name }}</td>
                        <td >{{ $adopter->address }}</td>
                        <td >{{ $adopter->town }}</td>
                        <td >{{ $adopter->email }}</td>
                        <td >{{ $adopter->gender }}</td>
                        <td >{{ $adopter->contact }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ route ('adopter.show', $adopter->id) }}" class="btn btn-warning">View</a>
                            <a href="{{ route ('adopter.edit', $adopter->id) }}" class="btn btn-info">Edit</a>
                            {{   Form::model($adopter, ['method' => 'POST', 'route' => ['adopter.destroy', $adopter->id]])   }}
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