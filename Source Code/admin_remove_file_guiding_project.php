 <?php
                    class form
                    {
                        function delete_record()
                        {
                            if(isset($_POST['change_file']))
                            {
                                include 'connection.php';
                                $did = $_POST['change_file'];
                                $sql = "update guide_project set filename='None' where gid='$did'";
                                $res = mysqli_query($conn,$sql);
                                if($res===True)
                                {
                                       echo "<script type='text/javascript'>alert('File Deleted Successfully')</script>";
                                       echo "<script>location.href = 'admin_view_guiding_project.php'</script>";
                                }
                                else
                                {
                                       echo "<script type='text/javascript'>alert('Something Went Wrong Contact Admin!')</script>";
                                      echo "<script>location.href = 'admin_view_guiding_project.php'</script>";

                                }
                            }
                        }
                    }
                     $obj = new form;
                     $obj->delete_record();
?>
   </body>
  </html>     