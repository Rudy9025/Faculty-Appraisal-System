<!DOCTYPE html>
  <html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
          <title> Search Student Mentorship | Faculty Appraisal</title>
    </head>
    <body>
      <?php include 'admin_header.php'; ?>
        
        <div class="row">
          </div>
        <div class="row">
        </div>
  
        <form class="col s7" method="POST">
        <div class="row">
      <div class="input-field col s12 m4 l3"></div>
      <div class="input-field col s12 m4 l3">
       <i class="material-icons prefix">account_circle</i>
            <input name="reason" type="text" id="reason" class="validate" data-length="30" pattern="[a-zA-Z ]+" style="text-transform: capitalize;" required>
            <label for="reason" data-error="wrong" data-success="right">Reason For Incompleted Booklets</label>
     </div>
     </div>
     <div class='row'>
         <div class="input-field col s12 m4 l5"></div>
       <button class="btn" type="submit" name="search">Search</button>
     </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
  
    <div class="row">
           <h3 class="left-align amber-text darken-4 center">List Of Registered Faculties with Details Of Student Mentees</h3>
        </div>
          <table class="bordered stripped responsive-table">
                <thead>
                    <tr>  
                        <th>fid</th>
                   
                        <th>Total No Of Mentees</th>
                        <th>No Of Book Completed</th>
                        <th>No Of Book Incompleted</th>
                        <th>No Of Phone Call Made to Parents</th>
                        <th>Reason for Incompleted Book</th>

                     </tr>
                     </thead>
                     <tbody>
                        <?php
                  if(isset($_POST['search']))
                  {
                              include 'connection.php' ;
                           
                              $reason = $_POST['reason'];
                              $sql = "select b.fid,b.total_no_of_mentees,b.no_of_completed_booklet,b.no_of_incomplete_booklet,b.no_of_phone_call_made_to_parents,b.reason_of_incomplete_booklet from student_mentorship b where b.reason_of_incomplete_booklet='$reason'";
                              $res = mysqli_query($conn,$sql);
                              if($res->num_rows>0)
                              {
                                     while($row = mysqli_fetch_array($res))
                                      {
                                            echo "<tr>
                                            <td>'".$row['fid']."'</td>
                                            <td>'".$row['total_no_of_mentees']."'</td>
                                            <td>'".$row['no_of_completed_booklet']."'</td>
                                            <td>'".$row['no_of_incomplete_booklet']."'</td>
                                            <td>'".$row['no_of_phone_call_made_to_parents']."'</td>
                                            <td>'".$row['reason_of_incomplete_booklet']."'</td>
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
                   <a class="btn" href='admin_view_student_mentorship.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
  
  
  
  
     <?php include 'footer.php'; ?>
            <!-- Import jQuery before materialize.js-->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script type="text/javascript" src="js/materialize.min.js"></script>


                        
                       