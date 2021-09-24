
<?php
 
 include("includes/db.php");
?>
<?php

 $get_count_projects = "select * from projects";
     
 $run_count_projects = mysqli_query($con,$get_count_projects);

 $count_item_projects= mysqli_num_rows($run_count_projects);



 $get_count_careers = "select * from careers";

 $run_count_careers = mysqli_query($con,$get_count_careers);

 $count_item_careers= mysqli_num_rows($run_count_careers);



 
$get_count_teams = "select * from teams";

$run_count_teams = mysqli_query($con,$get_count_teams);

$count_item_teams= mysqli_num_rows($run_count_teams);



$get_count_clients = "select * from clients";

$run_count_clients = mysqli_query($con,$get_count_clients);

$count_item_clients= mysqli_num_rows($run_count_clients);

$now = time(); // or your date as well
$your_date = strtotime("2019-01-31");
$datediff = $now - $your_date;

$num_of_days= round($datediff / (60 * 60 * 24));

?>
	
	<!--=   Progress Section Area Start     =-->
			<!--=====================================-->
			<section class="progress-wrap-layout1 bg-gradient-layout2">
				<div class="progress-inner-wrap bg-position-center bg-no-repeat bg-size-cover parallaxie bg-size-cover bg-no-repeat bg-position-center" data-bg-image="media/element/element1.png">
					<div class="container zindex-level-2">
						<div class="row">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="progress-box-layout1">
									<h2 class="counting-text counter" data-num="<?php echo $count_item_clients; ?>"> <?php echo $count_item_clients; ?></h2>
									<div class="item-label">Happy Clients</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="progress-box-layout1">
									<h2 class="counting-text counter"  data-num="<?php echo $count_item_projects; ?>"><?php echo $count_item_projects; ?></h2>
									<div class="item-label">Projects Done</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="progress-box-layout1">
									<h2 class="counting-text counter"  data-num="<?php echo $num_of_days; ?>"><?php echo $num_of_days; ?></h2>
									<div class="item-label">Days Of Work</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="progress-box-layout1">
									<h2 class="counting-text counter"  data-num="<?php echo $count_item_teams; ?>"><?php echo $count_item_teams; ?></h2>
									<div class="item-label">Dedicated Members</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=    Progress Section Area End      =-->
			<!--=====================================-->