<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flowers</title>
  
  <!--font awsesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
<!--custom css file link-->

<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

  <!--header section starts here-->

  <header>

   <input type="checkbox" name=" " id="toggler">
   <label for="toggler" class="fas fa-bars"></label>

   <a href="#" class="logo">GardenGrace<span>.</span></a>
   


   <?php  include_once("Templates/nav.php"); ?>
   
   <?php include_once("Templates/icons.php"); ?>

  </header>
  <!--header section ends here-->


  <!--home section starts here-->

<section class="home" id="home">
  <div class="content">

<h3>Fresh Flowers</h3>
<span>Natural and Beautiful Flowers</span>
<p></p>
<a href="#" class="btn">Shop Now</a>
</div>
</section>
  <!--home section ends here-->


<!--about section starts -->





<!--about section ends here-->


<!---footer section starts here--->

<section class="footer">



        <div class="credit">
            Copyright  &copy;GardenGrace <?php print date("Y"); ?> - Allrights Reserved 
        </div>
</div>   
</section>


  <!---footer section ends here--->


  
</body>
</html>