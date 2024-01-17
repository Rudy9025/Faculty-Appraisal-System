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
        <title>Assignments | Faculty Appraisal</title>

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
                
                <h5 class="left-align">c)Did you accept assignments, paid or unpaid, in other institutes/organizations?</h5>
          </div>
           <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <div class='row'>
            <div class="input-field col s12 m4 l3">
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
                               <label for='semester'>Semester</label>
                          
                        </div>
                      </div>
           <p>
                <input name="group1" type="radio" value='Yes' id="yes_radio"  checked onChange="disablefield();" />
                <label for="yes_radio">Yes</label>
          </p>
          <p>
                <input name="group1" type="radio" value='No' id="no_radio"  onChange="disablefield();"/>
                <label for="no_radio">No</label>
          </p>
          <div class="row">
                
                <h5 class="left-align">(d)Give details of such assignments (if the answer of question C is yes)</h5>
          </div>
           <div class='row'>
                  <i class="material-icons">border_color</i>
                  <input name="details" type="text" id="details" class="validate" style="text-transform: capitalize;" data-length="100" pattern="[a-zA-Z ]+">
                  <label for="details" data-error="wrong" data-success="right"></label>
          </div>
          <div class="row">
                
                <h5 class="left-align">(d)Attach File (if any)</h5>
          </div>
          <div>
                 <input class='btn' type="file" name="fupload" id="fupload" required/>

          </div>  
           <div class="center">
                   <a class="btn" href='other_task.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;  
                <button class="btn" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class="btn" href='view_assignments.php'>View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                              <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>
                            <a href="use_of_library.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                              <a href="assignments" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
                            
                      </div>
                </div>
          </div>
           </form>

            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
       
                  <!--Import jQuery before materialize.js-->
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript"> 
                    function disablefield(){ 
                    if (document.getElementById('yes_radio').checked == 1){ 
                        document.getElementById('details').disabled=''; 
                        document.getElementById('details').value='Please Enter Details';
                        document.getElementById('fupload').disabled=''; 
                        }
                        else
                        { 
                          document.getElementById('details').disabled='readonly'; 
                          document.getElementById('details').value='None'; 
                          document.getElementById('fupload').disabled='disabled';} 
                           
                        } 
                    </script> 
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
              if(isset($_POST['submit']))
              {
                      include 'connection.php';
                      $fid = $_SESSION['fid']; 
                      $semester = $_POST['semester'];
                      $accept_assignment = $_POST['group1'];
                      date_default_timezone_set('Asia/Kolkata');
                      $currtime = date("Y-m-d H:i:s");
                     
                      if($accept_assignment == 'No')
                      {
                              $details = 'None';
                              $sql = "insert into assignments(fid,semester,accept_assignment,details,filename,currtime)values('$fid','$semester','$accept_assignment','$details','None','$currtime')";
                              $res = mysqli_query($conn,$sql);
                              if($res === True)
                              {


                                          echo "<script type='text/javascript'>alert('Record Inserted Successfully')</script>";
                                          echo "<script>location.href = 'assignments.php'</script>";
                          
                              }
                              else
                              {
                          
                                          echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                                          echo "<script>location.href = 'assignments.php'</script>";
                              }
                        
                      }
                      else
                      {
                              $details = $_POST['details'];
                               $a=$_FILES['fupload']['name'];
                               $b=$_FILES['fupload']['tmp_name'];
                               $c="C:/wamp64/www/test_7/files/".$a;
                               if(move_uploaded_file($b, $c))
                               {
                                  $sql = "insert into assignments(fid,semester,accept_assignment,details,filename,currtime)values('$fid','$semester','$accept_assignment','$details','$a','$currtime')";
                                     $res = mysqli_query($conn,$sql);
                              
                                     if($res === True)
                                      {


                                          echo "<script type='text/javascript'>alert('Record Inserted Successfully with FileUpload')</script>";
                                          //echo "<script>location.href = 'use_of_library.php'</script>";
                          
                                      }
                                      else
                                      {
                          
                                          echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                                          //echo "<script>location.href = 'assignments.php'</script>";
                                        }
                                        
                               }
                                else
                                      {
                          
                                          echo "<script type='text/javascript'>alert('File Not Moved')</script>"; 
                                          //echo "<script>location.href = 'assignments.php'</script>";
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
