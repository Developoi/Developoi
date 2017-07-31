
<?php
	session_start();
	if (isset($_SESSION['UserName'])) {
		header('Location: index.php');
	}

	include 'admin/init.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $hachedPassword = sha1($password);
    $stmt = $con->prepare("SELECT UserName, Password FROM users Where UserName = ? AND Password = ?");
    $stmt->execute(array($userName, $hachedPassword,));
    $count = $stmt->rowCount();
		$loginErr = '';
		if ($count > 0) {
			$_SESSION['UserName'] = $userName;
			header('Location: index.php');
			exit();
		}

  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>developi Sign In</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" href="img/icon.png">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/styles-sign-in.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>
  <body>
		</section>
		<section class="main-contant">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6	">
						<div class="page-title">
							<b><h2>DEVELOPOI</h2></b>
							<p>Do you want to spend <br>
								the rest of your life selling sugested <br>
								water or do you want to change the world ?</p>
						</div>
						<div class="page-paragraph hidden-sm hidden-xs">
							<span>,,</span><p>This Photo Will Change <br>
								Every Week As The Most <br>
								Interisting Events </p> <br>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
							<div class="form-body">
								<h3>User Name / E-mail</h3>
								<div class="login-err" style="color:red;margin:auto;
								display:block;width:300px;">
									<?php if (isset($userName)) {
										if (strlen($userName) < 3) {
											echo "User Name Or Password is Not Correct";
										}
									}  ?>
								</div>

								<input type="text" name="username" value="" placeholder="FIRST NAME">
								<br>
								<h3>Password</h3>
								<input  placeholder="Password" type="password" name="password" value="">
								<br>
								<div class="forget-pass text-center">
									<p>Forget Password ?<a href="#">Rest It</a></p>
								</div>

							</div>

							<input type="submit" name="" value="Sign In" id="submit">

						</form>
						<div class="dont-have-account">
							<p class="text-center">Don't have account <span><a href="Sign Up.html">Sign Up</a></span></p>
						</div>
					</div>
				</div>
			</div>

			<div style="color:white;font-size:18px;">

			</div>
		</section>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>

  </body>
</html>
