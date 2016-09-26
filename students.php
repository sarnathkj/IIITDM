<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Students | IIITDM Kancheepuram</title>

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
    <?php
        include("header.php");
    ?>
	
	<!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Students</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">People</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Cube Portfolio ===-->
    <div class="cube-portfolio container content-sm margin-bottom-30">
        <div id="filters-container" class="cbp-l-filters-text no-padding">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
            
            <?php
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM programme_type";
                $result = mysqli_query($conn, $sql);
                $i=1;
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                            
                        echo '<div data-filter=".'.$row['short_name'].'" class="cbp-filter-item"> '.$row['name'].' </div>';
                        $i++;
                        if($i<=mysqli_num_rows($result)) {
                            echo "|";
                        }
                            
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
            ?>
            
        </div><!--/end Filters Container-->

        <div id="grid-container" class="cbp-l-grid-gallery">
            
            <?php
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM programme WHERE prog_type=1";
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="cbp-item btech btech'.$row['id'].'">';
                echo '<a href="assets/ajax/cube-portfolio/btech'.$row['id'].'.php" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">';
                echo '<div class="cbp-caption-defaultWrap">';
                echo '<img src="assets/img/team/img4-md.jpg" alt="">';
                echo '</div>';
                echo '<div class="cbp-caption-activeWrap">';
                echo '<div class="cbp-l-caption-alignLeft">';
                echo '<div class="cbp-l-caption-body">';
                echo '<div class="cbp-l-caption-title text-uppercase">'.$row['name'].'</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
            mysqli_close($conn);
                
            ?>
            
            <?php
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM programme WHERE prog_type=2";
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="cbp-item mdes mdes'.$row['id'].'">';
                echo '<a href="assets/ajax/cube-portfolio/mdes'.$row['id'].'.php" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">';
                echo '<div class="cbp-caption-defaultWrap">';
                echo '<img src="assets/img/team/img4-md.jpg" alt="">';
                echo '</div>';
                echo '<div class="cbp-caption-activeWrap">';
                echo '<div class="cbp-l-caption-alignLeft">';
                echo '<div class="cbp-l-caption-body">';
                echo '<div class="cbp-l-caption-title text-uppercase">'.$row['name'].'</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
           mysqli_close($conn);
             
                
            ?>
            
            <?php
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM programme WHERE prog_type=3";
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="cbp-item dd dd'.$row['id'].'">';
                echo '<a href="assets/ajax/cube-portfolio/dd'.$row['id'].'.php" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">';
                echo '<div class="cbp-caption-defaultWrap">';
                echo '<img src="assets/img/team/img4-md.jpg" alt="">';
                echo '</div>';
                echo '<div class="cbp-caption-activeWrap">';
                echo '<div class="cbp-l-caption-alignLeft">';
                echo '<div class="cbp-l-caption-body">';
                echo '<div class="cbp-l-caption-title text-uppercase">'.$row['name'].'</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
            mysqli_close($conn);
             
                
            ?>
            
        </div><!--/end Grid Container-->
    </div>
    <!--=== End Cube Portfolio ===-->

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