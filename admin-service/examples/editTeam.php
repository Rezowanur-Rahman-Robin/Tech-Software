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
            <a class="navbar-brand" href="javascript:void(0)">Team</a>
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

$target_t_id= $_GET['t_id'];
      
  
$get_target_team= "select * from teams where t_id='$target_t_id' ";
$run_target_team= mysqli_query($con,$get_target_team);

if($row_target_team = mysqli_fetch_array($run_target_team)){

       $target_t_name= $row_target_team['t_name'];

       $target_t_img = $row_target_team['t_img'];

       $target_t_role = $row_target_team['t_role'];
  
       $target_t_fb = $row_target_team['t_fb'];
  
       $target_t_twitter = $row_target_team['t_twitter'];
  
       $target_t_instragram = $row_target_team['t_instragram'];
  
}

?>


<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="t_name">Team Member Name:</label>
      <input type="text" class="form-control"  value="<?php echo $target_t_name; ?>" name="t_name" required>
    </div>

  
    <img id="showImg"  width='80' height='80' src="../../media/team/<?php echo $target_t_img; ?>" alt="<?php echo $target_t_name; ?>">

    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
      
     <div class="col-md-1">
     <label style=" font-weight: 1000;
    color: white;" for="t_img">Photo:</label>
     </div>
     <div class="col-md-11">
     <div class="custom-file">
     
    <input id="img_update" style="display: block;   width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="t_img" type="file"  value="../../media/team/<?php echo $target_t_img; ?>" >
  
  </div>

</div>

</div>
</div>


<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="t_role">Team member Position:</label>
      <input type="text" class="form-control"  value="<?php echo $target_t_role; ?>" name="t_role" required>
</div>


<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="t_fb">Team member Facebook link:</label>
      <input type="text" class="form-control"   value="<?php echo $target_t_fb; ?>" name="t_fb" >
</div>

<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="t_twitter">Team member Twitter link:</label>
      <input type="text" class="form-control"   value="<?php echo $target_t_twitter; ?>" name="t_twitter" >
</div>


<div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="t_instragram">Team member Instragram link:</label>
      <input type="text" class="form-control"  value="<?php echo $target_t_instragram; ?>"  name="t_instragram" >
</div>
   
    <input type="submit" value="Submit" name="update" class="btn btn-primary"/>
</form>




        <?php
        if(isset($_POST['update'])){
          $t_name = $_POST['t_name'];
          
          $t_role = $_POST['t_role'];

          $t_fb = $_POST['t_fb'];

          $t_twitter = $_POST['t_twitter'];

          $t_instragram = $_POST['t_instragram'];

        

          $t_img = $_FILES['t_img']['name'];

          if(!$t_img){
               $t_img = $target_t_img;
          }


          $temp_name =$_FILES['t_img']['tmp_name'];

          move_uploaded_file($temp_name,"../../media/team/$t_img");




          $update_team = "update  teams set t_name='$t_name',t_role='$t_role',t_fb='$t_fb',
          t_twitter='$t_twitter',t_instragram='$t_instragram',t_img='$t_img' where t_id='$target_t_id' ";
          $run_team_update =mysqli_query($con,$update_team);

          if($run_team_update){
                  
            echo "<script>alert('Your Team Member Has Been Updated Successfuly')</script>";
            echo "<script>window.open('editTeam.php?t_id=$target_t_id','_self')</script>";

            
        }
        else
        {
          echo "<script>alert('Your Team Member Update Failed!')</script>";
          echo "<script>window.open('editTeam.php?t_id=$target_t_id','_self')</script>";

            
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









 