<?php
session_start();
    if (isset($_SESSION["account_number"])==0){
		echo "<script>alert('尚未登入!')</script>";
		echo "<script> window.location.href='index.php'</script>";
	 }
?>