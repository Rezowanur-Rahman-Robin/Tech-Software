<?php
 
 include("../includes/db.php");



if(isset($_GET['delete_id'])){
        
  $delete_id = $_GET['delete_id'];
  
  $do_delete_id= "delete from food_item where item_id='$delete_id'";
  
  $run_delete = mysqli_query($con,$do_delete_id);
  
  if($run_delete){
      
      echo "<script>alert('Successfully Deleted!')</script>";
      
      echo "<script>window.open('items.php','_self')</script>";
      

  }

  else{
      echo "<script>alert('Delation Failed!')</script>";
      echo "<script>window.open('items.php','_self')</script>";
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
        
        <div class="row">
          <div class="col-md-12">
          <a href="create.php?type=items" class="btn btn-info float-right mb-2 mr-3"><span class="material-icons mr-1" style=" font-size: 24px;">add_circle</span>Create New Items</a>
          </div>
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center font-weight-bold">Food Items</h4>
                <p class="card-category text-center"> Here's all the list of food items.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-light">
                      <th style="color: white;font-weight: 700;">
                        No
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Title
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Menu 
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Category
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Price
                      </th>

                      <th style="color: white;font-weight: 700;">
                        Image
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Description
                       </th>
                       
                       <th style="color: white;font-weight: 700;">
                       Type
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Edit
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Delete
                       </th>

                       
                       
                    </thead>
                    <tbody>

                    <?php

$get_items = "select * from food_item";

$run_items = mysqli_query($con,$get_items);

$i=0;

while($row_items = mysqli_fetch_array($run_items)){

     $item_id = $row_items['item_id'];

     $item_title = $row_items['item_title'];

     $item_menu = $row_items['item_menu'];



     $select_menu = "select * from food_menu where food_menu_id=$item_menu";

     $run_select_menu = mysqli_query($con,$select_menu);

     if($row_select_menu= mysqli_fetch_array($run_select_menu)){
       $menu_name= $row_select_menu['food_menu_title'];
     }



     $item_cat = $row_items['item_cat'];
     $select_cat = "select * from food_category where food_cat_id=$item_cat";

     $run_select_cat = mysqli_query($con,$select_cat);

     if($row_select_cat= mysqli_fetch_array($run_select_cat)){
       $cat_name= $row_select_cat['food_cat_title'];
     }

     $item_price = $row_items['item_price'];

     $item_img = $row_items['item_img'];

     $item_desc = $row_items['item_desc'];

     $item_desc= substr($item_desc,0,30).".....";

     if($row_items['item_gallary_type']!=''){
      $item_gallary_type = $row_items['item_gallary_type'];

     }else{
      $item_gallary_type='';
     }


   
     

     $i++;
     

?> 
                      <tr>
                        <td>
                        <?php echo $i; ?>
                        </td>
                        <td>
                        <?php echo $item_title; ?>
                        </td>
                        <td>
                        <?php echo $menu_name; ?>
                        </td>
                        <td>
                          <p>  <?php echo $cat_name; ?></p>
                        </td>

                        
                        <td>
                         <p><?php echo $item_price; ?>tk</p>
                        </td>

                        <td>
                        <img width="70px"  style="max-height:80px" src="../../images/item-images/<?php echo $item_img; ?>" alt="">
                        </td>


                        <td>
                          <p><?php echo $item_desc; ?></p>
                        </td>

                        <td>
                        <?php 
                        if($item_gallary_type==''){

                          ?>

<a href="modal.php?item_id=<?php echo $item_id;?>" >  <span  class="material-icons" style="cursor: pointer;">create</span></a>
                          <?php

                        }else{
                          echo $item_gallary_type;
                        }
                     
                        
                        
                        ?> 
                        </td>
                        
                        <td>
                          <a href="edit.php?type=items&&item_id=<?php echo $item_id ;?>">  <span class="material-icons text-success">border_color</span></a>
                        </td>

                        
                        <td>
                        <a href="items.php?delete_id=<?php echo $item_id ?>">  <span class="material-icons text-danger">clear</span>  </a>
                        </td>

                      </tr>


            


                     <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Select Gallary Type:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="" method="post">
    <div class="form-group">
      <label  style=" font-weight: 1000;
    color: white;" for="gallary_type">Title:</label>
       <div class="form-check" required>
      <label class="form-check-label" for="radio1">
        <input type="radio"  id="radio1" name="gallary_type"  value="1.<?php echo $item_id; ?>" >Food 
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio"  id="radio2" name="gallary_type"  value="2.<?php echo $item_id; ?>">Restaurant
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion3" value="3.<?php echo $item_id; ?>"  name="gallary_type">Buffet
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4" value="4.<?php echo $item_id; ?>"name="gallary_type">Special
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4"  value="5.<?php echo $item_id; ?>"name="gallary_type">None
      </label>
    </div>

    </div>
   
    <input type="submit" name="type_submit" class="btn btn-primary"/>
  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    <?php
    
    if(isset($_POST['type_submit'])){
      $gallary_type_array = $_POST['gallary_type'];
      explode(".",$gallary_type_array);
      $gallary_type= $gallary_type_array[0];
      $id=$gallary_type_array[2];


      switch($gallary_type){
        case '1':
          $type= "Food";
        case '2':
          $type= "Restaurant";
        case '3':
          $type = "Buffet";
        case '4':
          $type = "Special";
        default:
          $type='';

      }


      if($run_type){
     
        echo "<script>window.open('items.php?id=$item_id&&type=$type','_self')</script>";
        
    }


    
      $insert_type = "update food_item set item_gallary_type ='$type'  where item_id = '$id' ";
      $run_type =mysqli_query($con,$insert_type);
    
      if($run_type){
        echo "<script>alert('Your Gallary Type Insertion $id   !')</script>";
       
        
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
