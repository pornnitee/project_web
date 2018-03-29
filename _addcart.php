<script> 
var r = confirm('เพิ่มลงในตะกร้า'); 
if (r == true) {
<?php
ob_start();
session_start();

if(!isset($_SESSION["intLine"]))
{
	if(isset($_GET["txtProductID"]))
	{
		 $_SESSION["intLine"] = 0;
		 $_SESSION["strProductID"][0] = $_GET["txtProductID"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];
		 
	}
}
else
{
	$key = array_search($_GET["txtProductID"], $_SESSION["strProductID"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + $_POST["txtQty"];
	}
	else
	{
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strProductID"][$intNewLine] = $_GET["txtProductID"];
		 $_SESSION["strQty"][$intNewLine] = $_POST["txtQty"];
	}
}
?>
} </script>