<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> Search Activity | Faculty Appraisal</title>
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
            <input name="activity_name" type="text" id="activity_name" class="validate" data-length="30" pattern="[a-zA-Z ]+" style="text-transform: capitalize;">
            <label for="activity_name" data-error="wrong" data-success="right">Name Of The Activity</label>
     </div>
        
 
      <div class="input-field col s12 m4 l3">
       <i class="material-icons prefix">account_circle</i>
            <input  type="text" name="role" id="role" class="validate" data-length="30" pattern="[a-zA-Z ]+" style="text-transform: capitalize;">
            <label for="role" data-error="wrong" data-success="right">Role</label>
     </div>
      </div>
      </div>
          

             
         <center><button class="btn" type="submit" name="search">Search</button></center>
     
    
    
    
    
    
    <div class="row">
    </div>
    <div class="row">
    </div>
  
    <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Activities Undertaken</h3>
        </div>

          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>atid</th>
                        <th>fid</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Name Of Activity</th>
                        <th>Role</th>
                        <th>Type Of Activity</th>
                        <th>Date And Time</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['search']))
                  {
                              include 'connection.php' ;
                              $activity_name = $_POST['activity_name'];
                              $role = $_POST['role'];
                              $sql1 = "select fid from activity where activity_name = '$activity_name' or role = '$role'";
                              $res1 = mysqli_query($conn,$sql1);
                              if($res1->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res1))
                                      {
                                          $GLOBALS['tempid'] = $row['fid'];
                                      }
                              }        
                              //echo $tempid;    
                              $sql = "select a.atid,a.fid,a.activity_name,a.role,a.type_activity,a.currtime,b.fid,b.firstname,b.middlename,b.lastname from activity a,register b where a.activity_name='$activity_name' or a.role = '$role' and b.fid = $tempid";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res))
                                      {
                                            echo "
                                            <tr>
                                            <td>'".$row['atid']."'</td>
                                            <td>'".$row['fid']."'</td>
                                             <td>'".$row['firstname']."'</td>
                                            <td>'".$row['middlename']."'</td>
                                            <td>'".$row['lastname']."'</td>
                                           
                                            <td>'".$row['activity_name']."'</td>
                                            <td>'".$row['role']."'</td>
                                            <td>'".$row['type_activity']."'</td>
                                      
                                            <td>'".$row['currtime']."'</td>
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
                                            <td>'Record Not Found'</td>
                                            </tr>";

                                  }
                                

                    } 
                    ?>  
                </tbody>

              </table>
                  <div class="row"></div>
                  <div class="row"></div>
   
                  <center><a class="btn" type="button" href="create_circulars.php">Back</a></center>
  </form>
    
   <div class="row">
    </div>
    <div class="row">
    </div>
   
    
    
  
 
  
  
  
  
     <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                   
    
          
    </body>
  </html>  
                