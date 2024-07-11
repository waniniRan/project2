<?php include_once("Templates/heading.php");
     require_once ("includes/db_connect.php");

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
<section class="contact" id="contact">
           <h1 class="heading"> <span> Talk to</span> Us</h1>
  <div class="rows">   
    
    
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn"><h1>Fullname:</h1></label><br><br>

        <input type="text" id="fn" placeholder="Fullname" name="fullname" class+="box "required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" class="box" required><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" class="box "required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="Sale support">Sales Support</option>
            
        </select><br><br>


        <label for="sb"><h1>Message:</h1></label><br>
                <textarea name="client_message" class="box" id="" cols="30" rows="5"  required></textarea><br><br>
       
        <input type="submit" name="send_message" value="Send Message">
    </form>
   </div>
</section>
<div>
  <?php include_once ("Templates/footer.php"); ?>
</div>
  

