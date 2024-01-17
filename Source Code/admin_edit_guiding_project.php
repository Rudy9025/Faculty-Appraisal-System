<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              //echo $select_id;
              $sql = "select * from guide_project where gid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              {

                  while($row=mysqli_fetch_array($res))
                  {
                        $tid = $row[0];
                        $fid = $row[1];
                        $semester = $row[2];
                        $total_project = $row[3];
                        $project_title = $row[4];
                        $path = $row[5];
                        $currtime = $row[6];
                  } 
              }
              
         }
?>              
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      <title>Edit Personal Details | Faculty Appraisal</title>

    </head>
 
    <body>
         <?php include('admin_header.php'); ?>

         <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">List Of Guided Project</h1>
        </div>

        <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <table class="stripped responsive-table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th >Semester</th>
                        <th>Total No Of Project Guided</th>
                        <th>Title of Best Project Guided</th>
                        <th>FileName</th>
                        <th>Change</th>
                        
                       

                   </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><input type="hidden" name="did" value="<?php echo $tid; ?>"  /></td>  
                      <td><input type="hidden" name="fid" value="<?php echo $fid; ?>"  /></td>
                        <td>
                           <input name="semester" value='<?php echo $semester;?>' type="text" id="semester" class="validate" data-length="2" pattern="[0-9]+" required>
                           <label for="semester" data-error="wrong" data-success="right"></label>
                        </td>
                      <td>
                            <input name="total_no_of_project_guided" value='<?php echo $total_project;?>' type="text" id="total_no_of_project_guided" class="validate" data-length="3" pattern="[0-9]+" required>
                            <label for="total_no_of_project_guided" data-error="wrong" data-success="right"></label>
                      </td>
                      <td>
                            <input name="title_of_project" type="text" value='<?php echo $project_title;?>' id="title_of_project" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
                            <label for="title_of_project" data-error="wrong" data-success="right"></label>

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
                       
                       $semester = $_POST['semester'];
                       $total_project = $_POST['total_no_of_project_guided'];
                       $project_title = $_POST['title_of_project'];
                      
                       $a=$_FILES['fupload']['name'];
                       $d=$_FILES['fupload']['tmp_name'];
                       $c="C:/wamp64/www/test_5/files/".$a;
                       $path = $_POST['path'];
                       if(move_uploaded_file($d,$c))
                       {

                            $sql = "update guide_project SET semester='$semester',total_project='$total_project',project_title='$project_title',filename='$a' WHERE gid='$tid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                   echo "<script type='text/javascript'>alert('Record Updated With File')</script>";
                                   echo "<script>location.href = 'admin_view_guiding_project.php'</script>";
                            }
                            else
                            {
                                   echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                   echo "<script>location.href = 'admin_view_guiding_work.php'</script>";
                            }

                       }
                       else
                       {
                            $sql = "update guide_project SET semester='$semester',total_project='$total_project',project_title='$project_title'  WHERE gid='$tid'";
                            $res = mysqli_query($conn,$sql);
                            if($res===true)
                            {
                                    echo "<script type='text/javascript'>alert('Record Updated Without File')</script>";
                                    echo "<script>location.href = 'admin_view_guiding_project.php'</script>";
                            }
                            else
                            {
                                    echo "<script type='text/javascript'>alert('Error Occured In Data Submission !')</script>";
                                    echo "<script>location.href = 'admin_view_guiding_project.php'</script>";
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


        
               