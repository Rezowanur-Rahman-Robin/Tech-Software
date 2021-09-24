<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <link rel="shortcut icon" type="image/x-icon" href="../../media/we_tech-logo.png">


  <!--  Social tags      -->

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <script src="https://cdn.tiny.cloud/1/bwg0q0j9lxtive63e9uvn074bpdjtnbkd49jxu09mpp7tnb2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
             'advlist image autolink lists link  charmap print preview anchor',
             'searchreplace visualblocks code fullscreen',
             'insertdatetime media table paste code help wordcount'
           ],
    
 });
</script>
 
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

<body class="dark-edition" >


  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">


 
 
 <div class="sidebar"  data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
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

          

          <li class="nav-item ">
            <a class="nav-link" href="user.php">
            <i class="material-icons">account_circle</i>
              <p> My Profile </p>
            </a>
          </li>

          

          <li class="nav-item "><!-- li begin -->
           
           <a class="nav-link" href="#" data-toggle="collapse" data-target="#projects"><!-- a href begin -->
                   
             <i class="material-icons">
               table_view
             </i>
             <p>Projects<span class="material-icons">
               arrow_drop_down
               </span>
             </p>
             
                   <i class="fa fa-fw fa-caret-down"></i>
                   
           </a><!-- a href finish -->
           
           <ul id="projects" class="collapse"><!-- collapse begin -->
               <li><!-- li begin -->
                   <a href="currentProject.php" class="nav-link"> Current Projects </a>
               </li><!-- li finish -->
               <li><!-- li begin -->
                   <a href="insertProject.php" class="nav-link"> Insert Project</a>
               </li><!-- li finish -->
           
           </ul><!-- collapse finish -->
           
       </li><!-- li finish -->

         

          <li class="nav-item "><!-- li begin -->
           
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#category"><!-- a href begin -->
                    
            <i class="material-icons">content_paste</i>
              
              <p>Category <span class="material-icons">
                arrow_drop_down
                </span>
              </p>
              
                    <i class="fa fa-fw fa-caret-down"></i>
                    
            </a><!-- a href finish -->
            
            <ul id="category" class="collapse"><!-- collapse begin -->
                <li><!-- li begin -->
                    <a href="currentCategory.php" class="nav-link"> Current Categories </a>
                </li><!-- li finish -->
                <li><!-- li begin -->
                    <a href="insertCategory.php" class="nav-link"> Insert Category </a>
                </li><!-- li finish -->
            
            </ul><!-- collapse finish -->
            
        </li><!-- li finish -->

        <li class="nav-item "><!-- li begin -->
           
           <a class="nav-link" href="#" data-toggle="collapse" data-target="#review"><!-- a href begin -->
                   
           <i class="material-icons">library_books</i>
             
             <p>Review <span class="material-icons">
               arrow_drop_down
               </span>
             </p>
             
                   <i class="fa fa-fw fa-caret-down"></i>
                   
           </a><!-- a href finish -->
           
           <ul id="review" class="collapse"><!-- collapse begin -->
               <li><!-- li begin -->
                   <a href="currentReview.php" class="nav-link"> Current Reviews </a>
               </li><!-- li finish -->
               <li><!-- li begin -->
                   <a href="insertReview.php" class="nav-link"> Insert Review </a>
               </li><!-- li finish -->
           
           </ul><!-- collapse finish -->
           
       </li><!-- li finish -->



       <li class="nav-item "><!-- li begin -->
           
           <a class="nav-link" href="#" data-toggle="collapse" data-target="#team"><!-- a href begin -->
                   
           <i class="material-icons">bubble_chart</i>
             
             <p>Teams <span class="material-icons">
               arrow_drop_down
               </span>
             </p>
             
                   <i class="fa fa-fw fa-caret-down"></i>
                   
           </a><!-- a href finish -->
           
           <ul id="team" class="collapse"><!-- collapse begin -->
               <li><!-- li begin -->
                   <a href="currentTeam.php" class="nav-link"> Current Teams </a>
               </li><!-- li finish -->
               <li><!-- li begin -->
                   <a href="insertTeam.php" class="nav-link"> Insert Team </a>
               </li><!-- li finish -->
           
           </ul><!-- collapse finish -->
           
       </li><!-- li finish -->

       

       <li class="nav-item "><!-- li begin -->
           
           <a class="nav-link" href="" data-toggle="collapse" data-target="#clients"><!-- a href begin -->
                   
           <i class="material-icons">
                rule
                </i>
             
             <p>Clients <span class="material-icons">
               arrow_drop_down
               </span>
             </p>
             
                   <i class="fa fa-fw fa-caret-down"></i>
                   
           </a><!-- a href finish -->
           
           <ul id="clients" class="collapse"><!-- collapse begin -->
               <li><!-- li begin -->
                   <a href="currentClient.php" class="nav-link"> Current Clients </a>
               </li><!-- li finish -->
               <li><!-- li begin -->
                   <a href="insertClient.php" class="nav-link"> Insert Clients </a>
               </li><!-- li finish -->
           
           </ul><!-- collapse finish -->
           
       </li><!-- li finish -->

       <li class="nav-item "><!-- li begin -->
           
           <a class="nav-link" href="#" data-toggle="collapse" data-target="#jobs"><!-- a href begin -->
                   
           <i class="material-icons">
                settings_ethernet
                </i>
         
             
             <p>Jobs <span class="material-icons">
               arrow_drop_down
               </span>
             </p>
             
                   <i class="fa fa-fw fa-caret-down"></i>
                   
           </a><!-- a href finish -->
           
           <ul id="jobs" class="collapse"><!-- collapse begin -->
               <li><!-- li begin -->
                   <a href="currentJob.php" class="nav-link"> Current Jobs </a>
               </li><!-- li finish -->
               <li><!-- li begin -->
                   <a href="insertJob.php" class="nav-link"> Insert Job </a>
               </li><!-- li finish -->
           
           </ul><!-- collapse finish -->
           
       </li><!-- li finish -->
         

  



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

