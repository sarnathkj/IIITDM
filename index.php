<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>IIITDM Kancheepuram</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Indian Institute of Information Technology, Design and Manufacturing">
	<meta name="author" content="Sarnath Jegadeesan">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/icon.png">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-default.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/dark-blue.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

<div class="wrapper">
	<!--=== Header ===-->
	<?php
        include("header.php");
    ?>
	<!--=== End Header ===-->

	<!--=== Slider ===-->
	<div class="slider-inner">
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2><i>Campus Tour</i><br/><i>IIITDM</i> <br /></h2>
				<div class="da-img">
					<iframe src="https://www.youtube.com/v/ujtUyW30P60" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
			</div>
			<div class="da-slide">
				<h2><i>Brighten Your Future</i><br/><i>@ IIITDM</i></h2>
				<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/lpb_0001.jpg" alt="LPB0001"></div>
			</div>
			<div class="da-slide">
				<h2><i>And So,</i> <br /> <i>The Adventure</i><br /> <i>Begins!</i></h2>
				<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/lpb_0002.jpg" alt="LPB0001"></div>
			</div>
			<div class="da-slide">
				<h2><i>Test</i> <br/><i>Your Skills</i></h2>
				<div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/lpb_0003.jpg" alt="LPB0003" /></div>
			</div>
			<div class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</div>
		</div>
	</div><!--/slider-->
	<!--=== End Slider ===-->

	<!--=== Purchase Block ===-->
	<div class="purchase">
		<div class="container">
			<div class="row">
				<div class="col-md-9 animated fadeInLeft">
					<span>Indian Institute of Information Technology, Design and Manufacturing</span>
					<p>An Institute of National Importance fully funded by Government of India.</p>
				</div>
				<div class="col-md-3 btn-buy animated fadeInRight">
					<a href="aboutIIITDM.php" class="btn-u btn-u-lg"><i class="fa fa-cloud-download"></i> Read More</a>
				</div>
			</div>
		</div>
	</div><!--/row-->
	<!-- End Purchase Block -->
	
	<!--=== Service Blcoks ===-->
    <div class="container content-sm">
        <!-- Service Blcoks -->
        <div class="row service-box-v1 margin-bottom-30">
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon icon-badge"></i>
                    <h2 class="heading-sm">Anouncements</h2>
                    <p>Bulletin Board for all College Announcements</p>
                    <ul class="list-unstyled">
                        <?php
                            $path = $_SERVER['DOCUMENT_ROOT'];
                            $path .= 'databaseConnection.php';
                            include($path);

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM announcements WHERE `show`=1 ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                if(strcmp($row['link'],'#')) {
                                    echo '<a href='.$row['link'].' target=_new>';
                                }
                                echo $row['headline'].' ';
                                if($row['new']==1) {
                                    echo '<img src="/assets/img/animated_new.gif" />';
                                }
                                if(strcmp($row['link'],'#')) {
                                    echo '</a>';
                                }
                                echo '</li>';
                            }
                            mysqli_close($conn);
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 md-margin-bottom-40">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon-line icon-trophy"></i>
                    <h2 class="heading-sm">Achievements</h2>
                    <p>Bulletin Board for all College Achievements</p>
                    <ul class="list-unstyled">
                        <?php
                            $path = $_SERVER['DOCUMENT_ROOT'];
                            $path .= 'databaseConnection.php';
                            include($path);

                            // Create connection
                            $conn = $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM achievements WHERE `show`=1 ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                if(strcmp($row['link'],'#')) {
                                    echo '<a href='.$row['link'].' target=_new>';
                                }
                                echo $row['headline'].' ';
                                if($row['new']==1) {
                                    echo '<img src="/assets/img/animated_new.gif" />';
                                }
                                if(strcmp($row['link'],'#')) {
                                    echo '</a>';
                                }
                                echo '</li>';
                            }
                            mysqli_close($conn);
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="service-block service-block-default no-margin-bottom">
                    <i class="icon-lg rounded-x icon-line icon-layers"></i>
                    <h2 class="heading-sm">News</h2>
                    <p>Bulletin Board for all College News</p>
                    <ul class="list-unstyled">
                        <?php
                            $path = $_SERVER['DOCUMENT_ROOT'];
                            $path .= 'databaseConnection.php';
                            include($path);

                            // Create connection
                            $conn = $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM news WHERE `show`=1 ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<li>';
                                if(strcmp($row['link'],'#')) {
                                    echo '<a href='.$row['link'].' target=_new>';
                                }
                                echo $row['headline'].' ';
                                if($row['new']==1) {
                                    echo '<img src="/assets/img/animated_new.gif" />';
                                }
                                if(strcmp($row['link'],'#')) {
                                    echo '</a>';
                                }
                                echo '</li>';
                            }
                            mysqli_close($conn);
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Service Blcoks -->
    

		<!-- Recent Works -->
		<div class="headline"><h2>Recent Works</h2></div>
		<div class="row margin-bottom-20">
			<div class="col-md-3 col-sm-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
					<div class="thumbnail-img">
						<div class="overflow-hidden">
							<img class="img-responsive" src="assets/img/main/img1.jpg" alt="">
						</div>
						<a class="btn-more hover-effect" href="#">read more +</a>
					</div>
					<div class="caption">
						<h3><a class="hover-effect" href="#">Project One</a></h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
					<div class="thumbnail-img">
						<div class="overflow-hidden">
							<img class="img-responsive" src="assets/img/main/img12.jpg" alt="">
						</div>
						<a class="btn-more hover-effect" href="#">read more +</a>
					</div>
					<div class="caption">
						<h3><a class="hover-effect" href="#">Project Two</a></h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
					<div class="thumbnail-img">
						<div class="overflow-hidden">
							<img class="img-responsive" src="assets/img/main/img3.jpg" alt="">
						</div>
						<a class="btn-more hover-effect" href="#">read more +</a>
					</div>
					<div class="caption">
						<h3><a class="hover-effect" href="#">Project Three</a></h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
					<div class="thumbnail-img">
						<div class="overflow-hidden">
							<img class="img-responsive" src="assets/img/main/img17.jpg" alt="">
						</div>
						<a class="btn-more hover-effect" href="#">read more +</a>
					</div>
					<div class="caption">
						<h3><a class="hover-effect" href="#">Project Four</a></h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Recent Works -->

		<!-- Info Blokcs -->
		<div class="row margin-bottom-30">
			<!-- Welcome Block -->
			<div class="col-md-8 md-margin-bottom-40">
				<div class="headline"><h2>Welcome To IIITDM</h2></div>
				<div class="row">
					<div class="col-sm-4">
						<img class="img-responsive margin-bottom-20" src="assets/img/main/Director.jpg" alt="">
					</div>
					<div class="col-sm-8">
						<p>Welcome to IIITD&M Kanchepuram . Bringing change by Design is reflected in all aspects of IIITDM - teaching, experiential learning, research, product development, student activities, infrastructure development, campus administration. To become a premier institute of excellence in design and manufacturing, the institute presently offers novel and first of their kind under-graduate programmes leading to B.Tech in Computer Engineering, Electronics Engineering, and Mechanical Engineering</p>
					</div>
				</div>

				<blockquote class="hero-unify">
					<p>IIITDM is creating a new paradigm in professional education and I am confident IIITDM will emerge as a top-class institute in the years to come</p>
					<small>Director, Prof. R. Gnanamoorthy</small>
				</blockquote>
			</div><!--/col-md-8-->

			<!-- Latest Shots -->
			<div class="col-md-4">
				<div class="headline"><h2>Campus Shoots</h2></div>
				<div id="myCarousel" class="carousel slide carousel-v1">
					<div class="carousel-inner">
						<div class="item active">
							<img src="assets/img/main/lpb_0001.jpg" alt="">
							<div class="carousel-caption">
								<p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/main/lpb_0002.jpg" alt="">
							<div class="carousel-caption">
								<p>Cras justo odio, dapibus ac facilisis into egestas.</p>
							</div>
							</div>
						<div class="item">
							<img src="assets/img/main/lpb_0003.jpg" alt="">
							<div class="carousel-caption">
								<p>Justo cras odio apibus ac afilisis lingestas de.</p>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/main/lpb_0004.jpg" alt="">
							<div class="carousel-caption">
								<p>Justo cras odio apibus ac afilisis lingestas de.</p>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/main/lpb_0005.jpg" alt="">
							<div class="carousel-caption">
								<p>Justo cras odio apibus ac afilisis lingestas de.</p>
							</div>
						</div>
					</div>

					<div class="carousel-arrow">
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div><!--/col-md-4-->
		</div>
		<!-- End Info Blokcs -->
	</div><!--/container-->

	<!--=== Footer Version 1 ===-->
	<?php
        include("footer.php");
    ?>
	<!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();
	  OwlCarousel.initOwlCarousel();
	  StyleSwitcher.initStyleSwitcher();
	  ParallaxSlider.initParallaxSlider();
	});
</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
