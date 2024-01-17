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
        <title>View of Library| Faculty Appraisal</title>

    </head>
    <body>
     
          <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
      
           <div class="row">
                <h3 class="left-align amber-text darken-4">12.View of Library :</h3>

          </div>

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
                

              </tr>
              </thead>
              <tbody>
                  <tr>                  
                    <?php
                        include 'connection.php';
                        $fid = $_SESSION['fid'];
                        $sql = "select * from library_details where fid = '$fid'";
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
                                      <td>'Record Not Found'</td>
                                      <td>'Record Not Found'</td>
                                      
                                      </tr>";         
                                        

                          }           
 ?>                      

                    ?>
                                    
                  </tr>
                </tbody>
              </table>
               <div class="row"></div>
             <div class="row"></div>
               <div class="row"></div>
             <div class="row"></div>             
              <div class="center">
                     
                     <a class="btn" href='use_of_library.php' disabled>Add</a>&nbsp;&nbsp;&nbsp;&nbsp;
                     <a class="btn" href='End_of_page.php'>Next</a>&nbsp;&nbsp;&nbsp;&nbsp;
             </div>

             <div class="row"></div>
             <div class="row"></div>
            
           <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>