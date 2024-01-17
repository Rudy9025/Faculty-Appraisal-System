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
        <title>Types Of Activities | Faculty Appraisal</title>

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
                
                <h5 class="left-align">iv).Type Of Activities</h5>
          </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <!--<th>Srno.</th>-->
                        <th>Activity Name</th>
                        <th>Role</th>
                        <th>Type Of Activity</th>
                        <th>Attach Document (ifany)</th>
                        
                        
                       

                   </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>
                     <input name="activity_name" type="text" id="activity_name" class="validate" data-length="10" pattern="[A-Za-z ]+" required>
                     <label for="activity_name" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                     <input name="role" type="text" id="role" class="validate" data-length="10" pattern="[a-zA-Z]+" required>
                     <label for="role" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                            <select name="type_activity">
                            <option value="" disabled>Choose your option</option>
                            <option value="Co-Cirricular Activity" selected>Co-Curricular Activity</option>
                            <option value="Extra-Activity">Extra-Curricular Activity</option>
                            </select>
                          
                   </td>     
                  <td>  
                        <input type="file" name="fileupload">
                  </td>  
                  </tr>
                </tbody>
              </table>
              <div class="center">
                  <a class="btn" href='view_student_mentorship.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;     
                <button class="btn" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="btn" href='view_activity.php'>View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                              <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>    
                            <a href="other_task.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="activity.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
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
                  <script type="text/javascript">
                      
                             $(document).ready(function() {
                             $('select').material_select();
                    });
            

                  </script> 
                  
<?php
class form 
 {
      function insert_record()
      {
              if(isset($_POST['submit']))
              {
                      include 'connection.php';
                      $fid = $_SESSION['fid']; 
                      $activity_name = $_POST['activity_name'];
                      $role = $_POST['role'];
                      $type_activity = $_POST['type_activity'];
                      $a=$_FILES['fileupload']['name'];
                      $b=$_FILES['fileupload']['tmp_name'];
                      $c="C:/wamp64/www/test_7/files/".$a;
                      date_default_timezone_set('Asia/Kolkata');
                      $currtime = date("Y-m-d H:i:s");
                      
                      if(move_uploaded_file($b,$c))
                      {
                              $sql = "insert into activity (fid,activity_name,role,type_activity,filename,currtime)values('$fid','$activity_name','$role','$type_activity','$a','$currtime')";
                              $res = mysqli_query($conn,$sql);
                              if($res === True)
                              {


                                          echo "<script type='text/javascript'>alert('Record Inserted Successfully with fileupload')</script>";
                                          //echo "<script>location.href = 'activity.php'</script>";
                          
                              }
                              else
                              {
                          
                                          echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                                          //echo "<script>location.href = 'activity.php'</script>";
                              }
                       }
                       else
                       {
                              $sql = "insert into activity (fid,activity_name,role,type_activity,filename,currtime)values('$fid','$activity_name','$role','$type_activity','None','$currtime')";
                              $res = mysqli_query($conn,$sql);
                              if($res === True)
                              {


                                          echo "<script type='text/javascript'>alert('Record Inserted Successfully without fileupload')</script>";echo "<script>location.href = 'activity.php'</script>";
                          
                              }
                              else
                              {
                          
                                          echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                                          echo "<script>location.href = 'activity.php'</script>";
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
