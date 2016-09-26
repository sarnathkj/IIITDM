<?php
    include("databaseConnection.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>IIITDM | PhD Programmes</title>

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
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_search.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/dark-blue.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

<div class="wrapper">
    <?php
        include("header.php");
    ?>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">PhD Programmes</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Admissions</a></li>
                <li class="active">PhD Programmes</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== News Block ===-->
    <div class="container content-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30">
                    <h2 class="title-v2" id="DualDegreeAdmissions">PhD Admissions</h2>
                    <p>The Institute started the Ph.D programme in 2009. Presently 28 research scholars are working in the disciplines of computer science, mechanical and electrical & electronics engineering in pursuit of their Doctorate degrees. Interdisciplinary research programmes leading to the award of Ph.D degree are offered in Computer, Electrical, Electronics, Mechanical engineering, Physics and Mathematics. All faculty members of the institute are doctoral degree holders from reputed institutes with good academic and research record and are involved in sponsored research and industrial consultancy.</p>
                    
                    <p>Registered Full time Ph.D scholars of the institute are awarded half time teaching assistantship (HTTA) / stipend as per the norms laid down by MHRD, Govt. of India. As part of the regulations of the Ph.D programme, scholars shall be expected to complete around 4 courses (can vary based on the recommendations of the Doctoral Committee) and clear a comprehensive viva-voice exam during the initial stages of Ph.D programme and secure publications in journals & conferences of repute as stipulated by the Ph.D regulations of the institute in the later years and submit a thesis of the research work carried out.</p>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30" id="HowToApply">
                    <h2 class="title-v2" id="HowToApply">How to Apply?</h2>
                    
                    <p>The mode of admission is based on Undergraduate Performance, Postgraduate Performance, Institute Test and an Interview.</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30" id="LOP">
                    <h2 class="title-v2" id="UndergraduateAdmissions">List of Research Areas</h2>
                    <p>Please find the list of research areas <a href="researchAreas.php">here</a>.</p>
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30" id="Fellowship">
                    <h2 class="title-v2">Fellowship</h2>
                    
                    <p>Ph.D scholars are provided Institute financial assistance as per MHRD, Govt. of India regulations. Ph.D scholars who pursue full time research are provided a financial assistance of Rs. 25,000/- (Science / Engineering) per month for the first two years and Rs. 28,000/- per month for the next two years as per the regulations of MHRD and Institute rules.</p>
                    
                    <p><span><b>Financial Assistance to present research papers in National/International Conferences</b></span></p>
                    
                    <p>The Institute encourages students and scholars to pursue inter-disciplinary research in the core areas of engineering. Generous financial grants to present papers in National / International conferences are awarded to the Ph.D scholars as per the norms of Institute Financial Assistance Scheme. Many students utilized and presented papers using this scheme.</p>
                    
                </div>
            </div>
                
            </div>
        </div>
    </div>
    <!--=== End News Block ===-->

    <!--=== Parallax Counter v4 ===-->
    <div class="parallax-counter-v4 parallaxBg">
        <div class="container content-sm">
            <div class="row">
                <div class="col-md-4 col-xs-6 md-margin-bottom-50">
                    <i class="icon-graduation"></i>
                    <span class="counter">4</span>
                    <h4>UG Programme</h4>
                </div>
                <div class="col-md-4 col-xs-6 md-margin-bottom-50">
                    <i class="icon-graduation"></i>
                    <span class="counter">3</span>
                    <h4>PG Programme</h4>
                </div>
                <div class="col-md-4 col-xs-6">
                    <i class="icon-graduation"></i>
                    <span class="counter">6</span>
                    <h4>Dual Degree Programme</h4>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Parallax Counter v4 ===-->

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
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
