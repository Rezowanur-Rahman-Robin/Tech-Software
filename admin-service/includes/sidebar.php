<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Admin Panel</title>

  <link rel="shortcut icon" type="image/x-icon" href="../../media/we_tech-logo.png">

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-dark" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
  <meta name="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard Dark Edition by Creative Tim">
  <meta itemprop="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard Dark Edition by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard Dark Edition by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="dashboard.php" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
 
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="dark-edition">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
 
 
 <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo img-fluid">
      <div class="container">
      <a href="dashboard.php">
      <img src="../../media/we_tech-logo.png" alt="" height="60"></div>
      </a>
      </div>
      
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item  ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>

          <li class="nav-item "><!-- li begin -->
           
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                    
              <i class="material-icons">
                table_view
              </i>
              <p>Gallary <span class="material-icons">
                arrow_drop_down
                </span>
              </p>
              
                    <i class="fa fa-fw fa-caret-down"></i>
                    
            </a><!-- a href finish -->
            
            <ul id="products" class="collapse"><!-- collapse begin -->
                <li><!-- li begin -->
                    <a href="foodGallary.php" class="nav-link"> Food Gallary </a>
                </li><!-- li finish -->
                <li><!-- li begin -->
                    <a href="restaurantGallary.php" class="nav-link"> Restaurant Gallary </a>
                </li><!-- li finish -->
                <li><!-- li begin -->
                  <a href="buffetGallary.php" class="nav-link"> Buffet Gallary </a>
              </li><!-- li finish -->
              <li><!-- li begin -->
                <a href="specialGallary.php" class="nav-link"> Special Gallary </a>
            </li><!-- li finish -->
            </ul><!-- collapse finish -->
            
        </li><!-- li finish -->

         

          <li class="nav-item ">
            <a class="nav-link" href="menus.php">
              <i class="material-icons">content_paste</i>
              <p>Menus</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="categories.php">
              <i class="material-icons">library_books</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="items.php">
              <i class="material-icons">bubble_chart</i>
              <p>Items</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="slider.php">
              <i class="material-icons">
                settings_ethernet
                </i>
              <p>Slider</p>
            </a>
          </li>
         

          <li class="nav-item ">
            <a class="nav-link" href="services.php">
              <i class="material-icons">
                rule
                </i>
              <p>Services</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="admins.php">
            <i class="material-icons">account_circle</i>
              <p>Admins</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
            <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
          </li>


        </ul>
      </div>
    </div>