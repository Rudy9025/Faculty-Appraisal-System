<?php session_start(); 
if(!isset($_SESSION['fid']))
  {
      echo "<script type='text/javascript'>alert('Error Occured Please Try Again')</script>";
       echo "<script>location.href = 'index.php'</script>";
  }
?>
<?php
    include('connection.php');
    $fid = $_SESSION['fid']; 
    $email = $_SESSION['email'];
    $sql = "select * from personal_details where fid='$fid'";
    $res = mysqli_query($conn,$sql);
    if($res->num_rows > 0)
    {
        $GLOBALS['path'] = "view_personal_particulars.php";
    }
    else
    {
        $GLOBALS['path'] = "personal_particulars.php"; 
    }
?>
<?php
  function welcome()
  {
 
      date_default_timezone_set('Asia/Kolkata');
      date("Y-m-d H:i:s");
      
      if(date("H") < 12)
      {
            return "Good Morning";
      }
      elseif(date("H") > 11 && date("H") < 18)
      {
            return "Good Afternoon";
      }
      elseif(date("H") > 17)
      {
 
        return "Good Evening";
      }
 
}  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
	<title>UserHome | Faculty Apprasial</title>
	<style type="text/css">
    	h4
		{
			text-align: center;
			padding: 30px;
      background: linear-gradient(to right, white, white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 5px 2px 4px black;
      font-weight: bolder;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      	
		}
    h4:hover{
      background-color: rgba(1, 1, 1, 0.3);  
      }
    body{
      background-image: url("presidency.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }


	   </style>
</head>
  <body>
   <?php
		include('user_header.php'); 
	?>
   
 
    <div class="col s12">
      
  <center><li  style="background-color: blue; color: aliceblue;"class="tab col s3"><a href="view_personal_particulars.php">Personal Particulars</a></li></center>
      
   </div>


  
    <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger red pulse" href="#modal1"><i class="material-icons">dehaze</i></a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div style="background-color: #006dcc;color: red;text-align: left;font-style: italic;font-size: 25px;"><i class="material-icons">dehaze</i>Note</div>
      <li>Please Read All Field Names Carefully.</li>
      <li>Give Relevant Details to the Corresponding fields.</li>
      <li>Once You started filling form, There is no going back.</li>
      <li>If You Click on Back,refresh or any button the details will not be submitted</li>
      <li>If there is any kind of problem please contact us, we are Happy to help you(contact Admin)</li>
      </div>
    <div class="modal-footer">
      <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">DISAGREE</a>
      <a href="<?php echo $GLOBALS['path']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">AGREE</a>

    </div>
  </div>
          
    
	<h4>
	<?php
		//session_start();
		
				
		if(!isset($_SESSION['email']))
		{
			header("location:login.php");
	?>
				
	<?php
		}
		else
		{
		  echo welcome()."<br><br><br>";
      echo " A &nbsp; WARM &nbsp;WELCOME&nbsp; TO&nbsp; THE &nbsp;FACULTY&nbsp; APPRAISAL&nbsp; SYSTEM"."<br><br><br>"."Professor&nbsp;"."  ".$_SESSION['fname'];

     
		}
	?>

	</h4> 
	
	
	<div class="row">
  </div><div class="row">
  </div><div class="row">
  </div><div class="row">
  </div><div class="row">
  </div><div class="row">
  </div><div class="row">
  </div>
  
   <?php
		 include('footer.php'); 
	?>
	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
      <script>
        
         $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
          
      </script>

       </body>
</html>