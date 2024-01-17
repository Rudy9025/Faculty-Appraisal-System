<?php session_start(); ?>
<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              //echo $select_id;
              $sql = "select * from activity where atid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              {

                  while($row=mysqli_fetch_array($res))
                  {
                        $atid = $row[0];
                        $fid = $row[1];
                        $activity_name = $row[2];
                        $role = $row[3];
                        $type_activity = $row[4];
                        $filename = $row[5];
                        $currtime = $row[6];
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
        <title>Edit Activity| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
           <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">List Of Activity</h1>
        </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Name Of Activity</th>
                        <th>Role</th>
                        <th>Type Of Activity</th>
                        <th>File Name</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                  <tr>
                     <td><input type="hidden" name="did" value="<?php echo $atid; ?>"  /></td>  
                     <td><input type="hidden" name="fid" value="<?php echo $fid; ?>"  /></td>
                     
                 <td>
                     <input name="activity_name" type="text"  value="<?php echo $activity_name; ?>"  id="activity_name" class="validate" data-length="10" pattern="[A-Za-z ]+" required>
                     <label for="activity_name" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                     <input name="role" type="text" id="role"  value="<?php echo $role; ?>"  class="validate" data-length="10" pattern="[a-zA-Z]+" required>
                     <label for="role" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                              
                           <input name="type_activity" value='<?php echo $type_activity;?>' type="text" id="type_activity" class="validate" data-length="30" pattern="[a-zA_Z- ]+" required>
                           <label for="type_activity" data-error="wrong" data-success="right"></label>
                        
                          
                   </td> 
                      <td>
                            <input name="path"  value='<?php echo $filename;?>' type="text" />
                           
                           
                  </td>     
                  <td>  
                        <input type="file" name="fileupload">
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
             <script type="text/javascript">
                             $(document).ready(function() {
                             $('select').material_select();
                    });
            

                  </script> 
    <?php 
   class Record
   {
          function edit_record()
          {
               if(isset($_POST['submit1']))
                 {
                       include 'connection.php';
                      $fid = $_SESSION['fid']; 
                      $atid = $_POST['did'];
                     
                      $activity_name = $_POST['activity_name'];
                      $role = $_POST['role'];
                      $type_activity = $_POST['type_activity'];
                      $a=$_FILES['fileupload']['name'];
                      $b=$_FILES['fileupload']['tmp_name'];
                      $c="C:/wamp64/www/test_7/files/".$a;
                      if(move_uploaded_file($b, $c))
                      {
                            $sql = "update activity SET activity_name='$activity_name',role='$role',filename='$a' WHERE atid='$atid' and fid='$fid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated with File')</script>";
                                   echo "<script>location.href = 'view_activity.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                   echo "<script>location.href = 'view_activity.php'</script>";
                            } 

    
                      }
                      else
                      {

                             $sql = "update activity SET activity_name='$activity_name',role='$role' WHERE atid='$atid' and fid='$fid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated without File')</script>";
                                   echo "<script>location.href = 'view_activity.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                   echo "<script>location.href = 'view_activity.php'</script>";
                            } 

    
                      }
                      
                       
   
                }

        }
    }
        $obj = new Record;
        $obj->edit_record();

   ?>         

  </body>
  </html>                        

   