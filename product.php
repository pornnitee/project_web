<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> Product </title>
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
<div id="wrapper">
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
        	<li class="active"><a href="product.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-tags"></i> &nbsp; Product</a></li>
            <li><a href="payment.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-credit-card"></i> &nbsp; Payment</a></li>
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
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a data-toggle="collapse" data-target="#menu1"><i class="fa fa-coffee"></i> Coffee & Tea <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu1" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu11"><i class="fa fa-angle-double-right"></i> Accessories</a></li>
                        <li><a href="#" data-target-id="submenu12"><i class="fa fa-angle-double-right"></i> Coffee Grinder</a></li>
                        <li><a href="#" data-target-id="submenu13"><i class="fa fa-angle-double-right"></i> Commercial Coffee Machines</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#menu2"><i class="fa fa-cutlery"></i> Cookware <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu2" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu21"><i class="fa fa-angle-double-right"></i> Casseroles</a></li>
                        <li><a href="#" data-target-id="submenu22"><i class="fa fa-angle-double-right"></i> Cast Iron Cookware</a></li>
                        <li><a href="#" data-target-id="submenu23"><i class="fa fa-angle-double-right"></i> Ceramic Titanium Cookware</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#menu3"><i class="fa fa-scissors"></i> Cutlery <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu3" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu31"><i class="fa fa-angle-double-right"></i> Knife</a></li>
                        <li><a href="#" data-target-id="submenu32"><i class="fa fa-angle-double-right"></i> Cutting Boards</a></li>
                        <li><a href="#" data-target-id="submenu33"><i class="fa fa-angle-double-right"></i> Scissors</a></li>
                        <li><a href="#" data-target-id="submenu34"><i class="fa fa-angle-double-right"></i> Knife Set</a></li>
                        <li><a href="#" data-target-id="submenu35"><i class="fa fa-angle-double-right"></i> Sharpeners</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#menu4"><i class="fa fa-tachometer"></i> Kitchen Electrics <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu4" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu41"><i class="fa fa-angle-double-right"></i> Blenders & Juicers</a></li>
                        <li><a href="#" data-target-id="submenu42"><i class="fa fa-angle-double-right"></i> Electric Kettles</a></li>
                    </ul>
                </li>
                <li>
                    <a  data-toggle="collapse" data-target="#menu5"><i class="fa fa-fire"></i> Outdoor Cooking <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu5" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu51"><i class="fa fa-angle-double-right"></i> Accessories</a></li>
                        <li><a href="#" data-target-id="submenu52"><i class="fa fa-angle-double-right"></i> Grills</a></li>
                    </ul>
                </li>
                <li>
                    <a  data-toggle="collapse" data-target="#menu6"><i class="fa fa-glass"></i> Wine <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="menu6" class="collapse admin-menu">
                        <li><a href="#" data-target-id="submenu61"><i class="fa fa-angle-double-right"></i> Accessories</a></li>
                        <li><a href="#" data-target-id="submenu62"><i class="fa fa-angle-double-right"></i> Wine Cabinets</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
            	<div class="col-sm-12 col-md-12 well admin-content" id="content">
                    <div class=" col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
                    <div class="panel panel-default">
                	<div class="panel-heading text-center"><h4> วิธีการสั่งซื้อสินค้า </h4></div>
                	<div class="panel-body">
                	<table border="0" align="center">
                	<tr>
        				<th style="width:33%"></th>
						<th style="width:34%"></th>
               	     	<th style="width:33%"></th>
           		    </tr>
    				<tr>
                		<td class="text-center"><img src="Image/step1_circle.png" /></td>
                    	<td class="text-center"><img src="Image/step2_circle.png" /></td>
                        <td class="text-center"><img src="Image/step3_circle.png" /></td>
    				</tr>
                	<tr>
                		<td class="text-center">เลือกสินค้าที่คุณต้องการ โดยคลิกปุ่ม <br> 
                        <span class="glyphicon glyphicon-plus"></span> Add to Cart</td>
                    	<td class="text-center">เมื่อเลือกสินค้าครบแล้ว ให้คลิกปุ่ม <br> 
                        <i class="fa fa-check"></i> Check Out ใน <i class="glyphicon glyphicon-shopping-cart"></i> My Cart</td>
                    	<td class="text-center">กรอกรายละเอียดให้ครบถ้วน จากนั้นคลิกปุ่ม <br> Submit </td>    				
                    </tr>
                    <tr>
                		<td class="text-center"><img src="Image/step4_circle.png" /></td>
                    	<td class="text-center"><img src="Image/step5_circle.png" /></td>
                        <td class="text-center"><img src="Image/step6_circle.png" /></td>
    				</tr>
                	<tr>
                		<td class="text-center">ชำระค่าสินค้าและบริการ</td>
                    	<td class="text-center">แจ้งการชำระเงินผ่านทางหน้าเว็บไซต์ <br> 
                        <i class="glyphicon glyphicon-credit-card"></i> Payment</td>
                    	<td class="text-center">เมื่อทางร้านตรวจสอบรายการชำระเงิน <br> เรียบร้อยแล้ว จะจัดส่งสินค้าให้คุณทันที </td>    				
                    </tr>
    				</table>
                	</div>
  					</div>
                    </div>
                    </div>             
                <? 	function product($tb, $pdCat) {
					$conn = new mysqli('127.0.0.1', 'root', 'dowdowdow','webproj');
					$cmd = "Select * FROM ".$tb." WHERE pdCat = '".$pdCat."'"; 
					$c = $conn->query($cmd);
					if ($c->num_rows > 0) {
					while ($data = $c->fetch_assoc()) { ?>
					<tr><form action="_addcart.php?txtProductID=<?php echo $data['pdId'];?>" method="post" target="iframe_target">
					<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                    <td data-th="Product">
                    	<div class="row">
                    		<div class="col-sm-4 hidden-xs">
                            	<img src="Image/<? echo $data['pdId'];?>.jpg" data-action="zoom" class="img-responsive"/>
                            </div>
                            <div class="col-sm-8">
                            	<h4 class="nomargin"><? echo $data['pdName'];?><br/><font><? echo $data['pdId']?></font></h4>
								<?	if ($data['pdL1'] != NULL) {?>
									<ol style="list-style-type:circle">
                                    	<li><? echo $data['pdL1'];?> </li>
                                <? } if ($data['pdL2'] != NULL) {?>
                                		<li><? echo $data['pdL2'];?> </li>
                                <? } else { print ("</ol>"); }
									if ($data['pdL3'] != NULL) {print ("<li>".$data['pdL3'])."</li></ol>";}
									 else { print ("</ol>"); }?>
							</div>
                        </div>
                    </td>
					<td class="text-center" data-th="Price"><? echo $data['pdPrice'];?></td>
                    <td class="text-center" data-th="Quantity">
                    	<input name="txtQty" type="number" class="form-control text-center" value="1"  size="2" min="1">
                    </td>
					<td class="actions" data-th="">
                    	<button type="submit" class="btn btn-info btn-sm">
                        	<span class="glyphicon glyphicon-plus"></span> Add to Cart 
                        </button>
					</td>
                    </form></tr>
					<? }} $conn->close(); }?>
                    
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu11">
                	<h4>Coffee & Tea >> Accessories</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                    	<? product(coffeetea,Accessories); ?>
					</tbody>
					</table>   	 
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu12">
            		<h4>Coffee & Tea >> Coffee Grinder</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(coffeetea,'Coffee Grinder'); ?>
					</tbody>
					</table>   	   
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu13">
            		<h4>Coffee & Tea >> Commercial Coffee Machines</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(coffeetea,'Commercial Coffee Machines'); ?>
					</tbody>
					</table>  
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu21">
            		<h4>Cookware >> Casseroles</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cookware,Casseroles); ?>
					</tbody>
					</table>    
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu22">
            		<h4>Cookware >> Cast Iron Cookware</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cookware,'Cast Iron Cookware'); ?>
					</tbody>
					</table>      
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu23">
            		<h4>Cookware >> Ceramic Titanium Cookware</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cookware,'Ceramic Titanium Cookware'); ?>
					</tbody>
					</table>      
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu31">
            		<h4>Cutlery >> Knife</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cutlery,Knife); ?>
					</tbody>
					</table>     
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu32">
            		<h4>Cutlery >> Cutting Boards</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cutlery,'Cutting Boards'); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu33">
            		<h4>Cutlery >> Scissors</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cutlery,'Scissors'); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu34">
            		<h4>Cutlery >> Knife Set</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cutlery,'Knife Set'); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu35">
            		<h4>Cutlery >> Sharpeners</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(cutlery,Sharpeners); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu41">
            		<h4>Kitchen Electrics >> Blenders & Juicers</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(electrics,'Blenders & Juicers'); ?>
					</tbody>
					</table>        
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu42">
            		<h4>Kitchen Electrics >> Electric Kettles</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(electrics,'Electric Kettles'); ?>
					</tbody>
                    </table>         
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu51">
            		<h4>Outdoor Cooking >> Accessories</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(outdoor,Accessories); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu52">
            		<h4>Outdoor Cooking >> Grills</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(outdoor,'Grills'); ?>
					</tbody>
					</table>     
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu61">
            		<h4>Wine >> Accessories</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(wine,Accessories); ?>
					</tbody>
					</table>       
        		</div>
                <div class="col-sm-12 col-md-12 well admin-content" id="submenu62">
            		<h4>Wine >> Wine Cabinets</h4>
           			<table id="cart" class="table table-hover table-condensed">
    				<thead>
					<tr>
						<th style="width:60%">Product</th>
						<th class="text-center" style="width:15%">Price</th>
                        <th class="text-center" style="width:10%">Quantity</th>
						<th style="width:15%"></th>
					</tr>
					</thead>
					<tbody>
                        <? product(wine,'Wine Cabinets'); ?>
					</tbody>
					</table>       
        		</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script type="text/javascript">
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
});
$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
}); 
</script>
</body>
</html>
