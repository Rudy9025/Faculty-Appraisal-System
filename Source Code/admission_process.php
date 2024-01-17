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
        <title>Admission Process| Faculty Appraisal</title>

    </head>
     <?php include('user_header.php'); ?>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
 
  
          <div class="row">
                <h3 class="left-align amber-text darken-4">13.Participation in academic and other activities at the University level / College level.</h3>
          </div>
          <div class="row"></div>
          <div class="row"></div>
                   
           <div class="row">
                
                <h5 class="left-align">ii).Admission Process:</h5>
          </div>
           <form class="col s7" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
           <table class="striped responsive-table">
                <thead>
                    <tr>
                        <!--<th>Srno.</th>-->
                        <th >Activity Name</th>
                        <th>Role</th>
                        
                 </tr>
                </thead>
                <tbody >
                    <td>
                           <input name="activity_name" type="text" id="activity_name" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z]+" required>
                           <label for="activity_name" data-error="wrong" data-success="right"></label>
                        </td>

                        <td>
                          <input name="role" type="text" id="role" class="validate" style="text-transform: capitalize;" data-length="30" pattern="[a-zA-Z]+" required>
                           <label for="role" data-error="wrong" data-success="right"></label>
                        </td>
                        </tbody>        
            <table>
               <div class="center">
                    
             
                <button class="btn" type="submit" name="submit1">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn" href=''>View</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Next</a>
                 <!-- Modal Structure -->
                <div id="modal1" class="modal modal-fixed-footer">
                      <div class="modal-content">
                            <h4>Confirmation Tab</h4>
                             <p>Are You Sure Want to get redirected to next page?</p>
                      </div>
                      <div class="modal-footer">
                            <a href="index_of_forms.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Index</a>
                            <a href="End_of_page.Php" class="modal-action modal-close waves-effect waves-green btn-flat ">Yes</a>
                            <a href="admission_process" class="modal-action modal-close waves-effect waves-green btn-flat ">No</a>

                      </div>
                </div>
          </div>
                
      
      
            </form>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <?php include('footer.php'); ?>
                  <!--Import jQuery before materialize.js-->
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
                  <script type="text/javascript">
                             $(document).ready(function() {
                             $('select').material_select();
                    });
            

                  </script> 
                   <script type="text/javascript">
                       $(document).ready(function(){
                         // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
                       $('.modal').modal();
                       $(".modal").width($(".modal").width('500px'));
                       $(".modal").height($(".modal").height('200px'));
                  });

                  </script>
</body>
</html>                   
