<?php
include "config.php";

if (isset($_POST['view'])) {
    $id = $_POST["id"];
    $query = "SELECT * FROM complaints WHERE id = '$id'";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $res = [
            'status' => 200,
            'type' => $row['complaint_type'],
            'block' => $row['block'],
            'place' => $row['place'],
            'desc' => $row['description'],
            'stat' => $row['status'],
            'rej' => $row['rej_comment'],
            'hod' => $row['hod_id'],
            'fac' => $row['fac_id'],
            'hoddate' => $row['hod_ap_date'],
            'mandate' => $row['man_ap_date'],
            'fdate' => $row['fin_date'],

        ];
        echo json_encode($res);
        return;
    }
} elseif (isset($_POST['action']) && $_POST['action'] === 'cancel') {
    $approvalValue = 100;
    $complaintID = $_POST["complaintId"];

    $query = "UPDATE `complaints` SET status = ? WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ii", $approvalValue, $complaintID);
    if (mysqli_stmt_execute($stmt)) {
        $res = [
            'status' => 200,
            'message' => 'canceled'
        ];

        echo json_encode($res);
        return;
    } else {
        http_response_code(500);
        echo "Error canceling";
    }
    mysqli_stmt_close($stmt);
} elseif (isset($_POST['id'], $_POST['complaintType'], $_POST['blockName'], $_POST['roomNumber'], $_POST['complaintDescription'])) {
    // Handling the request to update complaint details
    $complaintID = $_POST['id'];
    $complaintType = $_POST['complaintType'];
    $blockName = $_POST['blockName'];
    $roomNumber = $_POST['roomNumber'];
    $complaintDescription = $_POST['complaintDescription'];

    // You should perform data validation and sanitization here

    // Update the complaint details in the database
    $query = "UPDATE complaints SET 
        complaint_type = '$complaintType', 
        block = '$blockName', 
        place = '$roomNumber', 
        description = '$complaintDescription' 
        WHERE id = '$complaintID'";

    if (mysqli_query($db, $query)) {
        // Successful update
        $response = [
            'status' => 200,
            'message' => 'Complaint details updated successfully',
        ];
        echo json_encode($response);
    } else {
        // Error while updating
        $response = [
            'status' => 500,
            'message' => 'Error updating complaint details',
        ];
        echo json_encode($response);
    }
} elseif (isset($_POST['rating']) && $_POST['feedC']) {

    $complaintID = $_POST['id'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedC'];
    // echo '<script>console.log('.')</script>'
    $query = "UPDATE `complaints` SET rating = ?, feedback = ? WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "isi", $rating, $feedback, $complaintID);

    if (mysqli_stmt_execute($stmt)) {
        $res = [
            'status' => 200,
            'message' => 'Updated'
        ];

        echo json_encode($res);
        return;
    } else {
        http_response_code(500);
        echo "Error Updating";
    }
    mysqli_stmt_close($stmt);
} elseif (isset($_POST['rejComment'])) {

    $complaintID = $_POST["complaintID"];
    $rejComment = $_POST["rejComment"];

    // You may want to perform additional validation and security checks here

    // Update the 'complaints' table with the rejection comment
    $query = "UPDATE complaints SET rej_comment = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $rejComment, $complaintID);

    if ($stmt->execute()) {
        // Rejection comment updated successfully
        $response = array("status" => 200, "message" => "Rejection comment updated successfully.");
        echo json_encode($response);
    } else {
        // Error updating rejection comment
        $response = array("status" => 500, "message" => "Error updating rejection comment.");
        echo json_encode($response);
    }

    // Close the database connection (if necessary)
    $stmt->close();
} else {
    // Invalid or unsupported request
    $response = [
        'status' => 400,
        'message' => 'Bad Request',
    ];
    echo json_encode($response);
}
