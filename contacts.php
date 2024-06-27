   <?php include_once("Templates/heading.php"); ?>


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
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn"><h1>Fullname:</h1></label><br><br>

        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="Sale support">Sales Support</option>
            
        </select><br><br>

        <label for="sb"><h1>Message:</h1></label><br>
                <textarea name="client_message" id="" cols="30" rows="5" required></textarea><br><br>
       
        <input type="submit" name="send_message" value="Send Message">
    </form>
           </div>
</section>


<!--about section ends here-->



  <?php include_once ("Templates/footer.php"); ?>

  
</body>
</html>
