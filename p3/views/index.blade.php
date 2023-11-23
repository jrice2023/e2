@extends('templates/master')

@section('title')
Welcome to Rock, Paper, Scissors
@endsection

@section('content')

<h2>Instructions</h2>

<p>Played between two players; you will choose either rock, paper, or scissors. Rock wins against scissors, paper wins
    against rock, and scissors wins against paper. A tie results if both players choose the same object. Select your
    object and click the play button to play! <br />
    <a href='/history'>Game history</a>.
</p>
@endsection