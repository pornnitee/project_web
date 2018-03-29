<?	session_start();

	mysql_connect('127.0.0.1','root','dowdowdow');
	mysql_select_db('webproj');
	
	$image = addslashes(file_get_contents($_FILES['transfer']['tmp_name'])); //SQL Injection defence!
	
	$sql = "UPDATE orders SET transfer = '{$image}' WHERE ordId='".$_GET['ordId']."'";
	mysql_query($sql);
	
	$strSQL = "UPDATE orders SET bank='".$_POST['rBank']."',tdate='".$_POST['date']."',ttime='".$_POST['time']."',amount='".$_POST['amount']."' WHERE ordId='".$_GET['ordId']."'";
	mysql_query($strSQL) or die(mysql_error());
	
	mysql_close();
	$user = $_GET['user'];
	header("location:payment.php?user=$user");
?>