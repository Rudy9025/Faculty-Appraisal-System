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
        <title>Teaching work| Faculty Appraisal</title>

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
                
                <h5 class="left-align">i).Teaching Work:</h5>
          </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <!--<th>Srno.</th>-->
                        <th >Semester</th>
                        <th>Subject Name</th>
                        <th>Total No Of Lectures</th>
                        <th>Total No. Of Labs</th>
                        <th>File Upload(ifany)</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                        <tr>
                        <td>
                            <select name="semester">
                            <option value="" disabled>Choose your option</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="6">10</option>
                            </select>
                            <label for=''></label>
                          
                        </td>
                        <td>
                           <input name="subject_name" type="text" id="subject_name" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
                           <label for="subject_name" data-error="wrong" data-success="right"></label>
                        </td>
                        <td>
                          <input name="total_lectures" type="text" id="total_lectures" class="validate" data-length="3" pattern="[0-9]+" required>
                          <label for="total_lectures" data-error="wrong" data-success="right"></label>
                        </td> 
                        <td>
                            <input name="total_labs" type="text" id="total_labs" class="validate" data-length="3" pattern="[0-9]+" required>
                            <label for="total_labs" data-error="wrong" data-success="right"></label>
                        </td>
                        <td>
                            
                            <input type="file" name="fupload" id="fupload" />
                           
                        </td> 
                       </tr>
                </tbody>        
            </table>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            
          <div class="center">
                    
             
                <button class="btn" type="submit" name="submit1">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn" href='view_teaching_work.php'>View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                            <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>
                            <a href="guiding_project.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="teaching_work.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>

                      </div>
                </div>
          </div>
                
              
      
            </form>
             
            
            <div class="row"></div>
            <?php include('footer.php'); ?>
                  <!--Import jQuery before materialize.js-->
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript">
                             $(document).ready(function() {
                             $('select').material_select();
                    });
            

                  </script> 
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
      $un = $_SESSION['email'];
      $semester = $_POST['semester'];
      $subject_name = $_POST['subject_name'];
      $total_lectures = $_POST['total_lectures'];
      $total_labs = $_POST['total_labs'];
      $a=$_FILES['fupload']['name'];
      $b=$_FILES['fupload']['tmp_name'];
      $c="C:/wamp64/www/test_7/files/".$a;
    

            
  date_default_timezone_set('Asia/Kolkata');
                      
    $currtime = date("Y-m-d H:i:s");

    if(move_uploaded_file($b,$c))
    {
              $sql2 = "insert into task_assigned (fid,semester,subject_name,total_lec,total_lab,filename,currtime) values('$fid','$semester','$subject_name','$total_lectures','$total_labs','$a','$currtime')";
              $res2 = mysqli_query($conn,$sql2);
              if($res2 === TRUE)  
              {
                   
                              echo "<script type='text/javascript'>alert('Record Inserted Successfully with file Upload')</script>";  
                              echo "<script>location.href = 'teaching_work.php'</script>";
                          
              }
              else
              {
                          
                             echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                             echo "<script>location.href = 'teaching_work.php'</script>";
              }  
      }       
      else
      {
              $sql2 = "insert into task_assigned (fid,semester,subject_name,total_lec,total_lab,filename,currtime) values('$fid','$semester','$subject_name','$total_lectures','$total_labs','None','$currtime')";
              $res2 = mysqli_query($conn,$sql2);
              if($res2 === TRUE)  
              {
                   
                              echo "<script type='text/javascript'>alert('Record Inserted Successfully without file Upload')</script>";  
                              echo "<script>location.href = 'teaching_work.php'</script>";
                          
              }
              else
              {
                          
                             echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                             echo "<script>location.href = 'teaching_work.php'</script>";
              }  
      }
  
    }
  }
 }  
    
$obj= new form;
$obj->insert_record();

 ?>         
</body>
</html>                   