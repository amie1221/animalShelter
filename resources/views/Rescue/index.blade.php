@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> RESCUER LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('/') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('rescuer/create') }}" class="btn btn-success">+ CREATE</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Rescuer ID</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Town</th>
                        <th>Email</th>
                        <th>Contacts</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @if(count($rescues))
                    @foreach($rescues as $rescue)
                        <tr>
                        <td >{{ $rescue->id }}</td>
                        <td >{{ $rescue->title }}</td>
                        <td >{{ $rescue->first_name }}</td>
                        <td >{{ $rescue->last_name }}</td>
                        <td >{{ $rescue->address }}</td>
                        <td >{{ $rescue->town }}</td>
                        <td >{{ $rescue->email }}</td>
                        <td >{{ $rescue->contact }}</td>
                        <td>
                          <div class="btn-group">
                           
                            <a href="{{ route ('rescuer.edit', $rescue->id) }}" class="btn btn-info">Edit</a>
                            {{   Form::model($rescuer, ['method' => 'POST', 'route' => ['rescuer.destroy', $rescue->id]])   }}
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
@extends('layouts.footer')
