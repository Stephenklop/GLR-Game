<?php
  	require_once 'session.inc.php';
    require_once 'config.inc.php';


    $id = $_GET['id'];


    if (is_numeric($id)){

        $result = mysqli_query($mysqli, "SELECT * FROM GLR_teams WHERE team_id = $id");

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
        }
        else {
            echo "geen lid gevonden";
            exit;
        }

    }
    else{
        echo "Onjuist ID";
        exit;
    }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="css input" type="text/css" href="main.css">

    <meta charset="utf-8">
    <title>Inschrijven.</title>
  </head>
  <body>
    <form action="teamsettingsverwerk.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            Team naam:  <input type="text" name="teamname" required
             value="<?php echo $row['team_naam'] ?>"><br/>
            <br/>
            Naam TeamCaptian:  <input type="text" name="captianname" required
             value="<?php echo $row['team_captain_naam'] ?>"><br/>
            Studentennummer Captian:  <input type="text" name="captiannummer" required
             value="<?php echo $row['team_captain_nummer'] ?>"><br/>
            <br/>
            Team member 1: <input type="text" name="lid1"  required
             value="<?php echo $row['team_lid1_naam'] ?>"><br/>
            Studentennummer lid 1: <input type="text" name="lidnummer1"  required
             value="<?php echo $row['team_lid1_nummer'] ?>"><br/>
			<br/>
            Team member 2: <input type="text" name="lid2"  required
             value="<?php echo $row['team_lid2_naam'] ?>"><br/>
			Studentennummer lid 2: <input type="text" name="lidnummer2"  required
             value="<?php echo $row['team_lid2_nummer'] ?>"><br/>
			<br/>
            Team member 3: <input type="text" name="lid3"  required
             value="<?php echo $row['team_lid3_naam'] ?>"><br/>
            Studentennummer lid 3: <input type="text" name="lidnummer3"  required
             value="<?php echo $row['team_lid3_nummer'] ?>"><br/>
            <br/>
            Team member 4: <input type="text" name="lid4"  required
             value="<?php echo $row['team_lid4_naam'] ?>"><br/>
            Studentennummer lid 4: <input type="text" name="lidnummer4"  required
             value="<?php echo $row['team_lid4_nummer'] ?>"><br/>

            <br>
            <p>team goedgekeurd?</p>
            <input type="radio" name="goedkeuring" value="1"
            <?php if ($row['team_goedkeuring'] == '1') echo 'checked="checked"'; ?>> ja<br>

            <input type="radio" name="goedkeuring" value="0"
            <?php if ($row['team_goedkeuring'] == '0') echo 'checked="checked"'; ?>> nee<br>


            <br>

            <br>
            <p>wil je custom t-shirts voor 5 euro extra?</p>
            <input type="radio" name="donate" value="1"
            <?php if ($row['team_donate'] == '1') echo 'checked="checked"'; ?>> ja<br>

            <input type="radio" name="donate" value="0"
            <?php if ($row['team_donate'] == '0') echo 'checked="checked"'; ?>> nee<br>


            <br>
            <input type="submit" name="submit" value="verstuur">

    </form>

    	<a href="teamuitlees.php">Ga naar overzicht</a>

  </body>
</html>
