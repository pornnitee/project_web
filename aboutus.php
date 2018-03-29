<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> About Us </title>
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
            <li class="active"><a href="aboutus.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-earphone"></i> &nbsp; About Us</a></li>
        </ul>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
        	<li><a href="cart.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-shopping-cart"></i> &nbsp; My Cart &nbsp; </a></li>  
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
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
               	<div class=" col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <div class="panel panel-default">
               	<div class="panel-heading text-center"><h4> เกี่ยวกับเรา </h4></div>
               	<div class="panel-body">
                <h4> ช่องทางการติดต่อ </h4>
                <table border="0">
                <tr><td colspan="2"><strong>บริษัท เคทูพี คิทเชน จำกัด สาขา xxxxxx (K2P Kitchen)</strong></td></tr>
                <tr><td><strong>Address: </strong></td><td>xx/x ถนน xxx xxxx xxx กทม. 10330</td></tr>
                <tr><td><strong>Opening Time: </strong></td><td>Everyday 9 am. - 7 pm.</td></tr>
                <tr><td><strong>Tel: </strong></td><td>0-2222-xxxxx-2</td></tr>
                <tr><td><strong>Fax: </strong></td><td>0-2222-xxxxx</td></tr>
                <tr><td><strong>Email: </strong></td><td>ask@k2p.com </td></tr>
                </table>
                <hr /><h4> ชำระเงินผ่านธนาคาร </h4>
                <table id="cart" class="table table-hover table-condensed bank">
 				<thead>
				<tr>
					<th style="width:35%">ธนาคาร</th>
					<th style="width:15%; text-align:center">หมายเลขบัญชี</th>
					<th style="width:15%; text-align:center">ชื่อบัญชี</th>
					<th style="width:15%; text-align:center">สาขา</th>
					<th style="width:20%; text-align:center">ประเภทบัญชี</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td data-th="ธนาคาร">
						<div class="col-sm-10 col-sm-offset-1 hidden-xs"><img src="Image/ksk.jpg" class="img-responsive"/></div>
					</td>
					<td data-th="หมายเลขัญชี" style="text-align:center"> xxx-x-xxxxx-x </td>
					<td data-th="ชื่อบัญชี" style="text-align:center"> xxxxxx xxxxxxx </td>
					<td data-th="สาขา" style="text-align:center"> xxxxxx </td>
					<td data-th="ประเภทบัญชี" style="text-align:center"> xxxxxx </td>
				</tr>
                <tr>
					<td data-th="ธนาคาร">
						<div class="col-sm-10 col-sm-offset-1 hidden-xs"><img src="Image/scb.jpg" class="img-responsive"/></div>
					</td>
					<td data-th="หมายเลขัญชี" style="text-align:center"> xxx-x-xxxxx-x </td>
					<td data-th="ชื่อบัญชี" style="text-align:center"> xxxxxx xxxxxxx </td>
					<td data-th="สาขา" style="text-align:center"> xxxxxx </td>
					<td data-th="ประเภทบัญชี" style="text-align:center"> xxxxxx </td>
				</tr>
				</tbody>
				</table>	
               	</div>
  				</div>
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
