<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> Search Registered Faculty | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'admin_header.php'; ?>
        
        <div class="row">
          </div>
        <div class="row">
        </div>
  
        <form class="col s7" method="POST">
  
    <div class="row">
      <div class="input-field col s4 s4 offset-s4 grid-example">
       <i class="material-icons prefix">account_circle</i>
            <input name="first_name" type="text" id="first_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
            <label for="first_name" data-error="wrong" data-success="right">First Name</label>
         <button class="btn" type="submit" name="search">Search</button>
      </div>
    </div>
    
    
    
    
    
    <div class="row">
    </div>
    <div class="row">
    </div>
  
    <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Registered Faculties</h3>
        </div>

          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>fid</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Contact(R)</th>
                        <th>Contact(M)</th>
                        <th>Registered Email Id</th>
                        <th>Password</th>
                        <th>Registered</th>
                        <th>Date and Time</th> 
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['search']))
                  {
                              include 'connection.php' ;
                              $fname = $_POST['first_name'];
                              $sql = "select * from register where firstname='$fname'";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res))
                                      {
                                            echo "<tr><td>'".$row[0]."'</td><td style='text-transform: capitalize;'>'".$row[1]."'</td><td style='text-transform: capitalize;'>'".$row[2]."'</td><td style='text-transform: capitalize;'>'".$row[3]."'</td><td style='text-transform: capitalize;'>'".$row[4]."'</td><td>'".$row[5]."'</td><td>'".$row[6]."'</td><td>'".$row[7]."'</td><td>'".$row[8]."'</td><td>'".$row[9]."'</td><td>'".$row[10]."'</td><td>'".$row[11]."'</td></tr>";
                          
                                      }
                              }
                               else
                                {
                                            echo "<tr>
                                                <td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td><td>'Record Not Found'</td></tr>";

                                  }
                                

                    } 
                    ?>  
                </tbody>
              </table>
    
  </form>
    
   <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
   
    
   <div class="center">
                   <a class="btn" href='admin_view_registered_faculties.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp; 
  
 
  
  
  
  
     <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
          
    </body>
  </html>  
                