<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> View Registered Faculty | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'admin_header.php'; ?>
        <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Registered Faculties</h3>
        </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>Selection</th>
                        <th>fid</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Contact(R)</th>
                        <th>Contact(M)</th>
                        <th>Registered Email Id</th>
                        <th>Password</th>
                        <th>Registered</th>
                        <th>Date and Time</th>
                        <th>Delete</th> 
                    </tr>
                </thead>
                <tbody>
                  <?php include 'connection.php' ;
                  $sql = "select * from register";
                  $res = mysqli_query($conn,$sql);
                  if($res->num_rows>0)
                  {
                      while($row = mysqli_fetch_array($res))
                      {
                          echo "<tr><td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                         <td>'".$row[0]."'</td><td style='text-transform: capitalize;'>'".$row[1]."'</td><td style='text-transform: capitalize;'>'".$row[2]."'</td><td style='text-transform: capitalize;'>'".$row[3]."'</td><td style='text-transform: capitalize;'>'".$row[4]."'</td><td>'".$row[5]."'</td><td>'".$row[6]."'</td><td>'".$row[7]."'</td><td>'".$row[8]."'</td><td>'".$row[9]."'</td><td>'".$row[10]."'</td><td>'".$row[11]."'</td><td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'><i class='material-icons prefix'>delete</i></button></td></tr>";
                          
                      }
                  }
                  else
                  {
                      echo "<tr>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                      <td>'Record Not Found'</td>
                       <td>''</td>
                      </tr>";

                  }
                  ?>    
                </tbody>
            </table>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row center">
                    <a class="btn"  href="add_registered_faculty.php">Add Record</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn" type="submit" name="edit" id="edit" formaction="edit_registered_faculty.php" disabled>Edit Record</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn" href="search_registered_faculty.php">Search Record</a>&nbsp;&nbsp;&nbsp;
                  <a class="btn" href="empty_registered_faculty.php">Empty Table</a>&nbsp;&nbsp;&nbsp;
                  </tr>
            
             </div>
            <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row center">
            
           </form>
           <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                    <script type="text/javascript">
                            $('#edit').prop("disabled", true);
                            $('input:checkbox').click(function() {
                            if ($(this).is(':checked')) {
                            $('#edit').prop("disabled", false);
                            } else {
                            if ($('.chk').filter(':checked').length < 1){
                            $('#edit').attr('disabled',true);}
                              }
                    });
                    </script>        

 <?php
                    class Record
                    {
                        function delete_record()
                        {
                            if(isset($_POST['submit']))
                            {
                                include 'connection.php';
                                $did = $_POST['submit'];
                                //echo $did;
                                $sql1 = "delete from register where fid='$did'";
                                $res1 = mysqli_query($conn,$sql1);
                                
                                
                                if($res1 === TRUE)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_view_registered_faculties.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                        echo "<script>location.href = 'admin_view_registered_faculties.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>
   </body>
  </html>     