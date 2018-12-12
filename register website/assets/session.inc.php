<?php
session_start();
if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0) {
;
}else {
echo "<br>";
echo "<div class='login'>";
echo "<p>Je bent ingelogd als ". $_SESSION['username'] ."<br>";
echo "<a href='loguit.php'><strong>Kilk hier<strong></a> om uit te loggen </p>";
}
?>
