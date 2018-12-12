<?php

require 'config.inc.php';

if (isset($_GET['betaald'])) {
  $error = $_GET['betaald'];
}
else {
  $error = 2;
}

$orderId = $_GET['orderId'];

$check = "SELECT * FROM `GLR_order` WHERE `orderId` = $orderId AND `status` = 'paid'";
$result = mysqli_query($mysqli, $check);

if (mysqli_num_rows($result) == 1) {
  // Niks
}
else {
  $error = 2;
}

switch ($error) {
  case 1:
    $betaaldTekst = 'Bedankt voor de donatie! Je zal jouw donatie spoedig op de donatie counter zien!';
    break;

  case 2:
    $betaaldTekst = 'Het lijkt erop dat u hier niet hoort te zijn.<br>Klik op de bovenstaande knop om terug te gaan.';
    break;

  default:
    $betaaldTekst = 'Het lijkt erop dat u hier niet hoort te zijn.<br>Klik op de bovenstaande knop om terug te gaan.';
    break;
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
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/ok.css">
    <title>Bedankt!</title>
  </head>
  <body>
    <header>
      <figure>
        <img src="img/logo.png" alt="">
      </figure>
      <ul>
        <li><a href="../index.php">Home</a></li>
      </ul>
    </header>
    <main>
      <div class="ok">
        <h1>Het is gelukt!</h1>
        <h2><?php echo $betaaldTekst; ?></h2>

      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
