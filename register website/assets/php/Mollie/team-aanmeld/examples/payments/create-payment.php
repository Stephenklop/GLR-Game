<?php


namespace _PhpScoper5bf6a941d2ec8;

session_start();

$value = $_SESSION['value'];
$descr = $_SESSION['descr'];
$valuePattern = "/[1-9][0-9]{0,9}[.][0-9]{2}/";
$team_id = $_SESSION['team_id'];

//Check if variables are empty or incorrect
if(preg_match($valuePattern, $value) == 1) {
  // do nothing
}
else {
  echo "{$value}";
  echo "Het lijkt erop dat er iets is misgegaan! Stuur een email naar: 81508@glr.nl. FOUTCODE: value.";
  var_dump($_SESSION);
  //header('Location: http://www.example.com/');
  exit();
}
if (!isset($descr)) {
  echo "{$descr}";
  echo "description";
  echo "Het lijkt erop dat er iets is misgegaan! Stuur een email naar: 81508@glr.nl. FOUTCODE: Description.";
  //header('Location: http://www.example.com/');
  exit();
}
else {
  //do nothing
}

/*
 * How to prepare a new payment with the Mollie API.
 */
try {
    /*
     * Initialize the Mollie API library with your API key.
     *
     * See: https://www.mollie.com/dashboard/developers/api-keys
     */
    require "../initialize.php";
    /*
     * Generate a unique order id for this example. It is important to include this unique attribute
     * in the redirectUrl (below) so a proper return page can be shown to the customer.
     */
    $orderId = \time();
    /*
     * Determine the url parts to these example files.
     */
    $protocol = isset($_SERVER['HTTPS']) && \strcasecmp('off', $_SERVER['HTTPS']) !== 0 ? "https" : "http";
    $hostname = $_SERVER['HTTP_HOST'];
    $path = \dirname(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PHP_SELF']);
    /*
     * Payment parameters:
     *   amount        Amount in EUROs. This example creates a € 10,- payment.
     *   description   Description of the payment.
     *   redirectUrl   Redirect location. The customer will be redirected there after the payment.
     *   webhookUrl    Webhook location, used to report when the payment changes state.
     *   metadata      Custom metadata that is stored with the payment.
     */
    $payment = $mollie->payments->create(["amount" => [
      "currency" => "EUR",
       "value" => "{$value}"
     ],
     "description" => "Order #{$orderId}",
    "redirectUrl" => "http://www.glrtournament.nl/ok_verwerk.php?order_id={$orderId}&team_id={$team_id}",
    //"redirectUrl" => "https://www.glrtournament.nl/ok_verwerk.php",
    "webhookUrl" => "{$protocol}://{$hostname}{$path}/webhook.php",
    "metadata" => [
      "order_id" => $orderId]
    ]);
    /*
     * In this example we store the order with its payment status in a database.
     */
    \_PhpScoper5bf6a941d2ec8\database_write($orderId, $payment->status);

    $queryP = "UPDATE `GLR_order` SET `value` = '{$value}', `descr` = '{$descr}' WHERE `GLR_order`.`orderID` = '{$orderId}'";
    $database = mysqli_query($mysqli, $queryP);

    /*
     * Send the customer off to complete the payment.
     * This request should always be a GET, thus we enforce 303 http response code
     */
    \header("Location: " . $payment->getCheckoutUrl(), \true, 303);
} catch (\Mollie\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . \htmlspecialchars($e->getMessage());
}
