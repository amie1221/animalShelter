@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> PERSONNEL LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('personnel/create') }}" class="btn btn-success">+ CREATE</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Personnel ID</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Town</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Contacts</th>
                        <th>Hire Date</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @if(count($personnels))
                    @foreach($personnels as $personnel)
                        <tr>
                        <td >{{ $personnel->id }}</td>
                        <td >{{ $personnel->title }}</td>
                        <td >{{ $personnel->first_name }}</td>
                        <td >{{ $personnel->last_name }}</td>
                        <td >{{ $personnel->address }}</td>
                        <td >{{ $personnel->town }}</td>
                        <td >{{ $personnel->email }}</td>
                        <td >{{ $personnel->gender }}</td>
                        <td >{{ $personnel->contact }}</td>
                        <td >{{ $personnel->hiredate }}</td>
                        
                        <td>
                          <div class="btn-group">
                            <a href="{{ route ('personnel.show', $personnel->id) }}" class="btn btn-warning">View</a>
                            <a href="{{ route ('personnel.edit', $personnel->id) }}" class="btn btn-info">Edit</a>
                            {{   Form::model($personnel, ['method' => 'POST', 'route' => ['personnel.destroy', $personnel->id]])   }}
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