
<?php
session_start();

if(isset($_SESSION['admin_phn'])){
  $target_phn=$_SESSION["admin_phn"];

}else{
  $target_phn= 0;
 
}

  include("../includes/db.php");
  
  
  
  
                   
  $get_admin_info= "select * from admins where admin_phn=$target_phn";
  
  $run_admin_info = mysqli_query($con,$get_admin_info);
  if($row_admin_info = mysqli_fetch_array($run_admin_info)){
  
    $admin_name = $row_admin_info['admin_name'];
  
    $admin_image = $row_admin_info['admin_image'];
  
    
  }else{
    $admin_name = 'Admin';
  
    $admin_image = 'admin.png';
  }








?>

<script>
if(!localStorage.getItem('phone')){
  window.open('../index.php','_self');
}

function getAdmin_id(){
  if(localStorage.getItem('admin_id')){
   var adminId=localStorage.getItem('admin_id');

   console.log(adminId);

   return adminId;

}
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
            <a class="navbar-brand" href="javascript:void(0)">Admin Profile</a>
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
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title font-weight-bold">Edit Profile</h4>
                  <p class="card-category">Change your Password</p>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Old Password</label>
                          <input type="text" name="old_pass" class="form-control" required>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">New Password</label>
                          <input type="text" name="new_pass" class="form-control" required>
                        </div>
                      </div>
                    </div>
                        <input type="submit" value="Change" name="change_pass_submit" class="btn btn-primary pull-right"/>
                    <div class="clearfix"></div>
                  </form>
           <?php 
           
           if(isset($_POST['change_pass_submit'])){
            $old_pass = $_POST['old_pass'];

            $new_pass = $_POST['new_pass'];
          
            $update_password = "update admins set admin_pass ='$new_pass'  where admin_phn=$target_phn";
            $run_password =mysqli_query($con,$update_password);
          
            if($run_password){
                    
              echo "<script>alert('Your New Password Has Been Updated Successfuly')</script>";
              
              echo "<script>window.open('user.php','_self')</script>";
              
          }
          else
          {
            echo "<script>alert('Your New Password Updation Failed!')</script>";
            echo "<script>window.open('user.php','_self')</script>";

          }
          
          }
           
           ?>
                  
                </div>
              </div>
            </div>
            

            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../../images/other-images/<?php echo $admin_image; ?>" />
                  </a>
                </div>

                <div class="card-body">
                  <h6 class="card-category">Admin</h6>
                  <h4 class="card-title"><?php echo $admin_name;  ?></h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#" class="btn btn-primary btn-round">Follow</a>
                </div>

               
              </div>
            </div>
          </div>
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
  
  <!-- Sharrre libray -->
  <script src="../assets/demo/jquery.sharrre.js"></script>
 
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/user.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:54 GMT -->
</html>
