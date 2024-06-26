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





  <!--home section ends here-->

<!--about section starts -->

<section class="contact" id="contact">



<?php require_once ("includes/db_connect.php"); ?>



<?php
if(isset($_POST["send_message"])){
    $fn = $_POST["fullname"];
    $mail = $_POST["email_address"];
    $subject = $_POST["subject_line"];
    $message = $_POST["client_message"];

    $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: contacts.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>


<div class="row">
    <div class="contents">
    <h1 class="heading"> <span>Talk To Us</span> <br><br> </h1>
    <form action=""<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn"><span>Fullname:</span></label><br><br>

        <input type="text" id="fn" placeholder="Fullname" name="Fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="eLearning Support">eLearning Support</option>
            <option value="AMS Support">AMS Support</option>
        </select><br><br>

        <label for="sb">Message:</label><br>
                <textarea name="client_message" id="" cols="30" rows="5" required></textarea><br><br>
       
        <input type="submit" name="send_message" value="Send Message">
    </form>
</div>




</section>


<!--about section ends here-->


  
<div>
</div>

  <?php include_once ("Templates/footer.php"); ?>

  
</body>
</html>
