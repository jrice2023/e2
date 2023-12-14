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
            $won = 0;
        } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
            $won = 1;
        } elseif ($player1Move == 'paper' and $player2Move == 'rock') {
            $won = 1;
        } elseif ($player1Move == 'scissors' and $player2Move == 'paper') {
            $won = 1;
        } else {
            $won = 2;
        };
        
       $results = [
            'player1choice' => $player1choice,
            'player2choice' => $player2choice,
            'winner' => $won
        ];


        $this->app->db()->insert('rounds',[
            'playerChoice' => $player1Move,
            'won' => ($won) ? 1 : 0,
            'timestamp' => date('Y-m-d H:i:s')
        ]);


        return $this->app->redirect('/', ['results' => $results]);
    }
}
    