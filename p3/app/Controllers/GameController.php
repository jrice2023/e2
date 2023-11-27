<?php

namespace App\Controllers;

class GameController
{
    protected $app;
    
    public function __construct($app)
    {
        $this->app = $app;
    }


    public function process() {
    $this->app->validate([
            'playerChoice' => 'required|min:0|max:2',
        ]);

        $playerChoice = $this->app->input('playerChoice');

        $moves = ['rock', 'paper', 'scissors'];

        $player1Move = $moves[$playerChoice];
        $player2Move = $moves[rand(0, 2)];

        $player1choice = ("You played $player1Move.");
        $player2choice = (" Player 2 played $player2Move.");


        if ($player1Move == $player2Move) {
            $winner = 0;
        } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
            $winner = 1;
        } elseif ($player1Move == 'paper' and $player2Move == 'rock') {
            $winner = 1;
        } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
            $winner = 1;
        } else {
            $winner = 2;
        }

        $results = [
            'player1choice' => $player1choice,
            'player2choice' => $player2choice,
            'winner' => $winner
        ];

        
    return $this->app->view('index', ['results' => $results]);
}
}
    