@extends('songs.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Songs</div>
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Song Name</th>
                                        <th>Song Genre</th>
                                        <th>Composer</th>
                                        <th>Lyrics</th>
                                        <th>Year Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($songs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->song name }}</td>
                                        <td>{{ $item->song genre }}</td>
                                        <td>{{ $item->composer }}</td>
                                        <td>{{ $item->lyrics }}</td>
                                        <td>{{ $item->year created }}</td>
 
                                        <td>
                                            <a href="{{ url('/song/' . $item->id) }}" title="View Song"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/song/' . $item->id . '/edit') }}" title="Edit Song"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/song' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Song" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection