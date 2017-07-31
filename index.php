<?php
include 'admin/init.php';
include 'admin/functions.php';

session_start();

if (isset($_SESSION['UserName'])) {

} else {
	header("Location: SignIn.php");
	exit();
}
	if (isset($_SESSION['UserName'])) {
		$myName = $_SESSION['UserName'];
	}
	$myId = 'developoi';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo titlePrint(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" href="img/icon.png">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

--> <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700&amp;subset=arabic" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/homepagestyle.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

</head>
  <body style="height:4000px;">
		<div class="profile-add-menu">
				<div class="profile-add-menu-triangle text-center">
				</div>
				<div class="profile-add-menu-body">
					ss
				</div>
		</div>
		<div class="profile-me-menu">
				<div class="profile-add-menu-triangle text-center">
				</div>
				<div class="profile-add-menu-body">
					ss
				</div>
		</div>
		<div class="overlay">
		</div>
			<div id="home">
					<nav>
						<div class="navigation">
							<div class="container">
								<div class="website-name">
									<b>D</b>
								</div>
								<div class="nav-list">
									<ul>
										<li><a href="#">HOME</a></li>
										<li><a href="#">TRIND</a></li>
										<li><a href="logout.php"><?php echo $myName; ?></a></li>
										<li><a href="#">SITTING</a></li>
									</ul>
								</div>
								<div class="nav-search">
									<form action="index.html" method="post">
										<i class="ion-ios-search"></i>
										<input type="search" name="" value="">
									</form>
								</div>
								<div class="profile">
									<div class="profile-me">
										<?php echo '<img src="img/002-user.png" alt="">'; ?>
										<div class="profile-me-point">
											<i class="ion-android-notifications ion-android-notifications-add"></i>

										</div>
									</div>
									<div class="profile-add">
										<p><b>+</b></p>
										<div class="profile-add-point">
										</div>
									</div>
								</div>
							</div>
						</div>
					</nav>
					<div class="header-contant">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class='website-title'>
										<h4>HERO</h4><br>
										<p class="selector">THIS BANNER WILL BE CONTAIN <br>
											THE PROJECT OF THE HERO OF THE WEEK</p>
									</div>
								</div>
									<div class='col-lg-6 col-md-6 col-sm-6'>
										<div class="website-header-btn">
											<a href="#contant" class="smoothScroll"><button type="button" name="button">SHARE YOUR'S</button></a>
										</div>
									</div>
							</div>
						</div>
					</div>
			</div>
			<div id="contant" class="contant">
				<div class="to-write-text">
					Write Your <span>First post</span>and change the world
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
							<div class="left-row">
								<div class="left-row-followpeople";
								 class="left-row-profile">
									<div class="follow-people">
										<div class="follow-people-title">
											<p>People To Folow</p>
										</div>
										<div class="follow-people-pices">
											<div class="follow-people-pice">
												<div class="follow-people-pic" id='user2'>
													<?php echo '<img src="img/002-user.png" alt="">'; ?>
												</div>

												<div class="follow-people-info">
													<span class="follow-people-info-name">Peter John</span> <br>
													<span class="follow-people-info-id"><a href="#"><span>@</span><?php echo $myId; ?></a></span>
													<span class="follow-btn"><a>Follow</a></span>
												</div>
											</div>
											<div class="follow-people-pice">
												<div class="follow-people-pic" id='user3'>
													<?php echo '<img src="img/002-user.png" alt="">'; ?>
												</div>
												<div class="follow-people-info">

													<span class="follow-people-info-name">Johnasan</span> <br>
													<span class="follow-people-info-id"><a href="#"><span>@</span><?php echo $myId; ?></a></span>
													<span class="follow-btn"><a>Follow</a></span>
												</div>
											</div>
											<div class="follow-people-pice">
												<div class="follow-people-pic" id='user2'>
													<?php echo '<img src="img/002-user.png" alt="">'; ?>
												</div>

												<div class="follow-people-info">

													<span class="follow-people-info-name">Peter John</span> <br>
													<span class="follow-people-info-id"><a href="#"><span>@</span><?php echo $myId; ?></a></span>
													<span class="follow-btn"><a href="#">Follow</a></span>
												</div>
											</div>
											<div class="more-people-to-follow">
												<a href="#">More People To Follow</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-lg-offset-0 col-md-offset-0">
							<div class="posts-row">
								<div class="share-post">
									<div class="share-post-body">
										<form  action="index.html" method="post">
											<textarea name="name" placeholder="Type and change the world"></textarea>
										</form>
									</div>
									<div class="share-post-bottom-menu">
										<div class="share-post-add-photo">
											<a href="#"><i class="ion-images"></i></a>
										</div>
										<div class="share-post-add-post">
											<a href="#"><i class="ion-ios-compose"></i></a>
										</div>
										<div class="share-post-add-emoji">
											<a href="#"><i class="ion-android-happy"></i></a>
										</div>
										<div class="share-post-add-location">
											<a href="#"><i class="ion-location"></i></a>
										</div>
									</div>

								</div>
								</div>
								<div class="posts">
									<div class="post-pice">
										<div class="post-top">
											<div class="posts-top-info">
												<div class="user-post-pic">
													<?php echo '<img src="img/11536048_856333351121530_3375258656580495016_n.jpg" alt="">'; ?>
												</div>
												<div class="user-post-info">
													<div class="user-post-info-name">
														<?php echo  $myName; ?> <span id="user-post-info-arow" class="user-post-info-arow"><a href="#" class="fa fa-sort-desc"></a></span>
														<span><a href="#">@<span><?php echo $myId; ?></span></a></span>
													</div>
												</div>
											</div>
											<div class="post-puplish-date">
												<span class="day">18 <b>Am</b></span>
												<span class="month">3 <b>June</b></span>
												<span class="post-puplish-date-arrow"><i class="fa fa-caret-down"></i></span>
											</div>
										</div>
										<div class="posts-body">
												<div class="body-content">
													<div class="posts-body-paragraph ar">
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
														انطلق صوتٌ مسجّل عبر مكبِّر صوت المنصوب فوق الباب.
													</div>
													<div class="posts-hachtag">
														<a href="#">#Steve_Jobs</a>
													</div>
												</div>
										</div>
										<div class="post-bottom">
											<div class="post-bottom">
												<div class="posts-options">
													<div class="love-form">
														<a class="love" ><i class="ion-heart"></i></a>
														<span>1k</span>
													</div>
													<div class="star-form">
														<a class="star"><i class="ion-star"></i></a>
														<span>300</span>
													</div>
													<div class="comment-form">
														<a class="comment" ><i class="ion-paper-airplane"></i></a>
														<span>3</span>
													</div>

													<a class="share" ><i class="ion-android-share"></i></a>
												</div>
											</div>
										</div>
										<div class="comment-menu">
											<form class="" action="index.html" method="post">
												<textarea type="text" name="" value="" placeholder="Your Comment"></textarea>
											</form>
											<span><a href="#">Comments</a></span>
										</div>
									</div>
									<div class="post-pice">
										<div class="post-top">
											<div class="posts-top-info">
												<div class="user-post-pic">
													<?php echo '<img src="img/11536048_856333351121530_3375258656580495016_n.jpg" alt="">'; ?>
												</div>
												<div class="user-post-info">
													<div class="user-post-info-name">
														<?php echo  $myName; ?> <span id="user-post-info-arow" class="user-post-info-arow"><a href="#" class="fa fa-sort-desc"></a></span>
														<span><a href="#">@<span><?php echo $myId; ?></span></a></span>
													</div>
												</div>
											</div>
											<div class="post-puplish-date">
												<span class="day">18 <b>Am</b></span>
												<span class="month">3 <b>June</b></span>
												<span class="post-puplish-date-arrow"><i class="fa fa-caret-down"></i></span>
											</div>
										</div>
										<div class="posts-body">
												<div class="body-content">
													<div class="posts-body-paragraph">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
													</div>
													<i class="ion-heart"></i>
													<div class="posts-hachtag">
														<a href="#">#Steve_Jobs</a>
													</div>
												</div>
										</div>
										<div class="post-bottom">
											<div class="post-bottom">
												<div class="posts-options">
													<div class="love-form">
														<a class="love" ><i class="ion-heart"></i></a>
														<span>1k</span>
													</div>
													<div class="star-form">
														<a class="star"><i class="ion-star"></i></a>
														<span>300</span>
													</div>
													<div class="comment-form">
														<a class="comment" ><i class="ion-paper-airplane"></i></a>
														<span>3</span>
													</div>

													<a class="share" ><i class="ion-android-share"></i></a>
												</div>
											</div>
										</div>
										<div class="comment-menu">
											<form class="" action="index.html" method="post">
												<textarea type="text" name="" value="" placeholder="Your Comment"></textarea>
											</form>
											<span><a href="#">Comments</a></span>
										</div>
									</div>
									<div class="post-pice">
										<div class="post-top">
											<div class="posts-top-info">
												<div class="user-post-pic" id="user3">
												</div>
												<div class="user-post-info">
													<div class="user-post-info-name">
														John Peter <span id="user-post-info-arow" class="user-post-info-arow"><a href="#" class="fa fa-sort-desc"></a></span>
														<span><a href="#">@<span>John185</span></a></span>
													</div>
												</div>
											</div>
										</div>

										<div class="posts-body">
												<div class="body-content">
													<div class="posts-body-paragraph">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
														lorem
														<img src="img/hero.jpg" alt="">
													</div>
												</div>
										</div>
										<div class="post-bottom">
											<div class="post-bottom">
												<div class="posts-options">
													<a class="love" ><i class="ion-heart"></i></a>
													<a class="star" ><i class="ion-star"></i></a>
													<a class="comment" ><i class="ion-paper-airplane"></i></a>
													<a class="share" ><i class="ion-android-share"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="post-pice">
										<div class="post-top">
											<div class="posts-top-info">
												<div class="user-post-pic">
													<?php echo '<img src="img/11536048_856333351121530_3375258656580495016_n.jpg" alt="">'; ?>
												</div>
												<div class="user-post-info">
													<div class="user-post-info-name">
														John Peter <span id="user-post-info-arow" class="user-post-info-arow"><a href="#" class="fa fa-sort-desc"></a></span>
														<span><a href="#">John185</a></span>
													</div>
												</div>
											</div>
										</div>
										<div class="posts-body">

												<div class="body-content">
													<div class="posts-body-paragraph">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
													</div>
												</div>
										</div>
										<div class="post-bottom">
											<div class="post-bottom">
												<div class="posts-options">
													<a class="love" ><i class="ion-heart"></i></a>
													<a class="star" ><i class="ion-star"></i></a>
													<a class="comment" ><i class="ion-paper-airplane"></i></a>
													<a class="share" ><i class="ion-android-share"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="post-pice">
										<div class="post-top">
											<div class="posts-top-info">
												<div class="user-post-pic">
												</div>
												<div class="user-post-info">
													<div class="user-post-info-name">
														<?php echo  $myName; ?> <span id="user-post-info-arow" class="user-post-info-arow"><a href="#" class="fa fa-sort-desc"></a></span>
														<span><a href="#">@<span><?php echo $myId; ?></span></a></span>
													</div>
												</div>
											</div>
											<div class="post-puplish-date">
												<span class="day">18 <b>Am</b></span>
												<span class="month">3 <b>June</b></span>
												<span class="post-puplish-date-arrow"><i class="fa fa-caret-down"></i></span>
											</div>
										</div>
										<div class="posts-body">
												<div class="body-content">
													<div class="posts-body-paragraph">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
													</div>
													<div class="posts-hachtag">
														<a href="#">#George_Safwat</a>
													</div>
												</div>
										</div>
										<div class="post-bottom">
											<div class="post-bottom">
												<div class="posts-options">
													<div class="love-form">
														<a class="love" ><i class="ion-heart"></i></a>
														<span>1k</span>
													</div>
													<div class="star-form">
														<a class="star"><i class="ion-star"></i></a>
														<span>300</span>
													</div>
													<div class="comment-form">
														<a class="comment" ><i class="ion-paper-airplane"></i></a>
														<span>3</span>
													</div>

													<a class="share" ><i class="ion-android-share"></i></a>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay-2">
			</div>
			<div class="overlay-3">
			</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/index.js"></script>

  </body>
</html>
