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
  	       <h2>Customer's :</h2>
         </div>	
         <div style="margin:10px;border:1px solid grey">
  	      <table>
  		   <tr>
  			<th>Id</th>
  			<th>Customer Name</th>			 			
  			<th>Customer Entered Date</th>
  			<th>Action</th>
  		</tr>
  		<?php
        $sql1 = "SELECT * FROM `users`";
        $rs = mysqli_query($link,$sql1);
        while($data=mysqli_fetch_array($rs)){
        ?>
        
        <tr>
        	<td><?=$data['id'];?></td>
        	<td style="text-transform: capitalize;"><?=$data['username'];?></td>        
          <td style="text-transform: capitalize;"><?=$data['created_at'];?></td>




        	
        	<td></span><a href='removecust.php?id=<?=$data['id']?>' style=" background-color:red;
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

























<!--  -->


<?php include 'foot.php';?>
