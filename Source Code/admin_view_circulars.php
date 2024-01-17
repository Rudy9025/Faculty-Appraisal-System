<?php
include 'connection.php';
$sql = "select * from circulars";
$res = mysqli_query($conn,$sql);
if($res->num_rows>0)
{
    while ($row = mysqli_fetch_array($res))
     {
            $cid = $row[0];
            $filename = $row[1];
            $document_name = $row[2];
            $currtime = $row[3];
    }
}
else
    {
        echo "<script type='text/javascript'>alert('Any Circulars Are Not Found')</script>";
        echo "<script>location.href = 'create_circular.php'</script>";
    }
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
        <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
        <title>View Circulars| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('admin_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
           <div class="row">
           <h3 class="left-align amber-text darken-4">Upload File</h3>
           <h1 class="center-align amber-text darken-4">View Circulars</h1>
        </div>

          <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>Srno.</th>
                        <th>FileName</th>
                        <th>Document Name</th>
                        <th>Operation</th>
                        <th>Date And Time Upload</th>
                        <th>Delete</th>
                     
                     </tr>
                     <tbody>
                        <?php
                              include 'connection.php';
                              $sql = "select * from circulars";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                                  {
                                        $srno = 1;
                                        while ($row = mysqli_fetch_array($res))
                                        {
                                               echo"<tr><td>$srno</td>
                                                    <td>'".$row[1]."'</td>
                                                    <td>'".$row[2]."'</td>

                                                     <td><a class='btn' width='100%' height='700px' href='./files/".$row[2]."' type='application/pdf' >Open</a></td>
                                                    
                                                    <td>'".$row[3]."'</td>
                                                      <td><button name='submit' type='submit' id='".$row[0]."' value='".$row[0]."'><i class='material-icons prefix'>delete</i></button></td>
                                   
                                                    </tr>";
 
                                        $srno = $srno + 1;
                                        }

                                  }
                              else
                                  {
                                        echo "<script type='text/javascript'>alert('Any Circulars Are Not Found')</script>";
                                          echo "<script>location.href = 'admin_create_circular.php'</script>";
                                  }
                          ?>
                        
                    </tbody>    
                                          
           </table>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             <div class="row"></div>
             
               <center><a class="btn" type="button" href="admin_create_circulars.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;</center>
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
                                $sql = "delete from circulars where cid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===TRUE)
                                {
                                       echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_view_circulars.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                      echo "<script>location.href = 'admin_view_circulars.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new Record;
                     $obj->delete_record();
?>      
            
   
   </body>
   </html>                  