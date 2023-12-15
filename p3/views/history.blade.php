@extends('templates/master')

@section('title')
History
@endsection

@section('content')
<h2>Game History</h2>
<ul>
    @foreach ($rounds as $round)
    <li><a href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
    @endforeach
</ul>
<p>Return to <a href='/'>Home</a>.
    @endsection