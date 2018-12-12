<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <!-- fivicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
        <form action="php/teamverwerk.php" method="post">
          <input type="text" name="" placeholder="Team Naam" required><br>
          <label for="logo">Team Logo</label>
          <input type="file" name="" id="logo" required><br>
          <input type="text" name="" placeholder="Naam Team Captain" required><br>
          <input type="number" name="" placeholder="Studentnummer Team Captain" min="11111" max="99999" required><br>
          <input type="text" name="" placeholder="Naam Team Lid 1" required><br>
          <input type="number" name="" placeholder="Studentnummer Team Lid 1"  min="11111" max="99999" required><br>
          <input type="text" name="" placeholder="Naam Team Lid 2" required><br>
          <input type="number" name="" placeholder="Studentnummer Team Lid 2"  min="11111" max="99999" required><br>
          <input type="text" name="" placeholder="Naam Team Lid 3" required><br>
          <input type="number" name="" placeholder="Studentnummer Team Lid 3"  min="11111" max="99999" required><br>
          <input type="text" name="" placeholder="Naam Team Lid 4" required><br>
          <input type="number" name="" placeholder="Studentnummer Team Lid 4"  min="11111" max="99999" required><br>
          <label>Wil je 7,50 doneren voor custom shirts?</label>
          <input type="radio" name="donateRadio" value="1"> ja
          <input type="radio" name="donateRadio" value="0"> nee<br>
          <input type="submit" name="" value="Meld je aan!"><br>
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
