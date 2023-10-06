<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Project 1: Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel="stylesheet" href="styles.css">
</head>

<header>
    <h1>Rock - Paper - Scissors</h1>
</header>

<body>
    <h2>Game Mechanics</h2>

    <ul>
        <li>Played between two players; each player will choose either rock, paper, or scissors. </li>
        <li>Rock wins against scissors; paper wins against rock; and scissors wins against paper.</li>
        <li>A tie results if both players choose the same object. </li>
        <li>Refresh the page to play!</li>
    </ul>
    <div class="game-window">
        <p><?= $player1choice ?><?= $player2choice ?><?= $results ?></p>
        <div>
</body>

</html>