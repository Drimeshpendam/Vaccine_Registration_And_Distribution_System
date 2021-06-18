<?php
include 'config.php';
$a = $_GET['id'];
mysqli_query($link,"DELETE FROM `category` WHERE catid = '$a' ");
echo '
<script type="text/javascript">
  alert("Category Removed");
</script>';
header('Location:cat.php');
?>