<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Registreer</title>
  </head>
  <body>
    <header>
      <figure>
        <img src="img/logo.png" alt="">
      </figure>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
    </header>
    <main>
      <h1>Registreer</h1>
      <section class="form">
        <form action="php/teamverwerk.php" method="post" enctype="multipart/form-data">
          <input type="text" name="teamname" placeholder="Team Naam" required><br>
          <label for="logo">Team Logo</label>
          <input type="file" name="foto" id="logo" required><br>
          <input type="text" name="captianname" placeholder="Naam Team Captain" required><br>
          <input type="number" name="captiannummer" placeholder="Studentnummer Team Captain" min="11111" max="99999" required><br>
          <input type="text" name="lid1" placeholder="Naam Team Lid 1" required><br>
          <input type="number" name="lidnummer1" placeholder="Studentnummer Team Lid 1"  min="11111" max="99999" required><br>
          <input type="text" name="lid2" placeholder="Naam Team Lid 2" required><br>
          <input type="number" name="lidnummer2" placeholder="Studentnummer Team Lid 2"  min="11111" max="99999" required><br>
          <input type="text" name="lid3" placeholder="Naam Team Lid 3" required><br>
          <input type="number" name="lidnummer3" placeholder="Studentnummer Team Lid 3"  min="11111" max="99999" required><br>
          <input type="text" name="lid4" placeholder="Naam Team Lid 4" required><br>
          <input type="number" name="lidnummer4" placeholder="Studentnummer Team Lid 4"  min="11111" max="99999" required><br>
          <input type="radio" name="donateRadio" value="1"> ja<br>
          <input type="radio" name="donateRadio" value="0"> nee<br>
          <input type="submit" name="submit" value="Meld je aan!"><br>
        </form>
      </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
