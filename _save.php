<?	session_start();

	mysql_connect('127.0.0.1','root','dowdowdow');
	mysql_select_db('webproj');
	
	$strSQL = "UPDATE displayname SET fname='".$_POST['fname']."',lname='".$_POST['lname']."',email='".$_POST['email']."' WHERE user='".$_GET['user']."'";
	mysql_query($strSQL) or die(mysql_error());
	
	mysql_close();
	$user = $_GET['user'];
	header("location:account.php?user=$user");
?>