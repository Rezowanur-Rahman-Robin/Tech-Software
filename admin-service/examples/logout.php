<script>
localStorage.removeItem("phone");
localStorage.removeItem("admin_id");

</script>

<?php 

    session_start();
    session_destroy();

    echo "<script>window.open('../index.php','_self')</script>";

?>

