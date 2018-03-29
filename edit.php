<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title> Edit Profile </title>
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
        	<li><a href="cart.php?user=<? echo $user;?>" data-placement="bottom" data-toggle="tooltip"><i class="glyphicon glyphicon-shopping-cart"></i> &nbsp; My Cart &nbsp; </a></li>  
            <li class="dropdown active">
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
               	<div class="panel-heading text-center"><h4> ข้อมูลส่วนตัว </h4></div>
               	<div class="panel-body">
                <?	$conn = new mysqli('127.0.0.1', 'root', 'dowdowdow','webproj');
					$cmd = "Select * FROM displayname WHERE user = '".$user."'"; 
					$c = $conn->query($cmd);
					if ($c->num_rows > 0) {
					$data = $c->fetch_assoc();?>
                <form method="post" action="_save.php?user=<? echo $user;?>" >
                <table style="margin-left:50px" border="0">
                <tr>
                	<th width="20%"></th><th width="30%"></th>
                    <th width="20%"></th>
                    <th width="15%"></th>
                    <th width="15%">
                    	<button type="submit" style="width:100px" name="save" class="btn btn-success">
                        	<i class='fa fa-check'></i> บันทึก 
                        </button>
                    </th>
                </tr>
                <tr><td><strong> ชื่อผู้ใช้ : </strong></td>
                <td>
                <input type="text" name="user" class="form-control input-lg" tabindex="1" value="<? echo $data['user']?>" disabled>
                </td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong> ชื่อ : </strong></td>
                <td>  
                <input type="text" name="fname" class="form-control input-lg" tabindex="2" value="<? echo $data['fname']?>" required>
                </td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong> นามสกุล : </strong></td>
                <td> 
                <input type="text" name="lname" class="form-control input-lg" tabindex="3" value="<? echo $data['lname']?>" required> 
                </td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td><strong> อีเมล: </strong></td>
                <td>  
                <input type="email" name="email" class="form-control input-lg" tabindex="4" value="<? echo $data['email']?>" required>
				</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                </table>
                </form>
				<? } $conn->close();?>
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
