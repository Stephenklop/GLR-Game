<?php

  require_once 'config.inc.php';

  if (isset($_POST["submit"]))
  {

    $id = $_POST['id'];

    $teamname = htmlentities($_POST['teamname'], ENT_QUOTES);
    $captianname = $_POST['captianname'];
    $captiannummer = $_POST['captiannummer'];

    $lid1 = $_POST['lid1'];
    $lidnummer1 = $_POST['lidnummer1'];

    $lid2 = $_POST['lid2'];
    $lidnummer2 = $_POST['lidnummer2'];

    $lid3 = $_POST['lid3'];
    $lidnummer3 = $_POST['lidnummer3'];

    $lid4 = $_POST['lid4'];
    $lidnummer4 = $_POST['lidnummer4'];

    $lid5 = $_POST['lid5'];
    $lidnummer5 = $_POST['lidnummer5'];

    $goedkeuring = $_POST['goedkeuring'];
    $donate = $_POST['donate'];

    if (strlen($teamname) > 0 &&
        strlen($captianname) > 0 &&
        strlen($captiannummer) > 0 &&
        strlen($lid1) > 0 &&
        strlen($lidnummer1) > 0 &&
        strlen($lid2) > 0 &&
        strlen($lidnummer2) > 0 &&
        strlen($lid3) > 0 &&
        strlen($lidnummer3) > 0 &&
        strlen($lid4) > 0 &&
        strlen($lidnummer4) > 0 &&
        strlen($lid5) > 0 &&
        strlen($lidnummer5) > 0)
      {

        $query = "UPDATE GLR_teams SET team_naam = '$teamname',
                                       team_captain_naam = '$captianname', 
                                       `team_captain_nummer` = $captiannummer,
                                       team_lid1_naam = '$lid1',
                                       team_lid1_nummer = $lidnummer1,  
                                       team_lid2_naam = '$lid2', 
                                       team_lid2_nummer = $lidnummer2,  
                                       team_lid3_naam = '$lid3', 
                                       team_lid3_nummer = $lidnummer3,  
                                       team_lid4_naam = '$lid4', 
                                       team_lid4_nummer = $lidnummer4,  
                                       team_lid5_naam = '$lid5', 
                                       team_lid5_nummer = $lidnummer5, 
                                       team_goedkeuring = $goedkeuring,  
                                       team_donate = $donate
                                       WHERE team_id = $id";

      }

      else
      {
        echo "Niet alle velden waren ingevuld";
      }


    if (mysqli_query($mysqli, $query))
    {
      header("location:teamuitlees.php");
    }
    else
    {
      echo "error";
    }

  }

  else
  {
    echo "geen geldige submit";
  }


?>
