<?php

include("../includes/db.php");


?>


<script>
if(!localStorage.getItem('phone')){
  window.open('../index.php','_self');
}

</script>

   

<?php

include("../includes/sidebar.php");

?>
    <div class="main-panel"  style="margin: -0.5rem!important;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Project</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      
  
 <?php

$target_p_id= $_GET['project_id'];
      
  
$get_target_project= "select * from projects where p_id='$target_p_id' ";
$run_target_project= mysqli_query($con,$get_target_project);

if($row_target_project = mysqli_fetch_array($run_target_project)){

       $target_p_title= $row_target_project['p_title'];

       $target_p_desc = $row_target_project['p_desc'];

       $target_p_category = $row_target_project['p_category'];

     
  
}

?>



<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="p_title">Project Title:</label>
      <input type="text" class="form-control"  value="<?php echo $target_p_title; ?>" name="p_title" required>
    </div>


    <label style=" font-weight: 1000;
    color: white;" for="p_category">Select Project Category:</label>
    <div class="form-group"  >
     

      <select name="p_category" class="form-control" id="categorySelector" style="   
       background: white;
    color: #171111;
    font-weight: 600;
    text-align: center;
    width: 50%;" required>
    <option selected disabled  hidden>Choose Category</option>
       <?php
                           
                 

                           $get_cat = "select * from category";
                           
                           $run_cat  = mysqli_query($con,$get_cat);
                           
                           $i=0;
                           
                           while($row_cat  = mysqli_fetch_array($run_cat )){
                           
                                $cat_id = $row_cat['cat_id'];
                           
                                $cat_title = $row_cat['cat_title'];
                           
                                
                           
                                
                           
                           
                           
                                $i++;
                                
                           
                         
       ?>

       <option value="<?php echo $cat_id; ?>" <?php  
       if($target_p_category == $cat_id){
        echo "selected='true' ";
       }
           ?>>  <?php echo $cat_title; ?> </option>

       <?php } ?>
         
      </select>
    </div>

    <div class="form-group"  >
      <h4 style=" font-weight: 1000;
    color: white; text-align: center;" >All the Slider Photo of <?php echo $target_p_title; ?>:</h4>
    
</div>


  <div class="project_photo_container">
  <?php
  $get_target_project_slider= "select * from pro_details_slider where p_project_id='$target_p_id' ";
  $run_target_project_slider= mysqli_query($con,$get_target_project_slider);
  $number_of_slider= mysqli_num_rows($run_target_project_slider);
  $p=0;
  $defaultSlider = new SplFixedArray($number_of_slider+2);

  $a_id_slider = new SplFixedArray($number_of_slider+2);
  $r=0;

  while($row_target_project_slider = mysqli_fetch_array($run_target_project_slider)){

     $target_p_d_id = $row_target_project_slider['p_d_id'];
     $target_p_d_img = $row_target_project_slider['p_d_img'];

     $p++;
     $r++;

   

        $defaultSlider[$r]= $target_p_d_img;
    
    
        $a_id_slider[$r]= $target_p_d_id;
   
 ?>

     <img id="showImg" class='img-fluid' style='width:50%; margin-bottom:10px' 
     src="../../media/project/<?php echo $target_p_d_img; ?>" 
    >

 <div class='input-group mb-3'>
     <div class='row' style='width: 100%;'>
     <div class='col-md-1'>
         <label style=' font-weight: 1000;color: white;' for=''>Photo <?php echo $p; ?>:</label>
    </div>
    <div class='col-md-11'>
        <div class='custom-file'>
            <input style='display: block;width: 100%;background: white;border-radius: 9px;padding: 4px;'
              class='ml-2' name='p_slider<?php echo $p; ?>' 
              type='file' 
              value="../../media/project/<?php echo $target_p_d_img; ?>"
              >
        </div>
    </div>
</div>
</div>
     
  <?php } ?>
  </div>

<div class="form-group"  >
      <h4 style=" font-weight: 1000;
    color: white; text-align: center;" >All the aspects of <?php echo $target_p_title; ?>:</h4>
    
</div>


<div class="project_aspect_container">
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

     

     

  
        $defaultAspect[$r]= $target_p_aspect_title;
  

        $a_id_Aspect[$r]= $target_p_a_id;
   
 ?>
 
 <div class='form-group'  >
     <label style=' font-weight: 1000;color: white;' for='p_aspect'>Aspect <?php echo $p; ?>:</label>
     <input id='num_aspect' type='text' class='form-control'  value="<?php echo $target_p_aspect_title; ?>"
      name='p_aspect<?php echo $p; ?>' required></div>

     
  <?php } ?>

