<?php
ob_start();
session_start();

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			$_SESSION["strQty"][$i] = $_POST["txtQty".$i];
	  }
  }
  	$user = $_GET['user'];
	header("location: cart.php?user=$user");

?>
