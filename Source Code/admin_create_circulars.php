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
     
          <?php include('admin_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
           <div class="row">
           <h3 class="left-align amber-text darken-4">Upload File</h3>
           <h1 class="center-align amber-text darken-4">Create Circular</h1>
        </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>Srno.</th>
                        <th>FileName</th>
                        <th>Upload File</th>
                     
                     </tr>
                     <tbody>
                        <td>1.</td>
                        <td><input name="file_name" type="text" id="file_name" class="validate" data-length="30" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
                        <label for="file_name" data-error="wrong" data-success="right"></label>
                        <td><input type="file" name="fupload" id="fupload" required></td>
                    </Tbody>    
                                          
           </table>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row center">
                    <button class="btn" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn" type="button" href="admin_view_circulars.php">View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                              
             </div>
            <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             
            
           </form>
           <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                     
               <?php 
               class Records
               {
                    function upload_File()
                    {
                        if(isset($_POST['submit']))
                        {
                            include 'connection.php';
                            $fname = $_POST['file_name'];
                            $a=$_FILES['fupload']['name'];
                            $b=$_FILES['fupload']['tmp_name'];
                            $c="C:/wamp64/www/test_7/files/".$a;
                            date_default_timezone_set('Asia/Kolkata');
                      
                            $currtime = date("Y-m-d H:i:s");


                            $sql = "insert into circulars (filename,document_name,currtime)values('$fname','$a','$currtime')";
                            $res = mysqli_query($conn,$sql);
                            if($res === True)
                            {
                                echo "<script type='text/javascript'>alert('Record Inserted Successfully')</script>";
                                echo "<script>location.href = 'admin_view_circular.php'</script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>alert('Record Inserted Not Successfully')</script>";
                                echo "<script>location.href = 'admin_view_circular.php'</script>";
                            }
                            


                        }
                    }
               }
               $obj= new Records;
              $obj->upload_File();
     
              ?>
</body>
</html>
