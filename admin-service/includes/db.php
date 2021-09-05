<?php

$con=mysqli_connect("localhost","root","","restaurant");
mysqli_query($con,'SET CHARACTER SET utf8'); 

mysqli_query($con,"SET SESSION collation_connection ='utf32_unicode_ci'");



?>