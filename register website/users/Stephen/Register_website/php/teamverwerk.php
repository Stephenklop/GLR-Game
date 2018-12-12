<?php
  session_start();
  require_once 'config.inc.php';

  if (isset($_POST["submit"]))
  {
      $descr = "team aangemeld!";

      // if (isset($_POST['donateRadio'])) {
      //   $value = '20.00';
      //   $donate = 1;
      // }
      // else {
      //   $value = '12.50';
      //   $donate = 0;
      // }


      if($_POST['donateRadio'] == 0){
        $value = '12.50';
        $donate = 0;
        $_SESSION['value'] = $value;
        $_SESSION['descr'] = $descr;

      }else if($_POST['donateRadio'] == 1){
        $value = '20.00';
        $donate = 1;
        $_SESSION['value'] = $value;
        $_SESSION['descr'] = $descr;
      }

    $team_id = time();

    $_SESSION['team_id'] = $team_id;

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

    $file = $_FILES['foto'];
    $filename = $_FILES['foto']['name'];
    $fileTmpname = $_FILES['foto']['tmp_name'];
    $filesize = $_FILES['foto']['size'];
    $fileerror = $_FILES['foto']['error'];
    $filetype = $_FILES['foto']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png');

    if (in_array($fileActualExt, $allowed))
    {

      if ($fileerror === 0)
      {

        if ($filesize < 1000000)
        {

          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $filedestination = 'teamlogo/' . $fileNameNew;
          move_uploaded_file($fileTmpname, $filedestination);

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
              strlen($lidnummer4) > 0)
          {

              //$query = "INSERT INTO GLR_teams (team_id, team_naam, team_logo, team_captain_naam, `team_captain_nummer`, team_lid1_naam, team_lid1_nummer,  team_lid2_naam, team_lid2_nummer,  team_lid3_naam, team_lid3_nummer,  team_lid4_naam, team_lid4_nummer, team_goedkeuring, team_behandeld, team_donate)
            //    VALUES (NULL, '$teamname', '$fileNameNew', '$captianname', $captiannummer, '$lid1', $lidnummer1, '$lid2', $lidnummer2, '$lid3', $lidnummer3, '$lid4', $lidnummer4, 0, 0, $donate)";

                $stmt = mysqli_prepare($mysqli, "INSERT INTO GLR_teams (team_id, team_naam, team_logo, team_captain_naam, team_captain_nummer, team_lid1_naam, team_lid1_nummer,  team_lid2_naam, team_lid2_nummer,  team_lid3_naam, team_lid3_nummer,  team_lid4_naam, team_lid4_nummer, team_goedkeuring, team_behandeld, team_donate, team_betaald)
                                                                VALUES (?,     ?,          ?,            ?,              ?,                      ?,              ?,                  ?,              ?,                ?,                ?,                  ?,                ?,              0,             0,               ?,          0) ");

                mysqli_stmt_bind_param($stmt, "ssssssssssssss",$team_id, $teamname, $fileNameNew, $captianname, $captiannummer, $lid1, $lidnummer1, $lid2, $lidnummer2, $lid3, $lidnummer3, $lid4, $lidnummer4, $donate);

                mysqli_stmt_execute($stmt);

                if ($stmt->affected_rows === 1)
                {
                  header('Location: https://glrtournament.nl/Stephen/Register_website/php/Mollie/team-aanmeld/examples/payments/create-payment.php');
                  exit();
                }
                else
                {
                  echo "error";
                  exit();
                }
          }

          else
          {
            echo "Niet alle velden waren ingevuld";
          }

        }
        else
        {
          echo "bestand is te groot";
        }

      }
      else
      {
        echo "file is niet toegestaan";
      }
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
