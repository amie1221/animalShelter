@extends('layouts.base')

@section('content')
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Wonder Pets</h1>
        <h2 class="py-1 bg-Light text-dark rounded"><i class="fas fa-people-carry"></i>INBOX </h2>    
    </div>
    <br><br>
    <div class="container">
        <div class="float-left"><a href="{{ url('dash') }}" class="btn bg-dark text-light"><< RETURN TO CONTROL PANEL</a></div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped"> 
                <thead class="dark">
                    <tr>
                        <th>Message Id</th>
                        <th>Sender Name</th>
                        <th>Phone</th>
                        <th>Email </th>
                        <th>Subject</th>
                        <th>Message </th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @if(count($contactus))
                    @foreach($contactus as $newemail)
                        <tr>
                        <td >{{ $newemail->id }}</td>
                        <td >{{ $newemail->name }}</td>
                        <td >{{ $newemail->phone }}</td>
                        <td >{{ $newemail->subject }}</td>
                        <td >{{ $newemail->message }}</td>
                        <td >{{ $newemail->created_at }}</td>
                        <td>
                          <div class="btn-group">
                     <form action="{{route('dashboard.destroy',$newemail->id)}}" method="POST">
                        @method('DELETE')
<!-- -->
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