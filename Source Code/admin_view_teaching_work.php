<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> View teaching work | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'admin_header.php'; ?>
        <div class="row">
           <h3 class="left-align amber-text darken-4 center">Teaching Work</h3>
        </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <table class="bordered stripped responsive-table">
                <thead>
                     <thead>
                    <tr>
                       <th>Selection</th>
                        <th>tid</th>
                        <th>fid</th>
                        <th>Semester</th>
                        <th>Subject Name</th>
                        <th>Total No Of Lectures</th>
                        <th>Total No. Of Labs</th>
                        <th>FileName</th>
                        <th>Operation</th>
                        
                        <th>Delete</th>
                        <th>Remove File</th>
                       

                   </tr>
                </thead>
                </thead>
                <tbody>
                  <?php include 'connection.php' ;
                  $sql = "select * from task_assigned";
                  $res = mysqli_query($conn,$sql);
                  if($res->num_rows>0)
                  {
                      while($row = mysqli_fetch_array($res))
                      {
                          
                          $GLOBALS['fn'] = $row['6'];
                          if($GLOBALS['fn'] == 'None')
                          {
                              echo "<tr>
                                <td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                                <td>'".$row[0]."'</td>
                                <td>'".$row[1]."'</td>
                                <td style='text-transform: capitalize;'>'".$row[2]."'</td>
                                <td>'".$row[3]."'</td>
                                <td>'".$row[4]."'</td>
                                <td>'".$row[5]."'</td>
                                <td>'".$row[6]."'</td>
                                <td><a class='btn' width='100%' height='700px' href='./files/".$row[6]."' type='application/pdf' disabled>Open</a></td>
                                
                                <td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'>
                                <i class='material-icons prefix'>delete</i></button></td>
                                <td><button class='btn' type='submit' name='change_file' value='".$row[0]."' formaction='admin_remove_file_teaching_work.php' disabled>Remove_File</button></td>
                                  </tr>";
                                  
                          }
                          else
                          {

                             echo "<tr>
                                <td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                                <td>'".$row[0]."'</td>
                                <td>'".$row[1]."'</td>
                                <td style='text-transform: capitalize;'>'".$row[2]."'</td>
                                <td>'".$row[3]."'</td>
                                <td>'".$row[4]."'</td>
                                <td>'".$row[5]."'</td>
                                <td>'".$row[6]."'</td>
                                <td><a class='btn' width='100%' height='700px' href='./files/".$row[6]."' type='application/pdf'>Open</a></td>
                                
                                <td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'>
                                <i class='material-icons prefix'>delete</i></button></td>
                                <td><button class='btn' type='submit' name='change_file' value='".$row[0]."' formaction='admin_remove_file_teaching_work.php'>Remove_File</button></td>
                            
                                </tr>";
                          
                          }        
                          
                      }
                  }
                  else
                  {
                      echo "<tr>
                                <td></td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>''</td>
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
                    <button class="btn" type="submit" name="edit" id="edit" formaction="admin_edit_teaching_work.php" disabled>Edit Record</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn" href="search_teaching_work.php">Search Record</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn" href="empty_teaching_work.php">Empty Table</a>
                  </tr>
            
             </div>
            <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             
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
                                $sql = "delete from task_assigned where tid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===True)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_view_teaching_work.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                      echo "<script>location.href = 'admin_view_teaching_work.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>
   </body>
  </html>     