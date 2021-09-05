<?php
 
 include("../includes/db.php");



if(isset($_GET['item_id'])){
        
  $item_id = $_GET['item_id'];
  
 
  
}


?>

<script>
if(!localStorage.getItem('phone')){
  window.open('../index.php','_self');
}

</script>

<?php

include("../includes/sidebar.php");

?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Items</a>
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
      
  

        
      <div class="container-fluid">
        
      <form action="" method="post">
    <div class="form-group">
      <label  style=" font-weight: 1000;
    color: white;" for="gallary_type">Select Gallary Type:</label>
       <div class="form-check" required>
      <label class="form-check-label" for="radio1">
        <input type="radio"  id="radio1" name="gallary_type"  value="1" >Food 
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio"  id="radio2" name="gallary_type"  value="2">Restaurant
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion3" value="3"  name="gallary_type">Buffet
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4" value="4" name="gallary_type">Special
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4"  value="5" name="gallary_type">None
      </label>
    </div>

    </div>
   
    <input type="submit" name="type_submit" class="btn btn-primary"/>
  </form>


  <?php
    
    if(isset($_POST['type_submit'])){
      $gallary_type = $_POST['gallary_type'];


      if($gallary_type == "1"){
          $type="Food";
      }else if ($gallary_type == "2"){
        $type= "Restaurant";

      }else if ($gallary_type == "3"){
        $type= "Buffet";

      }else if ($gallary_type == "4"){
        $type= "Special";

      }else{
        $type= "";
      }
    


    
      $insert_type = "update food_item set item_gallary_type ='$type'  where item_id = '$item_id' ";
      $run_type =mysqli_query($con,$insert_type);
    
      if($run_type){
        echo "<script>alert('Your Gallary Type Insertion  successfully Done!')</script>";
       
        
        echo "<script>window.open('items.php','_self')</script>";
        
    }
    else
    {
      echo "<script>alert('Your Gallary Type Insertion Failed!')</script>";
        
    }
    
    } 
     
     ?>


  </div>


    </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">RobTechBD Limited</a> for a better web.
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
 
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/items.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:54 GMT -->
</html>
