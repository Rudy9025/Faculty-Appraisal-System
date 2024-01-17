<?php
include 'connection.php' ;

$sql = "delete from other_task";
$res = mysqli_query($conn,$sql);
if($res===true)
{
	 echo "<script type='text/javascript'>Materialize.toast('All Records Have Been Deleted Successfully', 5000, 'rounded')</script>";
     echo "<script>location.href = 'admin_view_other_task.php'</script>";
}
else
{
	echo "<script type='text/javascript'>Materialize.toast('Error Data Submission Failed Try Again', 5000, 'rounded')</script>";
    echo "<script>location.href = 'admin_view_other_task.php'</script>";
}	
?>