<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              //echo $select_id;
              $sql = "select * from student_mentorship where smid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              {

                  while($row=mysqli_fetch_array($res))
                  {
                        $smid = $row[0];
                        $fid = $row[1];
                        $total_mentees = $row[2];
                        $book_completed = $row[3];
                        $book_incompleted = $row[4];
                        $call_made_to_parents = $row[5];
                        $reason = $row[6];
                        //echo $fid;
                  } 
              }
              else
              {
                    echo "<script type='text/javascript'>alert('Record Not Found');</script>";

              }
              
         }
?>              
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
        <title>Edit Student Mentorship| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('admin_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
           <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">Student Mentoship</h1>
        </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total No Of Mentees</th>
                        <th>No Of Book Completed</th>
                        <th>No Of Book Incompleted</th>
                        <th>No Of Phone Call Made to Parents</th>
                        <th>Reason for Incompleted Book</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                  <tr>
                     <td><input type="hidden" name="did" value="<?php echo $smid; ?>"  /></td>  
                     <td><input type="hidden" name="fid" value="<?php echo $fid; ?>"  /></td>
                     
                  <td>
                     <input name="total_mentees" type="text" value='<?php echo $total_mentees; ?>' id="total_mentees" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_mentees" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                     <input name="total_book_completed" type="text" value='<?php echo $book_completed;?>' id="total_book_completed" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_book_completed" data-error="wrong" data-success="right"></label>
                  </td>
                   <td>
                     <input name="total_book_incompleted" type="text" value='<?php echo $book_incompleted;?>' id="total_book_incompleted" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_book_incompleted" data-error="wrong" data-success="right"></label>
                  </td>
                   <td>
                     <input name="total_call_made" type="text" value='<?php echo $call_made_to_parents;?>' id="total_call_made" class="validate" data-length="3" pattern="[0-9]+" required>
                     <label for="total_call_made" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                           <input name="reason_incomplete_book" type="text" value='<?php echo $reason;?>' id="reason_incomplete_book" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
                           <label for="reason_incomplete_book" data-error="wrong" data-success="right"></label>
                  </td>
                  </tr>
                </tbody>
              </table>
              <div class="center">
                    
                <button class="btn" type="submit" name="submit1">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 </div>

              <div class="row"></div>
              <div class="row"></div>
  
            </form>
          
           <?php include('footer.php'); ?>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
    <?php 
   class Record
   {
          function edit_record()
          {
               if(isset($_POST['submit1']))
                 {
                       include 'connection.php';
                      $smid = $_POST['did'];
                      $fid = $_SESSION['fid']; 
                      $total_mentees = $_POST['total_mentees'];
                      $total_book_completed = $_POST['total_book_completed'];
                      $total_book_incompleted = $_POST['total_book_incompleted'];
                      $total_call_made = $_POST['total_call_made'];
                      $reason_incomplete_book = $_POST['reason_incomplete_book'];

                       $sql = "update student_mentorship SET total_no_of_mentees='$total_mentees',no_of_completed_booklet='$total_book_completed',no_of_incomplete_booklet='$total_book_incompleted',no_of_phone_call_made_to_parents='$total_call_made',reason_of_incomplete_booklet = '$reason_incomplete_book' WHERE smid='$smid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated')</script>";
                                   echo "<script>location.href = 'view_student_mentorship.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                   echo "<script>location.href = 'view_student_mentorship.php'</script>";
                            } 

   
                }

        }
    }
        $obj = new Record;
        $obj->edit_record();

   ?>         

  </body>
  </html>                        

   