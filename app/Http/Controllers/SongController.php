<?php

namespace App\Http\Controllers;

use App\Models\song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Songs::latest()->paginate(5);
        return view('songs.index',compact('students'))
            ->with('1', (request()-input('page',1) -1 ) * 5); 
    }

    public function create()
    {
        return view('song.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'song name'=>'required',
            'song genre'=>'required',
            'composer'=>'required',
            'lyrics'=>'required',
            'year created'=>'required'
        ]);

        Song::create($request->all());

        return redirect()->route('song.index')
            ->with('success','Song created successfully');
    }

    public function show(Song $song)
    {
        return view('songs.show',compact('songs'));
    }

    public function edit(Song $song)
    {
        return view('songs.edit',compact('songs'));
    }

    public function update(Request $request, Song $song)
    {
        $request->validate([

        ]);

        $song->update($request->all());

        return redirect()->route('song.index');
            with('success','Song updated successfully');
    }

    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('song.index')
            ->with('success','Song deleted successfully');
    }

}