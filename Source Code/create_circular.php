<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
        <title>Create Circulars| Faculty Appraisal</title>

    </head>
    <body>
    <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
<?php
// Establish database connection
$conn = mysqli_connect("localhost","root","", "facultyappraisal");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $filename = $_FILES['file1']['name'];

    // Upload file
    if ($filename != '') {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'gif','csv','xslx','mp4','mp3','mov'];

        // Check if file type is valid
        if (in_array($ext, $allowed)) {
            // Get last record id
            $sql = 'select max(cid) as id from circulars';
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id'] + 1) . '-' . $filename;
            } else {
                $filename = '1' . '-' . $filename;
            }

            // Set target directory
            $path = 'uploads/';

            $currtime = date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'], ($path . $filename));

            // Insert file details into database
            $sql = "INSERT INTO circulars(filename, currtime) VALUES('$filename', '$currtime')";
            mysqli_query($conn, $sql);
            header("Location: view_circulars.php?st=success");
        } else {
            header("Location: view_circulars.php?st=error");
        }
    } else {
        header("Location: view_circulars.php");
    }
}
?>
 <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
