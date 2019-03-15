@extends('layouts.layout')

@section('content')
<form action="/urls/{{ $url->id }}" method="post">
    @csrf
    @method('PATCH')

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
    <input type="text" name="url" value="{{ $url->url }}">
    <button type="submit">Update Url</button>
</form>

@endsection
