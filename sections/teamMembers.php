
			<!--=====================================-->
			<!--=      Team Section Area Start      =-->
			<!--=====================================-->
			<section id="team-wrap-layout1" class="team-wrap-layout1 section-padding-md">
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<h2 class="heading-main-title">Dedicated Team</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="row">
                      
					<?php

$get_teams = "select * from teams";

$run_teams  = mysqli_query($con,$get_teams);

$i=0;

while($row_teams  = mysqli_fetch_array($run_teams )){

     $t_id = $row_teams['t_id'];

     $t_name = $row_teams['t_name'];

     $t_img = $row_teams['t_img'];

     $t_role = $row_teams['t_role'];

     $t_fb = $row_teams['t_fb'];

     $t_twitter = $row_teams['t_twitter'];

     $t_instragram = $row_teams['t_instragram'];

     

     



     $i++;
     

?>

						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
								<div class="team-box-layout1">
									<div class="maks-item animted-bg-wrap">
										<span class="animted-bg"></span>
										<div class="item-figure">
											<img src="media/team/<?php echo $t_img; ?>" alt="<?php echo $t_name; ?>"  class="img-fluid mx-auto d-block" style="width:100%">
										</div>
										<ul class="social-items">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href=""><?php echo $t_name; ?></a></h3>
										<div class="sub-title">  <?php echo $t_role; ?></div>
									</div>
								</div>
							</div>
						</div>

<?php } ?>
			
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=       Team Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
	