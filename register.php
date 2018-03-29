<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="myMenu.css" />
    <link rel="stylesheet" type="text/css" href="myMnM.css" />
    <style type="text/css">
        /* Credit to bootsnipp.com for the css for the color graph */

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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
	<!-- /.navbar-collapse -->
    </nav>
    <? 	$alert = "";
		$fname = $lname = $user = $email = $password = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			$fname = test_input($_POST["first_name"]);
    		$lname = test_input($_POST["last_name"]);
    		$user = test_input($_POST["display_name"]);
    		$email = test_input($_POST["email"]);
    		$password = test_input($_POST["password"]);
			
			$conn = new mysqli('127.0.0.1','root','dowdowdow','webproj');
			$cmd = "Select * FROM displayname WHERE user = '".$user."' OR email = '".$email."'"; 
			$c = $conn->query($cmd);
			if ($c->num_rows != 0){
				$alert = "<div class='alert alert-warning' role='alert'><a class='alert-link'> ไม่สามารถใช้ชื่อผู้ใช้หรืออีเมลนี้ได้ กรุณาลองใหม่อีกครั้ง </a></div>";
			} else {
				$sql = "INSERT INTO displayname (user, fname, lname, password, email) VALUES ('".$user."', '".$fname."', '".$lname."', '".$password."', '".$email."')";
				$s = $conn->query($sql);
				if (!$s) { 
					$alert = "<div class='alert alert-danger' role='alert'><a class='alert-link'> การลงทะเบียนผิดพลาด กรุณาลองใหม่อีกครั้ง </a></div>"; 				}else { 
					$alert = "<div class='alert alert-success' role='alert'><a class='alert-link'> ลงทะเบียนสำเร็จเรียบร้อย </a></div>"; }
			}
			$conn->close();
		}
		function test_input($data) {
 			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
	?>
    <div id="page-wrapper">
    <div class="container-fluid">
    	<!-- Page Heading -->
        <div class="row" id="main" >
    	<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 well">
        <h2>Please Sign Up</h2>
		<form name="regisForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                	<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" required>
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
		</div>
        <div class="form-group">
			<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
		</div>
        <div class="col-xs-12 col-md-12" id="alert"><? echo $alert; ?></div>	
		<hr class="colorgraph">
		<div class="row" style="margin-bottom:10px">
			<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			<div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
		</div>
		</form>  
		</div>
		</div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#page -->
<script type="text/javascript">

</script>
</body>
</html>