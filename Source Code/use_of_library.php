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

    </head>
    <body>
     
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
          <div class="row">
                <h3 class="left-align amber-text darken-4">12.Use of Library :</h3>

          </div>

          <div class="row"></div>
          <div class="row"></div>
    
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           
                        
                          <p>A)No. of books read (from the Institute library)</p>
                          <input type="file" name="fupload1" id="fupload1" />
                          
                           <p>No. of books read (from other sources)</p>
                          <input type="file" name="fupload2" id="fupload2" />

                          <p>C.)No. Of Journals referred (from other sources)</p>
                          <input type="file" name="fupload3" id="fupload3" />
                          </p>
                          
                          <p>D.)Books Recommended for Purchase</p>
                          <input type="file" name="fupload4" id="fupload4" />
                          </p>
                          
                           
                        
          <div class="center">
                    
                <button class="btn" type="submit" name="submit1">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                            <a href="preparation_of_syllabi.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="use_of_library.php" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>
                      </div>
                </div>
          </div>
                
              
      
            </form>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <?php include('footer.php'); ?>
                  <!--Import jQuery before materialize.js-->
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript">
                             $(document).ready(function() {
                             $('select').material_select();
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

            <?php 
 
 class form 
 {
  function insert_record()
  {
    if(isset($_POST['submit1']))
    {
      include 'connection.php';
      $fid = $_SESSION['fid']; 
      $a=$_FILES['fupload1']['name'];
      $b=$_FILES['fupload1']['tmp_name'];
      $c="C:/wamp64/www/test_7/files/".$a;
     
      $d=$_FILES['fupload2']['name'];
      $e=$_FILES['fupload2']['tmp_name'];
      $f="C:/wamp64/www/test_7/files/".$d;
     
      $i=$_FILES['fupload3']['name'];
      $j=$_FILES['fupload3']['tmp_name'];
      $k="C:/wamp64/www/test_7/files/".$i;
     
      $l=$_FILES['fupload4']['name'];
      $m=$_FILES['fupload4']['tmp_name'];
      $n="C:/wamp64/www/test_7/files/".$j;
    

            
  date_default_timezone_set('Asia/Kolkata');
                      
    $currtime = date("Y-m-d H:i:s");

    if(move_uploaded_file($b,$c) or move_uploaded_file($e,$f) or move_uploaded_file($j,$k) or move_uploaded_file($m,$n))
    {
              $sql2 = "insert into library_details (fid,books_from_institute,books_form_other_resources,  journal_list,books_recommended,currtime) values('$fid','$a','$d','$i','$l','$currtime')";
              $res2 = mysqli_query($conn,$sql2);
              if($res2 === TRUE)  
              {
                   
                              echo "<script type='text/javascript'>alert('Record Inserted Successfully with file Upload')</script>";  
                              echo "<script>location.href = 'use_of_library.php'</script>";
                          
              }
              else
              {
                          
                             echo "<script type='text/javascript'>alert('Something Went Wrong Data Submission Error ! Try Again')</script>"; 
                             echo "<script>location.href = 'use_of_library.php'</script>";
              }  
      }       
       else
              {
                          
                             echo "<script type='text/javascript'>alert('File Is Not Moved ! Try Again')</script>"; 
                             echo "<script>location.href = 'use_of_library.php'</script>";
              }  
      
  
    }
  }
 }  
    
$obj= new form;
$obj->insert_record();

 ?>         
</body>
</html>                   