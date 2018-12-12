<?php
session_start();
//check if username is set.

if(!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0){
	//invalid login
	header("Location:login.php?1");
	exit();
}