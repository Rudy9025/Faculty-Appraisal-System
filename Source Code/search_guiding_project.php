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
            <input name="first_name" type="text" id="first_name" class="validate" data-length="15" pattern="[a-zA-Z]+" style="text-transform: capitalize;">
            <label for="first_name" data-error="wrong" data-success="right">First Name</label>
     </div>
        
      <div class="input-field col s12 m4 l2">
      <select name="semester">
                            <option value="" disabled>Choose your option</option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="6">10</option>
                            </select>

       <label for="semester">Semester</label>                      
     </div>
      </div>
          

             
         <center><button class="btn" type="submit" name="search">Search</button></center>
     
    
    
    
    
    
    <div class="row">
    </div>
    <div class="row">
    </div>
  
    <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Project Guided</h3>
        </div>

          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>
                        <th>fid</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th >Semester</th>
                        <th>Total No Of Project Guided</th>
                        <th>Title of Best Project Guided</th>
                        <th>Filename</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_POST['search']))
                  {
                              include 'connection.php' ;
                              $fname = $_POST['first_name'];
                              $semester = $_POST['semester'];
                              $sql = "select a.fid,a.firstname,a.middlename,a.lastname,b.semester,b.total_project,b.project_title,b.filename from register a,guide_project b where a.firstname='$fname' or b.semester = '$semester' or a.firstname='$fname' and b.semester = '$semester'";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res))
                                      {
                                            echo "
                                            <tr>
                                            <td>'".$row['fid']."'</td>
                                            <td>'".$row['firstname']."'</td>
                                            <td>'".$row['middlename']."'</td>
                                            <td>'".$row['lastname']."'</td>
                                            <td>'".$row['semester']."'</td>
                                            <td>'".$row['total_project']."'</td>
                                            <td>'".$row['project_title']."'</td>
                                            <td>'".$row['filename']."'</td>
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
                   <a class="btn" href='admin_view_guiding_project.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
  
 
  
  
  
  
     <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>
                      <script type="text/javascript">
                                $(document).ready(function() 
                                {
                                    $('select').material_select();
                                });
           
                    </script>
    
          
    </body>
  </html>  
                