<?php

namespace _PhpScoper5bf6a941d2ec8;

/*
 * Make sure to disable the display of errors in production code!
 */
\ini_set('display_errors', 1);
\ini_set('display_startup_errors', 1);
\error_reporting(\E_ALL);
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/functions.php";
/*
 * Initialize the Mollie API library with your API key.
 *
 * See: https://www.mollie.com/dashboard/developers/api-keys
 */
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("live_cdqCVNuMwkjgesMv4pxAdyPEhVVzb7");

//database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = 'glrtournament_order';
$db_password = 'yaaXTzog&6fnkAU8=+';
$db_database = 'glrtournament_game';

// maak de database-verbiding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
