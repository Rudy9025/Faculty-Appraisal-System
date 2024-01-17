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
        <title>Register | Faculty Appraisal</title>
<style>
    .login-box {
            background-color:#02181a;
            position: absolute;
            top: 73%;
            left: 50%;
            color: aliceblue;
            padding: 60px;
            align-self: center;
            width: 550px;
             transform: translate(-50%, -50%);
             box-sizing: border-box;
            box-shadow: 0px 15px 25px #ff0505;
            border-radius: 40px;
          }
          html {
            height:100%;
          }
          
          body {
            margin:0;
          }
          
          .bg {
            animation:slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #1ed611 50%,black 50%);
            bottom:0;
            left:-50%;
            opacity:.5;
            position:fixed;
            right:-50%;
            top:0;
            z-index:-1;
          }
          
          .bg2 {
            animation-direction:alternate-reverse;
            animation-duration:4s;
          }
          
          .bg3 {
            animation-duration:5s;
          }
          
          .content {
            background-color:rgba(255,255,255,.8);
            border-radius:.25em;
            box-shadow:0 0 .25em rgba(0,0,0,.25);
            box-sizing:border-box;
            left:50%;
            padding:5vmin;
            position:fixed;
            text-align:center;
            top:50%;
            transform:translate(-50%, -50%);
          }
          
          h1 {
            font-family:monospace;
          }
          
          @keyframes slide {
            0% {
              transform:translateX(-25%);
            }
            100% {
              transform:translateX(25%);
            }
          }
          
          
          
</style>
    </head>
    <body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
   
          <?php include('header.php'); ?>
      
              <div class="login-box">
      <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <h5 class="center-align" style="color: aliceblue;">Registration Form</h5>
              
                 
                        <div class="input-field col s7 s7 offset-s7 grid-example">
                                 <i class="material-icons prefix">account_circle</i>
                                 <input name="first_name" type="text" id="first_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
                                <label for="first_name" data-error="wrong" data-success="right">First Name</label>

                        </div>
                
        
                  
                      <div class="input-field col s7 s7 offset-s7 grid-example">
                          <i class="material-icons prefix">account_circle</i>
                          <input name="middle_name" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
                          <label data-error="wrong" data-success="right">Middle Name</label>
                      </div>
                  

                 
                      <div class="input-field col s7 s7 offset-s7 grid-example">
                          <i class="material-icons prefix">account_circle</i>
                          <input name="last_name" type="text" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
                          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
                      </div>
                 
                    
                    <div class="container col s7 s7 offset-s7 grid-example">
 <p style="color: aliceblue; font-size: 20px;"> Gender</p>
                    </div>
                        <p class="container col s7 s7 offset-s7 grid-example">
                            <input class="with-gap" name="gender" type="radio" id="male" value="Male" checked/>
                            <label for="male">Male</label>
                        </p>
                         <p class="container col s7 s7 offset-s7 grid-example">
                               <input class="with-gap" name="gender" type="radio" id="female" value="Female" />
                               <label for="female">Female</label>
                         </p>
                
    
                    
                      <div class="input-field col s7 s7 offset-s7 grid-example">
                          <i class="material-icons prefix">date_range</i>
                          <input name="date_of_birth" type="text" class="datepicker" required>
                          <label>Birth Date</label>
                      </div>
                

                
                      <div class="input-field col s7 s7 offset-s7 grid-example">
                           <i class="material-icons prefix">contacts</i>
                           <input name="residential_contact" type="text" class="validate" data-length="11" pattern="[0-9]{11}" placeholder="079">
                           <label for="residential_contact" data-error="wrong" data-success="right">Contact(R)</label>
                      </div>
                
  
                
                    <div class="input-field col s7 s7 offset-s7 grid-example">
                        <i class="material-icons prefix">phone</i>
                        <input name="mobile_contact" type="text" class="validate" data-length="10" pattern="[0-9]{10}" required>
                        <label data-error="wrong" data-success="right">Contact(M)</label>
                    </div>
            
    
              
                  <div class="input-field col s7 s7 offset-s7 grid-example">
                       <i class="material-icons prefix">email</i>
                       <input name="email" type="email" class="validate" id="email" required>
                       <label data-error="wrong" data-success="right">Email</label>
                  </div>
                

            
                  <div class="input-field col s7 s7 offset-s7 grid-example">
                        <i class="material-icons prefix">vpn_key</i>
                        <input name="password" type="password" class="validate" data-length="15" style="text-transform: lowercase;" required>
                        <label data-error="wrong" data-success="right">Password</label>
                  </div>
                
  <br>

  <div class="row col s11 s8 offset-s8 grid-example">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;     
  &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;  <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="submit" >Submit
 </button>&nbsp;&nbsp;&nbsp;&nbsp;
            
              <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset">Reset
              </button>
              </div>
      
      
              </div>
      
      </form>
  </div>
 
  <div class="row"></div>
  <div class="row"></div>
  
  <?php include('footer.php'); ?>
 
 
 


        <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                    

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
                   
    
    </body>
  </html>
<?php
  class Signup
  {
      function insert_data()
      {
        include('connection.php');

        if(isset($_POST['submit']))
        {
            $fname=$_POST['first_name'];
            $mname=$_POST['middle_name'];
            $lname=$_POST['last_name'];
            $gender=$_POST['gender'];
            $dob=$_POST['date_of_birth'];
            $resi=$_POST['residential_contact']="0";
            $mob=$_POST['mobile_contact'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            date_default_timezone_set('Asia/Kolkata');
            
            $currtime = date("Y-m-d H:i:s");
          
            $sql ="select * from register where email='$email'";
            $res = mysqli_query($conn,$sql);
            if ($res->num_rows > 0)
            {
                echo "<script type='text/javascript'>Materialize.toast('Email Id Is Already Registered!', 5000, 'rounded')</script>";
               
            }
            else
            {
                $sql2 ="insert into register (firstname,middlename,lastname,gender,dob,contact_r,contact_m,email,password,registered,currtime)values('$fname','$mname','$lname','$gender','$dob','$resi','$mob','$email','$password','Yes','$currtime')" ;
                $res = mysqli_query($conn,$sql2);
                if($res===true)
                  {
                          $to = $email;
                          $subject = "Registration Confirmation Mail";
                          $message ="Your Registration Has Been Confirmed To Faculty Appraisal System And Thankyou For Using Our System" . "\r\n" . "Your Email: ".$email."\r\n" . "Your Password : ".$password;
                          $headers = " From :r9025305010@gmail.com" . "\r\n" . "CC : Faculty Appraisal";
                          
                          mail($to,$subject,$message,$headers);
                                  
                          echo "<script type='text/javascript'>Materialize.toast('You Have Been SuccessFully Registered!', 1000)</script>";
                          echo "<script type='text/javascript'>alert('You Are Directed To Next Page')</script>";

                         
                          echo "<script>location.href = 'login.php'</script>";

                  }        
                  else
                  {
                      echo "<script type='type/javascript'>materialize.toast('Data Submission Error Contact Admin', 3000, 'rounded')</script>"; 
                  }
                  
              }                
             
        }
    }
  }      
  
    ob_start();
    $obj=new Signup;
    $obj->insert_data();        
    ob_flush();
                                
?> 

        