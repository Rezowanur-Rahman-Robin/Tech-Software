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
    <div class="main-panel"  style="margin: -0.5rem!important;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Category</a>
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
      
  
 

<form action="" class="form-horizontal" method="post">
    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="cat_title">Cateogy Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Category Title" name="cat_title" required>
    </div>
   
    <input type="submit" value="Submit" name="cat_submit" class="btn btn-primary"/>
</form>


        <?php
        if(isset($_POST['cat_submit'])){
          $cat_title = $_POST['cat_title'];

          $insert_cat = "insert into category (cat_title) values ('$cat_title') ";
          $run_cat =mysqli_query($con,$insert_cat);

          if($run_cat){
                  
            echo "<script>alert('Your New Category Has Been Inserted Successfuly')</script>";
            
        }
        else
        {
          echo "<script>alert('Your New Category Insertion Failed!')</script>";
            
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









 