
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
	<title>Project Details</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="media/we_tech-logo.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/select2/css/select2.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/flaticon/flaticon.css" type="text/css">
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
			<img src="media/we_tech-logo.png" alt="Preloader">
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
						<h1>Project Details</h1>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>Project Details</li>
						</ul>
					</div>
				</div>
			</section>



			<!--=====================================-->
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Team Section Area Start      =-->
			<!--=====================================-->

			<?php

if(isset($_GET['pro_id'])){
    
    $target_p_id = $_GET['pro_id'];

	  
$get_target_project= "select * from projects where p_id='$target_p_id' ";
$run_target_project= mysqli_query($con,$get_target_project);

if($row_target_project = mysqli_fetch_array($run_target_project)){

       $target_p_title= $row_target_project['p_title'];

       $target_p_desc = $row_target_project['p_desc'];

       $target_p_category = $row_target_project['p_category'];

     
  
}

 }
			?>
			<section class="gallery-details-wrap section-padding-md-equal bg-color-light">
				<div class="container">
					<div class="mb-5 rc-carousel nav-control-layout7" data-loop="true" data-items="5" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
					 data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
					 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                     
					 <?php
  $get_target_project_slider= "select * from pro_details_slider where p_project_id='$target_p_id' ";
  $run_target_project_slider= mysqli_query($con,$get_target_project_slider);
  $number_of_slider= mysqli_num_rows($run_target_project_slider);


  while($row_target_project_slider = mysqli_fetch_array($run_target_project_slider)){

     $target_p_d_id = $row_target_project_slider['p_d_id'];
     $target_p_d_img = $row_target_project_slider['p_d_img'];
	 ?>

 

                     <img src="media/project/<?php echo $target_p_d_img; ?>" alt="gallery" class="slider_image" style="max-height:600px">

	 <?php } ?>

                    
					</div>
					<div class="row">
						<div class="col-lg-8">
							<div class="gallery-details-box">
								<div class="item-content">

                                
									<h2 class="item-title"><?php echo $target_p_title; ?></h2>
									<div class="projectDesc">
									
									<?php echo $target_p_desc; ?>
									
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12 template-sidebar">
							<div class="widget bg-color-light">
								<div class="widget-info">
									<div class="item-content">
										<div class="widget-section-heading heading-layout1">
											<h3 class="item-heading text-center" style="border-bottom: 3px solid #5a49f8;">Main Aspects </h3> 
										</div>
										<div class="list-item d-block">
										<?php
  $get_target_project_aspect= "select * from pro_details_aspects where p_project_id='$target_p_id' ";
  $run_target_project_aspect= mysqli_query($con,$get_target_project_aspect);
  $number_of_aspect= mysqli_num_rows($run_target_project_aspect);
  $p=0;
  $defaultAspect = new SplFixedArray($number_of_aspect+2);

  $a_id_Aspect = new SplFixedArray($number_of_aspect+2);
  $r=0;

  while($row_target_project_aspect = mysqli_fetch_array($run_target_project_aspect)){

     $target_p_a_id = $row_target_project_aspect['p_a_id'];

     $target_p_aspect_title = $row_target_project_aspect['p_a_title'];

     $p++;
     $r++;
	 ?>
<div class="d-flex "><img width='30' height='30' class="mr-2" src="media/svg/check-mark.svg" alt=""> <span class="aspect_desc"><?php echo $target_p_aspect_title; ?></span></div> <br>
											     
  <?php } ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</section>
			<!--=====================================-->
			<!--=       Team Section Area End       =-->
			<!--=====================================-->
	
            
<?php

include("sections/contactSection.php");

?>

<?php

include("sections/brandSection.php");

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


<!-- Mirrored from www.radiustheme.com/demo/html/digeco/digeco/gallery-details2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Aug 2021 21:42:32 GMT -->
</html>