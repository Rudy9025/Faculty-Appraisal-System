<?php
include 'connection.php' ;

$sql = "delete from personal_details";
$res = mysqli_query($conn,$sql);
if($res===true)
{
	 echo "<script type='text/javascript'>alert('All Records Have Been Deleted Successfully')</script>";
     echo "<script>location.href = 'admin_view_personal_details.php'</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Error Data Submission Failed Try Again)</script>";
    echo "<script>location.href = 'admin_view_personal_details.php'</script>";
}	
?>