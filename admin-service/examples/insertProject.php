<!DOCTYPE html>
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


    <div class="main-panel " style="margin: -0.5rem!important;">
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
      
  
 

<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="p_title">Project Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Project Title" name="p_title" required>
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

       <option value="<?php echo $cat_id; ?>"> <?php echo $cat_title; ?> </option>

       <?php } ?>
         
      </select>
    </div>

    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="p_sliderNumber">How many photo you want to insert for slider?</label>
      <input id="num_slider"  type="number" class="form-control"  placeholder="Enter total slider number" name="p_sliderNumber" required>
      <a class="btn btn-warning btn-small selectSliderNumberButton">
        Create
      </a>
    </div>


  <div class="project_photo_container">
 
  </div>

<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="p_sliderAspect">How many aspects you want to insert?</label>
      <input id="num_aspect" type="number" class="form-control"  placeholder="Enter total aspects number" name="p_sliderAspect" required>
      <a class="btn btn-warning btn-small selectAspectNumberButton">
        Create
      </a>
</div>


<div class="project_aspect_container">

</div>



 <label style=" font-weight: 1000;color: white;" class="mt-4" >Project Description:
 </label> 

<div class="form-group"><!-- form-group Begin -->
                   
                  
                   
                
                       <div class="mt-2">
                       <textarea id="mytextarea" rows="20" name="p_desc"  placeholder="Enter Project Details Descriptions..." class=""></textarea>

                       </div>
                     
                  
</div><!-- form-group Finish -->

  


    <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</form>




        <?php
        
        if(isset($_POST['submit'])){


          $p_title = $_POST['p_title'];

          $p_category = $_POST['p_category'];

          $p_desc = $_POST['p_desc'];

          $p_sliderNumber = $_POST['p_sliderNumber'];

          $p_AspectNumber = $_POST['p_sliderAspect'];

          $arrayAspect = new SplFixedArray($p_AspectNumber+1);

          for( $i=1; $i<=$p_AspectNumber; $i++){
              $arrayAspect[$i]= $_POST["p_aspect".$i];
          }


          $arraySliderImg = new SplFixedArray($p_sliderNumber+1);

          $arraySliderImgTempName = new SplFixedArray($p_sliderNumber+1);

          for( $i=1; $i<=$p_sliderNumber; $i++){
              $arraySliderImg[$i]= $_FILES["p_slider".$i]['name'];
              $arraySliderImgTempName[$i] =$_FILES['p_slider'.$i]['tmp_name'];
              move_uploaded_file($arraySliderImgTempName[$i],"../../media/project/$arraySliderImg[$i]");
          }


        //   $a_img = $_FILES['a_img']['name'];

        //   $temp_name =$_FILES['a_img']['tmp_name'];

        //   move_uploaded_file($temp_name,"../../media/admin/$a_img");
         

         



        $insert_project = "insert into projects (p_title,p_desc,p_category)
           values ('$p_title','$p_desc','$p_category') ";

        $run_project =mysqli_query($con,$insert_project);
        
        if($run_project){

            $get_project = "select * FROM projects ORDER BY p_id DESC LIMIT 1";

            $run_get_project = mysqli_query($con,$get_project);

            if($row_get_project = mysqli_fetch_array($run_get_project)){

                $target_p_id = $row_get_project['p_id'];

            $insert_aspects = "insert into pro_details_aspects (p_a_title,p_project_id) values ";
            for( $i=1; $i<=$p_AspectNumber; $i++){

                if($i<$p_AspectNumber){
                    $insert_aspects  =$insert_aspects."('".$arrayAspect[$i]."',".$target_p_id."),";
                }else{
                    $insert_aspects  =$insert_aspects."('".$arrayAspect[$i]."',".$target_p_id.")";

                }

            } 

         

     

            
           $run_project_aspect =mysqli_query($con,$insert_aspects);

           if($run_project_aspect){

            $insert_slider = "insert into pro_details_slider (p_d_img,p_project_id) values ";
            for( $i=1; $i<=$p_sliderNumber; $i++){

                if($i < $p_sliderNumber){
                    $insert_slider  = $insert_slider."('".$arraySliderImg[$i]."',".$target_p_id."),";

                }else{
                    $insert_slider  = $insert_slider."('".$arraySliderImg[$i]."',".$target_p_id.")";

                }

            } 

        

            

           $run_project_slider =mysqli_query($con,$insert_slider);

           if($run_project_aspect){
            echo "<script>alert('Project Has Been Inserted Successfuly')</script>";
           }else{
            echo "<script>alert('Project Insertion Failed!!!')</script>"; 
           }

           }
            

            }

            

        }
        

         
    

       




          //$insert_admin = "insert into admins (admin_name,admin_phn,admin_image,admin_pass)
           //values ('$a_name','$a_phn','$a_img','$a_pass') ";

        //   $run_admin =mysqli_query($con,$insert_admin);

        //   if($run_admin){
                  
        //     echo "<script>alert('Your New Admin Has Been Inserted Successfuly')</script>";
            
        // }
        // else
        // {
        //   echo "<script>alert('Your New Admin Insertion Failed!')</script>";
            
        // }

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

  <script>

      var sliderNumber = document.getElementById("num_slider");

      var aspectNumber = document.getElementById("num_aspect");

      var sliderButton = document.querySelector(".selectSliderNumberButton");

      var aspectButton = document.querySelector(".selectAspectNumberButton");

      var photoContainer = document.querySelector(".project_photo_container");

      var aspectContainer = document.querySelector(".project_aspect_container");
 
 

      sliderButton.addEventListener("click", buildPhotoElement)

      aspectButton.addEventListener("click", buildAspectElement)

      
      
      function buildPhotoElement(){

        photoContainer.innerHTML ="";
        let sumElement="";


        for(let i = 0 ; i<sliderNumber.value ; i++){


            var photoElement = "<div class='input-group mb-3'><div class='row' style='width: 100%;'><div class='col-md-1'><label style=' font-weight: 1000;color: white;' for='p_slider'>Photo " +(i+1)+":</label></div><div class='col-md-11'><div class='custom-file'><input style='display: block;width: 100%;background: white;border-radius: 9px;padding: 4px;'  class='ml-2' name='p_slider"+(i+1)+ "' type='file' required></div></div></div></div>"

            sumElement = sumElement + photoElement;

            photoContainer.innerHTML=sumElement;
       }
      }

function buildAspectElement(){

    aspectContainer.innerHTML ="";
let sumElementAspect="";


for(let i = 0 ; i<aspectNumber.value ; i++){


    var aspectElement = "<div class='form-group'  ><label style=' font-weight: 1000;color: white;' for='p_aspect'>Aspect "+(i+1)+ ":</label><input id='num_aspect' type='text' class='form-control'  placeholder='Write the aspect "+(i+1)+ "' name='p_aspect"+(i+1)+ "' required></div>";

    sumElementAspect = sumElementAspect + aspectElement;

    aspectContainer.innerHTML=sumElementAspect;
}
}
     

      

  </script>

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









 