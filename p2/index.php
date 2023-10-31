<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $player1choice = $results['player1choice'];
    $player2choice = $results['player2choice'];

    $_SESSION['results'] = null;
}

require 'index-view.php';