<?php
session_start();

require "config.inc.php";

$team_id = $_GET['team_id'];

$_SESSION['order_id'] = $_GET['order_id'];

$queryCHECK = "SELECT `status` FROM `GLR_order` WHERE `status` = 'paid' AND orderId = {$_SESSION['order_id']}";

$result = mysqli_query($mysqli, $queryCHECK);

if (mysqli_num_rows($result) == 0) {
  unset($_SESSION['order_id']);
  unset($_SESSION['value']);
  unset($_SESSION['descr']);
  unset($_SESSION['team_id']);
   header('Location: https://glrtournament.nl/');

}
else {
   $query = "UPDATE `GLR_teams` SET `team_betaald` = '1' WHERE `GLR_teams`.`team_id` = {$team_id}";
      $database = mysqli_query($mysqli, $query);
   header('Location: http://www.glrtournament.nl/pages/ok2.php');
}
