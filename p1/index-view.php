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
        <li>Played between two players; each player will choose either rock, paper, or scissors. </li>
        <li>Rock wins against scissors, paper wins against rock, and scissors wins against paper.</li>
        <li>A tie results if both players choose the same object. </li>
        <li>Refresh the page to play!</li>
    </ul>

    <div class="game-window">
        <p>
            <?php echo $player1choice ?><?php echo $player2choice ?><?php echo $results ?>
        </p>
    </div>
</body>

</html>