@extends('layouts.base')
@section('body')
 <div class="container">
      <h2>Edit Album</h2><br/>
      {{-- dd($artists) --}}
      {{ Form::model($album,['route' => ['album.update',$album->id]]) }}
    
    {{ method_field('PATCH') }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Album Name:</label>
            {{-- <input type="text" class="form-control" name="album_name"> --}}
           {!! Form::text('album_name',$album->album_name,array('class' => 'form-control')) !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="artist">artist:</label>
              {!! Form::select('artist_id',$artists, null,['class' => 'form-control']) !!}
            </div>
      </div>
        <div class="row">
          <div class="col-md-4"></div>
        <div class="form-group col-md-4">
  <label for="listener" class="control-label">Listener</label>
  <input list="listener" id = "listener_id" class="form-control" name="listener"/>
  <datalist id="listener" width="30px">
  @foreach ($listeners as $listener)
    <option value="{{$listener->lname}}">{{$listener->lname}}</option>
  @endforeach
</datalist>
</div>
      </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
     {!! Form::close() !!}
    </div>
    @endsection