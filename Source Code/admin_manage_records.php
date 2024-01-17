<!DOCTYPE html>
  <html>
    <head>
    		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      		<link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      		<!--Let browser know website is optimized for mobile-->
      		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      		<link rel="icon" href="fevicon.ico" type="image/gif" sizes="16x16">
      		<title>Manage Records | Faculty Appraisal</title>
    </head>
    <body>
    	<?php include 'admin_header.php'; ?>
    		<div class="row">
    			 <h3 class="left-align amber-text darken-4 center">List Of Records</h3>
    		</div>
    			 <table class="bordered responsive-table">
        				<thead>
          					<tr>
              					<th>Srno.</th>
              					<th>Table Name</th>
       	       			</tr>
        				</thead>

        				<tbody>
          				<tr>
            					<td>1.</td>
            					<td><a href="admin_view_registered_faculties.php">List of Registered Faculty</a></td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td><a href="admin_view_personal_details.php">Personal Details</a></td>
                  </tr>
                  <tr>
                          <td>3.</td>
                          <td><a href="admin_view_teaching_work.php">Teaching Work</a></td>
                  </tr>
                  <tr>
                          <td>4.</td>
                          <td><a href="admin_view_guiding_project.php">Guiding Project Details</a></td>
                  </tr> 
                  <tr>
                          <td>5.</td>
                          <td><a href="admin_view_student_mentorship.php">Student Mentees</a></td>
                  </tr> 
                   <tr>
                          <td>6.</td>
                          <td><a href="admin_view_activity.php">Type Of Activities</a></td>
                  </tr> 
                   <tr>
                          <td>7.</td>
                          <td><a href="admin_view_other_task.php">List Of Other Task Taken</a></td>
                  </tr> 
                    <tr>
                          <td>8.</td>
                          <td><a href="">Assignments Details</a></td>
                  </tr> 
                    <tr>
                          <td>9.</td>
                          <td><a href="admin_view_library_details">Use Of Library</a></td>
                  </tr> 
 
          				</tbody>
      			</table>
           <?php include 'footer.php'; ?>

    </body>
 </html>    		