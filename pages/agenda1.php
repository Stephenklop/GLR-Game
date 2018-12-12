<?php

require '../assets/config.inc.php';
require "../assets/session.inc.php";
//query
$query = "SELECT * FROM `GLR_agenda` ORDER BY `Datum`, `Tijd`";

//resultaat van $query
$resultaat = mysqli_query($mysqli, $query);

//If $query == 1 show
if(mysqli_num_rows($resultaat) == 0) {
  echo "Fout bij het ophalen van agenda";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/agenda.css">
    <link rel="stylesheet" href="../css/animate.css">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Teams | GLR-game</title>
  </head>
  <body>
    <header id="desktop">
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="teams.php">Teams</a></li>
          <li><a href="agenda.php">Agenda</a></li>
          <li><a href="schema.php">Schema</a></li>
          <li class="figure">
            <figure>
              <img src="../img/logo.png" alt="">
            </figure>
          </li>
          <li><a href="overons.php">Over ons</a></li>
          <li><a href="login.php">Login</a></li>
          <li> <a href="register.php">Registreer</a> </li>
          <li><a href="donate.php" class="donatebtn">Donate</a></li>
        </ul>
      </nav>
    </header>
    <header id="mobile">
      <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <a href="../index.php"><li>Home</li></a>
            <a href="teams.php"><li>Teams</li></a>
            <a href="agenda.php"><li>Agenda</li></a>
            <a href="schema.php"><li>Schema</li></a>
            <a href="overons.php"><li>Over ons</li></a>
            <a href="login.php"><li>Login</li></a>
            <a href="register.php"><li>Registreer</li></a>
            <a href="donate.php" class="donatebtn"><li>Donate</li></a>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="title">
        <h1>Agenda</h1>
      </div>
      <?php
        while($row = mysqli_fetch_array($resultaat)) {
          echo "<div class='item'>";
          echo "<div class='left'>";
          echo "<h1 class='datum'>". $row['Datum'] . "</h1>";
          echo "<h2 class='tijd'>". $row['Tijd'] ."</h2>";
          echo "<h2 class='informatie'>". $row['Informatie'] ."</h2>";
          echo "<h2 class='game'>". $row['Game'] ."</h2>";
          echo "</div>";
          echo "<div class='right'>";
          $plaatjesquery1 = "SELECT * FROM `GLR_teams` WHERE `team_naam` = ''";
          $plaatjesresultaat1 = mysqli_query($mysqli, $plaatjesquery1);
          $plaatje1 = mysqli_fetch_array($plaatjesresultaat1);


          $plaatjesquery2 = "SELECT * FROM `GLR_teams` WHERE `team_naam` = ''";
          $plaatjesresultaat2 = mysqli_query($mysqli, $plaatjesquery2);
          $plaatje2 = mysqli_fetch_array($plaatjesresultaat2);
          echo "<h1 class='team'><img src='../img/teamlogo/".$plaatje1['team_logo'].">' alt='teamlogo1 ' width='60' height='60'></img>". $row['Team1'] ." VS ". $row['Team2'] ."<img src=teamlogo/".$plaatje2['team_logo']."' alt='teamlogo2' width='60' height='60'></img</h1>";
          $team1 = $row['Team1'];
          $team2 = $row['Team2'];

          echo "</div>";
          echo "</div>";
        }
      ?>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
