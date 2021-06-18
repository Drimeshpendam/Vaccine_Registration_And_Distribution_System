<?php
include 'config.php';
$a = $_GET['id'];
mysqli_query($link,"DELETE FROM `product` WHERE proid = '$a' ");
echo '
<script type="text/javascript">
  alert("Product Removed");
</script>';
header('Location:pro.php');
?>