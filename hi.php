<?php

include "db-connection.php";

$sql = "INSERT INTO `customers`(`customerName`, `customer_password`) VALUES ('jackson','jackson3028') ";
$sendingdata = $db_connection->query($sql);
echo($sendingdata) 
?>