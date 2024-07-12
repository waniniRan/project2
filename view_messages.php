
<?php
    require_once ("includes/db_connect.php");
    include_once("Templates/heading.php");
    
   
    if(isset($_GET["DelId"])){
        $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);        

       // sql to delete a record
        $del_mes = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";

        if ($conn->query($del_mes) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
        echo "Error deleting record: " . $conn->error;
        }
    }
?>


<div class="row">
            <div class="content">
           
                <h1>Messages</h1>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Sender Name</th>
                    <th>Sender Email</td>
                    <th>Subject Line</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php
        $select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
        $sel_msg_res = $conn->query($select_msg);
        $en = 0;
        if ($sel_msg_res->num_rows > 0) {
            // output data of each row
            while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                $en++;
                ?>
        <tr>
            <td><?php print $en; ?>.</td>
            <td><?php print $sel_msg_row["sender_name"]; ?></td>
            <td><?php print $sel_msg_row["sender_email"]; ?></td>
            <td><?php print "<strong>" . $sel_msg_row["subject_line"] .'</strong> - ' . substr($sel_msg_row["text_message"], 0, 20) . '...' ; ?></td>
            <td><?php print date("d-M-Y H:i", strtotime($sel_msg_row["datecreated"])); ?></td>
            <td>[ <a href="edit_message.php?messageId=<?php print $sel_msg_row["messageId"]; ?>">Edit</a> ] [ <a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>">Del</a> ]</td>
        </tr>
<?php
            }
        } else {
        echo "0 results";
        }
?>
        </tbody>
 <div>
    <?php include_once("Templates/footer.php");?>
    </div>


        


   