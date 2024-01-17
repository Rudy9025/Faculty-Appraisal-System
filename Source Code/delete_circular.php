<?php
include_once 'connection.php';

if(isset($_GET['cid'])) {
    $cid = $_GET['cid'];

    // Retrieve file information from the database
    $sql = "SELECT filename FROM circulars WHERE cid = '$cid'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $filename = $row['filename'];

        // Delete the file from the server
        $file_path = 'uploads/' . $filename;
        if(file_exists($file_path)) {
            if(unlink($file_path)) { // Delete the file
                // Delete the file record from the database
                $delete_sql = "DELETE FROM circulars WHERE cid = '$cid'";
                if(mysqli_query($conn, $delete_sql)) {
                    $deleteMessage = "File deleted successfully!";
                } else {
                    $deleteMessage = "Error deleting file: " . mysqli_error($conn);
                }
            } else {
                $deleteMessage = "Error deleting file from the server!";
            }
        } else {
            $deleteMessage = "File not found on the server!";
        }
    } else {
        $deleteMessage = "File not found!";
    }
}

// Redirect back to the main page
header("Location: view_circulars.php?deleteMessage=" . urlencode($deleteMessage));
exit();
?>
