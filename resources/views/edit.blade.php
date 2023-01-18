@extends('songs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Song Page</div>
  <div class="card-body">
      
      <form action="{{ url('song/' .$songs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$songs->id}}" id="id" />
        <label>Song Name</label></br>
        <input type="text" name="song name" id="song name" value="{{$songs->song name}}" class="form-control"></br>
        <label>Song Genre</label></br>
        <input type="text" name="song genre" id="song genre" value="{{$songs->song genre}}" class="form-control"></br>
        <label>Composer</label></br>
        <input type="text" name="composer" id="composer" value="{{$songs->composer}}" class="form-control"></br>
        <label>Lyrics</label></br>
        <input type="text" name="lyrics" id="lyrics" value="{{$songs->lyrics}}" class="form-control"></br>
        <label>Year Created</label></br>
        <input type="text" name="year created" id="year created" value="{{$songs->year created}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop