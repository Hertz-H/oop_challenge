<?php
$connection_string=mysqli_connect("localhost","root","","e-commerce");
$product_description=$_POST["description"];
$product_price=$_POST["price"];

$images_dir='images/';
$product_name=$_POST["name"];
$name_parts=explode(".",$_FILES['image']["name"]);
$ext=end($name_parts);
$allowed_ext=array('png','jpg','jpeg');
if(in_array($ext,$allowed_ext)){
   $new_file_name=time().".".$ext;
   if(move_uploaded_file($_FILES['image']["tmp_name"],$images_dir.$new_file_name)){
      mysqli_query($connection_string,"insert into products values(null,'$product_name', '$product_price','$new_file_name', '$product_description',3,1 )" );
      $affected_rows=mysqli_affected_rows($connection_string);
      if($affected_rows){
         header("Location:product.php");
      };

   }
}
else {
    echo "file type is not allowed ";
}


                           
                              
                              ?>
         <?php