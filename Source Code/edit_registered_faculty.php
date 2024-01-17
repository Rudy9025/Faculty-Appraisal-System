<?php session_start()?>
<?php
    if(isset($_POST['selection']))
        {
              include 'connection.php';
              $select_id = $_POST['selection'];
              $_SESSION['select_id'] = $select_id;
              $sql = "select * from register where fid='$select_id'";
              $res = mysqli_query($conn,$sql);
              if($res->num_rows>0)
              {
                  while($row=mysqli_fetch_array($res))
                  {
                        $fname = $row[1];
                        $mname = $row[2];
                        $lname = $row[3];
                        $gender= $row[4];
                        $dob =$row[5];
                        $resi = $row[6];
                        $mob = $row[7];
                        $email = $row[8];
                        $password = $row[9];
                                
                
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
      <title>Edit Registered Faculty | Faculty Appraisal</title>

    </head>
 
    <body>
         <?php include('admin_header.php'); ?>

         <div class="row">
           <h3 class="left-align amber-text darken-4">Edit Records</h3>
           <h1 class="center-align amber-text darken-4">Registered Faculty</h1>
        </div>

      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
    
      <div class="row">
        <div class="input-field col s12 m4 l2"></div>
        <div class="input-field col s12 m4 l3">
            <i class="material-icons prefix">account_circle</i>
            <input value="<?php echo $fname; ?>" name="first_name" type="text" id="first_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
            <label for="first_name" data-error="wrong" data-success="right">First Name</label>

        </div>
        
       
        <div class="input-field col s12 m4 l3">
              <i class="material-icons prefix">account_circle</i>
              <input value="<?php echo $mname; ?>" name="middle_name" type="text" id="middle_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
              <label data-error="wrong" data-success="right">Middle Name</label>
          </div>
    
            <div class="input-field col s12 m4 l3">
              <i class="material-icons prefix">account_circle</i>
              <input value="<?php echo $lname; ?>" name="last_name" type="text" id="last_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
              <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
          </div>
      </div>

       <div class="row">
          <div class="input-field col s12 m4 l2"></div>
          <div class="input-field col s12 m4 l3">
              <i class="material-icons prefix">accessibility</i>
              <input value="<?php echo $gender; ?>" name="gender" type="text" id="gender" class="validate" data-length="6" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
              <label for="gender" data-error="wrong" data-success="right">Gender</label>
          </div>
   
          <div class="input-field col s12 m4 l3">
                <i class="material-icons prefix">date_range</i>
                    <input name="date_of_birth" id="date_of_birth" type="text" value='<?php echo $dob; ?>' class="validate" data-length="10" pattern="[0-9-]{10}" placeholder="YYYY-MM-DD" required>
                    <label for="date_of_birth" data-error="wrong" data-success="right">Birth Date</label>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12 m4 l2"></div>
          <div class="input-field col s12 m4 l3">
               <i class="material-icons prefix">contacts</i>
               <input value="<?php echo $resi; ?>" name="residential_contact" type="text" id="residential_contact" data-length="11" pattern="[0-9]+" placeholder="079">
               <label for="residential_contact">Contact(R)</label>
          </div>
               
          <div class="input-field col s12 m4 l3">
                <i class="material-icons prefix">phone</i>
                <input value="<?php echo $mob; ?>" name="mobile_contact" type="text" id="mobile_contact" class="validate" data-length="10" pattern="[0-9]{10}" required>
                <label for="mobile_contact" data-error="wrong" data-success="right">Contact(M)</label>
          </div>
      </div>
    
      <div class="row">
            <div class="input-field col s12 m4 l2"></div>
            <div class="input-field col s12 m4 l3">
                  <i class="material-icons prefix">email</i>
                  <input value="<?php echo $email; ?>" name="email" type="email" class="validate" id="email" required>
                  <label for="email" data-error="wrong" data-success="right">Email</label>
                  </div>
              
            <div class="input-field col s12 m4 l3">
                  <i class="material-icons prefix">vpn_key</i>
                  <input value="<?php echo $password; ?>" name="password" type="text" id="password" class="validate" data-length="15" style="text-transform: lowercase;" required>
                  <label for="password" data-error="wrong" data-success="right">Password</label>
            </div>
      </div>

    <div class="center">
                    
            <button class="btn" type="submit" name="save">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            
              <button class="btn" type="reset">Reset</button>
    </div>
      
      
      
      </form>
  
  <div class="row"></div>
  <div class="row"></div>
  
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
                         $fid = $_SESSION['select_id'];
                         $fn=$_POST['first_name'];
                         $mn=$_POST['middle_name'];
                         $ln=$_POST['last_name'];
                         $gn=$_POST['gender'];
                         $dob=$_POST['date_of_birth'];
                         $rs=$_POST['residential_contact'];
                         $mb=$_POST['mobile_contact'];
                         $ema=$_POST['email'];
                         $pwd=$_POST['password'];
                         $sql = "update register set firstname='$fn',middlename='$mn',lastname='$ln',gender='$gn',dob='$dob',contact_r='$rs',contact_m='$mb',email='$ema',password='$pwd' where fid='$fid'";
                         $res = mysqli_query($conn,$sql);
                         if($res===TRUE)
                         {
                               echo "<script type='text/javascript'>alert('Records Have Been Modified Successfully')</script>";
                                echo "<script>location.href = 'admin_view_registered_faculty.php'</script>";
                                session_destroy($_SESSION['select_id']);
                         } 
                         else
                         {
                               echo "<script type='text/javascript'>alert('Error Data Submission Failed Try Again')</script>";
                              echo "<script>location.href = 'admin_view_registered_faculty.php'</script>";
                              session_destroy($_SESSION['select_id']);  

                         }  
                 }

        }
    }
        $obj = new Record;
        $obj->edit_record();

   ?>         

  </body>
  </html>                       