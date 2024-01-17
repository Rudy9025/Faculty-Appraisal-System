<?php session_start(); ?>
<?php
    include('connection.php');
    $aid = $_SESSION['aid']; 
    $email = $_SESSION['email'];
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
  <title>Admin_Home | Faculty Apprasial</title>
  <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
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
   <?php
    include('admin_header.php'); 
  ?>
<div class="row">
  </div><div class="row">
  </div><div class="row">
  </div><div class="row">
  </div>
  
  <h4>
  <?php
    //session_start();
    
        
    if(!isset($_SESSION['email']))
    {
      header("location:login.php");
    }
    else
    {
      echo welcome()."<br><br>";
      echo "WELCOME TO THE FACULTY APPRAISAL"."<br><br>".$_SESSION['email'];

     
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
  </div><div class="row">
  </div><div class="row">
  </div>

  
  
   <?php
     include('footer.php'); 
  ?>
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
    </body>
</html>