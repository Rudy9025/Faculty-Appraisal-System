<?php
include 'connection.php' ;

$sql = "delete from student_mentorship";
$res = mysqli_query($conn,$sql);
if($res===true)
{
	 echo "<script type='text/javascript'>alert('All Records Have Been Deleted Successfully')</script>";
     echo "<script>location.href = 'admin_view_student_mentorship.php'</script>";
}
else
{
	echo "<script type='text/javascript'>Materialize.toast('Error Data Submission Failed Try Again', 5000, 'rounded')</script>";
    echo "<script>location.href = 'admin_view_student_mentorship.php'</script>";
}	
?>