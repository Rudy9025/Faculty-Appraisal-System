<?php session_start(); ?>
<?php
    include('connection.php');
    $fid = $_SESSION['fid']; 
    $email = $_SESSION['email'];
    $sql = "select * from student_mentorship where fid='$fid'";
    $res = mysqli_query($conn,$sql);
    if($res->num_rows > 0)
    {
        $GLOBALS['path'] = "activity.php";
    }
    else
    {
        $GLOBALS['path'] = "student_mentorship.php"; 
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
        <title>Guiding Projects| Faculty Appraisal</title>

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
                
                <h5 class="left-align">2).Guiding Projects:</h5>
          </div>
            <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <!--<th>Srno.</th>-->
                        <th >Semester</th>
                        <th>Total No Of Project Guided</th>
                        <th>Title of Best Project Guided</th>
                        <th>File Upload(if any)</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>
                        <select name="semester">
                        <option value="" disabled>Choose your option</option>
                        <option value="5" selected>5</option>
                        <option value="6">6</option>
                        </select>
                        <label for="semester"></label>
                      </td>
                      <td>
                            <input name="total_no_of_project_guided" type="text" id="total_no_of_project_guided" class="validate" data-length="3" pattern="[0-9]+" required>
                            <label for="total_no_of_project_guided" data-error="wrong" data-success="right"></label>
                      </td>
                      <td>
                            <input name="title_of_project" type="text" id="title_of_project" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
                            <label for="title_of_project" data-error="wrong" data-success="right"></label>

                      </td>
                      <td>  
                            <input type="file" name="fileupload">
                      </td>  
                      </tr>
                      </tbody>
                   </tbody>        
            </table>
             <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
               <div class="center">
                   <a class="btn" href='teaching_work.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;   
                <button class="btn" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a class="btn" href='view_guiding_project.php'>View</a>&nbsp;&nbsp;&nbsp;&nbsp; 
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                            <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>
                            <a href="<?php echo $GLOBALS['path']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="guiding_project.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
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
                        function insert_records()
                        {
                            if(isset($_POST['submit']))
                            {
                                  include 'connection.php';
                                  $fid = $_SESSION['fid'];
                                  $semester = $_POST['semester'];
                                  $total_no_of_project_guided = $_POST['total_no_of_project_guided'];
                                  $title_of_project = $_POST['title_of_project'];
                                  $a=$_FILES['fileupload']['name'];
                                  $b=$_FILES['fileupload']['tmp_name'];
                                  $c="C:/wamp64/www/test_7/files/".$a;
                                  date_default_timezone_set('Asia/Kolkata');
                      
                                  $currtime = date("Y-m-d H:i:s");
                                  if(move_uploaded_file($b,$c))
                                        {
                                                
                                            $sql = "insert into guide_project (fid,semester,total_project,project_title,filename,currtime)values('$fid','$semester','$total_no_of_project_guided','$title_of_project','$a','$currtime')";
                                                 $res = mysqli_query($conn,$sql);
                                                 if($res===TRUE)
                                                {

                                                 echo "<script type='text/javascript'>alert('Record Inserted Successfully with file Upload')</script>";  
                                                  echo "<script>location.href = 'guiding_project.php'</script>";
                          
                                                }
                                                else
                                                {
                                                  
                                                    echo "<script type='text/javascript'>alert('Something Went Wrong Try Again Or Contact Admin')</script>";
                                                    echo "<script>location.href = 'guiding_project.php'</script>";
           
                                                }  
                                        }
                                  else
                                      {
                                              $sql = "insert into guide_project (fid,semester,total_project,project_title,filename,currtime) values('$fid','$semester','$total_no_of_project_guided','$title_of_project','None','$currtime')";
                                                 $res = mysqli_query($conn,$sql);
                                                 if($res===TRUE)
                                                {

                                                  
                                                    echo "<script type='text/javascript'>alert('Record Inserted Successfully without file Upload')</script>";  
                                                    echo "<script>location.href = 'guiding_project.php'</script>";
                          
                                                }
                                                else
                                                {
                                                  
                                                     echo "<script type='text/javascript'>alert('Something Went Wrong Try Again Or Contact Admin')</script>";
                                                    echo "<script>location.href = 'guiding_project.php'</script>";
           
                                                }  
                                      }
                                    
                            }
                                    
                      }
                }

                
                $obj= new form;
                $obj->insert_records();

?>


     </body>
     </html>