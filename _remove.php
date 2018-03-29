<?php
	ob_start();
	session_start();

	$Line = $_GET["Line"];
	$_SESSION["strProductID"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";

	$user = $_GET['user'];
	header("location:cart.php?user=$user");
?>
