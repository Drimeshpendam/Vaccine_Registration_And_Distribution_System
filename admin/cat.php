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
  background-color: #000;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  position: relative;
}

.col-251 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-751 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
  
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-251, .col-751, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .ba{
	margin-top:5px;
}
}
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
.ba{
	margin-top:10px;
}
</style>
</head>
<body style="margin-top: 70px;">

<div class="container1">
  <div>
  	<h2>Add Categories:</h2>
  </div>	
  <div>
  	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="row1">
      <div class="col-251">
        <label for="fname">Enter Category :</label>
      </div>
      <div class="col-751">
        <input type="text" id="fname" name="cat" placeholder="Your name..">
      </div>
    </div>
    <div class="row1" class="ba" style="margin-top:10px;">
      <input type="submit" value="Submit" name="add">
    </div>
  </form>
  </div>
</div>


<div class="container1" style="margin-top: 10px;">
         <div>
  	       <h2>Categories Tabel :</h2>
         </div>	
         <div style="margin:10px;border:1px solid grey">
  	      <table>
  		   <tr>
  			<th>Id</th>
  			<th>Category</th>
  			<th>Action</th>
  		</tr>
  		<?php
        $sql1 = "SELECT * FROM `category`";
        $rs = mysqli_query($link,$sql1);
        while($data=mysqli_fetch_array($rs)){
        ?>
        
        <tr>
        	<td><?=$data['catid'];?></td>
        	<td style="text-transform: capitalize;"><?=$data['name'];?></td>
        	<td></span><a href='removecat.php?id=<?=$data['catid']?>' style="  background-color:red;
  color: white;
  padding: 6px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  " >Delete</a></td></td>
        	
        </tr>


        <?php	
        }
        ?>


  	</table>
  </div>
</div>




















</body>
</html>

<?php 

if (isset($_POST['add'])) {
	# code...
	$cat = $_POST["cat"];	
    $sql = "INSERT INTO `category`(`name`) VALUES ('$cat')";

    if (mysqli_query($link,$sql)) {
    	# code...
    	echo "<script>alert('Category Added ! ')</script>";
    }
    else
    {
    	echo "<script>alert('Category Not Added ! ') </script>";
    }
}
?>




<?php include 'foot.php';?>