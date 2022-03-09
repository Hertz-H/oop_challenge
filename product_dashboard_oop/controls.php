<?php
include('DatabaseClass.php');
$db_obj=new DatabaseClass();
// $result=$db_obj->display('products');
print_r($_GET);
if($_GET["action"]=='delete' && $_GET["type"]=='products')
{
    $affected_rows= $db_obj->delete('products',$_GET["name"]) ;
    if( $affected_rows>0){
        header("Location:product.php");
    }
   else{
       echo"can not delete";
   }
}
elseif($_GET["action"]=="update"&&$_GET["type"]=="products"){
    $product_id=$_POST["id"];
    $product_name=$_POST["name"];
    $product_price=$_POST["price"];
    $product_desc=$_POST["description"];
    $affected_rows= $db_obj->update('products',$_POST["id"],$_POST["name"],$_POST["price"],$_POST["description"]) ;
    if( $affected_rows>0){
        header("Location:product.php");
    }
   else{
       echo"can not updated";
   }
}
  
  ?>