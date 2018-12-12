<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="css input" type="text/css" href="main.css">

    <meta charset="utf-8">
    <title>Inschrijven.</title>
  </head>
  <body>
    <form action="teamverwerk.php" method="POST" enctype="multipart/form-data">

            Team naam:  <input type="text" name="teamname" required><br/>
            <br/>
            Team logo: <input type="file" id="foto" name="foto"><br/>
            <br/>
            Naam TeamCaptian:  <input type="text" name="captianname" required><br/>
            Studentennummer Captian:  <input type="text" name="captiannummer" required><br/>
            <br/>
            Team member 1: <input type="text" name="lid1"  required><br/>
            Studentennummer lid 1: <input type="text" name="lidnummer1"  required><br/>
			<br/>
            Team member 2: <input type="text" name="lid2"  required><br/>
			Studentennummer lid 2: <input type="text" name="lidnummer2"  required><br/>
			<br/>
            Team member 3: <input type="text" name="lid3"  required><br/>
            Studentennummer lid 3: <input type="text" name="lidnummer3"  required><br/>
            <br/>
            Team member 4: <input type="text" name="lid4"  required><br/>
            Studentennummer lid 4: <input type="text" name="lidnummer4"  required><br/>
            <br/>
            Team member 5: <input type="text" name="lid5"  required><br/>
            Studentennummer lid 5: <input type="text" name="lidnummer5"  required><br/>


            <br>
            <p>wil je custom t-shirts voor 5 euro extra?</p><br>
            <input type="radio" name="donate" value="1"> ja<br>
            <input type="radio" name="donate" value="0"> nee<br>
            <br>
            <input type="submit" name="submit" value="verstuur">

    </form>

    	<a href="teamuitlees.php">Ga naar overzicht</a>

  </body>
</html>
