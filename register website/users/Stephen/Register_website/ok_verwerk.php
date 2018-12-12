<?php
session_start();

require "php/config.inc.php";

$team_id = $_GET['team_id'];

$query = "UPDATE `GLR_teams` SET `team_betaald` = '1' WHERE `GLR_teams`.`team_id` = $team_id";

$database = mysqli_query($mysqli, $query);

$_SESSION['order_id'] = $_GET['order_id'];

header('Location: http://www.glrtournament.nl/Stephen/Register_website/ok.php');
