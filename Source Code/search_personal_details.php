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
      <div class="input-field col s12 m4 l2"></div>
      <div class="input-field col s12 m4 l3">
       <i class="material-icons prefix">account_circle</i>
            <input name="first_name" type="text" id="first_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;" required>
            <label for="first_name" data-error="wrong" data-success="right">First Name</label>
     </div>
         <div class="input-field col s12 m4 l3">
              <i class="material-icons prefix">date_range</i>
              <input name="date_of_joining" type="text" class="datepicker" id="date_of_joining" required>
              <label for="date_of_joining">Date Of Joining</label>
          </div>
    </div>        

             
         <center><button class="btn" type="submit" name="search">Search</button></center>
     
    
    
    
    
    
    <div class="row">
    </div>
    <div class="row">
    </div>
  
    <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Registered Faculties with Contact Details</h3>
        </div>

          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>fid</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Address Area</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Contact(R)</th>
                        <th>Contact(M)</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['search']))
                  {
                              include 'connection.php' ;
                              $fname = $_POST['first_name'];
                              $date_of_joining = $_POST['date_of_joining'];
                              $sql = "select a.fid,a.firstname,a.middlename,a.lastname,a.contact_r,a.contact_m,a.email,b.address1,b.address_area,b.address_city,b.address_state,b.pincode from register a,personal_details b where a.firstname='$fname' and b.doj = '$date_of_joining'";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res))
                                      {
                                            echo "<tr>
                                            <td>'".$row['fid']."'</td>
                                            <td>'".$row['firstname']."'</td>
                                            <td>'".$row['middlename']."'</td>
                                            <td>'".$row['lastname']."'</td>
                                            <td>'".$row['address1']."'</td>
                                            <td>'".$row['address_area']."'</td>
                                            <td>'".$row['address_city']."'</td>
                                            <td>'".$row['address_state']."'</td>
                                            <td>'".$row['pincode']."'</td>
                                            <td>'".$row['contact_r']."'</td>
                                            <td>'".$row['contact_m']."'</td>
                                            <td>'".$row['email']."'</td>
                                            </tr>'";
                          
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
                                            <td>'Record Not Found'</td>
                                            <td>'Record Not Found'</td>
                                            <td>'Record Not Found'</td>
                                            <td>'Record Not Found'</td>
                                            <td>'Record Not Found'</td>
                                            <td>'Record Not Found'</td>
                                            </tr>";

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
                   <a class="btn" href='admin_view_personal_details.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
  
  
  
     <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                     <script>
                             $('.datepicker').pickadate({
                              selectMonths: true, // Creates a dropdown to control month
                              selectYears: 50, // Creates a dropdown of 15 years to control year,
                              today: 'Today',
                              clear: 'Clear',
                              close: 'Ok',
                              format: 'yyyy-mm-dd',
                              min: '1967-01-01',
                              max: '2017-12-01',
                              closeOnSelect: false // Close upon selecting a date,
                          });

                    </script>
    
          
    </body>
  </html>  
                