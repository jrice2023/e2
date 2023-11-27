@extends('templates/master')

@section('title')
Welcome to Rock, Paper, Scissors
@endsection

@section('content')

<h2>Instructions</h2>

<p>Played between two players; you will choose either rock, paper, or scissors. Rock wins against scissors, paper wins
    against rock, and scissors wins against paper. A tie results if both players choose the same object. Select your
    object and click the play button to play! <br />

<div class="game-window">
    <div>
        <form method='POST' action='/process'>
            <label for='playerChoice'>Choose your object!</label>
            <select name='playerChoice' id='playerChoice'>
                <option value="">Choose one...</option>
                <option value="1">rock</option>
                <option value="2">paper</option>
                <option value="3">scissors</option>
                <option value="4">test</option>
            </select>
    </div>
    <button type='submit'>Play!</button>
    </form>

    @if (isset($results))

    @if ($results['winner'] === 0)
    Results = Tie!
    @elseif ($results['winner'] === 1)
    Results = You win!
    @elseif ($results['winner'] === 2)
    Results = Player 2 wins!
    @endif
    @endif

    <a href='/history'>Game history</a>.
    </p>
    @endsection