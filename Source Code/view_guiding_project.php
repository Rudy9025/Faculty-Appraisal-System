<?php session_start();
 ?>
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
        <title>View Guided Projects| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php if(isset($_SESSION['fid']))
          {
              include('user_header.php'); 

          }
               
          ?>
           <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
          <div class="row">
                <h3 class="center-align amber-text darken-4">List Of Guiding Projects </h3>
          </div>

          <div class="row"></div>
          <div class="row"></div>
                   
            <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>Selection</th>
                        <th>Sr No.</th>
                        <th>Semester</th>
                        <th>Total No Of Project Guided</th>
                        <th>Title of Best Project Guided</th>
                        <th>FileName</th>
                        <th>Operation</th>
                        <th>Date And Time</th>
                        <th>Remove File</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                  
                  <?php include 'connection.php' ;
                  $fid= $_SESSION['fid'];
                  $sql = "select * from guide_project where fid='$fid'";
                  $res = mysqli_query($conn,$sql);
                  if($res->num_rows>0)
                  {
                        $srno = 1;
                      while($row = mysqli_fetch_array($res))
                      {
                         
                          $GLOBALS['fn'] = $row['5'];
                          if($GLOBALS['fn'] == 'None')
                          {
                                echo "<tr>
                               <td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                                  <td>'".$srno."'</td>
                                <td>'".$row[2]."'</td>
                                <td style='text-transform: capitalize;'>'".$row[3]."'</td>
                                <td>'".$row[4]."'</td>
                                <td>'".$row[5]."'</td>
                                <td>
                                <a class='btn' width='100%' height='700px' href='./files/".$row[5]."' type='application/pdf' disabled>Open</a>
                                </td>
                                <td>'".$row[6]."'</td>
                                 <td><button class='btn' type='submit' name='change_file' value='".$row[0]."' formaction='remove_file_guiding_project.php' disabled>Remove_File</button></td>
                                </tr>";
  
                          }
                          else
                          {
                                echo "<tr>
                                <td><input type='checkbox' class='number' name='selection' id='".$row[0]."' value='".$row[0]."'/><label for='".$row[0]."'></label></td>
                                 <td>'".$srno."'</td>
 
                                <td>'".$row[2]."'</td>
                                <td style='text-transform: capitalize;'>'".$row[3]."'</td>
                                <td>'".$row[4]."'</td>
                                <td>'".$row[5]."'</td>
                                <td>
                                <a class='btn' width='100%' height='700px' href='./files/".$row[5]."' type='application/pdf'>Open</a>
                                </td>
                                <td>'".$row[6]."'</td>
                                 <td><button class='btn' type='submit' name='change_file' value='".$row[0]."' formaction='remove_file_guiding_project.php'>Remove_File</button></td>
                                </tr>";
  
                          }
                           $srno = $srno + 1;
                                                    
                      }

                  }
                  else
                  {
                      echo "<tr>
                                 <td>''</td>
                                  <td>''</td>
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
                 <div class="center">
                      <button class="btn" type="submit" name="edit" id="edit" formaction="edit_guiding_project.php" disabled>Edit Record</button>&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn" href='guiding_project.php'>Add</a>&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn" href='<?php echo $GLOBALS['path']; ?>'>Next</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                  
                  
     </body>
     </html>