<?php
include 'config.php';
$a = $_GET['id'];
mysqli_query($link,"DELETE FROM `users` WHERE id = '$a' ");
echo '
<script type="text/javascript">
  alert("User Removed");
</script>';
header('Location:cust.php');
?>