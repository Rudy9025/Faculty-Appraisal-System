<!--<?php session_start(); ?>-->
<?php 
$fid = $_SESSION['fid']; 
$un = $_SESSION['email']; 
$ps = $_SESSION['password'];
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
      <style type="text/css">
        a.brand-logo
        {
         font-size:33px;
        }
        .c:hover{
color: gold;
font-size:35px;
        }
      </style>
    </head>

    <body>

    <nav>
    <div class="nav-wrapper #ef5350 red lighten-1">
      <a href="#" class="brand-logo" style="font-family:titlefont">Faculty Appraisal System</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="user_home.php"><i class="material-icons">home</i></a></li>
        <li><a class="chip tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit Profile" style="background-color: orange"><div class="chip" style="background-color: orange">
        <span class="white-text name"><?php echo "$un"; ?></span>
        </div></a></li>
        <li><a class="c" href="index_of_forms.php">Index</a><li>
        <li><a class="c" href="viewform.php">Offline Forms</a><li>
        <li><a class="c" href="view_circulars.php">Circulars</a><li>
        <li><a class="c" href="feedback.php">Feedback Form</a><li>
        <li><a class="c" href="signout.php"><i class="material-icons">settings_power</i></a></li>
      </ul>
    </div>
  </nav>

  
    </body>
  </html>
  
    
