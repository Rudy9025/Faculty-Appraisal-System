<?php session_start(); ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Forgot_Password | Faculty Appraisal</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  
      <style media="screen">
                *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

 </style>
    </head>
    <body>
      
     <?php include('header.php'); ?>
     <hr style="color: #e5e5e5;">
     <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

     <form class="col s7" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    <h5 class="center-align">Forgot Password Form!</h5>
    
   
      
    <div class="input-field col s7 s7 offset-s7 grid-example">
      <br>
          <i class="material-icons prefix">email</i> <br>
          <input name="email" type="email" class="validate" required>
  
          <label data-error="wrong" data-success="right">Enter Registered Email-ID</label>
          </div>
        

    
       
    <div class="input-field col s7 s7 offset-s7 grid-example">
     <br> <i class="material-icons prefix">phone</i> <br>
      <input name="mobile_contact" type="text" class="validate" data-length="10" pattern="[0-9]{10}" required>
      
      <label data-error="wrong" data-success="right">Contact(M)</label>
    </div>
  

     <br>
     <br>
    
      <div class="row col s11 s8 offset-s8 grid-example">
            <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="submit">Submit
            </button>&nbsp;&nbsp;&nbsp;&nbsp;
            <br>

            <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset" name="reset">Reset</button><br><br>
             
        </div>
      </form>
  </div>
  
  
  <div class="row">
  </div>
  
  
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <?php include('footer.php'); ?>

</body>
</html>
 <?php 
 class Forgotpwd
    {
      	function sndmail()
      	{
        	include('connection.php');
		    	if(isset($_POST['submit']))
        	{
  			       $mob = $_POST['mobile_contact'];
 			         $email = $_POST['email'];
			         $sql = "select password from register where contact_m='$mob' and email='$email'";
 			         $res = mysqli_query($conn,$sql);
 			         
                if($res->num_rows>0)
 			            {
 			        		      while($row=mysqli_fetch_array($res))
 				             	   {
 							            
                            $password = $row['password'];
 							              $to = $email;
            		      		$subject = "Username And Password From Faculty Appraisal";
            			       	$message ="Your Username And Password From Faculty Appraisal And Thankyou For Using Our System" . "\r\n" . "Your EmailId : ".$email."\r\n" . "Your Password : ".$password;
            				      $headers = " From :shuklatejas21@gmail.com" . "\r\n" . "CC : Faculty Appraisal";
           					      if(mail($to,$subject,$message,$headers));
            				      {
                				         echo "<script type='text/javascript'>Materialize.toast('You Username and Password are SuccessFully send to Registered Email!', 5000, 'rounded')</script>";
            				      }
                  
 					            }
 			        }
			else {
 					
              echo "<script type='text/javascript'>Materialize.toast('Records Not Found, Please Enter Valid Details Or Contact Admin For Further Process', 5000, 'rounded')</script>";	
				}

 			}
 		}	
 	}	

 	$fp = new Forgotpwd;
 	$fp->sndmail();

?>


