<?php

$product_name=$_POST["name"];//$_POST['description']
$connection_string=mysqli_connect("localhost","root","","e-commerce");
                              $product_description=$_POST["description"];
                              $product_price=$_POST["price"];

                              mysqli_query($connection_string,"insert into products values(null,'$product_name', '$product_price', '$product_description' )" );
                              $affected_rows=mysqli_affected_rows($connection_string);
                             if($affected_rows){
                                header("Location:product.php");
                             };
                              
                              ?>
         <?php