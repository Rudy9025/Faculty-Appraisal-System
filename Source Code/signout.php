<?php
session_start();
session_destroy();
 echo "<script type='text/javascript'>alert('Thankyou For Visiting')</script>";
			 echo "<script>location.href = 'index.php'</script>";
?>
