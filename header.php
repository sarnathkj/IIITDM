<?php
    require("databaseConnection.php");
?>

<div class="header">
		<div class="container">
			<!-- Logo -->
			<h2 class="logo">
				<a href="index.php">
					<img src="assets/img/iiitdm_logo.png" alt="Logo" title="Indian Institute Information Technology, Design and Manufacturing">Indian Institute Information Technology, Design and Manufacturing
				</a>
			</h2>
			<!-- End Logo -->

			<!-- Topbar -->
			<div class="topbar">
				<ul class="loginbar pull-right">
					<li class="hoverSelector">
						<i class="fa fa-globe"></i>
						<a>Languages</a>
						<ul class="languages hoverSelectorBlock">
							<li class="active">
								<a href="#">English <i class="fa fa-check"></i></a>
							</li>
							<li><a href="#">Hindi</a></li>
						</ul>
					</li>
					<li class="topbar-devider"></li>
					<li><a href="#">Help</a></li>
					<li class="topbar-devider"></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
			<!-- End Topbar -->

			<!-- Toggle get grouped for better mobile display -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars"></span>
			</button>
			<!-- End Toggle -->
		</div><!--/end container-->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
			<div class="container">
				<ul class="nav navbar-nav">
				
					<!-- Home -->
					<li>
						<a href="javascript:void(0);">
							Home
						</a>
					</li>
					<!-- End Home -->

					<!-- Administration -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Administration
						</a>
						<ul class="dropdown-menu">
							<!-- About IIITDM -->
							<li class="dropdown-submenu">
								<a href="javascript:void(0);">About IIIDM</a>
								<ul class="dropdown-menu">
									<li><a href="aboutIIITDM.php">Overview</a></li>
									<li><a href="aboutIIITDM.php#vision">Vision</a></li>
									<li><a href="aboutIIITDM.php#mission">Mission</a></li>
									<li><a href="aboutIIITDM.php#charter">Charter</a></li>
								</ul>
							</li>
							<!-- End About IIITDM -->

							<!-- Board of Governers Pages -->
							<li>
								<a href="boardOfGoverners.php">Board of Governers</a>
							</li>
							<!-- End Board of Governer Pages -->
							
							<!-- Finance Committee Pages -->
							<li>
								<a href="financeCommittee.php">Finance Committee</a>
							</li>
							<!-- End Finance Committee Pages -->
							
							<!-- Building & Work Committee Pages -->
							<li>
								<a href="buildingAndWorkCommittee.php">Building & Work Committee</a>
							</li>
							<!-- End Building & Work Committee Pages -->
							
							<!-- Director Pages -->
							<li>
								<a href="directorMessage.php">Director</a>
							</li>
							<!-- End Director Pages -->
							
							<!-- Registrar Pages -->
							<li>
								<a href="registrarMessage.php">Registrar</a>
							</li>
							<!-- End Registrar Pages -->
							
							<!-- Senate Pages -->
							<li>
								<a href="senate.php">Senate</a>
							</li>
							<!-- End Senate Pages -->
                            
                            <!-- Institute Newsletter -->
							<li class="dropdown-submenu">
								<a href="javascript:void(0);">Newsletter</a>
								<ul class="dropdown-menu">
                                <?php
                                    
                                    // Create connection
                                    $conn = $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);;
                                    // Check connection
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                    
                                    $sql = "SELECT * FROM newsletter";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            if($row["show"]==1) {
                                                echo "<li><a href=".$row["link"].">".$row["name"]."</a></li>";
                                            }
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    mysqli_close($conn);
                                ?>
								</ul>
							</li>
							<!-- End Institute Newsletter -->

							
						</ul>
					</li>
					<!-- End Administration -->
					
					<!-- Admissions -->
					<li class="dropdown mega-menu-fullwidth">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Admissions
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content disable-icons">
									<div class="container">
										<div class="row equal-height">
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Undergraduate (UG)</h3></li>

													<!-- Undergraduate -->
													<li><a href="undergraduate.php#HowToApply">How to Apply?</a></li>
													<li><a href="undergraduate.php#JEE">JEE-Mains</a></li>
													<li><a href="undergraduate.php#DASA">DASA</a></li>
													<li><a href="undergraduate.php#LOP">List of Programs</a></li>
													<li><a href="undergraduate.php#LYCR">Last Year Closing Ranks</a></li>
													<li><a href="undergraduate.php#Scholarships">Scholarships</a></li>
													<!-- End Undergraduate -->
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Dual Degree</h3></li>

													<!-- Dual Degree -->
													<li><a href="dualDegree.php#HowToApply">How to Apply?</a></li>
													<li><a href="dualDegree.php#LOP">List of Programs</a></li>
													<li><a href="dualDegree.php#Scholarships">Scholarships</a></li>
													<!-- End Dual Degree -->
													
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Post Graduate (PG)</h3></li>

													<!-- Post Graduate -->
													<li><a href="postgraduate.php#HowToApply">How to Apply?</a></li>
													<li><a href="postgraduate.php#LOP">List of Programs</a></li>
													<li><a href="postgraduate.php#Scholarships">Scholarships</a></li>
													<!-- End Post Graduate -->
													
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>PhD</h3></li>

													<!-- PhD -->
													<li><a href="phd.php#HowToApply">How to Apply?</a></li>
													<li><a href="researchAreas.php">List of Research Areas</a></li>
													<li><a href="phd.php#Fellowship">Fellowship</a></li>
													<li><a href="ordinancePhD.php">PhD Ordinance</a></li>
													<li><a href="/assets/docs/phdBrochure.pdf">Admission Brochure</a></li>
													<li><a href="/assets/docs/OBC_Community_format.pdf">OBC Community Certificate</a></li>
													<!-- End PhD -->
													
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- End Admissions -->
					
					<!-- Academics -->
					<li class="dropdown mega-menu-fullwidth">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Academics
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content disable-icons">
									<div class="container">
										<div class="row equal-height">
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Undergraduate (UG)</h3></li>

													<!-- Undergraduate -->
													<li><a href="shortcode_typo_general.html">Electives</a></li>
													<li><a href="shortcode_typo_headings.html">Curriculum & Syllabus</a></li>
													<li><a href="shortcode_typo_dividers.html">Branch Change Rules</a></li>
													<li><a href="shortcode_typo_blockquote.html">Ordinance</a></li>
													<li><a href="shortcode_typo_boxshadows.html">B. Tech Course Equivalence Certificate</a></li>
													<li><a href="shortcode_typo_testimonials.html">CGPA to Percentage Certificate</a></li>
													<li><a href="shortcode_typo_general.html">Academic Calendar</a></li>
													<!-- End Undergraduate -->
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Dual Degree</h3></li>

													<!-- Dual Degree -->
													<li><a href="shortcode_typo_headings.html">Curriculum & Syllabus</a></li>
													<li><a href="shortcode_typo_dividers.html">Branch Change Rules</a></li>
													<li><a href="shortcode_typo_blockquote.html">Ordinance</a></li>
													<!-- End Dual Degree -->
													
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>Post Graduate (PG)</h3></li>

													<!-- Post Graduate -->
													<li><a href="shortcode_typo_general.html">How to Apply?</a></li>
													<li><a href="shortcode_typo_blockquote.html">List of Programs</a></li>
													<li><a href="shortcode_typo_testimonials.html">Scholarships</a></li>
													<!-- End Post Graduate -->
													
												</ul>
											</div>
											<div class="col-md-3 equal-height-in">
												<ul class="list-unstyled equal-height-list">
													<li><h3>PhD</h3></li>

													<!-- PhD -->
													<li><a href="shortcode_form_general.html">About the Programme</a></li>
													<li><a href="shortcode_form_general1.html">Electives</a></li>
													<li><a href="shortcode_form_advanced.html">Curriculum</a></li>
													<li><a href="shortcode_form_layouts.html">M. Des Course Equivalence Certificate</a></li>
													<li><a href="shortcode_form_layouts_advanced.html">CGPA to Percentage Certificate</a></li>
													<li><a href="shortcode_form_states.html">Academic Calendar</a></li>
													<!-- End PhD -->
													
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- End Academics -->

					<!-- Research -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Research
						</a>
						<ul class="dropdown-menu">
							<li><a href="researchAreas.php">Research Areas</a></li>
							<li><a href="fundedProjects.php">Funded Projects</a></li>
							<li><a href="researchScholar.php">Research Scholars</a></li>
							<li><a href="researchPublications.php">Publications</a></li>
							<li><a href="ordinancePhD.php">PhD Ordinance</a></li>
							<li><a href="/assets/docs/Ac_Cal_2016.pdf">Academic Calendar</a></li>
						</ul>
					</li>
					<!-- End Research -->

					<!-- Campus Life -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							Campus Life
						</a>
						<ul class="dropdown-menu">
							<li><a href="blog_large_right_sidebar.html">Hostel & Mess</a></li>
							<li><a href="blog_large_right_sidebar.html">Infrastructure</a></li>
							<li><a href="blog_large_right_sidebar.html">Sports</a></li>
							<li><a href="blog_large_right_sidebar.html">Medical Unit</a></li>
							<li><a href="blog_large_right_sidebar.html">Clubs & Events</a></li>
							<li><a href="blog_large_right_sidebar.html">SSG</a></li>
							<li><a href="blog_large_right_sidebar.html">Hostel Council</a></li>
						</ul>
					</li>
					<!-- End Campus Life -->

					<!-- People -->
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							People
						</a>
						<ul class="dropdown-menu">
							<li><a href="facultyPage.php">Faculty</a></li>
							<li><a href="researchScholar.php">Research Scholars</a></li>
							<li><a href="students.php">Students</a></li>
							<li><a href="blog_timeline.html">Staff</a></li>
						</ul>
					</li>
					<!-- End People -->
					
					<!-- Contact Us -->
					<li>
						<a href="contactPage.php">
							Contact Us
						</a>
					</li>
					<!-- End Home -->

					<!-- Search Block -->
					<li>
						<i class="search fa fa-search search-btn"></i>
						<div class="search-open">
							<div class="input-group animated fadeInDown">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button class="btn-u" type="button">Go</button>
								</span>
							</div>
						</div>
					</li>
					<!-- End Search Block -->
				</ul>
			</div><!--/end container-->
		</div><!--/navbar-collapse-->
	</div>