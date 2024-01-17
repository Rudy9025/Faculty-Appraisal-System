<?php session_start();?>
 
<?php include 'connection.php';?>
  <?php
    $fid = $_SESSION['fid']; 
    $un = $_SESSION['email'];
    $ps = $_SESSION['password'];
    $sql = "select firstname,middlename,lastname,gender,dob,contact_r,contact_m,email,password from register where email='$un' and password='$ps'";
    $res = mysqli_query($conn,$sql);
    if($res->num_rows>0)
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
     
      $sql = "select photo,address1,address_area,address_city,address_state,pincode, designation,area_of_specialization,doj,payscale from personal_details where fid='$fid'";
      $res = mysqli_query($conn,$sql);
      if($res->num_rows>0)
      {
            if($row=mysqli_fetch_array($res))
            {
                $pic = $row['photo'];
                $address = $row['address1'];
                $area = $row['address_area'];
                $city = $row['address_city'];
                $state = $row['address_state'];
                $pincode = $row['pincode'];
                $designation = $row['designation'];
                $aos = $row['area_of_specialization'];
                $doj = $row['doj'];
                $pps = $row['payscale'];
               
                
            }
            else
            {
                  echo "Record Not Found";      
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
      <title>Personal Particulars | Faculty Appraisal</title>
      <style>
         h4
        {
          font-size:15pt;
        }
    </style>
    <style type="text/css">
      .modal { max-height: 90%; 
               max-width:  90%;
               left:0; 
               right:0;
                top:0; 
                bottom:0;
                 margin:auto 
               }
    </style>

    </head>
    <body>
    
      <?php include('user_header.php'); ?>
  
      <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Personal Particulars</a></li>
      </ul>
   
   
    </div> <div class="row">
 
  
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
        <input disabled value="<?php echo $address; ?>" id="disabled" name="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
  </div>
   
   <div class="row">
     <div class="input-field col s12 m4 l2"></div>
     <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">find_replace</i>
      <input disabled value="<?php echo $area; ?>" id="disabled" name="address_area" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
      <label data-error="wrong" data-success="right">Address_Area</label>
    </div>
  

    <div class="input-field col s12 m4 13">
      <i class="material-icons prefix">location_city</i>
           <input disabled value="<?php echo $city; ?>" id="disabled" name="address_city" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
      <label data-error="wrong" data-success="right">Address_City</label>
  </div>
   
    <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">edit_location</i>
      <input disabled value="<?php echo $state; ?>" id="disabled" name="state" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
      <label data-error="wrong" data-success="right">State</label>
    </div>
  </div>

   <div class="row">
     <div class="input-field col s12 m4 l2"></div>
      <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">drafts</i>
      <input disabled value="<?php echo $pincode; ?>" id="disabled" name="pincode" type="text" class="validate" pattern="[0-9]+" data-length="6"required>
      <label data-error="wrong" data-success="right">Pincode</label>
    </div>
   

    <div class="input-field col s12 m4 l3">
      <i class="material-icons prefix">contacts</i>
        <input disabled value="<?php echo $resi; ?>" id="disabled" name="residential_contact" type="text" class="validate">
      <label for="residential_contact">Contact(R)</label>
  </div>
  
 
     
    <div class="input-field col s12 m4 l4">
      <i class="material-icons prefix">phone</i>
        <input disabled value="<?php echo $mob; ?>" id="disabled" name="mob_contact" type="text" class="validate">
      <label for="mob_contact">Contact(M)</label>
    </div>
  </div>
    
    
      <div class="row">
      <div class="input-field col s12 m4 l2"></div>
     
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">event_seat</i>
      <input disabled value="<?php echo $designation; ?>" id="disabled" name="designation" value="Faculty" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" required>
      <label for="designation" data-error="wrong" data-success="right">Designation</label>
    </div>
  
      
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">dehaze</i>
      <input disabled value="<?php echo $aos; ?>" id="disabled" name="area_of_specialization" title="Languages or Technology" type="text" class="validate" data-length="30" pattern="[a-zA-Z,]+" required>
      <label for="area_of_specialization" data-error="wrong" data-success="right">Area Of Specialization</label>
    </div>
  </div>
 
    <div class="row">
       <div class="input-field col s12 m4 l2"></div>
     <div class="input-field col s12 m4 l5">
     <i class="material-icons prefix">date_range</i>
    <input disabled value="<?php echo $doj; ?>" id="disabled" name="date_of_joining" type="text" required>
    <label>Date Of Joining</label>
          </div>
 
    <div class="input-field col s12 m4 l5">
      <i class="material-icons prefix">monetization_on</i>
      <input disabled value="<?php echo $pps; ?>" id="disabled" name="present_payscale" type="text" class="validate" data-length="7" pattern="[0-9]+" required>
      <label data-error="wrong" data-success="right">Present Payscale</label>
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

    <?php echo "<html><body class='center-align'><img src='".$pic."' height=200 width=200></body></html>"?>


    <div class="row">
      <div class="row"></div>
    <div class="row"></div>
    
    </div>

      <div class="row col s11 s6 offset-s6 grid-example">
        <!-- Modal Trigger -->
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
      
    </div>
  </div>
</div>
            
            
        </div>
      
       
  
    

    </form>

  
  
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

</body>
  </html>

        

 