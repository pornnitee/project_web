<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> My Cart </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="myMenu.css" />
    <link rel="stylesheet" type="text/css" href="myList.css" />
    
	<link rel="stylesheet" type="text/css" href="css/zoom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<!--<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script-->>
    <script src="js/zoom.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="page">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img src="Image/k2p-1.png" height="50px"/></a>
        </div>
        <? $user = $_GET['user']; ?>
        <ul class="nav navbar-left top-nav">
        	<li><a href="product.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-tags"></i> &nbsp; Product</a></li>
            <li><a href="payment.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-credit-card"></i> &nbsp; Payment</a></li>
            <li><a href="aboutus.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-earphone"></i> &nbsp; About Us</a></li>
        </ul>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
        	<li class="active"><a href="cart.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-shopping-cart"></i> &nbsp; My Cart &nbsp; </a></li>  
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <? echo $user; ?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="account.php?user=<? echo $user;?>"><i class="glyphicon glyphicon-edit"></i> My Account</a></li>
                    <li><a href="login.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        
        <!-- /.navbar-collapse -->
    </nav>
    <?	session_start(); 
		mysql_connect('127.0.0.1','root','dowdowdow');
		mysql_select_db('webproj');?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
            	<? 	$Total = 0;
  					$SumTotal = 0;
					function product($cart) {
					for($i=0;$i<=(int)$_SESSION['intLine'];$i++){
					if($_SESSION['strProductID'][$i] != ""){
						$strSQL = "SELECT * FROM ".$cart." WHERE pdId = '".$_SESSION['strProductID'][$i]."'";
						$objQuery = mysql_query($strSQL)  or die(mysql_error());
						$numrow = mysql_num_rows($objQuery);
						if ($numrow != 0) {		
						$objResult = mysql_fetch_array($objQuery);
						$Total = $_SESSION['strQty'][$i] * $objResult['pdPrice'];
						$SumTotal = $SumTotal + $Total;?>
                    <tr>
					<td data-th="Product">
                    	<div class="row">
                    		<div class="col-sm-5 hidden-xs">
                            	<img src="Image/<? echo $_SESSION['strProductID'][$i];?>.jpg" data-action="zoom" class="img-responsive"/>
                            </div>
                            <div class="col-sm-7">
                            	<h4 class="nomargin"><? echo $objResult['pdName'];?>
                                <input type="hidden" name="txtProductID<? echo $i;?>" value="<? echo $_SESSION['strProductID'][$i];?>">
                                <br/><font><? echo $_SESSION['strProductID'][$i];?></font></h4>
							</div>
                        </div>
                    </td>
                    <td class="text-center" data-th="Price"><? echo $objResult['pdPrice'];?></td>
                    <td data-th="Quantity">
                    	<input name="txtQty<? echo $i;?>" type="number" class="form-control text-center" value="<? echo $_SESSION['strQty'][$i];?>"  size="2" min="1">
                    </td>
                    <td data-th="Subtotal">
                    	<input name="subtotal" id="st" type="text" class="form-control text-center" value="<? echo number_format($Total,2);?>" disabled>
                    </td>
                    <td class="actions" data-th="">
                    	<span class="fa fa-trash" style="color:#F00"></span><a href="_remove.php?Line=<? echo $i;?>&user=<? echo $_GET['user'];?>"> Remove </a>
                    </td>
                    </tr>
					<?  }}} return $SumTotal;}?>
                    
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <!--SHIPPING METHOD-->
                <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>Current Cart</h4></div>
                <div class="panel-body">
                <form action="_update.php?user=<? echo $_GET['user'];?>" method="post">
                <table class="table borderless">
    			<thead>
                <tr>
        			<th style="width:45%">Product</th>
					<th class="text-center" style="width:15%">Price</th>
                    <th class="text-center" style="width:10%">Quantity</th>
                    <th class="text-center" style="width:15%">Subtotal</th>
					<th style="width:15%"><button type="submit"class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> &nbsp; Update </button></th>
                </tr>
    			</thead>
    			<tbody>
    			<tr>
    				<? $SumTotal += product(coffeetea); ?>
                    <? $SumTotal += product(cookware); ?>
                    <? $SumTotal += product(cutlery); ?>
                    <? $SumTotal += product(electrics); ?>
                    <? $SumTotal += product(outdoor); ?>
                    <? $SumTotal += product(wine); ?>
    			</tr>
    			</tbody>
    			</table>
                </form>
                </div>
                </div>
                    <!--SHIPPING METHOD END-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--REVIEW ORDER-->
                <div class="panel panel-default">
                <div class="panel-heading text-center">
                	<h4>Review Order</h4>
                </div>
                <div class="panel-body">
                	<div class="col-md-12">
                    	<strong>Subtotal (# item)</strong>
                    	<div class="pull-right"><span>$</span><span id="sub"><?php echo number_format($SumTotal,2);?></span></div>
                    </div>
                    <div class="col-md-12">
                    	<strong>Tax (7%)</strong> 
                   	 <div class="pull-right"><span>$</span><span id="tax"><?php echo number_format($SumTotal*0.07,2);?></span></div>
                    </div>
                    <div class="col-md-12">
                    	<small>Shipping</small>
                    	<div class="pull-right"><span style="color:#F00"> Free! </span></div>
                    	<hr>
                    </div>
                    <div class="col-md-12">
                    	<strong>Order Total</strong>
                        <div class="pull-right"><span>$</span><span id="total"><?php echo number_format($SumTotal*1.07,2);?></span></div>
                        	<hr>
                    	</div>
                        <div class="col-xs-12 col-md-12"><a href="_check.php?user=<? echo $_GET['user'];?>" class="btn btn-info btn-block btn-lg"><i class="fa fa-check"></i> &nbsp; Check Out </a></div>
                    </div>
                      <?php mysql_close();?>  
                </div>
                    <!--REVIEW ORDER END-->
                </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#page -->
<script type="text/javascript">

</script>
</body>
</html>
