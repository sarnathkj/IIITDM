<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Research Scholar | IIITDM Kancheepuram</title>

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
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/blue.css" id="style_color">
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
	
	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Research Scholar</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="">People</a></li>
                <li class="active">Reseach Scholar</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Cube Portfolio ===-->
    <div class="cube-portfolio container content-sm margin-bottom-30">
        <div id="grid-container" class="cbp-l-grid-gallery">
            
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

                $sql = "SELECT * FROM research_scholar";
                $result = mysqli_query($conn, $sql);
                $i=1;
                while($row = mysqli_fetch_assoc($result)) {
                    $card_no=$row["card_no"];
                    $name=$row["name"];
                    $email=$row["email"];
                    $advisor=$row["advisor"];
                    $undergraduate=$row["undergraduate"];
                    $postgraduate=$row["postgraduate"];
                    $current_research=$row["current_research"];
                    $publications=$row["publications"];
                    $research_area=$row["research_area"];
            ?>
            
            <div class="cbp-item">
                <a href="assets/ajax/cube-portfolio/viewScholar.php?card_no=<?php echo $card_no; ?>" class="cbp-caption cbp-singlePageInline"
                   data-title="<?php echo $name; ?>">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/research_scholars/<?php echo $card_no; ?>.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-desc"><?php echo $name; ?></div>
                                <div class="cbp-l-caption-title text-uppercase"><?php echo $research_area; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                }
                mysqli_close($conn);
            ?>
        </div><!--/end Grid Container-->
    </div>
    <!--=== End Cube Portfolio ===-->

    <!--=== Call To Action v2 ===-->
    <!--<div class="call-action-v2">
        <div class="container">
            <h2>We are Hiring!</h2>
            <p>Curabitur hendrerit, lectus in bibendum pellentesque, lacus eros rutrum ligula</p>
            <a href="#" class="btn-u">Join Now</a>
        </div>
    </div>-->
    <!--=== End Call To Action v2 ===-->

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
<script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
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