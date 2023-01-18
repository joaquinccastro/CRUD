@extends('songs.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Song Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Song Name</label></br>
        <input type="text" name="song name" id="song name" class="form-control"></br>
        <label>Song Genre</label></br>
        <input type="text" name="song genre" id="song genre" class="form-control"></br>
        <label>Composer</label></br>
        <input type="text" name="composer" id="composer" class="form-control"></br>
        <label>Lyrics</label></br>
        <input type="text" name="lyrics" id="lyrics" class="form-control"></br>
        <label>Year Created</label></br>
        <input type="text" name="year created" id="year created" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop