<?php
require 'config.php';
// Assuming you have a function to update the status in your database
// This function should be in your existing PHP code

if(isset($_POST['complaintId']) && isset($_POST['newStatus'])) {
    $complaintId = $_POST['complaintId'];
    $newStatus = $_POST['newStatus'];

    
    $query = "UPDATE complaints SET status = status+$newStatus , fin_date = NOW() WHERE id = $complaintId";
    mysqli_query($db, $query);

    
}
?>