</div>



 <label style=" font-weight: 1000;color: white;" class="mt-4" >Project Description:
 </label> 

<div class="form-group"><!-- form-group Begin -->
                   
                  
                   
                
                       <div class="mt-2">
                       <textarea id="mytextarea" rows="20" name="p_desc"  placeholder="Enter Project Details Descriptions..." class=""><?php echo $target_p_desc; ?></textarea>

                       </div>
                     
                  
</div><!-- form-group Finish -->

  


    <input type="submit" value="Update" name="update" class="btn btn-primary"/>
</form>





        <?php

        if(isset($_POST['update'])){

          $p_title = $_POST['p_title'];

          $p_category = $_POST['p_category'];

          $p_desc = $_POST['p_desc'];

          $p_sliderNumber = $number_of_slider-1;

          $p_AspectNumber = $number_of_aspect-1;

          $arrayAspect = new SplFixedArray($p_AspectNumber+3);

          for( $i=1; $i<=$p_AspectNumber+1; $i++){
              $arrayAspect[$i]= $_POST["p_aspect".$i];
              echo "No".$i.$arrayAspect[$i];
          }
          


          $arraySliderImg = new SplFixedArray($p_sliderNumber+3);

          $arraySliderImgTempName = new SplFixedArray($p_sliderNumber+3);

          for( $i=1; $i<=$p_sliderNumber+1; $i++){
              $arraySliderImg[$i]= $_FILES["p_slider".$i]['name'];
              if(!$arraySliderImg[$i]){
                $arraySliderImg[$i] = $defaultSlider[$i];
              }
              $arraySliderImgTempName[$i] =$_FILES['p_slider'.$i]['tmp_name'];
              move_uploaded_file($arraySliderImgTempName[$i],"../../media/project/$arraySliderImg[$i]");
          }

          
          





          $update_project = "update  projects set p_title='$p_title',p_desc='$p_desc',p_category='$p_category'
           where p_id=$target_p_id ";
          $run_project_update =mysqli_query($con,$update_project);

          if($run_project_update){

            for($t=1;$t<=$number_of_aspect; $t++){

                $update_aspects = "update  pro_details_aspects set p_a_title='".$arrayAspect[$t]."'
           where p_a_id=$a_id_Aspect[$t] ;";
          echo $update_aspects;
           
          $run_aspect_update =mysqli_query($con,$update_aspects);

            }

            for($t=1;$t<=$number_of_slider; $t++){

                $update_sliders = "update  pro_details_slider set p_d_img='".$arraySliderImg[$t]."'
           where p_d_id='$a_id_slider[$t]' ;";
          $run_slider_update =mysqli_query($con,$update_sliders);

            }
            
                  
            echo "<script>alert('Your Project Has Been Updated Successfuly')</script>";
            echo "<script>window.open('editProject.php?project_id=$target_p_id','_self')</script>";

         

            
        }
        else{
            echo "<script>alert('Your Team Member Update Failed!')</script>";
            echo "<script>window.open('editProject.php?t_id=$target_p_id','_self')</script>";
  
        }

        }  
    
        ?>




   
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Robin</a> for a better web.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin" style="top: 53px;right: 8px;">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
      <span class="material-icons" style="    font-size: 34px;">
view_module
</span>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        
      
      </ul>
    </div>
  </div>

  

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.minf066.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
  
  </script>
  <script>
  var sidebar= document.querySelector(".sidebar");
  document.querySelector(".navbar-toggler").addEventListener("click", myFunction);
  let test=1;

  function myFunction() {

  if (test === 1) {
    sidebar.style.transform = 'translate3d(0px, 0px, 0px)';
    test=0;

  } else {
    sidebar.style.transform = 'translate3d(260px, 0px, 0px)';
    test=1;
   
  }
}

// if(test === 1){
//   $(document).click(function(event) { 
//   var $target = $(event.target);
//   console.log($target.closest('.sidebar').length)
//   if(!$target.closest('.sidebar').length && 
//   sidebar.style.transform == 'translate3d(0px, 0px, 0px)') {
//     sidebar.style.transform = 'translate3d(260px, 0px, 0px)';
//     console.log("yes")
//   }        
// });
// }



</script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


</html>









 