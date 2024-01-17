<?php session_start(); ?>
<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> View Assignments | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'user_header.php'; ?>
        <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Assignments</h3>
        </div>
         <table class="bordered stripped responsive-table">
                <thead>
                          <tr>
                            
                            <th>Srno.</th>
                           
                            <th>Semester</th>
                            
                            <th>Accept Assignments</th>
                            <th>Details</th>
                            <th>FileName</th>
                            <th>Operation</th>
                            <th>Date And Time</th>
                          </tr>
                 </thead>
                 <tbody>
                        <?php include 'connection.php' ;
                        $fid= $_SESSION['fid'];
                        $sql = "select * from assignments where fid='$fid'";
                        $res = mysqli_query($conn,$sql);
                        if($res->num_rows>0)
                        { 
                              $srno = 1;
                              while($row = mysqli_fetch_array($res))
                              {
                                 $GLOBALS['fn'] = $row['4'];
                                 if($GLOBALS['fn'] == 'None')
                                  {         
                                     echo "<tr>
                                      
                                        <td>'".$srno."'</td>
                                        <td>'".$row[2]."'</td>
                                        <td>'".$row[3]."'</td>
                                        <td>'".$row[4]."'</td>
                                        <td>'".$row[5]."'</td>
                                         <td><a class='btn' width='100%' height='700px' href='./files/".$row[5]."' type='application/pdf' disabled>Open</a></td>
                                        <td>'".$row[5]."'</td>
                                      </tr>";
                                  }
                                  else
                                  {
                                        echo "<tr>
                                        
                                        <td>'".$srno."'</td>
                                        <td>'".$row[2]."'</td>
                                        <td>'".$row[3]."'</td>
                                        <td>'".$row[4]."'</td>
                                        <td>'".$row[5]."'</td>
                                         <td><a class='btn' width='100%' height='700px' href='./files/".$row[5]."' type='application/pdf'>Open</a></td>
                                        <td>'".$row[6]."'</td>
                                      </tr>";
                                  }
                                  $srno = $srno + 1;
 
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
             <div class="row"></div>             
              <div class="center">
                     
                     <a class="btn" href='assignments.php'>Add</a>&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn" href='use_of_library.php'>Next</a>&nbsp;&nbsp;&nbsp;&nbsp;
             </div>

             <div class="row"></div>
             <div class="row"></div>
            
           <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
           
</body>
</html>