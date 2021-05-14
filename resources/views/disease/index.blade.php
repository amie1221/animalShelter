@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i> DISEASES LIST </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <div class="float-right"><a href="{{ url('disease/create') }}" class="btn btn-success">+ CREATE</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Disease ID</th>
                        <th>Disease Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                @if(count($diseases))
                    @foreach($diseases as $disease)
                        <tr>
                        <td >{{ $disease->id }}</td>
                        <td >{{ $disease->name }}</td>
                        <td >{{ $disease->description }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ route ('disease.show', $disease->id) }}" class="btn btn-warning">View</a>
                            <a href="{{ route ('disease.edit', $disease->id) }}" class="btn btn-info">Edit</a>
                            {{   Form::model($disease, ['method' => 'POST', 'route' => ['disease.destroy', $disease->id]])   }}
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