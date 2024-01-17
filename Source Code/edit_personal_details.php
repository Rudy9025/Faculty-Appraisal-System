<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              //echo $select_id;
              $sql = "select * from personal_details where fid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              { 
                while($row=mysqli_fetch_array($res))
                  {
                        $fid = $row[0];
                        $p1 = $row[1];
                        $address = $row[2];
                        $area = $row[3];
                        $city = $row[4];
                        $state = $row[5];
                        $pincode = $row[6];
                        $country = $row[7];
                        $designation = $row[8];
                        $aos = $row[9];
                        $doj = $row[10];
                        $pps = $row[11];
                        $currtime = $row[12];
                        
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
      <title>Edit Personal Details | Faculty Appraisal</title>

    </head>
 
    <body>
         <?php include('admin_header.php'); ?>

         <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">Personal Details</h1>
        </div>

        <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <table class="stripped responsive-table">
                <thead>
                    <tr>
                        <th>fid</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>Address Area</th>
                        <th>City</th>
                        <th>State</th>
                         <th>Pincode</th>
                        <th>Country</th>
                       
                        <th>Designation</th>
                        <th>Area Of Specialization</th>
                        <th>Date Of Joining</th>
                        <th>Payscale</th>
                        
                
                    </tr>
                </thead>
                <tbody>
                  <tr>
                  <td><input type="text" name="did" value="<?php echo $fid; ?>" /></td>
                  <td>
                    <img src='<?php echo $p1; ?>' alt='Passport-Size Photo' width='100' height='100'>
                    <input type="file" name="fupload" id="fupload">
                  </td>
                  <td> 
                      <input name="address" value="<?php echo $address; ?>" type="text" id="address" data-length="70" style="text-transform: capitalize;" required />
                      
                  </td>
                  <td>
                       <input name="address_area" value="<?php echo $area; ?>" type="text" id="address_area" class="validate" data-length="15" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
                       
                  </td>
                  <td>
                      <input name="city" type="text" value="<?php echo $city ?>" class="validate" id="city" data-length="30" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
                  </td>
                  <td>
                      <select name="state">
                      <option value="" disabled>Choose Your Option</option>
                      <?php  include 'connection.php';
                      $sql = "select state_name from states";
                      $res = mysqli_query($conn,$sql);
                      if($res->num_rows>0)
                      {
                            
                            while($row=mysqli_fetch_array($res))
                            {
                              echo "<option value='".$row['state_name']."'>".$row['state_name']."</option>";
                            }
                      }
                      else
                      {
                              echo "<option value=''>...</option>";
                      }
                      ?>
                      </select>
   
                  </td>  
                  
                  <td>
                      <input name="pincode" value="<?php echo $pincode; ?>" type="text" class="validate" id="pincode" pattern="[0-9]+" data-length="6"required>

                  </td> 
                  <td>
                      <input name="country" type="text" value="<?php echo $country ?>" class="validate" id="country" data-length="30" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
                  </td> 
                  <td>
                      <input name="designation" value="<?php echo $designation ?>" type="text" id="designation" class="validate" style="text-transform: capitalize;" data-length="15" pattern="[a-zA-Z]+" required>
                  </td>
                  <td>
                       <input name="area_of_specialization" value="<?php echo $aos; ?>" title="Languages or Technology" id="area_of_specialization" type="text" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z,]+" required>
                  </td> 
                  <td>
                    <input name="date_of_joining" type="text" value="<?php echo $doj; ?>" placeholder="YYYY-MM-DD" required>
                  </td> 
                  <td>
                     <input name="present_payscale" value="<?php echo $pps; ?>" type="text" id="present_payscale" class="validate" data-length="7" pattern="[0-9]+" required>
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
            <script type="text/javascript">
                   $(document).ready(function() 
                  {
                      $('select').material_select();
                  });
            </script>
            
           
            <?php 
   class Record
   {
          function edit_record()
          {
               if(isset($_POST['save']))
                 {
                  include 'connection.php';
                  $fid = $_POST['did'];
                  $a=$_FILES['fupload']['name'];
                  $d=$_FILES['fupload']['tmp_name'];
                  $e="img/".$a; 
                  $address = $_POST['address'];
                  $area = $_POST['address_area'];
                  $city = $_POST['city'];
                  $state = $_POST['state'];
                  $pincode = $_POST['pincode'];
                  $country = $_POST['country'];
                  $designation = $_POST['designation'];
                  $aos = $_POST['area_of_specialization'];
                  $doj = $_POST['date_of_joining'];
                  $pps = $_POST['present_payscale'];
                 
                  
                  if(move_uploaded_file($d, $e))
                  {
                                $sql = "update personal_details SET photo='$e',address1='$address',address_area='$area',address_city='$city',address_state='$state',pincode='$pincode',country='$country',designation='$designation',area_of_specialization='$aos',doj='$doj',payscale='$pps' WHERE fid='$fid'";
                                $res = mysqli_query($conn,$sql);
                         if($res===TRUE)
                         {
                               echo "<script type='text/javascript'>alert('Records Have Been Modified Successfully with photo')</script>";
                                echo "<script>location.href = 'admin_view_personal_details.php'</script>";
                                
                         } 
                         else
                         {
                               echo "<script type='text/javascript'>Materialize.toast('Error Data Submission Failed Try Again')</script>";
                                echo "<script>location.href = 'admin_view_personal_details.php'</script>";
                                
                                

                         }  
   
                  }
                  else
                  {
                        $sql = "update personal_details SET address1='$address',address_area='$area',address_city='$city',address_state='$state',pincode='$pincode',country='$country',designation='$designation',area_of_specialization='$aos',doj='$doj',payscale='$pps' WHERE fid='$fid'";
                                $res = mysqli_query($conn,$sql);
                         if($res===TRUE)
                         {
                               echo "<script type='text/javascript'>alert('Records Have Been Modified Successfully without photo')</script>";
                               echo "<script>location.href = 'admin_view_personal_details.php'</script>";
                                
                         } 
                         else
                         {
                               echo "<script type='text/javascript'>alert('Error Data Submission Failed Try Again')</script>";
                               echo "<script>location.href = 'admin_view_personal_details.php'</script>";
                                
                                

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


