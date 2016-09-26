<?php
    include("databaseConnection.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>IIITDM | Undergraduate</title>

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
            <h1 class="pull-left">Dual Degree Programmes</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Admissions</a></li>
                <li class="active">Dual Degree Programmes</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== News Block ===-->
    <div class="container content-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30">
                    <h2 class="title-v2" id="DualDegreeAdmissions">Dual Degree Admissions</h2>
                    <p>IIITDM Kanchepuram offers a 5-year B.Tech + M.Tech programmes in Computer Engineering (COE), Electronics Engineering Design and Manufacturing (EDM), and Mechanical Engineering Design and Manufacturing (MDM). The mode of admission is based on the JEE (Main) and Plus-2 Normalized Score.</p>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30" id="HowToApply">
                    <h2 class="title-v2" id="HowToApply">How to Apply?</h2>
                    
                    <p>The mode of admission is based on the JEE (Main) and Plus-2 Normalized Score. The seat allotment to the B.Tech programmes is based on All India Rank published by CBSE. Admission is based only on All India Rank(AIR). State Rank is not Considered for admission into IIITs.For further details on JEE (Main), please visit: <a href="http://jeemain.nic.in/" id="JEE">JEE Main Website</a></p>
                    
                    <p>For further details on AIR and Seat Allocation, please visit <a href="http://josaa.nic.in/">Link</a></p>
                    
                    <p>The admission to Foreign Nationals / Persons of Indian Origin (PIOs) / Non-Resident Indians (NRIs) is through Direct Admission of Students Abroad (DASA).For futher details, please visit: <a href="http://www.dasanit.org/" id="DASA">DASA Website</a></p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 md-margin-bottom-30" id="LOP">
                    <h2 class="title-v2" id="UndergraduateAdmissions">List of Programmes</h2>
                    <!--Basic Table-->
                    <div class="panel panel-green margin-bottom-40">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-tasks"></i> Dual Degree Programmes</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Programme Names</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                
                                    // Create connection
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    // Check connection
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                
                                    $sql = "SELECT id,name FROM programme WHERE prog_type=3";
                                    $result = mysqli_query($conn, $sql);
                                    $i=1;
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            
                                                echo "<tr>";
                                                echo "<td>".$i."</td>";
                                                echo "<td>".$row['name']."</td>";
                                                echo "</tr>";
                                                $i++;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    mysqli_close($conn);
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!--End Basic Table-->
                    
                </div>
                
            </div>
            <div class="row">   
                <!--Striped Rows-->
                <div class="col-md-12" id="LYCR">
                    <h2 class="title-v2" id="HowToApply">Last Year Closing Ranks</h2>
                    <div class="panel panel-sea margin-bottom-40">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-edit"></i> Striped Rows</h3>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="width:30%;">Branch<br>(B.Tech)
                                    </th>
                                    <th colspan="2">OP
                                    </th>
                                    <th colspan="2">OBC
                                    </th>
                                    <th colspan="2">SC
                                    </th>
                                </tr>
                                <tr>

                                    <td>Starting Rank
                                    </td>
                                    <td>Ending Rank
                                    </td>
                                    <td>Starting Rank
                                    </td>
                                    <td>Ending Rank
                                    </td>
                                    <td>Starting Rank
                                    </td>
                                    <td>Ending Rank
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr><th>COE
                                    </th>
                                    <td>9950
                                    </td>
                                    <td>18867
                                    </td>
                                    <td>26022   
                                    </td>
                                    <td>36096
                                    </td>
                                    <td>110111
                                    </td>
                                    <td>151009
                                    </td>
                                </tr>
                                    <tr><th>EDM<br>(Signal Processing)
                                    </th>
                                    <td>10034
                                    </td>
                                    <td>19491
                                    </td>
                                    <td>21592
                                    </td>
                                    <td>35787
                                    </td>
                                    <td>106057
                                    </td>
                                    <td>151364
                                    </td>
                                </tr>
                                <tr><th>EDM<br>(VLSI)
                                    </th>
                                    <td>13981
                                    </td>
                                    <td>19873
                                    </td>
                                    <td>28802
                                    </td>
                                    <td>36595
                                    </td>
                                    <td>134715
                                    </td>
                                    <td>153163
                                    </td>
                                </tr>
                                    <tr><th>MDM<br>(Advanced Manufacturing)
                                    </th>
                                    <td>16875
                                    </td>
                                    <td>21948
                                    </td>
                                    <td>32878
                                    </td>
                                    <td>36372
                                    </td>
                                    <td>97657
                                    </td>
                                    <td>144469
                                    </td>
                                </tr>

                                <tr><th>MDM<br>(Product Design)
                                    </th>
                                    <td>17253
                                    </td>
                                    <td>22891
                                    </td>
                                    <td>32710
                                    </td>
                                    <td>36870
                                    </td>
                                    <td>128347
                                    </td>
                                    <td>146772
                                    </td>
                                </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <!--End Striped Rows-->
                
            </div>
        </div>
    </div>
    <!--=== End News Block ===-->

   <!--=== Service Block ===-->
    <div class="bg-color-light" id="Scholarships">
        <div class="container content-sm">
            <div class="headline-center margin-bottom-60">
                <h2>Scholarships</h2>
                <p>titute awards a lot of scholarships / financial assistance to students based on merit and parental income levels. The Institute is awarding the following scholarships:</p>
            </div>

            <!-- Service Block v8 -->
            <div class="row margin-bottom-30">
                <div class="col-sm-6 sm-margin-bottom-50">
                    <div class="service-block-v8">
                        <i class="icon-badge"></i>
                        <div class="service-block-desc">
                            <h3>Merit-cum-Means Scholarship</h3>
                            <p>Merit-cum-Means Scholarships of Rs.1000/-p.m. are sanctioned to 25% of eligible B.Tech students whose parental income is less than Rs.4.5 lakhs. Further they are also exempted from payment of tuition fees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 sm-margin-bottom-20">
                    <div class="service-block-v8">
                        <i class="icon-badge"></i>
                        <div class="service-block-desc">
                            <h3>SC/ST Scholarship</h3>
                            <p>SC/ST students admitted to B.Tech programme whose parental income is less than Rs.4.5 lakhs are eligible for concession of mess charges and exempted from payment of hostel seat rent. They are granted a pocket allowance of Rs.250/-p.m. Further they are also exempted from payment of tuition fees.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->

            <!-- Service Block v8 -->
            <div class="row margin-bottom-30">
                <div class="col-sm-6 sm-margin-bottom-50">
                    <div class="service-block-v8">
                        <i class="icon-badge"></i>
                        <div class="service-block-desc">
                            <h3>SC/ST Scholarship</h3>
                            <p>Ten fresh slots have been allotted by the Ministry of Social Justice and Empowerment for the SC students and Ministry of tribal Affairs for ST students under top class education scholarship schemes. SC/ST Scholarship is sanctioned to SC/ST students admitted to B.Tech programme whose parental income is less than Rs.4.5 lakhs p.a.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 sm-margin-bottom-20">
                    <div class="service-block-v8">
                        <i class="icon-badge"></i>
                        <div class="service-block-desc">
                            <h3>Benefits under this scheme</h3>
                            <p>a. Lodging & boarding charges at the rate of Rs. 2220 per month per student or the actuals whichever is less.</p>
                            <p>b. Books and stationery at the rate of Rs. 3000 per annum per student or the actuals whichever is less.</p>
                            <p>c. A latest computer system with all the necessary accessories like UPS, Printer, Multi-media etc. limited to Rs. 45000 per student for the entire course of study.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->

            <!-- Service Block v8 -->
            <div class="row margin-bottom-20">
                <div class="col-sm-12 sm-margin-bottom-50">
                    <div class="service-block-v8">
                        <i class="icon-badge"></i>
                        <div class="service-block-desc">
                            <h3>Institute free Studentship</h3>
                            <p>Institute free Studentship (IFS) scholarships are sanctioned to 10% of eligible B.Tech students whose parental income is less than Rs.4.5 lakhs. They are exempted from payment of tuition fees.</p>
                            <p>Overview of Scholarships at IIITDM - <a href="http://iiitdm.ac.in/pdf/scholarships.pdf">click here</a></p>
                            <p>Application for Merit-cum-Means and SC/ST scholarships - <a href="http://iiitdm.ac.in/pdf/commonscholarship.pdf">click here</a></p>
                            <p>Application for Top Class SC scholarships - <a href="http://iiitdm.ac.in/pdf/sc.pdf">click here</a></p> 
                            <p>Application for Top Class ST scholarships - <a href="http://iiitdm.ac.in/pdf/st.pdf">click here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Block v8 -->
        </div>
    </div>
    <!--=== End Service Block ===-->

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
