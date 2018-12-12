<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <!-- favicon -->
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
    <title>Registreer | GLR Game Colosseum</title>
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
      <div class="container">
        <div class="row">
        <div class="col col-md-12">
          <section class="form">
            <form action="assets/php/teamverwerk.php" method="post" enctype="multipart/form-data">
              <label><b>LET OP: Aan de inschrijving zijn eenmalige kosten van &euro;12,50 verbonden. Van dit bedrag gaat er een deel naar het goede doel, en een deel naar de prijzenpot<br>Het team mag alleen bestaan uit studenten van het Grafisch Lyceum Rotterdam.<br><br> Het evenement is van dinsdag 18 december tot donderdag 20 december. Iedereen van het team moet op elke dag van 17:00 tot 22:00 beschikbaar zijn!</b></label>
              <input type="text" name="teamname" placeholder="Team Naam" required><br>
              <label for="logo">Team Logo</label>
              <input type="file" name="foto" id="logo" required><br>
              <label>Afbleeding mag maximaal 1mb zijn en moet een png bestand zijn.</label>
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
              <label>Wil je 37,50 doneren voor custom t-shirts met je eigen logo?</label>
              <input type="radio" name="donateRadio" value="1"> ja
              <input type="radio" name="donateRadio" value="0"> nee<br>
              <input type="submit" name="submit" value="Meld je aan!"><br>
            </form>
          </section>
        </div>
      </div>
    </div>
  </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
