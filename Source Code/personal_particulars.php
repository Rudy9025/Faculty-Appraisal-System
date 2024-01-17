<?php session_start();?>
 
<?php include 'connection.php';?>
  <?php
    $fid = $_SESSION['fid']; 
    $un = $_SESSION['email'];
    $ps = $_SESSION['password'];
    $sql = "select firstname,middlename,lastname,gender,dob,contact_r,contact_m,email,password from register where email='$un' and password='$ps'";
    $res = mysqli_query($conn,$sql);
    if($res)
    {
            if($row=mysqli_fetch_array($res))
            {
                $fname = $row['firstname'];
                $mname = $row['middlename'];
                $lname = $row['lastname'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $resi = $row['contact_r'];
                $mob = $row['contact_m'];
                $email = $row['email'];
                $password = $row['password'];
                
            }
            else
            {
                  echo "Record Not Found";      
            }
           
    }
    else {
               echo "Login Again or Contact Admin!";
            }    
  ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      <title>Personal Particulars | Faculty Appraisal</title>
      <style>
         h4
        {
          font-size:15pt;
        }
    </style>

    </head>
    <body>
     
      <?php include('user_header.php'); ?>
  
      <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="view_personal_particulars.php">Personal Particulars</a></li>
      </ul>
   
   
    </div> 
    <div class="row">
 
  
  <div class="row">
    <div class="row">
      <h3 class="left-align amber-text darken-4">Personal Particulars</h3>
    </div>
    
    <form class="col s7" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
    
    <div class="row">
      <div class="input-field col s12 m4 l2"></div>
      <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">account_circle</i>
     <input disabled value="<?php echo $fname; ?>" id="disabled" name="firstname" type="text" class="validate" style="text-transform: capitalize;">
      <label for="firstname">First Name</label>
    </div>
    
        
    
    <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">account_circle</i>
      <input disabled value="<?php echo $mname; ?>" id="disabled" name="middlename" type="text" class="validate" style="text-transform: capitalize;">
      <label for="middlename">Middle Name</label>
    </div>
    
    <div class="input-field col s12 m4 l4">
      <i class="material-icons prefix">account_circle</i>
      <input disabled value="<?php echo $lname; ?>" id="disabled" name="lastname" type="text" class="validate" style="text-transform: capitalize;">
      <label for="lastname">Last Name</label></label>
    </div>
  </div>

  <div class="row">
     <div class="input-field col s12 m4 l2"></div>
     <div class="input-field col s12 m4 l5">
     <i class="material-icons prefix">accessibility</i>
      <input disabled value="<?php echo $gender; ?>" id="disabled" name="gender" type="text" class="validate">
      <label for="gender">Gender</label>
  </div>
  

  <div class="input-field col s12 m4 l5">
     <i class="material-icons prefix">date_range</i>
      <input disabled value="<?php echo $dob; ?>" id="disabled" name="dateofbirth" type="text" class="validate">
      <label>Birth Date</label>
  </div>
  </div>


  <div class="row">
         <div class="input-field col s12 m4 l2"></div>
        <div class="input-field col s12 m4 l10">
        <i class="material-icons prefix">account_balance</i>
          <textarea name="address" class="materialize-textarea" id="address" data-length="70" style="text-transform: capitalize;" required></textarea>
          <label for="address">Address</label>
        </div>
  </div>
   
   <div class="row">
     <div class="input-field col s12 m4 l2"></div>
     <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">find_replace</i>
      <input name="address_area" type="text" id="address_area" class="validate" data-length="15" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
      <label for="address_area" data-error="wrong" data-success="right">Address_Area</label>
    </div>
  

      <div class="input-field col s12 m4 l5">
   <i class="material-icons prefix">edit_location</i>
   <select name="state">
      <option value="" disabled>Choose your option</option>
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
    <label for="state">State</label>
    </div>
    </div>

   <div class="row">
    <div class="input-field col s12 m4 l2"></div>
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">location_city</i>
      <input name="city" type="text" class="validate" id="city" data-length="30" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
      <label for="city" data-error="wrong" data-success="right">City</label>
    </div>
  

    <div class="input-field col s12 m4 l2">
      <i class="material-icons prefix">drafts</i>
      <input name="pincode" type="text" class="validate" id="pincode" pattern="[0-9]+" data-length="6"required>
      <label id="pincode" data-error="wrong" data-success="right">Pincode</label>
    </div>

     <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">edit_location</i>
      <input name="country" type="text" value="India" id="country" class="validate" data-length="15" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
      <label for="country" data-error="wrong" data-success="right">Country</label>
    </div>
   </div>

   <div class="row">
    <div class="input-field col s12 m4 l2"></div>
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">contacts</i>
        <input disabled value="<?php echo $resi; ?>" id="disabled" name="residential_contact" type="text" class="validate">
      <label for="residential_contact">Contact(R)</label>
  </div>
  
 
     
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">phone</i>
        <input disabled value="<?php echo $mob; ?>" id="disabled" name="mob_contact" type="text" class="validate">
      <label for="mob_contact">Contact(M)</label>
    </div>
  </div>
    
    
      <div class="row">
      <div class="input-field col s12 m4 l2"></div>
      <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">event_seat</i>
      <input name="designation" value="Faculty" type="text" id="designation" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z ]+" required>
      <label for="designation" data-error="wrong" data-success="right">Designation</label>
    </div>
  
      
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">dehaze</i>
      <input name="area_of_specialization" title="Languages or Technology" id="area_of_specialization" type="text" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z, ]+" required>
      <label for="area_of_specialization" data-error="wrong" data-success="right">Area Of Specialization</label>
    </div>
    </div>
 
    <div class="row">
       <div class="input-field col s12 m4 l2"></div>
     <div class="input-field col s12 m4 l5">
     <i class="material-icons prefix">date_range</i>
    <input name="date_of_joining" type="text" class="datepicker" required>
    <label>Date Of Joining</label>
    </div>
 
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">monetization_on</i>
      <input name="present_payscale" type="text" id="present_payscale" class="validate" data-length="7" pattern="[0-9]+" required>
      <label for="present_payscale" data-error="wrong" data-success="right">Present Payscale</label>
    </div>
  </div>
  
    <div class="row">
       <div class="input-field col s12 m4 l2"></div>
        <div class="input-field col s12 m4 l5">
          <i class="material-icons prefix">email</i>
          <input disabled value="<?php echo $email; ?>" id="disabled" name="email" type="text">
      <label for="email">Email</label>
    </div>
        
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">vpn_key</i>
        <input disabled value="<?php echo $ps; ?>" id="disabled" name="password" type="password" class="validate">
      <label for="password">Password</label>
      
    </div>
  </div>

  <div class="row">
       <div class="input-field col s12 m4 l2"></div>
      <div class="file-field input-field col s12 m4 l10">
            <div class="btn waves-effect waves-light">
                <span>Photo</span>
                <input type="file" name="fupload" id="fupload" required>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" required>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="row"></div>
    <div class="row"></div>
    
    </div>

      <div class="row col s11 s8 offset-s8 grid-example">
        

            <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            
            <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset">Reset
            </button>&nbsp;&nbsp;&nbsp;&nbsp;
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
             <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Confirmation Tab</h4>
      <p>Are You Sure Want to get redirected to next page?</p>
    </div>
    <div class="modal-footer">
       <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>
      <a href="teaching_work.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
      <a href="view_personal_particulars.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
    </div>
  </div>
