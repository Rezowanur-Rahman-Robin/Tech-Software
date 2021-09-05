<?php

include("../includes/db.php");



if(isset($_GET['type'])){
    $type= $_GET['type'];

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
      if($type == 'menus'){
    
     ?>

<form action="" class="form-horizontal" method="post">
    <div class="form-group"  >
      <label style=" font-weight: 1000;
    color: white;" for="menu_title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Menu Title" name="menu_title" required>
    </div>
   
    <input type="submit" value="Submit" name="menu_submit" class="btn btn-primary"/>
</form>


        <?php
        if(isset($_POST['menu_submit'])){
          $menu_title = $_POST['menu_title'];

          $insert_menu = "insert into food_menu (food_menu_title) values ('$menu_title') ";
          $run_menu =mysqli_query($con,$insert_menu);

          if($run_menu){
                  
            echo "<script>alert('Your New Menu Has Been Inserted Successfuly')</script>";
            
            echo "<script>window.open('create.php?type=menus','_self')</script>";
            
        }
        else
        {
          echo "<script>alert('Your New Menu Insertion Failed!')</script>";
            
        }

        }  
      }else if($type=='categories'){
        ?>
          <form action="" method="post">
    <div class="form-group">
      <label  style=" font-weight: 1000;
    color: white;" for="category_title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Category Title" name="category_title" required>
    </div>
   
    <input type="submit" name="category_submit" class="btn btn-primary"/>
  </form>
        <?php

if(isset($_POST['category_submit'])){
  $category_title = $_POST['category_title'];

  $insert_category = "insert into food_category (food_cat_title) values ('$category_title') ";
  $run_category =mysqli_query($con,$insert_category);

  if($run_category){
          
    echo "<script>alert('Your New Category Has Been Inserted Successfuly')</script>";
    
    echo "<script>window.open('create.php?type=categories','_self')</script>";
    
}
else
{
  echo "<script>alert('Your New Category Insertion Failed!')</script>";
    
}

} 
         
      }else if($type=="items"){
        ?>
  <form action="" method ="post" enctype="multipart/form-data">  
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="item_title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Item Title" name="item_title" required>
    </div>

   
    <label style=" font-weight: 1000;
    color: white;" class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Menu</label>
  <select  name="item_menu" class="custom-select my-1 mr-sm-2 mb-2" id="inlineFormCustomSelectPref" required>
  <option selected>Choose...</option>
  <?php 
    $get_menus= "select * from food_menu";
    $run_menus = mysqli_query($con,$get_menus);
    while($row_menus = mysqli_fetch_array($run_menus)){
      $menu_id = $row_menus['food_menu_id'];
      $menu_title = $row_menus['food_menu_title'];
    
  ?>
   
    <option value="<?php echo $menu_id; ?>"><?php echo $menu_title; ?></option>

    <?php } ?>

  </select>

  <label style=" font-weight: 1000;
    color: white;" class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Category</label>
  <select name="item_category" class="custom-select my-1 mr-sm-2 mb-2" id="inlineFormCustomSelectPref" required>
  <option selected>Choose...</option>
  <?php 
    $get_cats= "select * from food_category";
    $run_cats = mysqli_query($con,$get_cats);
    while($row_cats = mysqli_fetch_array($run_cats)){
      $cat_id = $row_cats['food_cat_id'];
      $cat_title = $row_cats['food_cat_title'];
    
  ?>
    <option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?></option>

    <?php } ?>
  </select>


  <div class="form-group  mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="item_price">Price:</label>
      <input type="number" class="form-control"  placeholder="Enter Item Price" name="item_price" required>
    </div>

    <div class="alert alert-warning">
     Width should be 960px and height should be 640px.
     </div>   

    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
      
     <div class="col-md-1">
     <label style=" font-weight: 1000;
    color: white;" for="item_image">Image:</label>
     </div>
     <div class="col-md-11">
     <div class="custom-file">
     
    <input style="display: block;
    width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="item_image" type="file" required>
  
  </div>
     </div>
    </div>
   
  
 
</div>

    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="item_desc">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Item Description" name="item_desc" required>
    </div>
  
    <input type="submit" name="item_submit" class="btn btn-primary"/>
  </form>
        <?php

        
if(isset($_POST['item_submit'])){
  $item_title = $_POST['item_title'];

  $item_menu = $_POST['item_menu'];

  $item_category = $_POST['item_category'];

  $item_price = $_POST['item_price'];

  $item_desc = $_POST['item_desc'];
  
  $item_image = $_FILES['item_image']['name'];

  $temp_name =$_FILES['item_image']['tmp_name'];

  move_uploaded_file($temp_name,"../../images/item-images/$item_image");

  

  $insert_item = "insert into food_item (item_title,item_menu,item_cat,item_price,item_desc,item_img) values ('$item_title','$item_menu','$item_category','$item_price','$item_desc','$item_image') ";
  $run_item =mysqli_query($con,$insert_item);

  if($run_item){
          
    echo "<script>alert('Your New Item Has Been Inserted Successfuly')</script>";
    
    echo "<script>window.open('create.php?type=items','_self')</script>";
    
}
else
{
  echo "<script>alert('Your New Category Insertion Failed!')</script>";
  echo "<script>window.open('create.php?type=items','_self')</script>";
    
}

} 

      }else if($type == "slider"){

        ?>
 <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="slider_title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Slider Title" name="slider_title" required>
    </div>


    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="slider_desc">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Slider Description" name="slider_desc" >
    </div>

    
    <div class="alert alert-warning">
     Width should be 1800px and height should be 1200px.
     </div>   
    
    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
     <div class="col-md-2">
     <label style=" font-weight: 1000;
    color: white;" for="slider_image">Slider Image:</label>
     </div>
     <div class="col-md-10">
     <div class="custom-file">
    <input style="display: block;
    width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="slider_image" type="file" required>
   
  </div>
     </div>
    </div>
   
  
 
</div>
  
    <input type="submit" name="slider_submit" class="btn btn-primary"/>
  </form>

        <?php

             
if(isset($_POST['slider_submit'])){
  $slider_title = $_POST['slider_title'];

  $slider_desc = $_POST['slider_desc'];

  $slider_image = $_FILES['slider_image']['name'];

  $slider_temp_name =$_FILES['slider_image']['tmp_name'];

  move_uploaded_file($slider_temp_name,"../../images/slider-images/$slider_image");

  

  $insert_slider = "insert into slider (slider_title,slider_text,slider_img) values ('$slider_title','$slider_desc','$slider_image') ";
  $run_slider =mysqli_query($con,$insert_slider);

  if($run_slider){
          
    echo "<script>alert('Your New Slider Has Been Inserted Successfuly!')</script>";
    
    echo "<script>window.open('create.php?type=slider','_self')</script>";
    
}
else
{
  echo "<script>alert('Your New Slider Insertion Failed!')</script>";
  echo "<script>window.open('create.php?type=slider','_self')</script>";
    
}

}



      }else if($type=="services"){
        ?>
    <form action="" method="post">
    <div class="alert alert-warning">
     Try to write within 25 charecters.
      </div>   
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="service_title">Service Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Service Short Description" name="service_title">
    </div>

  
    <button type="submit" name="service_submit" class="btn btn-primary">Submit</button>
  </form>

        <?php

            
if(isset($_POST['service_submit'])){
  $service_title = $_POST['service_title'];



  $insert_service = "insert into services (service_desc) values ('$service_title') ";
  $run_service =mysqli_query($con,$insert_service);

  if($run_service){
          
    echo "<script>alert('Your New Service Has Been Inserted Successfuly!')</script>";
    
    echo "<script>window.open('create.php?type=services','_self')</script>";
    
}
else
{
  echo "<script>alert('Your New Service Insertion Failed!')</script>";
  echo "<script>window.open('create.php?type=services','_self')</script>";
    
}

}



      }else if($type=="admins"){
        ?>
 <form action="" method ="post" enctype="multipart/form-data">

 <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="admin_name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="admin_name">
    </div>

    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="admin_phn">Phone:</label>
      <input type="number" class="form-control"  placeholder="Enter Phone no" name="admin_phn">
    </div>

    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="admin_password">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter Password" name="admin_password">
    </div>
    
    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
     <div class="col-md-2">
     <label style=" font-weight: 1000;
    color: white;" for="admin_image">Admin Image:</label>
     </div>
     <div class="col-md-10">
     <div class="custom-file">
    <input style="display: block;
    width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="admin_image" type="file">
   
  </div>
     </div>
    </div>
   
  
 
</div>
  
    <input type="submit" name="admin_submit" class="btn btn-primary"/>
  </form>

        <?php

     
if(isset($_POST['admin_submit'])){

  $admin_name = $_POST['admin_name'];

  $admin_phn = $_POST['admin_phn'];

  $get_this_admin= "select * from admins where admin_phn = $admin_phn";

  $run_this_admin=mysqli_query($con,$get_this_admin);

  if(mysqli_num_rows($run_this_admin)==1){
    echo "<script>alert('Your have already an account with this Phone no.')</script>";
    
    echo "<script>window.open('create.php?type=admins','_self')</script>";
    
  }else{

    $admin_password = $_POST['admin_password'];
  
    $admin_image = $_FILES['admin_image']['name'];
  
    $temp_name =$_FILES['admin_image']['tmp_name'];
  
    move_uploaded_file($temp_name,"../../images/other-images/$admin_image");
  
    
  
    $insert_admin = "insert into admins (admin_name,admin_phn,admin_pass,admin_image) values ('$admin_name','$admin_phn','$admin_password','$admin_image') ";
    $run_admin =mysqli_query($con,$insert_admin);
  
    if($run_admin){
            
      echo "<script>alert('Your New Admin Has Been Inserted Successfuly')</script>";
      
      echo "<script>window.open('create.php?type=admins','_self')</script>";
      
  }
  else
  {
    echo "<script>alert('Your New Admin Insertion Failed!')</script>";
    echo "<script>window.open('create.php?type=admins','_self')</script>";
      
  }
  }


} 

      } 
        ?>
   
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
  <script>
  
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


</html>


    <?php } ?>







 