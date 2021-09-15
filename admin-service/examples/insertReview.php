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
    color: white;" for="r_name">Reviewer Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Category Title" name="r_name" required>
    </div>

  

    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
      
     <div class="col-md-1">
     <label style=" font-weight: 1000;
    color: white;" for="r_img">Image:</label>
     </div>
     <div class="col-md-11">
     <div class="custom-file">
     
    <input style="display: block;
    width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="r_img" type="file" required>
  
  </div>

</div>

</div>
</div>


<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="r_pro">Reviewer Profession:</label>
      <input type="text" class="form-control"  placeholder="Enter Reviewer Profession" name="r_pro" required>
</div>

<label style=" font-weight: 1000;color: white;" >Review </label> 

    <div class="form-group"><!-- form-group Begin -->
                       
                      
                       
                    
                           <div class="mt-2">
                           <textarea id="mytextarea" name="r_desc"  placeholder="Enter the review" class=""></textarea>

                           </div>
                         


                       
                        
    </div><!-- form-group Finish -->


   
    <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</form>




        <?php
        if(isset($_POST['submit'])){
          $r_name = $_POST['r_name'];
          
          $r_pro = $_POST['r_pro'];

          $r_desc = $_POST['r_desc'];

          $r_image = $_FILES['r_img']['name'];

          $temp_name =$_FILES['r_img']['tmp_name'];

          move_uploaded_file($temp_name,"../../media/reviewer/$r_image");




          $insert_review = "insert into reviews (r_name,r_img,r_profession,r_desc)
           values ('$r_name','$r_image','$r_pro','$r_desc') ";
          $run_review =mysqli_query($con,$insert_review);

          if($run_review){
                  
            echo "<script>alert('Your New Review Has Been Inserted Successfuly')</script>";
            
        }
        else
        {
          echo "<script>alert('Your New Review Insertion Failed!')</script>";
            
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
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
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
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


</html>









 