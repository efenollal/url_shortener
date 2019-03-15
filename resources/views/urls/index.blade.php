@extends('layouts.layout')

@section('content')
    <div><a href="{{ URL::to('urls/create') }}">Add new URL</a></div>
    @if (isset($urls))
        <h3>URLs List</h3>
        <ul>
            @foreach ($urls as $url)
                <li>
                    <div>
                        <a href={{ URL::to('urls/'.$url->id)}}>{{url($url->url)}}</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No URLs have been added</p>
    @endif
@endsection
