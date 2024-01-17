<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> View Student Mentorship | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'user_header.php'; ?>
        <div class="row">
           <h3 class="left-align amber-text darken-4 center">Student Mentorship Table</h3>
        </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" >
          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>Selection</th>
                       
                        <th>Srno.</th>
                        <th>Total No Of Mentees</th>
                        <th>No Of Book Completed</th>
                        <th>No Of Book Incompleted</th>
                        <th>No Of Phone Call Made to Parents</th>
                        <th>Reason for Incompleted Book</th>
                        <th>Date And Time</th>
                    </tr>   
                </thead>
                <tbody>
                     <?php include 'connection.php' ;
                      $sql = "select * from student_mentorship";
                      $res = mysqli_query($conn,$sql);
                      if($res->num_rows>0)
                      {
                         $srno = 1;
                         while($row = mysqli_fetch_array($res))
                          {
                             
                                    echo "<tr>
                                    <td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                                     <td>'".$srno."'</td>
                                     <td>'".$row[2]."'</td>
                                     <td>'".$row[3]."'</td>
                                     <td>'".$row[4]."'</td>
                                     <td>'".$row[5]."'</td>
                                     <td style='text-transform : capitalize'>'".$row[6]."'</td>
                                     <td>'".$row[7]."'</td>
                                     <td></td>                                     
                                  </tr>";
                                  $srno = $srno +1 ;

                             
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
                                
                            </tr>";
                        }
                      
                  ?>
                 </tbody>
            </table>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row center">
                    <button class="btn" type="submit" name="edit" id="edit" formaction="edit_student_mentorship.php" disabled>Edit Record</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn" href="guiding_project.php">Back</a>&nbsp;&nbsp;&nbsp;
                    <a class="btn" href="student_mentorship.php" disabled>ADD</a>&nbsp;&nbsp;&nbsp;

                    <a class="btn" href='activity.php'>Next</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                $sql = "delete from student_mentorship where smid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===TRUE)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'view_student_mentorship.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                      echo "<script>location.href = 'view_student_mentorship.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>      
                  
                  
     </body>
     </html>
                          
                                     
                                
                                