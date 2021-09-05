

<?php
 
 include("../includes/db.php");
 


if(isset($_GET['delete_id'])){
        
  $delete_id = $_GET['delete_id'];
  
  $do_delete_id= "delete from slider where slider_id='$delete_id'";
  
  $run_delete = mysqli_query($con,$do_delete_id);
  
  if($run_delete){
      
      echo "<script>alert('Successfully Deleted!')</script>";
      
      echo "<script>window.open('slider.php','_self')</script>";
      

  }

  else{
      echo "<script>alert('Delation Failed!')</script>";
      echo "<script>window.open('slider.php','_self')</script>";

  }
  
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
            <a class="navbar-brand" href="javascript:void(0)">Slider List</a>
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
      <div class="col-md-12">
            <a href="create.php?type=slider" class="btn btn-info float-right mb-2 mr-3 " > <span class="material-icons mr-1" style=" font-size: 24px;">add_circle</span>Create New Slider</a>
        </div>

        <?php

$get_sliders = "select * from slider";

$run_sliders = mysqli_query($con,$get_sliders);

$i=0;

while($row_sliders = mysqli_fetch_array($run_sliders)){

     $slider_id = $row_sliders['slider_id'];

     $slider_title = $row_sliders['slider_title'];

     $slider_text = $row_sliders['slider_text'];

     $slider_img = $row_sliders['slider_img'];

   

     $i++;
     

?>


   <div class="col-md-6">
        <div class="card">
    <div class="card-body">
    <img  class="card-img-top img-fluid" src="../../images/slider-images/<?php echo $slider_img; ?>" alt="Card image" style="width:100%;" >
      <h4 class="card-title"><?php echo $slider_title; ?></h4>

      <p><?php echo $slider_text; ?></p>
      
      <a href="slider.php?delete_id=<?php echo $slider_id; ?>" class="btn btn-danger btn-block">Delete</a>
    </div>
     </div>
    </div>

    <?php } ?>

    
   
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
  <!-- Sharrre libray -->
  <script src="../assets/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });



      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/slider.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:54 GMT -->
</html>
