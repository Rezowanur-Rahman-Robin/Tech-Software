

<?php
 
 include("includes/db.php");
?>

			<!--=     Gallery Section Area Start    =-->
			<!--=====================================-->
			<section class="gallery-wrap-layout1 section-padding-top-md bg-color-light">
				<div class="container">
					<div class="section-heading heading-light heading-layout1">
						<h2 class="heading-main-title">Project Gallery</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
				</div>
				<div class="container-fluid">
				<div class="row zoom-gallery rc-carousel nav-control-layout5 col-full-width owl-carousel owl-loaded owl-drag" data-options='{"trigger_start": 2099, "trigger_end": 0}' data-loop="true" data-items="30" data-margin="10" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700"
					 data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true"
					 data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
						
					                      
					 <?php

$get_projects = "select * from projects";

$run_projects  = mysqli_query($con,$get_projects);

$i=0;

while($row_project  = mysqli_fetch_array($run_projects )){

     $p_id = $row_project['p_id'];

     $p_title = $row_project['p_title'];

     $p_desc = $row_project['p_desc'];

     $p_category_id = $row_project['p_category'];


     
    $get_category = "select * from category where cat_id='$p_category_id' ";

    $run_category   = mysqli_query($con,$get_category);

    if($row_category = mysqli_fetch_array($run_category)){
        $cat_title = $row_category['cat_title'];


		$get_target_project_slider= "select * from pro_details_slider where p_project_id='$p_id' limit 1 ";
		$run_target_project_slider= mysqli_query($con,$get_target_project_slider);
		
	  
		if($row_target_project_slider = mysqli_fetch_array($run_target_project_slider)){
	  
		   $target_p_d_id = $row_target_project_slider['p_d_id'];
		   $target_p_d_img = $row_target_project_slider['p_d_img'];
    



     $i++;
	 ?>
     

					 <div class="col-lg-3 col-12">
							<div class="gallery-box-layout1">
								<div class="item-figure">
									<img src="media/project/<?php echo $target_p_d_img; ?>" alt="gallery" class="gallary_img" >
								</div>
								<div class="item-content">
									<div class="item-icon">
										<a href="media/project/<?php echo $target_p_d_img; ?>" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
									</div>
									<h3 class="item-title"><a href="projectDetails.php"><?php echo $p_title ; ?></a></h3>
									<p><?php echo $cat_title ; ?></p>
								</div>
							</div>
						</div>

<?php 
		}
}
} ?>
						
					</div>
					<div class="text-center mt-3">
						<a href="allproject.php" class="btn-fill btn-gradient">View More<i class="flaticon-next"></i></a>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=      Gallery Section Area End     =-->