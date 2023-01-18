@extends('songs.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Song Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Song Name : {{ $songs->song name }}</h5>
        <p class="card-text">Song Genre : {{ $songs->song genre }}</p>
        <p class="card-text">Composer : {{ $songs->composer }}</p>
        <p class="card-text">Lyrics : {{ $songs->lyrics }}</p>
        <p class="card-text">Year Created : {{ $songs->year created }}</p>

    </div>
       
    </hr>
  
  </div>
</div>