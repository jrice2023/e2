@extends('templates/master')

@section('title')
History
@endsection

@section('content')
<h2>Game History</h2>
<ul style="list-style-type: none;">
    @foreach ($rounds as $round)
    <li><a test='round-link' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
    @endforeach
</ul>
<p>Return to <a href='/'>Home</a>.
    @endsection