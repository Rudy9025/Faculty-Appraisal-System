<?php
	session_start();
	if(!isset($_SESSION['fid']))
	{
			echo "<script type='text/javascript'>alert('Error Occured Please Try Again')</script>";
			 echo "<script>location.href = 'login.php'</script>";
	}
	$fid = $_SESSION['fid'];
	$em = $_SESSION['email'];
	include 'connection.php';
	$sql = "select * from feedback where fid=$fid";
	$res = mysqli_query($conn,$sql);
	if($res->num_rows>0)
	{

			 echo "<script type='text/javascript'>alert('Feedback Is Allowed Only Once to Submit')</script>";
			 echo "<script>location.href = 'user_home.php'</script>";

	}
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
	  <link href="css/material_icons.css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="shortcut icon" href="favicon.ico" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Feedback  | Faculty Appraisal</title>
	  </head>

    <body>
    
    <?php
		 include('user_header.php'); 
	?>
	
		
    
   
  </div> <div class="row">
  </div> <div class="row">
  </div>  <div class="row">
  </div>
 
  
	<div class="row">
		<div class="row">
			<h5 class="center-align">Feedback</h5>
		</div>
		
		<form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		
			  <div class="row">
					<div class="input-field col s7 s7 offset-s7 grid-example">
					  <i class="material-icons prefix">perm_identity</i>
					  <input disabled id="disabled" type="text" name="username" value="<?php echo $em; ?>" class="validate">
					  <label for="disabled">Email</label>
					</div>
			  </div>
			  
			  
			  <div class="row">
					<div class="input-field col s7 s7 offset-s7 grid-example">
					   <i class="material-icons prefix">account_circle</i>
					  <input id="text" type="text" name="name" class="validate" data-length="15" pattern="[a-zA-Z]+" required style="text-transform: capitalize;">
					  <label for="text">Enter Your Name</label>
					</div>
			  </div>
			  

			  
		  <div class="row">
					<div class="input-field col s7 s7 offset-s7 grid-example">
					  <i class="material-icons prefix">mode_edit</i>
					  <textarea id="textarea1" name="comment" class="materialize-textarea" data-length="50" pattern="[A-Za-z]+" required></textarea>
					  <label for="textarea1">Comments</label>
					</div>
			  </div>
			  
			  
			 
			 
			  
			
			  <div class="row">
			  </div>
			  <div class="row">
			  </div>
		 
			  
			  <div class="row col s11 s8 offset-s8 grid-example">
				    <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="submit" name="submit">Submit
				    </button>&nbsp;&nbsp;&nbsp;&nbsp;
						
				    <button class="btn waves-effect waves-light #ff6f00 amber darken-4" type="reset">Reset
				    </button>
			  </div>
			
			
		</form>
  </div>
  	<?php 
		include('footer.php');
	?>
	
	
      <!--Import jQuery before materialize.js-->
	  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      	  
    </body>
   <?php
 	 if(isset($_POST['submit']))
  	{
  			include('connection.php');
    		$name = $_POST['name'];
    		$comment = $_POST['comment'];
    		date_default_timezone_set('Asia/Kolkata');
                      
    		$currtime = date("Y-m-d H:i:s");
    		$sql = "insert into feedback values('$fid','$em','$name','$comment','$currtime')";
    		$res = mysqli_query($conn,$sql);
    		if($res === True)
    			{
    				echo "<script type='text/javascript'>alert('Thankyou For Giving Feedback!!')</script>";
    				echo "<script>location.href = 'user_home.php'</script>";			
    			}
    		else{
    		 
    		 		echo "<script type='text/javascript'>alert('Record Not Submitted Successfully')</script>";
    		 		echo "<script>location.href = 'user_home.php'</script>";

    			}	
    }
    	
    ?>

  </html>  