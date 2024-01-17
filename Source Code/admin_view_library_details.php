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
        <title>Admin View of Library| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('admin_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
      
           <div class="row">
                <h3 class="left-align amber-text darken-4">View of Library Details:</h3>

          </div>
          <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
          <div class="row"></div>
          <div class="row"></div>
          <table>
              <thead>
              <tr>
                <th>Srno.</th>
                <th>Details of No. of books read (from the Institute library)</th>
                <th>Operation</th>
                
                <th>Details of No. of books read (from other sources)</th>
                <th>Operation</th>
                <th>Details of No. of Journal referred</th>
                <th>Operation</th>
                <th>Details No. of Books To Purchase</th>
                <th>Operation</th>
                <th>Date And Time</th>
                <th>Delete</th>
                

              </tr>
              </thead>
              <tbody>
                  <tr>                  
                    <?php
                        include 'connection.php';
                
                        $sql = "select * from library_details";
                        $res = mysqli_query($conn,$sql);
                        if($res->num_rows>0)
                        {
                             $srno = 1;
                             while ($row = mysqli_fetch_array($res))
                              {
                                
                                         echo "
                                        <td>'".$srno."'</td>    
                                        <td>'".$row[2]."'</td>
                                        <td><a class='btn' width='100%' height='700px' href='./files/".$row[2]."' type='application/pdf'>Open</a></td>
                                       
                                        
                                        <td>'".$row[3]."'</td>
                                          <td><a class='btn' width='100%' height='700px' href='./files/".$row[3]."' type='application/pdf'>Open</a></td>

                                       
                               
                                        <td>'".$row[4]."'</td>  
                                         <td><a class='btn' width='100%' height='700px' href='./files/".$row[4]."' type='application/pdf'>Open</a></td>
                                        <td>'".$row[5]."'</td>  
                                        
                                       
                                        <td><a class='btn' width='100%' height='700px' href='./files/".$row[5]."' type='application/pdf'>Open</a></td>
                                         
                                       
                                         <td>'".$row[6]."'</td>  
                                           <td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'>
                                           <i class='material-icons prefix'>delete</i></button></td>
                                             
                                        
                                         ";
                             
                             }
                             $srno = $srno + 1;
                             
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
                                      <td>'Record Not Found'</td>
                                      <td>'Record Not Found'</td>
                                      <td>'Record Not Found'</td>
                                      <td>'Record Not Found'</td>
                                      <td>'Record Not Found'</td>
                                      
                                      </tr>";         
                                        

                          }           
 ?>                      

                    
                                    
                  </tr>
                </tbody>
              </table>

               <div class="row"></div>
             <div class="row"></div>
               <div class="row"></div>
             <div class="row"></div>             
              <div class="center">
                     
                     <a class="btn" href='admin_home.php'>Next</a>&nbsp;&nbsp;&nbsp;&nbsp;
             </div>

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
                                echo $did;
                                $sql = "delete from library_details where lid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===True)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_view_library_details.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                     	echo "<script>location.href = 'admin_view_library_details.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>
   </body>
  </html>                      