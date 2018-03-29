<?	
	session_start();
	
	$user = $_GET['user'];
	mysql_connect('127.0.0.1', 'root', 'dowdowdow','webproj');
	$cmd = "Select * FROM orders WHERE user = '".$user."' AND confirm = '0'"; 
	$q = mysql_db_query('webproj', $cmd);
	$numrow = mysql_num_rows($q);
	if ($numrow == 0) {
		if ((int)$_SESSION["intLine"] >= 1){
			
			header("location:checkout.php?user=$user");
		}else{
			
			header("location:cart.php?user=$user");
		}
	} else {
		echo "<script> alert('คุณมีรายการที่ยังไม่ชำระเงิน'); </script>";
		echo "<script>window.location='payment.php?user=$user';</script>";
	}
?>
