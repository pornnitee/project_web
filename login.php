<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Log in</title>
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
    
    <div id="page-wrapper">
    <div class="container-fluid">
    	<!-- Page Heading -->
        <div class="row" id="main" >
        <?	$alert = "";
			session_start();
			session_destroy();
			$user = $password = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  				$user = test_input($_POST["display_name"]);
    			$password = test_input($_POST["password"]);
				
				$conn = new mysqli('127.0.0.1','root','dowdowdow','webproj');
				$cmd = "Select * FROM displayname WHERE user = '".$user."'"; 
				$c = $conn->query($cmd);
				if ($c->num_rows == 0){
					$alert = "<div class='alert alert-danger' role='alert'><a class='alert-link'> ชื่อผู้ใช้ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง </a></div>";
				} else {
					$sql = "Select * FROM displayname WHERE user = '".$user."' AND password = '".$password."'";
					$s = $conn->query($sql);
					if ($s->num_rows == 0) { 
						$alert = "<div class='alert alert-danger' role='alert'><a class='alert-link'> รหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง </a></div>"; 					}else { 
						header("location:product.php?user=$user");
					}
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
        <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 well">
		<form name="loginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="1" required>
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password"tabindex="3" required>
				</div>
				<hr class="colorgraph">
				<div class="row">
                	<div class="col-xs-12 col-md-12" id="alert"><? echo $alert; ?></div>
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In" tabindex="4">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
		</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#page -->
<script type="text/javascript">
history.pushState(null, null, '');
window.addEventListener('popstate', function(event) {
	history.pushState(null, null, '');
});
</script>
</body>
</html>
