<?php session_start(); ?>
<?php
    include('connection.php');
    $aid = $_SESSION['aid']; 
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit_Admin_Profile | Faculty Apprasial</title>
  <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
</head>
<body>
	<?php include 'admin_header.php' ?>
		 <div class="row"></div>
    <div class="row"></div>
   <div class="row"></div> 
   <div class="row"></div> 
  <div class="row"></div>
 
  
  <div class="row">
    <div class="row">
      <h3 class="center-align">Edit Profile</h3>
    </div>
    
    <form class="col s7" method="POST">
    
     <div class="row">
    <div class="input-field col s7 s7 offset-s7 grid-example">
          <i class="material-icons prefix">email</i>
          <input name="email" type="email" class="validate" value="<?php echo $email; ?>" placeholder="Email" required>
            <label for="email" data-error="wrong" data-success="right"></label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s7 s7 offset-s7 grid-example">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="password" class="validate" value="<?php echo $password;?>" placeholder="Password" required>
            <label for="password"></label>
          </div>
        </div>
      
		<div class="row col s11 s8 offset-s8 grid-example">
        <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
            
        <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset">Reset
        </button>
      </div>
   
   </form>
  </div>

    <div class="row"></div>
    <div class="row"></div>
	<?php include 'footer.php' ?>
	<!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>

	<?php 
	class admin
	{
		function update_data()
		{
			if(isset($_POST['submit']))
			{
				
				include('connection.php');
				$aid = $_SESSION['aid'];
   				$email=$_POST['email'];
   				$password=$_POST['password'];
   				//echo $email,$password;
   				$sql = "update admin_table SET email='$email',password='$password' WHERE aid='$aid'";
				$res = mysqli_query($conn,$sql);
				if($res === TRUE)
				{
						 echo "<script type='text/javascript'>Materialize.toast('Records Have Been Added Successfully', 3000, 'rounded')</script>";

				}
				else
				{
						 echo "<script type='text/javascript'>Materialize.toast('Process Failed Please Contact Developer', 3000, 'rounded')</script>";				
				}

			}
			
		}	
	}
	 $obj=new admin;
    $obj->update_data(); 		
	?>

</body>
</html>