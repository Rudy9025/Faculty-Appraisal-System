<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> Manage FeedBack | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'admin_header.php'; ?>
        <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of FeedBack</h3>
        </div>
          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <table class="bordered stripped responsive-table">
                <thead>
                     <thead>
                    <tr>
                       
                        <th>fid</th>
                        <th>Email</th>
                        <th>Faculty Name</th>
                        <th>Comment</th>
                        <th>Date And Time</th>
                        <th>Delete</th>
                       

                   </tr>
                </thead>
                <tbody>
                  <?php include 'connection.php' ;
                  $sql = "select * from feedback";
                  $res = mysqli_query($conn,$sql);
                  if($res->num_rows>0)
                  {
                      while($row = mysqli_fetch_array($res))
                      {
                          
                           echo "<tr>
                               
                                <td>'".$row[0]."'</td>
                                <td>'".$row[1]."'</td>
                                <td>'".$row[2]."'</td>
                                <td>'".$row[3]."'</td>
                                <td>'".$row[4]."'</td>
                                
                                
                                <td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'>
                                <i class='material-icons prefix'>delete</i></button></td>
                                  </tr>";
                      }
                          
                      
                  }
                  else
                  {
                      echo "<tr>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                <td>'Record Not Found'</td>
                                
                                
                            </tr>";

                  }
                  ?>    
                </tbody>
            </table>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row center">
                   <a class="btn" href="empty_feedback.php">Empty Table</a>
                  </tr>
            
             </div>
            <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             
           </form>
           <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                   

 <?php
                    class Record
                    {
                        function delete_record()
                        {
                            if(isset($_POST['submit']))
                            {
                                include 'connection.php';
                                $did = $_POST['submit'];
                                $sql = "delete from feedback where fid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===True)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_manage_feedback.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                      echo "<script>location.href = 'admin_manage_feedback.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>
   </body>
  </html>     