</div>
            
            
        
      
        
    

    </form>
  </div>
  
  <?php include('footer.php'); ?>
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() 
        {
            $('select').material_select();
        });
    </script>
    <script>
      $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    format: 'yyyy-mm-dd',
    min: '1967-01-01',
    max: '2017-12-01',
    closeOnSelect: false // Close upon selecting a date,
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
  if(isset($_POST['submit']))
  {
      $fid = $_SESSION['fid'];
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
      $a=$_FILES['fupload']['name'];
      $d=$_FILES['fupload']['tmp_name'];
      $e="img/".$a;

      date_default_timezone_set('Asia/Kolkata');
                      
      $currtime = date("Y-m-d H:i:s");

      if(move_uploaded_file($d,$e))
      {
          $sql = "insert into personal_details (fid,photo,address1,address_area,address_city,address_state,pincode,country,designation,area_of_specialization,doj,payscale,currtime)values ('$fid','$e','$address','$area','$city','$state','$pincode','$country','$designation','$aos','$doj','$pps','$currtime')";
          $res = mysqli_query($conn,$sql);
          if($res === TRUE)
          {
              echo "<script type='text/javascript'>alert('Record Is Inserted Successfuly!')</script>";
              echo "<script type='text/javascript'>alert('You Are Directed To Next Page')</script>";
              echo "<script>location.href = 'teaching_work.php'</script>";

          }   
          else
          {
              echo "<script type='text/javascript'>alert('Record Is Not Inserted Please Try Again or Contact Administrator!')</script>";
               echo "<script>location.href = 'personal_particulars.php'</script>";
          }
      }
    else
      {
          echo "<script type='text/javascript'>alert('File Not Uploaded and Record failed to submit')</script>";
          echo "<script>location.href = 'personal_particulars.php'</script>";
      }

  }
?>

</body>
</html>

        

 