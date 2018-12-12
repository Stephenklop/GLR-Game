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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda | GLR game</title>
  </head>
  <body>
    <!--- Temp styling --->
    <style>
    .agenda{
      border-style: solid;
    }
    .dag{
      border-style: solid;
    }
    ul{
      list-style-type: none;
    }
    .datum{
      font-size: 20px;
      text-align: left;
    }
    .tijd{
      text-align: left;
    }
    .informatie{
      font-size: 20px;
      text-align: center;
    }
    .game{
      text-align: center;
    }
    .team{
      text-align: center;
      font-size: 60px;
    }
    .teamlogo{
      text-align: center;
    }
    .beheerdersettings{
      text-align: left;
    }
    </style>
  <!-- Navigatiebar-->
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Teams</a></li>
          <li><a href="#">Agenda</a></li>
          <li><a href="#">Toernooischema</a></li>
          <li><a href="#">Over ons</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Donate</a></li>
        </ul>
      </nav>
    </header>
  <!--- Form voor datums te adden en weg te halen, ook ga ik hier adden hoe je een team eliminate--->

<?php
// kijkt of admin er is
 if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0) {
   ;
 }else{ ?>
    <div class="beheerdersettings">
      <form action="#" method="post">
        <p>Datum <input name="date" type="date"></input> </p>
        <p>Tijd <input name="time" type="time"></input> </p>
        <p>Informatie <input name="informatie" type="text"></input> </p>
        <p><select name="game">
          <option value="Rocket League">Rocket League</option>
          <option value="League of Legends">League of Legends</option>
        </select>
         </p>
        <!-- wordt uitgelezen uit database uiteindelijk met een dropdown menu -->


        	<!-- dropdown voor team 1 -->
          <p><select name="team1"><div>
              <?php
              $opdracht1 = "SELECT * FROM `GLR_teams` WHERE `team_goedkeuring` = '1'";
              $resultaat1 = mysqli_query($mysqli, $opdracht1);
              while($row = mysqli_fetch_array($resultaat1)){
                echo "<option value='" . $row['team_naam'] . "'>".$row['team_naam']."</option>";
              }
              ?>
          </div></select></p>
          <!-- dropdown voor team 2 -->
            <p><select name="team2"><div>
              <?php
              $opdracht2 = "SELECT * FROM `GLR_teams` WHERE `team_goedkeuring` = '1'";
              $resultaat2 = mysqli_query($mysqli, $opdracht2);
              while($row = mysqli_fetch_array($resultaat2)){
                echo "<option value='" . $row['team_naam'] . "'>".$row['team_naam']."</option>";
              }
              ?>
            </div></select></p>
        <input type="hidden" name="act" value="run">
        <input name="toevoegen" type="submit"></input>
      </form>
 <?php }

 ?>
      <?php
      //leest gegevens wanneer gesubmit wordt
      if (!empty($_POST['act'])) {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $info = $_POST['informatie'];
        $game = $_POST['game'];


      // values van de team tabell

        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];

        //zet de gegevens in de database
        $query = "INSERT INTO `GLR_agenda` (`Datum`, `Tijd`, `Informatie`, `Game`, `Team1`, `Team2`) VALUES ('$date', '$time', '$info', '$game', '$team1', '$team2')";
        $result = mysqli_query($mysqli, $query);
        if ($result)
          {
            echo "Het is gelukt <a href='https://81446.ict-lab.nl/GLR_Esports/agenda.php'>klick hier om het te refreshen</a>";
          }
          else
          {
            echo "Het is niet gelukt";
          }
        } else
      { ; }
      ?>

  <!-- Agenda gedeelte --->
    <div class="agenda">
  <!-- Leest automatisch data uit de database -->
      <?php
      while ($row = mysqli_fetch_array($resultaat)){
      echo "<div class='dag'>";
      echo "<ul>";
      echo "<li class='datum'>". $row['Datum'] . "</li>";
      echo "<li class='tijd'>". $row['Tijd'] ."</li>";
      echo "<li class='informatie'>". $row['Informatie'] ."</li>";
      echo "<li class='game'>". $row['Game'] ."</li>";
      echo "<li class='team'>". $row['Team1'] ." VS ". $row['Team2'] ."</li>";
      $team1 = $row['Team1'];
      $team2 = $row['Team2'];
      $plaatjesquery1 = "SELECT * FROM `GLR_teams` WHERE `team_naam` = ''";
      $plaatjesresultaat1 = mysqli_query($mysqli, $plaatjesquery1);
      $plaatje1 = mysqli_fetch_array($plaatjesresultaat1);


      $plaatjesquery2 = "SELECT * FROM `GLR_teams` WHERE `team_naam` = ''";
      $plaatjesresultaat2 = mysqli_query($mysqli, $plaatjesquery2);
      $plaatje2 = mysqli_fetch_array($plaatjesresultaat2);

      echo "<li class='teamlogo'> <img src='teamlogo/".$plaatje1['team_logo'].">' alt='teamlogo1' width='60' height='60'></img> <img src=teamlogo/".$plaatje2['team_logo']."' alt='teamlogo2' width='60' height='60'></img> </li>";
      echo "</ul>";
      echo "</div>";
    } ?>
    </div>
    <!-- Footer -->
    <footer>
      <img src="img/twitter_icon.png" alt="">
      <img src="img/facebook_icon.png" alt="">
      <img src="img/instagram_icon.png" alt="">
    </footer>
    </body>
  </html>
