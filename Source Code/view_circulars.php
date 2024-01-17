<?php
include_once 'connection.php';

// Check if file uploaded successfully
if (isset($_GET['st']) && $_GET['st'] === 'success') {
    $uploadSuccess = true;
} else {
    $uploadSuccess = false;
}

// Fetch files
$sql = "SELECT filename FROM circulars";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Let the browser know the website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
    <title>View Circulars | Faculty Appraisal</title>
    <style>
        body {
            background-image: url('mat.jpg');
        }
        button{
    width: 177px;
    height: 68px;
    background-color: rgba(255, 255, 255, 1);
    color: #000;
    border-radius: 489px;
    box-shadow: 163px -191px 0px -255px rgba(65,117,5,1),
        10px 10px 0px 0px rgba(65,117,5,0.6),
    15px 15px 0px 0px rgba(65,117,5,0.4),
    20px 20px 0px 0px rgba(65,117,5,0.2),
    25px 25px 0px 0px rgba(65,117,5,0.1);
  
        }

        .container {
            
            padding: 20px;
            border-radius: 5px;
        }
        form{
            border-width: 4px;
  border-style: solid;
  border-image: linear-gradient(to right, rgba(255, 0, 0, 0.5), rgba(0, 255, 0, 0.5), rgba(0, 0, 255, 0.5)) 1;
            background-color: rgba(100, 0, 100, 0.2);
            height: 400px;
            width: 700px;
            
         }
         h1{
            background: linear-gradient(to right, rgba(255, 0, 0, 0.5), rgba(0, 255, 0, 0.5), rgba(0, 0, 255, 0.5));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
         }
         .bt {
  padding: 10px 20px;
  background-color: rgba(0, 0, 255, 0.5);
  border: none;
  color: white;
  height: 45px;
  width: 110px;
  font-size: 16px;
  transition: box-shadow 0.5s;
}
         .bt:hover{
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 1);         }
    </style>
</head>
<body>
    <?php include('user_header.php'); ?>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <br/>
    <center>
    <form action="create_circular.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <h1 style="font-weight: 800;">Create Circulars</h1>
        </div>
        <br>
        <p style="text-align: center;font-size: 20px; font-weight: 700;">Select File to Upload: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="file1" /></p>
        <br>
        <br>
        <div style="text-align: center;">
            <input  style="background-color: rgba(0, 0, 255, 0.5);" type="submit" name="submit" value="Upload" class="bt"/>
        </div>
        <?php if ($uploadSuccess) { ?>
            <br>
            <br>
            <div style="text-align: center;">
                File Uploaded Successfully!
            </div>
        <?php } elseif (isset($_GET['st']) && $_GET['st'] !== 'success') { ?>
            <div style="text-align: center;">
                Invalid File Extension!
            </div>
        <?php } ?>
        <br>
        <br>
    </form>
    </center>
<br>
<br>
    <div id="a" style="text-align: center;"></div>
    
    <?php include 'footer.php'; ?>
    <!-- Import jQuery before materialize.js -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        <?php if ($uploadSuccess) { ?>
            // Display success message
            alert("File Uploaded Successfully!");

            // Create the button element
            var button = document.createElement("button");
            button.innerHTML = "View Circulars";

            // Set the onclick event to redirect to the next page
            button.onclick = function() {
                window.location.href = "next_circular.php";
            };

            // Append the button to a container element
            var container = document.getElementById("a");
            container.appendChild(button);
        <?php } ?>
    </script>
</body>
</html>
