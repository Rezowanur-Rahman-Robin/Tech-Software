
<?php
 
 include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Career </title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="media/we_tech-logo.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="dependencies/mycollection/font/flaticon.css" type="text/css">
	<link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="dependencies/page-piling/css/jquery.pagepiling.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/nivo-slider/css/nivo-slider.css" type="text/css">
	<link rel="stylesheet" href="dependencies/meanmenu/css/meanmenu.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick/css/slick.css" type="text/css">
	<link rel="stylesheet" href="dependencies/slick/css/slick-theme.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">
	<link rel="stylesheet" href="assets/css/customize.css" type="text/css">

	<!-- Animation Stylesheet -->
	<link rel="stylesheet" href="dependencies/animation-css/animation-css.css" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

</head>

<body>

	<div id="preloader" class="tlp-preloader">
		<div class="animation-preloader">
			<div class="tlp-spinner"></div>
			<img src="media/we_tech-logo.png" width='100' height='100' alt="Preloader">
		</div>
	</div>

	<div id="wrapper" class="wrapper">
		<a href="#main_content" data-type="section-switch" class="return-to-top">
			<i class="fas fa-angle-double-up"></i>
		</a>

		<div id="main_content">

        <?php

include("sections/header.php");

?>
			<!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="page-banner bg-gradient-layout6 has-animation">
				<ul class="shape-holder">
					<li>
						<div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
							<svg width="827px" height="827px">
					<defs>
						<linearGradient id="shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
						  	<stop offset="100%" stop-color="rgb(117,14,213)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape1)"
					 d="M413.500,0.000 C641.870,0.000 827.000,185.130 827.000,413.500 C827.000,641.870 641.870,827.000 413.500,827.000 C185.130,827.000 -0.000,641.870 -0.000,413.500 C-0.000,185.130 185.130,0.000 413.500,0.000 Z"/>
				</svg>
						</div>
					</li>
					<li>
						<div class="translate-top-50 opacity-animation transition-100 transition-delay-300">
							<svg width="615px" height="615px">
					<defs>
						<linearGradient id="shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
						  	<stop offset="100%" stop-color="rgb(109,26,223)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape2)"
					 d="M307.500,0.000 C477.327,0.000 615.000,137.673 615.000,307.500 C615.000,477.327 477.327,615.000 307.500,615.000 C137.672,615.000 -0.000,477.327 -0.000,307.500 C-0.000,137.673 137.672,0.000 307.500,0.000 Z"/>
				</svg>
						</div>
					</li>
					<li>
						<div class="translate-top-50 opacity-animation transition-50 transition-delay-600">
							<svg width="441px" height="441px">
					<defs>
						<linearGradient id="shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="13%" stop-color="rgb(82,63,255)" stop-opacity="0.4" />
						  	<stop offset="100%" stop-color="rgb(130,33,221)" stop-opacity="0.4" />
						</linearGradient>
					</defs>
					<path fill="url(#shape3)"
					 d="M220.500,0.000 C342.279,0.000 441.000,98.721 441.000,220.500 C441.000,342.279 342.279,441.000 220.500,441.000 C98.721,441.000 -0.000,342.279 -0.000,220.500 C-0.000,98.721 98.721,0.000 220.500,0.000 Z"/>
				</svg>
						</div>
					</li>
				</ul>
				<div class="container">
					<div class="breadcrumbs-area">
						<h1>Join with our Team</h1>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>Career</li>
						</ul>
					</div>
				</div>
			</section>

            <section id="current_job_section">
                <div class="container">
                    <h2 class="text-center mt-4" style="font-family: 'Roboto', sans-serif;     color: #292929;">
                        Current Openings
                    </h2>
                    <hr>

					<?php

$get_careers = "select * from careers";

$run_careers  = mysqli_query($con,$get_careers);

$i=0;

while($row_careers  = mysqli_fetch_array($run_careers )){

     $career_id = $row_careers['career_id'];

     $career_language = $row_careers['career_language'];

     $career_title = $row_careers['career_title'];

     $career_duties = $row_careers['career_duties'];

     $career_educational = $row_careers['career_educational'];

     $career_qualification = $row_careers['career_qualification'];

     $career_app_ins = $row_careers['career_app_ins'];

     



     $i++;
     

?>				

                    <div class="card career_box mb-4">
                        <div class="row p-2">
                            <div class="col-sm-2">
                            <img src="media/svg/engineer.svg"  alt="engineer" class=" mt-3 ml-2 rounded mx-auto d-block " style="width:75px; height:75px">

                            </div>

                            <div class="col-sm-10 card-body">
                            <div class="d-inline-block">
                            <h3 class="card-text">   <?php echo $career_title; ?> </h3>
                            <p class="card-text"> <?php echo $career_language; ?></p>
                            </div>

                            <a href="careerDetails.php?career_id=<?php echo $career_id; ?>" class="btn-fill btn-gradient float-right mr-4 career_btn"> View Details </a>


                             </div>


                         
                        </div>

                        
                    </div>
                 

<?php } ?>
                
                

                </div>
            </section>



		
			


            <?php

include("sections/brandSection.php");

?>

<?php

include("sections/contactSection.php");

?>





<?php

include("sections/toggleMenu.php");

?>



		

<?php

include("sections/footerSection.php");

?>

		</div>
	</div>

	<!-- Dependency Scripts -->
	<script src="dependencies/popper.js/popper.min.js"></script>
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/jquery.appear/jquery.appear.js"></script>
	<script src="dependencies/jquery.parallax-scroll/jquery.parallax-scroll.js"></script>
	<script src="dependencies/gmap3/js/gmap3.min.js"></script>
	<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
	<script src="dependencies/slick/js/slick.min.js"></script>
	<script src="dependencies/counter-up/jquery.counterup.min.js"></script>
	<script src="dependencies/waypoints/jquery.waypoints.min.js"></script>
	<script src="dependencies/select2/js/select2.min.js"></script>
	<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
	<script src="dependencies/Parallaxie-master/parallaxie.js"></script>
	<script src="dependencies/nivo-slider/js/jquery.nivo.slider.js"></script>
	<script src="dependencies/nivo-slider/js/home.js"></script>
	<script src="dependencies/wow/js/wow.min.js"></script>
	<script src="dependencies/knob/jquery.knob.js"></script>
	<script src="dependencies/countdown/jquery.countdown.min.js"></script>
	<script src="dependencies/page-piling/js/jquery.pagepiling.min.js"></script>
	<script src="dependencies/tilt/tilt.jquery.min.js"></script>
	<script src="dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
	<script src="dependencies/theia-sticky-sidebar/resize-sensor.min.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/validator/validator.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>

	<!-- Site Scripts -->
	<script src="assets/js/app.js"></script>

</body>


</html>