<?php session_start();


include 'header.php'?>
<!-- checkout page -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">  	
  		<h1 class="protect_taital" style="margin-top: 40px;margin-bottom: 20px;">Checkout Now</h1>   
    <center>
      </div>
    <div class="col-md-6 ">
      <h4 class="mb-3" style="font-size:24px;">Billing address</h4>

































      <form method="post" action="customer.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName" style="float:left;">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" name="fname" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName" style="float:left;">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" name ="lname" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username" style="float:left;">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" value="<?=$_SESSION["username"];?>" placeholder="Username" required name="username">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" style="float: left;">Email<span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" name="mail" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address" style="float: left;">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2" style="float: left;">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>
        
          <div class="mb-3" >
            <label for="zip" style="float: left;">Zip (Pin-Code)</label>
            <input type="text" class="form-control" id="zip" name="pin" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-">
        <div class="mb-3">
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color: rgb(0,0,0);border-color: #000;width:30%" >Procced to Pay</button>          
        </div>         
      </form>
















    </div>
  </div>
    </center>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script></body>
</html>

<!-- checkout page -->
<?php include 'footer.php'?>
<script type="text/javascript">
	document.getElementById('')
</script>