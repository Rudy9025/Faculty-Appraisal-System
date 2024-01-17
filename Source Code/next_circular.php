<?php
include_once 'connection.php';
// Check if file uploaded successfully
if (isset($_GET['st']) && $_GET['st'] === 'success') {
    $uploadSuccess = true;
} else {
    $uploadSuccess = false;
}
// Fetch files
$sql = "SELECT cid, filename, currtime FROM circulars";
$result = mysqli_query($conn, $sql);

// Delete file
if (isset($_GET['delete_cid'])) {
    $deleteCid = $_GET['delete_cid'];
    $deleteSql = "DELETE FROM circulars WHERE cid = $deleteCid";
    $deleteResult = mysqli_query($conn, $deleteSql);
    if ($deleteResult) {
        // File deleted successfully
        header('Location: next_circular.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!-- Let the browser know the website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
    <title>View Circulars | Faculty Appraisal</title>
    <style>
        body {
            background-image: url('mat.jpg');
        }
    </style>
</head>
<body>
<?php include('user_header.php'); ?>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<br/>

<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>File Name</th>
                <th>Upload DateTime</th>
                <th>View</th>
                <th>Download</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td id="uploadDateTime<?php echo $row['cid']; ?>"></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</a></td>
                    <td>
                        <a href="next_circular.php?delete_cid=<?php echo $row['cid']; ?>"
                           onclick="return confirm('Are you sure you want to delete this file?')">Delete</a>
                    </td>
                </tr>
                <script>
                    // JavaScript code to set the upload datetime value
                    const uploadDatetime<?php echo $row['cid']; ?> = new Date('<?php echo $row['currtime']; ?>');
                    const options<?php echo $row['cid']; ?> = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: 'numeric',
                        minute: 'numeric',
                        second: 'numeric'
                    };
                    document.getElementById('uploadDateTime<?php echo $row['cid']; ?>').textContent =
                        uploadDatetime<?php echo $row['cid']; ?>.toLocaleDateString('en-US', options<?php echo $row['cid']; ?>);
                </script>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>
<!-- Import jQuery before materialize.js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
