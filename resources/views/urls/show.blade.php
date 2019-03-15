@extends('layouts.layout')

@section('content')
    @if (isset($url))
        <a href={{ URL::to($url->url) }}>{{ url($url['short_url']) }}</a>
        <div>
        <a href="{{ URL::to("urls/$url->id/edit") }}"><button>Edit</button></a>
        <form action="/urls/{{ $url->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
    @else
        <p>No URLs have been added</p>
    @endif
@endsection
