<?php

namespace _PhpScoper5bf6a941d2ec8;

/*
 * NOTE: The examples are using a text file as a database.
 * Please use a real database like MySQL in production code.
 */
function database_read($orderId)
{
  require "initialize.php";
    $orderId = \intval($orderId);
    $query = "SELECT * FROM `GLR_order`";
    $database = mysqli_query($mysqli, $query);
    $status = @\file_get_contents($database);
    return $status ? $status : "unknown order";
}
function database_write($orderId, $status)
{
  require "initialize.php";
    $orderId = \intval($orderId);
    //Check query fot unique OrderID
    $queryCHECK = "SELECT * FROM `GLR_order` WHERE `orderId` = '{$orderId}'";

    //Check if OrderID is unique. If unique paste new user. Otherwise update.
    $result = mysqli_query($mysqli, $queryCHECK);
    if (mysqli_num_rows($result) > 0) {

      $stmtUPD = mysqli_prepare($mysqli, "UPDATE `GLR_order` SET `status` = ? WHERE `GLR_order`.`orderID` = ?");

      mysqli_stmt_bind_param($stmtUPD, "ss", $status, $orderId);

      mysqli_stmt_execute($stmtUPD);

    } else {

      $value = 'PLACEHOLDER';
      $descr = 'PLACEHOLDER';


      $stmtINS = mysqli_prepare($mysqli, "INSERT INTO `GLR_order` (`ID_order`, `orderId`, `value`, `status`, `descr`) VALUES (NULL, ?, ?, ?, ?)");

      mysqli_stmt_bind_param($stmtINS, "ssss", $orderId, $value, $status, $descr);

      mysqli_stmt_execute($stmtINS);
    }
}
