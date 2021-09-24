
				<!--=   Testimonial Section Area Start  =-->
			<!--=====================================-->
			<section class="testimonial-wrap-layout3 section-padding-md bg-color-light">
				<ul class="figure-holder has-animation">
					<li class="animated-bg">
						<div class=" translate-right-75 opacity-animation transition-200 transition-delay-1000">
							<svg width="970px" height="760px">
					<defs>
						<linearGradient id="bg-gradient" x1="0%" x2="50%" y1="86.603%" y2="0%">
					  		<stop offset="0%" stop-color="rgb(247,250,255)" stop-opacity="1" />
					  		<stop offset="100%" stop-color="rgb(255,255,255)" stop-opacity="1" />
						</linearGradient>
					</defs>
					<path fill="url(#bg-gradient)"
	 				d="M715.405,478.430 C691.289,541.146 823.736,652.364 721.693,735.830 C626.810,813.438 547.592,682.727 427.827,642.922 C367.089,622.734 295.500,666.020 217.352,640.095 C-2.161,567.274 -60.308,320.428 65.294,175.176 C207.109,11.176 414.712,18.885 508.658,82.588 C615.101,154.765 680.034,39.621 727.466,13.599 C843.477,-50.047 1014.036,123.513 959.517,253.371 C897.826,400.314 766.709,345.013 715.405,478.430 Z"/>
				</svg>
						</div>
					</li>
				</ul>
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<h2 class="heading-main-title">Customers Feedback</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
					 data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
					 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="2" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
						
					 <?php

$get_reviews = "select * from reviews";

$run_reviews  = mysqli_query($con,$get_reviews);

$i=0;

while($row_reviews  = mysqli_fetch_array($run_reviews )){

     $r_id = $row_reviews['r_id'];

     $r_name = $row_reviews['r_name'];

     $r_img = $row_reviews['r_img'];

     $r_profession = $row_reviews['r_profession'];

     $r_desc = $row_reviews['r_desc'];

     

     $i++;
     

?>
					 
					 
					 <div class="testimonial-box-layout3">
							<div class="media">
								<img src="media/reviewer/<?php echo $r_img; ?>" alt="Testimonial">
								<div class="media-body space-sm">
									<h3 class="item-title"> <?php echo $r_name; ?></h3>
									<div class="item-designation"> <?php echo $r_profession; ?></div>
								</div>
							</div>
							<p>                         
								
							<?php echo $r_desc; ?>
                           
						   </p>
							<ul class="rating-wrap">
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<div class="item-icon">
								<i class="flaticon-quote"></i>
							</div>
						</div>

					
						<?php } ?>
					</div>
				</div>
			</section>


			<!--=====================================-->
			<!--=    Testimonial Section Area End   =-->
			<!--=====================================-->