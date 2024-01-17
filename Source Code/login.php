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
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title>Login | Faculty Appraisal</title>
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
    
    <?php
     include('header.php'); 
  ?>
 <hr style="color: #e5e5e5;">
  
</div>


     <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form class="col s7" method="POST">
    <h3 class="center-align">Log in</h3>
  
     
    <div class="input-field col s7 s7 offset-s7 grid-example">
          <i class="material-icons prefix">email</i>
          <input name="email" type="email" class="validate" id="email" required>
            <label data-error="wrong" data-success="right">Email</label>
          </div>
          
          <div class="input-field col s7 s7 offset-s7 grid-example">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" type="password" name="password" class="validate" required>
            <label for="password">Password</label>
          </div>
       <br>
      <br>
      
      <div class="row col s11 s8 offset-s8 grid-example">
        <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="login">Login
        </button>&nbsp;&nbsp;&nbsp;&nbsp;
            
        <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset">Reset
        </button>
      </div>
      
  
      </div>
      
      <div class="row row col s11 s8 offset-s8 grid-example">
        <a href="register.php">New User?</a> &nbsp;&nbsp;| &nbsp;&nbsp;<a href="forgotpwd.php">Forgot Password?</a>
      </div>
    </form>
  </div>
  
   <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <div class="row">
  </div>
  <div class="row">
  </div>

 <?php 
    include('footer.php');
  ?>


  <?php
    
        class Login
        {
            function select_data()
            {
                include('connection.php');
                
                if(isset($_POST['login']))
                {
                    $email=$_POST["email"];
                    $password=$_POST["password"];
          
          			    $admin_sql="select aid,email,password from admin_table where email='$email' and password='$password'";
                    
                    $admin_res=mysqli_query($conn,$admin_sql);
                    
                    if($admin_res->num_rows>0)
                    {
                        while($admin_row=mysqli_fetch_array($admin_res))
                        {
                             $_SESSION['aid']=$admin_row['aid'];
                             $_SESSION['email']=$admin_row['email'];
                             $_SESSION['password']=$admin_row['password'];  
                             echo "<script>location.href = 'admin_home.php'</script>";         
                        }
                    }  
                    else
                    {
                    	$sql="select fid,firstname,email,password from register where email='$email' and password='$password'";
                  		
                  		$res=mysqli_query($conn,$sql);
                   		if($res->num_rows>0)
                   		{
                        	while($row=mysqli_fetch_array($res))
                        	{
                            	  $_SESSION['fid']=$row['fid'];
                              	$_SESSION['fname']=$row['firstname'];
                              	$_SESSION['email']=$row['email'];
                              	$_SESSION['password']=$row['password']; 
                              echo "<script>location.href = 'user_home.php'</script>";
                        	}
                    	} 
          				else
                    	{
                        	 echo "<script type='text/javascript'>Materialize.toast('Email Id Or Password Is Incorrect', 5000, 'rounded')</script>";
                        }

                    }  

                 }
            } 
        }
    
    $obj=new Login;
    $obj->select_data();
  ?>
   </body>
   </html>  