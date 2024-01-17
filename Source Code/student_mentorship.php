<?php session_start(); ?>
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
        <title>Student Mentorship| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
          <div class="row">
                <h3 class="left-align amber-text darken-4">11.Task Assigned/UnderTaken</h3>
          </div>

          <div class="row"></div>
          <div class="row"></div>
                   
           <div class="row">
                
                <h5 class="left-align">iii).Student Mentorship:</h5>
          </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <!--<th>Srno.</th>-->
                        <th>Total No Of Mentees</th>
                        <th>No Of Book Completed</th>
                        <th>No Of Book Incompleted</th>
                        <th>No Of Phone Call Made to Parents</th>
                        <th>Reason for Incompleted Book</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>
                     <input name="total_mentees" type="text" id="total_mentees" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_mentees" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                     <input name="total_book_completed" type="text" id="total_book_completed" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_book_completed" data-error="wrong" data-success="right"></label>
                  </td>
                   <td>
                     <input name="total_book_incompleted" type="text" id="total_book_incompleted" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_book_incompleted" data-error="wrong" data-success="right"></label>
                  </td>
                   <td>
                     <input name="total_call_made" type="text" id="total_call_made" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_call_made" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                           <input name="reason_incomplete_book" type="text" id="reason_incomplete_book" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z0-9 ]+" required>
                           <label for="reason_incomplete_book" data-error="wrong" data-success="right"></label>
                  </td>
                  </tr>
                </tbody>
              </table>
              <div class="center">
                    <a class="btn" href='guiding_project.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;    
                <button class="btn" type="submit" name="submit1">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn" href='view_student_mentorship'>View</a>&nbsp;&nbsp;&nbsp;&nbsp;  
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                            <a href="activity.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="student_mentorship.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
                      </div>
                </div>
          </div>
                
              
      
            </form>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <?php include('footer.php'); ?>
                  <!--Import jQuery before materialize.js-->
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript">
                       $(document).ready(function(){
                         // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                       $('.modal').modal();
                       $(".modal").width($(".modal").width('500px'));
                       $(".modal").height($(".modal").height('200px'));
                  });
                  </script>
<?php
class form 
 {
      function insert_record()
      {
              if(isset($_POST['submit1']))
              {
                      include 'connection.php';
                      $fid = $_SESSION['fid']; 
                      $total_mentees = $_POST['total_mentees'];
                      $total_book_completed = $_POST['total_book_completed'];
                      $total_book_incompleted = $_POST['total_book_incompleted'];
                      $total_call_made = $_POST['total_call_made'];
                      $reason_incomplete_book = $_POST['reason_incomplete_book'];
                      date_default_timezone_set('Asia/Kolkata');
                      $currtime = date("Y-m-d H:i:s");

                      $sql = "insert into student_mentorship (fid,total_no_of_mentees,no_of_completed_booklet,no_of_incomplete_booklet,no_of_phone_call_made_to_parents,reason_of_incomplete_booklet,currtime
                      )values('$fid','$total_mentees','$total_book_completed','$total_book_incompleted','$total_call_made','$reason_incomplete_book','$currtime')";
                      $res = mysqli_query($conn,$sql);
                      if($res === True)
                      {


                              echo "<script type='text/javascript'>alert('Record Inserted Successfully')</script>";  
                              echo "<script>location.href = 'student_mentorship.php'</script>";
                          
                      }
                     else
                     {
                          
                             echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                             echo "<script>location.href = 'student_mentorship.php'</script>";
                      }  
                }
          }
     }           

        $obj= new form;
      $obj->insert_record();

 ?>         
                  
          </body>
</html>                   
