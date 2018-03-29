<?php
	session_start();

	mysql_connect('127.0.0.1','root','dowdowdow');
	mysql_select_db('webproj');
	$strSQL = "INSERT INTO orders (user,ordName,ordDate,total,tel,ordAddress)VALUES ('".$_GET['user']."','".$_POST["txtName"]."','".date("Y-m-d")."','".$_GET['total']."','".$_POST["txtTel"]."','".$_POST["txtAddress"]."')";
	mysql_query($strSQL) or die(mysql_error());

	$strOrderID = mysql_insert_id();
	for($i=0;$i<=(int)$_SESSION["intLine"];$i++){
	  if($_SESSION["strProductID"][$i] != ""){
			  $strSQL = "INSERT INTO orders_detail (user,ordId,pdId,quantity) VALUES ('".$_GET['user']."','".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."')";
			  mysql_query($strSQL) or die(mysql_error());
	  }
	}
	mysql_close();
	session_destroy();
	$user = $_GET['user'];
	header("location:payment.php?user=$user");

?>