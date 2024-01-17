<?php session_start(); ?>
<!DOCTYPE html>
  <html>
    <head>
    		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      		<link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      		<!--Let browser know website is optimized for mobile-->
      		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      		<link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      		<title>Index Of Form | Faculty Appraisal</title>
    </head>
    <body>
    	<?php include 'user_header.php'; ?>
    		<div class="row">
    			 <h3 class="left-align amber-text darken-4 center">List Of Records</h3>
    		</div>
    			 <table class="bordered responsive-table">
        				<thead>
          					<tr>
              					<th>Srno.</th>
              					<th>Table Name</th>
                        <th>ADD</th>
                        <th>VIEW</th>
                        
       	       			</tr>
        				</thead>

        				<tbody>
          					<tr>
            					<td>1.</td>
            					<td>Personal Details</td>
                      <?php 
                      include 'connection.php';
                      $fid = $_SESSION['fid'];
                      $sql = "select * from personal_details where fid='$fid'";
                      $res = mysqli_query($conn,$sql);
                      if($res->num_rows>0)
                      {
                          echo "<td><a class='btn' disabled>Add Record</a></td><td><a class='btn' href='view_personal_particulars.php'>View Record</a></td>";  
                      }
                      else
                      {
                          echo "<td><a class='btn' href='personal_particulars.php'>Add Record</a></td><td><a class='btn' href='view_personal_particulars.php' diabled>View Record</a></td>";  
                          
                      }
                      ?>
         					  </tr>
                    <tr>
                      <td>2.</td>
                      <td>Teaching Work</td>
                      <td><a class='btn' href="teaching_work.php">Add Record</a></td>
                      <td><a class='btn' href="view_teaching_work.php">View Record</a></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Guiding Projects</td>
                      <td><a class='btn' href="guiding_project.php">Add Record</a></td>
                      <td><a class='btn' href="view_guiding_project.php">View Record</a></td>
                    </tr>
                     <tr>
                      <td>4.</td>
                      <td>Student Mentorship</td>
                      <?php 
                        include 'connection.php' ;
                        $fid= $_SESSION['fid'];
                        $sql = "select * from student_mentorship where fid='$fid'";
                        $res = mysqli_query($conn,$sql);
                        if($res->num_rows>0)
                              {
                                      echo "<td><a class='btn' href='student_mentorship.php' disabled>Add Record</a></td><td><a class='btn' href='view_student_mentorship.php'>View Record</a></td>";
                              }
                              else
                              {
                                      echo "<td><a class='btn' href='student_mentorship.php'>Add Record</a></td><td><a class='btn' href='view_student_mentorship.php'>View Record</a></td>";
                              }
                        

                      ?>
                      
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Type Of Activities</td>
                      <td><a class='btn' href="activity.php">Add Record</a></td>
                      <td><a class='btn' href="view_activity.php">View Record</a></td>
                    

                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>List Of Any Other Task</td>
                      <td><a class='btn' href="other_task.php">Add Record</a></td>
                      <td><a class='btn' href="view_other_task.php">View Record</a></td>
                    

                    </tr>
                     <tr>
                      <td>7.</td>
                      <td>Assignments</td>
                      <td><a class='btn' href='assignments.php'>Add Record</a></td>
                      <td><a class='btn' href='view_assignments.php'>View Record</a></td>
                     </tr>   

                
                   

                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Use Of Library</td>
                      <?php  
                      include 'connection.php';
                      $fid = $_SESSION['fid'];
                      $sql = "select * from library_details where fid='$fid'";
                      $res = mysqli_query($conn,$sql);
                      if($res->num_rows>0)
                      {
                          echo "<td><a class='btn' disabled>Add Record</a></td><td><a class='btn' href='view_use_of_library.php'>View Record</a></td>";  
                      }
                      else
                      {
                          echo "<td><a class='btn' href='use_of_library.php'>Add Record</a></td><td><a class='btn' href='view_use_of_library.php'>View Record</a></td>";  
                          
                      }
                      ?>
                    

                    </tr>
                    

                    

          				</tbody>
      			</table>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
           <?php include 'footer.php'; ?>

    </body>
 </html>    		  