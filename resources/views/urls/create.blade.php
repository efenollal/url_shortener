@extends('layouts.layout')

@section('content')
    <form action="/urls" method="post">
        @csrf

        @if ($errors->any())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
        <input type="text" name="url" placeholder="Enter a URL" value="{{ old('url') }}">
        <button type="submitt">Shorten Url</button>
    </form>
@endsection
