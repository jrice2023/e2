@extends('templates/master')

@section('title')
Welcome to Rock, Paper, Scissors
@endsection

@section('content')

<h2>Instructions</h2>

<p>Played between two players; you will choose either rock, paper, or scissors. Rock wins against scissors, paper wins
    against rock, and scissors wins against paper. A tie results if both players choose the same object. Select your
    object and click the play button to play! <br />

<form method='POST' action='/process'>
    <label for='playerChoice'>Choose your object!</label>
    <input type='radio' test='rock-radio' name='playerChoice' value="0" id='rock'><label for='rock'>rock</label>
    <input type='radio' test='paper-radio' name='playerChoice' value="1" id='paper'><label for='paper'>paper</label>
    <input type='radio' test='scissors-radio' name='playerChoice' value="2" id='scissors'><label
        for='scissors'>scissors</label>
    </select>
    <button test='submit-button' type='submit'>Play!</button>
</form>

@if($app->errorsExist())
<ul test='validation-output' class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@if (isset($results))
<div test='results-div' class='results'>
    <p>{{ $results['player1choice'] }}{{ $results['player2choice'] }}
        @if ($results['winner'] === 0)
        Results = Tie!
        @elseif ($results['winner'] === 1)
        <span class='won'>Congratulations! You win!</span>
        @elseif ($results['winner'] === 2)
        <span class='lose'>Sorry, you lose!</span>
        @endif
    </p>
</div>
@endif


View <a href='/history'>Game history</a>
</p>
@endsection