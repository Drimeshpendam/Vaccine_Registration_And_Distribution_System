<?php 

include 'config.php';
?>

<?php

	$fname     = $_POST["fname"];
	$lname     = $_POST["lname"];
	$username  = $_POST["username"];
	$mail      = $_POST["mail"];
	$address   = $_POST["address"];
	$pin       = $_POST["pin"];

$sql = "INSERT INTO `cust`(`fname`, `lname`, `username`, `mail`, `address`, `pin`) VALUES ($fname,$lname,$username,$mail,$address,$pin)";


if (mysqli_query($link,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>

?>







