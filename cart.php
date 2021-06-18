
<?php
session_start();
include 'header.php';
include 'config.php';
?>
<?php

if (isset($_POST["add"])) {
  if(isset($_SESSION["cart"])){
   $item1 = array_column($_SESSION["cart"],"id");
   if(!in_array($_GET["id"], $item1))
   {
     $count = count($_SESSION["cart"]);
     $items  = array(
      'id' => $_GET["id"] ,
   	  'name' => $_POST["nav"] ,
   	  'price' => $_POST["pric"] ,
   	  'image' => $_POST["img"] ,
   	  'qty' => $_POST['qty']
     );
     $_SESSION["cart"][$count] = $items;
   }
   else
   {
    echo "<script>alert('Item Alredy Added')</script>";
    header("Location:index.php");
   }

  }
  else
  {
   $items = array(
   	  'id' => $_GET["id"] ,
   	  'name' => $_POST["nav"] ,
   	  'price' => $_POST["pric"] ,
   	  'image' => $_POST["img"] ,
   	  'qty' => $_POST['qty']
   	);
   $_SESSION["cart"][0] = $items;
  }
}

?>
<!-- Cart Page php -->


<!-- Remove From CArt -->
<?php 
if (isset($_GET["action"])) {
	
	if($_GET["action"] == "delet")
	{
		foreach ($_SESSION["cart"] as $key => $values) {
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$key]);
				echo "<script>alert('Items Removed')</script>";
				echo "<script>windows.location.href ='cart.php'</script>";
			}
		}
	}
}

?>





<!-- remove From cart end -->
<!-- Cart Page -->
<div class="px-4 px-lg-0">
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive" style="margin-top:60px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Product Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Product Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Total</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Action</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              	<?php
              	if(!empty($_SESSION["cart"]))
              	{
              		$total = 0;
              		foreach ($_SESSION["cart"] as $key => $value) {
              		 ?>	
              		 <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $value['name'] ?></a></h5>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong><?php echo $value['price'] ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo $value['qty'] ?></strong></td>
                  <td class="border-0 align-middle"><strong><?php echo number_format($value['qty'] * $value['price'] , 2 ) ?></strong></td>
                  <td class="border-0 align-middle"><a href="cart.php?action=delet&id=<?=$value['id'];?>" class="text-dark">Remove</a></td>
                </tr>


 
                    <?php
                     $total = $total + ($value['qty'] * $value['price']);
              		 }
              		 ?>
              		 <tr>
              		 	<td colspan="3" align="right" style="font-size: 20px;">TOTAL</td>
              		 	<td align="right" style="font-size: 20px;"><?php echo number_format($total,2) ?></td>
              		 </tr>
              		 <?php 
              	}
              	?>             
              </tbody>
            </table>
            <form method="post" action="checkout.php?action=cod&id=<?=$value['id']?>">
            <input type="submit" name="cod" value="Procced To Checkout" style="float: right;background:#000;color:#fff;border-color:#000;">
           <a href="index.php"><input type="submit" name="cod" value="Continue Shopping" style="float: left;background:#000;color:#fff;border-color:#000;"></a>
            </form>
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cart Page -->

