
	
			
			<!--=====================================-->
			<!--=     Brand Section Area Start      =-->
			<!--=====================================-->
			<section id="brand-wrap-layout1" class="brand-wrap-layout1 bg-color-accent2">
				<div class="container">

				<h2 class="text-center" style="font-family: 'Poppins', sans-serif;" >Our Clients</h2> <hr>
				  
					<div class="rc-carousel" data-loop="true" data-items="8" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
					 data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="5"
					 data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="6" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
						
					 <?php

$get_clients = "select * from clients";

$run_clients  = mysqli_query($con,$get_clients);

$i=0;

while($row_clients  = mysqli_fetch_array($run_clients )){

     $c_id = $row_clients['c_id'];

     $c_title = $row_clients['c_title'];

     $c_img = $row_clients['c_img'];


     



     $i++;
     

?>

					 <div class="brand-box-layout1"><img src="media/client/<?php echo $c_img; ?>" alt="<?php echo $c_title; ?>"></div>

 <?php } ?>
                 			
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=      Brand Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->