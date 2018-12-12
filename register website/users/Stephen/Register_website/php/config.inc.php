<?php

\ini_set('display_errors', 1);
\ini_set('display_startup_errors', 1);
\error_reporting(\E_ALL);

//database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = 'glrtournament_order';
$db_password = 'yaaXTzog&6fnkAU8=+';
$db_database = 'glrtournament_game';

// maak de database-verbiding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);