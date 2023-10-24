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
    <div class="hero-image">
        <img src="/images/rock.jpg" alt="rock">
        <img src="/images/paper.jpg" alt="paper">
        <img src="/images/scissors.jpg" alt="scissors">
    </div>

    <h2>Game Mechanics</h2>
    <ul>
        <li>Played between two players; you will choose either rock, paper, or scissors. </li>
        <li>Rock wins against scissors, paper wins against rock, and scissors wins against paper.</li>
        <li>A tie results if both players choose the same object. </li>
        <li>Select your object and click the play button to play!</li>
    </ul>

    <div class="game-window">
        <div>
            <form method='POST' action='index.php'>
                <label for='playerChoice'>Choose your object!</label>
                <select name='playerChoice' id='playerChoice'>
                    <option>Choose one...</option>
                    <option>rock</option>
                    <option>paper</option>
                    <option>scissors</option>
                </select>
        </div>
        <button type='submit'>Play!</button>
        </form>

        <p>
            <?php 
            if (isset($player1choice) and isset($player2choice) and isset($results)) {
                echo $player1choice, $player2choice, $results;}
                ?>
        </p>

    </div>

</body>

</html>