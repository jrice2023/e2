@extends('templates/master')

@section('title')
Round Details
@endsection

@section('content')
<h2>Round Details</h2>
<ul style="list-style-type: none;">
    <li>Round id: {{ $round['id'] }}</li>
    <li>Player's choice {{ $round['playerChoice'] }}</li>
    <li>Player {{ $round['won'] ? 'won' : 'lost' }}</li>
    <li>Timestamp: {{ $round['timestamp'] }}</li>
</ul>
<p>Return to <a href='/history'>history</a>.
    @endsection