<?php session_start(); ?>
<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              $sql = "select * from task_assigned where tid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              { 
                while($row=mysqli_fetch_array($res))
                  {
                  		$tid = $row[0];
					           	$fid = $row[1];
					           	$semester = $row[2];
					           	$subject_name = $row[3];
					            $total_no_of_lectures = $row[4];
					           	$total_no_of_labs = $row[5];
					           	$path = $row[6];
					         }
				 }
              else
              {
                  echo "<script type='text/javascript'>Materialize.toast('Records Not Found', 5000, 'rounded')</script>";
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
      <title>Edit Teaching Work | Faculty Appraisal</title>

    </head>
 
    <body>
         <?php include('admin_header.php'); ?>

         <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">Teaching Work</h1>
        </div>

        <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <table class="stripped responsive-table">
                <thead>
                    <tr>
						            <th>tid</th>
                        <th>fid</th>
                        <th>Semester</th>
                        <th>Subject Name</th>
                        <th>Total No Of Lectures</th>
                        <th>Total No. Of Labs</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<td><input type="text" name="did" value="<?php echo $tid; ?>"  /></td>	
                  		<td><input type="text" name="fid" value="<?php echo $fid; ?>"  /></td>
                  
                        <td>
                           <input name="semester" value='<?php echo $semester;?>' type="text" id="semester" class="validate" data-length="2" pattern="[0-9]+" required>
                           <label for="semester" data-error="wrong" data-success="right"></label>
                        </td>
                        <td>
                           <input name="subject_name"  value='<?php echo $subject_name;?>' type="text" id="subject_name" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
                           <label for="subject_name" data-error="wrong" data-success="right"></label>
                        </td>
                        <td>
                          <input name="total_lectures" value='<?php echo $total_no_of_lectures;?>' type="text" id="total_lectures" class="validate" data-length="3" pattern="[0-9]+" required>
                          <label for="total_lectures" data-error="wrong" data-success="right"></label>
                        </td> 
                        <td>
                            <input name="total_labs" value='<?php echo $total_no_of_labs;?>' type="text" id="total_labs" class="validate" data-length="3" pattern="[0-9]+" required>
                            <label for="total_labs" data-error="wrong" data-success="right"></label>
                        </td>
                        <td>
                            <input name="path"  value='<?php echo $path;?>' type="text" />
                           
                           
                        </td> 
                        <td>
                             <input type="file" name="fupload" id="fupload">
                        </td> 
                       </tr>		
                 </tbody>
              </table>
              
              <div class="center">
                    
            <button class="btn" type="submit" name="save">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            
              <button class="btn" type="reset">Reset</button>
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
               if(isset($_POST['save']))
                 {
                  		 include 'connection.php';
                 		   $tid = $_POST['did'];
                       //echo $tid;
                       $semester = $_POST['semester'];
    			  		       $subject_name = $_POST['subject_name'];
    			  		       $total_lectures = $_POST['total_lectures'];
    					         $total_labs = $_POST['total_labs'];
    					         $a=$_FILES['fupload']['name'];
                       $d=$_FILES['fupload']['tmp_name'];
                       $c="C:/wamp64/www/test_5/files/".$a;
                       //echo $c;
                       if(move_uploaded_file($d,$c))
                       {

                            $sql = "update task_assigned SET semester='$semester',subject_name='$subject_name',total_lec='$total_lectures',total_lab='$total_labs',filename='$a' WHERE tid='$tid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated With File')</script>";
                                       echo "<script>location.href = 'admin_view_teaching_work.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                       echo "<script>location.href = 'admin_view_teaching_work.php'</script>";
                            }

                       }
                       else
                       {
                            $sql = "update task_assigned SET semester='$semester',subject_name='$subject_name',total_lec='$total_lectures',total_lab='$total_labs' WHERE tid='$tid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                    echo "<script type='text/javascript'>alert('Record Updated Without File')</script>";
                                    echo "<script>location.href = 'admin_view_teaching_work.php'</script>";
                            }
                            else
                            {
                                    echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                       echo "<script>location.href = 'admin_view_teaching_work.php'</script>";
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


