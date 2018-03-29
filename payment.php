<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> Payment </title>
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
            <li class="active"><a href="payment.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-credit-card"></i> &nbsp; Payment</a></li>
            <li><a href="aboutus.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-earphone"></i> &nbsp; About Us</a></li>
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
            	<div class="col-md-8 col-sm-6 col-md-offset-2 col-sm-offset-3 col-xs-12">
                    <!--SHIPPING METHOD-->
                <div class="panel panel-default">
                <div class="panel-heading text-center"><h4> แจ้งชำระเงิน </h4></div>
                <div class="panel-body">
                <h4>รายการที่ต้องชำระเงิน</h4><br/>
                <?	mysql_connect('127.0.0.1', 'root', 'dowdowdow','webproj');
					$cmd = "Select * FROM orders WHERE user = '".$user."' AND confirm = '0'"; 
					$c = mysql_db_query('webproj', $cmd);
					$numrow = mysql_num_rows($c);
					if ($numrow == 0) {
						echo "<center> -ไม่มีรายการค้างชำระ- </center>";
					} else {
						while ($data = mysql_fetch_array($c)){?>
							<table class="table borderless">
    						<thead>
               				<tr>
        						<th style="width:30%"> เลขที่ใบสั่งซื้อ : <br /> จำนวนเงิน : <br /> รายการสินค้า (สถานะ :) </th>
                                <th style="width:20%"> 
									<? echo $data['ordId'];?> <br /> <? echo $data['total'] ?> บาท <br /> 
                                    <?	if($data['transfer'] === NULL) {echo "รอการชำระเงิน";}else{echo "รอการตรวจสอบ";}?>
                                </th>
                                <th style="width:50%"></th>
                 <? $ordId = $data['ordId'];}}  mysql_close(); ?>
                			</tr>
    						</thead>
    						<tbody>
                <?	mysql_connect('127.0.0.1', 'root', 'dowdowdow','webproj');
					$sql = "Select * FROM orders_detail WHERE user = '".$user."' AND ordId = '".$ordId."'"; 
					$q = mysql_db_query('webproj', $sql);
					$nr = mysql_num_rows($q);
					if ($nr != 0) {
						while ($dt = mysql_fetch_array($q)){?>
                        	<tr>
								<td> รหัสสินค้า : <? echo $dt['pdId']?></td>
                                <td> จำนวน : <? echo $dt['quantity'];?> ชิ้น</td>
                                <td></td>
						<? }} mysql_close(); ?>
    						</tr>
                            </tbody>
    						</table>		
                <h4>รายละเอียดการโอนเงิน</h4><br/>
                <strong>บัญชีที่โอนเงิน :</strong>
                <table class="table borderless">
    			<thead>
                <tr>
        			<th style="width:5%"> ธนาคาร </th>
					<th style="width:5%"> </th>
                    <th style="width:20%"> </th>
                    <th class="text-center" style="width:25%"> หมายเลขบัญชี </th>
                    <th class="text-center" style="width:25%"> ชื่อบัญชี </th>
                    <th class="text-center" style="width:20%"> สาขา </th>
                </tr>
    			</thead>
    			<tbody>
                <form name="transfer" method="post" action="_transfer.php?user=<? echo $_GET['user'];?>&ordId=<? echo $ordId;?>"  enctype="multipart/form-data">
    			<tr>
                	<td class="text-center"><input type="radio" name="rBank" value="ksk" required /></td>
                    <td class="text-center"><img src="Image/KBANK.jpg" height="50" /></td>
                    <td> ธ.กสิกรไทย </td> 
                    <td class="text-center"> xxx-x-xxxxx-x </td>
                    <td class="text-center"> xxxxxx xxxxxxx </td>
                    <td class="text-center"> xxxxxx </td>
    			</tr>
                <tr>
                	<td class="text-center"><input type="radio" name="rBank" value="scb" required /></td>
                    <td class="text-center"><img src="Image/SCB2.jpg" height="50" /></td>
                    <td> ธ.ไทยพาณิชย์ </td> 
                    <td class="text-center"> xxx-x-xxxxx-x </td>
                    <td class="text-center"> xxxxxx xxxxxxx </td>
                    <td class="text-center"> xxxxxx </td>
    			</tr>
    			</tbody>
    			</table>
                <table style="margin-left:50px" border="0">
                <tr><td width="200px"><strong>&nbsp;วันที่ชำระเงิน :</strong></td><td><input type="date" name="date" required /></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong>&nbsp;เวลา (โดยประมาณ) :</strong></td><td><input type="time" name="time" required /> &nbsp; น.</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong>&nbsp;จำนวนเงิน :</strong></td><td><input type="text" name="amount" required /> &nbsp; บาท</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong>&nbsp;หลักฐานการโอน :</strong></td><td><input type="file" name="transfer" accept="image/*" required /></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Submit"/></td></tr>
                </table>
                </form>
                </div>
                </div>
                    <!--SHIPPING METHOD END-->
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
