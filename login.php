<?php 
    session_start();
    $_SESSION['msg'] = '';
    $mysqli = new mysqli('localhost', 'root', '', 'devise_db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //send data to database using variable
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";


    $result = mysqli_query($mysqli, $sql);
    $number = mysqli_num_rows($result);
    if ($number == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header('location: welcome.php');
    }
    else {
        $_SESSION['msg'] = 'Email or Password incorrect!';
    }
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
</head>
<body>
	   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-4">
    			
    			<form action="login.php" method="post" autocomplete="off" style="box-shadow: 0 4px 20px 0 rgba(0,0,0,0.1); padding: 30px; padding-top: 10px !important; border-radius: 8px;">
                    <h2>Sign In!</h2>
                    <div class="alert-error">
                        <?= $_SESSION['msg'] ?>
                  </div>
		    		<div class="form-group">
		    			<label>Username</label>
		    			<input type="text" name="username" autocomplete="New Password" placeholder="Username" required="true" class="form-control">
		    		</div>
		    		<div class="form-group">
		    			<label>Pasword</label>
		    			<input type="password" name="password" placeholder="Password" required="true" class="form-control">
		    		</div>
		    		<button type="submit" class="btn btn-primary">Login</button>
		    	</form>
    		</div>
    	</div>
    </div>

</body>
 <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>