<?php
// Initialize the session
session_start();
include 'head1.php';
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php include 'config.php';?>


<!--  -->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container">
<div>
	<h2>Add Products</h2>
</div>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Product Name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="price" placeholder="Product Price..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Product Description</label>
      </div>
      <div class="col-75">
        <textarea type="text" id="lname" name="description" placeholder="Product Description.." rows="3"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cat">Product Catgeory</label>
      </div>
      <div class="col-75">
        <select id="catid" name="catid">
          <option value="">Select Category</option>
          <?php
          $sql1 =  "SELECT * FROM `category`";
          $rs = mysqli_query($link,$sql1);
          if(mysqli_num_rows($rs)>0)
          {
           while($col =mysqli_fetch_array($rs)){
           	?>
           	<option value="<?=$col['catid']?>"><?=$col['name']?> </option>
           	<?php
           }
          }
          else
          {
            ?>
            <option>No Categories Found</option>
            <?php

          }
          ?>          
        </select>
      </div>
    </div>



      <div class="row">
      <div class="col-25">
      <label for="lname">Upload Image</label>
      </div>
      <div class="col-75">
      <input type="file" name="image" width="100%" style="font-size:16px;padding:8px;">
      </div>
      </div>
       

    <div class="row" style=margin-top:10px;>
      <input type="submit" value="Submit" name="add">
    </div>
  </form>
</div>

</body>
</html>



<?php 

if(isset($_POST['add'])) {
	# code...
	$name = $_POST["name"];
	$price = $_POST["price"];
	$desc = $_POST["description"];	
	$img = $_FILES["image"]['name'];
	$tmp = $_FILES["image"]['tmp_name'];	
	$catid = $_POST['catid'];
	$status = 1;
    

    move_uploaded_file($tmp,"../uploads/$img");


    $sql2 = "INSERT INTO `product`(`name`, `price`, `description`, `image`, `catid`, `status`) VALUES ('$name','$price','$desc','$img','$catid','$status')";



    if (mysqli_query($link,$sql2)) {
    	# code...
    	echo "<script>alert('Product Added ! ')</script>";
    }
    else
    {
    	echo "<script>alert( ) </script>";
    }
}
?>


<style type="text/css">
	table {
  
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
tr{
	border :1px solid grey;
}

th, td {
  text-align: center;
  padding:12px;

}
</style>


<div class="container1" style="margin-top: 10px;">
         <div>
  	       <h2>Product Tabels :</h2>
         </div>	
         <div style="margin:10px;border:1px solid grey">
  	      <table>
  		   <tr>
  			<th>Id</th>
  			<th>Product Name</th>
  			<th>Product Price</th>
  			<th>Product Image</th>  			
  			<th>Category Id</th>
  			<th>Action</th>
  		</tr>
  		<?php
        $sql1 = "SELECT * FROM `product`";
        $rs = mysqli_query($link,$sql1);
        while($data=mysqli_fetch_array($rs)){
        ?>
        
        <tr>
        	<td><?=$data['proid'];?></td>
        	<td style="text-transform: capitalize;"><?=$data['name'];?></td>
        	<td style="text-transform: capitalize;"><?=$data['price'];?></td>
        	<td ><img src="../uploads/<?=$data['image'];?>" style="width: 100px;height: 100px;"></td>
        	<td style="text-transform: capitalize;"><?=$data['catid'];?></td>
        	<td></span><a href='remove.php?id=<?=$data['proid']?>' style="  background-color:red;
  color: white;
  padding: 6px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  ">Delete</a></td></td>
        	
        </tr>


        <?php	
        }
        ?>


  	</table>
  </div>
</div>

























<!--  -->


<?php include 'foot.php';?>
