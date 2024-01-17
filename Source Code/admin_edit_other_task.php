<?php session_start(); ?>
<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              //echo $select_id;
              $sql = "select * from other_task where otid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              {

                  while($row=mysqli_fetch_array($res))
                  {
                        $otid = $row[0];
                        $fid = $row[1];
                        $task = $row[2];
                        $role = $row[3];
                        
                        $filename = $row[4];
                        $currtime = $row[5];
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
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> Edit Other Task | Faculty Appraisal</title>
    </head>
    <body>
  
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
           <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">List Of Other Task</h1>
        </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                    <tr>  
                        
                        <th></th>
                        <th></th>
                        <th>Task</th>
                        <th>Role</th>
                        <th>FileName</th>
                        <th>Date And Time</th>
                        
                        
                        
                    </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td><input type="hidden" name="did" value="<?php echo $otid; ?>"  /></td>  
                     <td><input type="hidden" name="fid" value="<?php echo $fid; ?>"  /></td>
                     
                  <td>
                     <input name="task" type="text" id="task" value="<?php echo $task; ?>" class="validate" data-length="30" pattern="[A-Za-z0-9 ]+" required>
                     <label for="task" data-error="wrong" data-success="right"></label>
                  </td>
                  <td>
                     <input name="role" type="text" id="role" value="<?php echo $role; ?>" class="validate" data-length="30" pattern="[a-zA-Z ]+" required>
                     <label for="role" data-error="wrong" data-success="right"></label>
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
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="center">
                    
                <button class="btn" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
          function edit_record()
          {
               if(isset($_POST['submit']))
                 {
                       include 'connection.php';
                      $fid = $_SESSION['fid']; 
                      $otid = $_POST['did'];
                      //echo $fid,$otid;
                      $task = $_POST['task'];
                      $role = $_POST['role'];
                      //echo $task,$role;
                      $a=$_FILES['fileupload']['name'];
                      $b=$_FILES['fileupload']['tmp_name'];
                      $c="C:/wamp64/www/test_7/files/".$a;
                     
                      if(move_uploaded_file($b, $c))
                      {
                            $sql = "update other_task SET task='$task',role='$role',filename='$a' WHERE otid='$otid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated with File')</script>";
                                   echo "<script>location.href = 'admin_view_other_task.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission 11!')</script>";
                                   echo "<script>location.href = 'admin_view_other_task.php'</script>";
                            } 

    
                      }
                      else
                      {

                             $sql = "update other_task SET task='$task',role='$role' WHERE otid='$otid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated without File')</script>";
                                   echo "<script>location.href = 'admin_view_other_task.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission 1!')</script>";
                                   echo "<script>location.href = 'admin_view_other_task.php'</script>";
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