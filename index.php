<?php
// Initialize the session

include 'indexhead.php';
include 'config.php'; 
 
// Check if the user is logged in, otherwise redirect to login page


?>


<style type="text/css">
  .zoom:hover{
 transform: scale(1.5);
  }
  @media only screen (min-width:547px){
    .res{
        margin-right:2px;
        margin-left: 2px;
    }

  }  
</style>




   <div class="protect_section layout_padding" style="margin-bottom: 60px;">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">Recent Vaccination Doses</h1>
                  <p class="protect_text">Vaccine That Helps To Fight Corona !</p>
               </div>
            </div>
        </div>
    </div>

<div class="container res" style="margin-bottom: 60px;">
  <div class="row" style="column-gap:20px;column-width:75%;grid-row-gap: 20px;justify-content: space-around;">
  
<?php


        $sql1 = "SELECT * FROM `product` where catid = 1";
        $rs = mysqli_query($link,$sql1);
        while($data=mysqli_fetch_array($rs)){
        ?>




<div class="col-md-3" style="box-shadow: #b493f5 0px 5px 15px;border-radius: 35px;" >
  <div id="1">
     <div><center><img src="uploads/<?=$data['image'];?>"></center></div>
     <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label><?=$data['name'];?></label>          
      </div>
      <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label> Price : <?=$data['price'];?></label>
      </div>
      

  <form method="POST" action="cart.php?action=add&id=<?=$data['proid'];?>">       
   <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">Qty : 
   <input type="number" id="qty" name="qty" step="50" max="1000" min="100" value="100"  style="width:30%;margin-bottom:15px;border-radius:8px;color: #000;padding-left: 10px;padding-right: 10px;">         
  </div>

  <input type="hidden" name="id" value="<?=$data['proid'];?>">
  <input type="hidden" name="img" value="uploads/<?=$data['image'];?>">
  <input type="hidden" name="nav" value="<?=$data['name'];?>">
  <input type="hidden" id = "pric" name="pric" value="<?=$data['price'];?>">         

 <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">
  <button type="submit" value="Buy Now" name="add" style="background-color:black;width:80%;margin-bottom:5px;border-radius:15px;color: #fff">Buy Now</button>
  </div>
  </form> 


  </div>
</div>

    <?php
  }
  ?>
<!-- vaccine end -->


<!-- Short Description  -->
   <div class="protect_section layout_padding" style="margin-bottom: 60px;">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">About Corona Virus</h1>
                  <p class="protect_text">Stay Safe Keep Safe !</p>
               </div>
            </div>
        </div>
    </div>
          <div class="about_section" style="padding-top:40px;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="about_img"><img src="images/img-1.png"></div>
               </div>
               <div class="col-md-5">
                  <h1 class="about_taital">Coronavirus  what it is?</span></h1>
                  <p class="about_text">Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>

<!-- Short Descripio End -->


         <div class="protect_section layout_padding" style="margin-bottom: 60px;">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">Important Vaccine's</h1>
                  <p class="protect_text">Get Vaccinated And Stay Safe</p>
               </div>
            </div>
        </div>
    </div>


<?php


        $sql1 = "SELECT * FROM `product` where catid = 2";
        $rs = mysqli_query($link,$sql1);
        while($data=mysqli_fetch_array($rs)){
        ?>








<!-- vaccine start-->
<div class="col-md-3" style="box-shadow: #b493f5 0px 5px 15px;border-radius: 35px;" >
  <div id="1">
     <div><center><img src="uploads/<?=$data['image'];?>"></center></div>
     <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label><?=$data['name'];?></label>          
      </div>
      <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label> Price : <?=$data['price'];?></label>
      </div>
      

  <form method="POST" action="cart.php?action=add&id=<?=$data['proid'];?>">       
   <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">Qty : 
   <input type="number" id="qty" name="qty" step="50" max="1000" min="100" value="100"  style="width:30%;margin-bottom:15px;border-radius:8px;color: #000;padding-left: 10px;padding-right: 10px;">         
  </div>

  <input type="hidden" name="id" value="<?=$data['proid'];?>">
  <input type="hidden" name="img" value="uploads/<?=$data['image'];?>">
  <input type="hidden" name="nav" value="<?=$data['name'];?>">
  <input type="hidden" id = "pric" name="pric" value="<?=$data['price'];?>">         

 <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">
  <button type="submit" value="Buy Now" name="add" style="background-color:black;width:80%;margin-bottom:5px;border-radius:15px;color: #fff">Buy Now</button>
  </div>
  </form> 


  </div>
</div>

    <?php
  }
  ?>
<!-- vaccine end -->






         <div class="protect_section layout_padding" style="margin-bottom: 60px;">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">Recomonded Vaccine For Adults</h1>
                  <p class="protect_text">Get Vaccinated And Stay Safe</p>
               </div>
            </div>
        </div>
    </div>







<!-- products below -->
<?php
  $sql1 = "SELECT * FROM `product`";
  $rs = mysqli_query($link,$sql1);
  while($data=mysqli_fetch_array($rs)){
  ?>
  <!-- vaccine start-->
<div class="col-md-3" style="box-shadow: #b493f5 0px 5px 15px;border-radius: 35px;" >
  <div id="1">
     <div><center><img src="uploads/<?=$data['image'];?>"></center></div>
     <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label><?=$data['name'];?></label>          
      </div>
      <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;">
        <label> Price : <?=$data['price'];?></label>
      </div>
      

  <form method="POST" action="cart.php?action=add&id=<?=$data['proid'];?>">       
   <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">Qty : 
   <input type="number" id="qty" name="qty" step="50" max="1000" min="100" value="100"  style="width:30%;margin-bottom:15px;border-radius:8px;color: #000;padding-left: 10px;padding-right: 10px;">         
  </div>

  <input type="hidden" name="id" value="<?=$data['proid'];?>">
  <input type="hidden" name="img" value="uploads/<?=$data['image'];?>">
  <input type="hidden" name="nav" value="<?=$data['name'];?>">
  <input type="hidden" id = "pric" name="pric" value="<?=$data['price'];?>">         

 <div style="text-align:center;color:#000;font-size:18px;font-family: 'Merriweather', serif;margin-top:3px;margin-bottom: 5px;">
  <button type="submit" value="Buy Now" name="add" style="background-color:black;width:80%;margin-bottom:5px;border-radius:15px;color: #fff">Buy Now</button>
  </div>
  </form> 


  </div>
</div>


    <?php
  }
  ?>
<!-- vaccine end -->



  </div>
</div>

<?php include 'footer.php' ; ?>



