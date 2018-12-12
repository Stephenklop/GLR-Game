<?php
  require_once 'session.inc.php';

  require_once 'config.inc.php';


  $id = $_GET['id'];

  $query = "UPDATE GLR_teams SET team_behandeld = '1' WHERE team_id = '$id'";

  $result = mysqli_query($mysqli, $query);

  if ($result != false) 
  {
    header("location:teamuitlees.php");
  }

  else
  {
    echo "er ging wat mis";

  }

?>