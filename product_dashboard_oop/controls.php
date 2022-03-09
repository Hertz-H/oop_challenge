<?php
include('DatabaseClass.php');
$db_obj=new DatabaseClass();
// $result=$db_obj->display('products');
print_r($_GET);
if($_GET["action"]=='delete' )
{ 
        if($_GET["type"]=='products'){
            $affected_rows= $db_obj->delete('products',$_GET["name"]) ;
            if( $affected_rows>0){
                header("Location:product.php");
            }
        else{
            echo"can not delete";
        }
     }
     if($_GET["type"]=='category'){
        $affected_rows= $db_obj->delete('category',$_GET["name"]) ;
        if( $affected_rows>0){
            header("Location:categories.php");
        }
       else{
           echo"can not delete";
       }
     }

}

elseif($_GET["action"]=="update"){
   if($_GET["type"]=="products"){
    $affected_rows= $db_obj->update('products',$_POST["id"],$_POST["name"],$_POST["price"],$_POST["description"]) ;
    if( $affected_rows>0){
        header("Location:product.php");
    }
   else{
       echo"can not updated";
   }
    }
    if($_GET["type"]=="category"){
        $affected_rows= $db_obj->update_cat('category',$_POST["id"],$_POST["name"]) ;
        if( $affected_rows>0){
            header("Location:categories.php");
        }
       else{
           echo"can not updated";
       }
}
}

  ?>