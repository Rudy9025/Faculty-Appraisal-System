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
        <title>Use of Library| Faculty Appraisal</title>
        <style type="text/css">
      h4
    {
      text-align: center;
      padding: 30px;
      color: blue;  
    }


     </style>
    </head>
    <body>
     
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
          <div class="row">
                <h3 class="left-align amber-text darken-4">Conclusion</h3>

          </div>

          <div class="row"></div>
          <div class="row"></div>
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
		  echo welcome()."<br><br>";
      echo "ThankYou For Giving Your Valuable Time And Visit Again Next Year"."<br><br>"."Professor"."  ".$_SESSION['fname'];

     
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