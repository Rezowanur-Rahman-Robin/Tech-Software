<?php

include("../includes/db.php");



if(isset($_GET['type']) || isset($_GET['menu_id']) || isset($_GET['category_id']) || isset($_GET['item_id'])){
    $type= $_GET['type'];

    if($type=="menus"){
      $target_menu_id= $_GET['menu_id'];
      
  
      $get_target_menu= "select * from food_menu where food_menu_id=$target_menu_id";
      $run_target_menu= mysqli_query($con,$get_target_menu);
  
      if($row_target_menu = mysqli_fetch_array($run_target_menu)){
             $target_menu_title= $row_target_menu['food_menu_title'];
      }
    }
    else if($type == "categories"){

      $target_cat_id=$_GET['category_id'];

      $get_target_category= "select * from food_category where food_cat_id=$target_cat_id";
      $run_target_category= mysqli_query($con,$get_target_category);
  
      if($row_target_category = mysqli_fetch_array($run_target_category)){
             $target_cat_title= $row_target_category['food_cat_title'];
      }
    }else if($type == "items"){

      $target_item_id=$_GET['item_id'];

      $get_target_item= "select * from food_item where item_id=$target_item_id";
      $run_target_item= mysqli_query($con,$get_target_item);
  
      if($row_target_item = mysqli_fetch_array($run_target_item)){
             $target_item_title= $row_target_item['item_title'];

             $target_item_menu= $row_target_item['item_menu'];

             $target_item_cat= $row_target_item['item_cat'];

             $target_item_price= $row_target_item['item_price'];

             $target_item_img= $row_target_item['item_img'];

             $target_item_desc= $row_target_item['item_desc'];

             
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
    <div class="form-group">
      <label style=" font-weight: 1000;
    color: white;" for="menu_title">Title:</label>
      <input type="text" class="form-control"  value="<?php echo $target_menu_title;  ?>" name="menu_title">
    </div>
   
    <input type="submit" value="Update" name="menu_update" class="btn btn-primary"/>
</form>


        <?php 
        
        if(isset($_POST['menu_update'])){
          $menu_title = $_POST['menu_title'];

          $update_menu = "update food_menu set food_menu_title ='$menu_title'  where food_menu_id=$target_menu_id";
          $run_menu =mysqli_query($con,$update_menu);

          if($run_menu){
                  
            echo "<script>alert('Your New Menu Has Been Updated Successfuly')</script>";
            
            echo "<script>window.open('menus.php','_self')</script>";
            
        }
        else
        {
          echo "<script>alert('Your New Menu Updation Failed!')</script>";
            
        }

        } 
        
      }else if($type=='categories'){
        ?>
          <form action="" method="post">
    <div class="form-group">
      <label  style=" font-weight: 1000;
    color: white;" for="category_title">Title:</label>
      <input type="text" class="form-control"  value="<?php echo $target_cat_title;  ?>"  name="category_title">
    </div>
   
    <input type="submit" value="Update" name="category_update" class="btn btn-primary"/>
  </form>
        <?php

if(isset($_POST['category_update'])){
  $category_title = $_POST['category_title'];

  $update_category = "update food_category set food_cat_title ='$category_title'  where food_cat_id=$target_cat_id";
  $run_category =mysqli_query($con,$update_category);

  if($run_category){
          
    echo "<script>alert('Your New Category Has Been Updated Successfuly')</script>";
    
    echo "<script>window.open('categories.php','_self')</script>";
    
}
else
{
  echo "<script>alert('Your New Category Updation Failed!')</script>";
    
}

}
         
      }else if($type=="items"){
        ?>
        <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="item_title">Title:</label>
      <input type="text" class="form-control" value ="<?php echo $target_item_title; ?>"  placeholder="Enter Item Title" name="item_title" required>
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

    <option <?php  if($target_item_menu==$menu_id){echo "Selected";}  ?> value="<?php echo $menu_id; ?>"><?php echo $menu_title;  ?></option>

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
    <option <?php  if($target_item_cat==$cat_id){echo "Selected";}  ?> value="<?php echo $cat_id; ?>" ><?php echo $cat_title;  ?></option>

    <?php } ?>
  </select>


  <div class="form-group  mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="item_price">Price:</label>
      <input type="number" value="<?php echo $target_item_price; ?>" class="form-control" required  placeholder="Enter Item Price" name="item_price">
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
     <img src="../../images/item-images/<?php echo $target_item_img; ?>"  width="150" height= "150" alt="">
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
      <input type="text"  value="<?php echo $target_item_desc; ?>" class="form-control"  placeholder="Enter Item Description" name="item_desc" required>
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
    
      
    
      $insert_item = "update food_item set item_title='$item_title',item_menu='$item_menu',item_cat='$item_category',item_price='$item_price',item_desc='$item_desc',item_img='$item_image' where item_id='$target_item_id' ";
      $run_item =mysqli_query($con,$insert_item);
    
      if($run_item){
              
        echo "<script>alert('Your New Item Has Been Updated Successfuly')</script>";
        
        echo "<script>window.open('items.php','_self')</script>";
        
    }
    else
    {
      echo "<script>alert('Your New Category Insertion Failed!')</script>";
      echo "<script>window.open('items.php','_self')</script>";
        
    }
    
    } 

      }else if($type == "slider"){

        ?>
 <form action="">
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="slider_title">Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Slider Title" name="slider_title">
    </div>


    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="slider_desc">Description:</label>
      <input type="text" class="form-control"  placeholder="Enter Slider Description" name="slider_desc">
    </div>

    

    
    <div class="input-group mb-3">
    <div class="row" style="width: 100%;">
     <div class="col-md-2">
     <label style=" font-weight: 1000;
    color: white;" for="item_price">Slider Image:</label>
     </div>
     <div class="col-md-10">
     <div class="custom-file">
    <input style="display: block;
    width: 100%;
    background: white;
    border-radius: 9px;
    padding: 4px;"  class="ml-2" name="slider_image" type="file">
   
  </div>
     </div>
    </div>
   
  
 
</div>
  
    <button type="submit" name="slider_submit" class="btn btn-primary">Update</button>
  </form>

        <?php
      }else if($type=="services"){
        ?>
    <form action="">
    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="service_title">Service Title:</label>
      <input type="text" class="form-control"  placeholder="Enter Service Title" name="service_title">
    </div>

  
    <button type="submit" name="service_submit" class="btn btn-primary">Update</button>
  </form>

        <?php
      }else if($type=="admins"){
        ?>
 <form action="">

 <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="admin_name">Name:</label>
      <input type="number" class="form-control"  placeholder="Enter Name" name="admin_name">
    </div>

    <div class="form-group mb-2">
      <label style=" font-weight: 1000;
    color: white;" for="admin_phn">Phone:</label>
      <input type="number" class="form-control"  placeholder="Enter Phone no" name="admin_password">
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
  
    <button type="submit" name="admin_submit" class="btn btn-primary">Update</button>
  </form>

        <?php
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







 