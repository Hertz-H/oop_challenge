<?php
include('DatabaseClass.php');
// $db_obj=new DatabaseClass();
$prod_obj=new productClass();
$cat_obj=new catClass();



// $result=$db_obj->display('products');
print_r($_GET);
print_r($_FILES);
if($_GET["action"]=='delete' )
{ 
        if($_GET["type"]=='products'){
            $affected_rows= $prod_obj->delete('products',$_GET["name"]) ;
            if( $affected_rows>0){
                header("Location:product.php");
            }
        else{
            echo"can not delete";
        }
     }
     if($_GET["type"]=='category'){
        $affected_rows= $cat_obj->delete('category',$_GET["name"]) ;
        if( $affected_rows>0){
            header("Location:categories.php");
        }
       else{
           echo"can not delete";
       }
     }

}

elseif($_GET["action"]=="update"){
    print_r($_FILES);
   if($_GET["type"]=="products"){
    $images_dir='images/';
    $product_name=$_POST["name"];
    $name_parts=explode(".",$_FILES['image']["name"]);
    $ext=end($name_parts);
    $allowed_ext=array('png','jpg','jpeg');
    if(in_array($ext,$allowed_ext)){
       $new_file_name=time().".".$ext;
       if(move_uploaded_file($_FILES['image']["tmp_name"],$images_dir.$new_file_name)){

          $affected_rows= $prod_obj->update('products',$_POST["id"],$_POST["name"],$_POST["price"],$new_file_name,$_POST["description"],3,1) ;
          if( $affected_rows>0){
              header("Location:product.php");
          }
         else{
             echo"can not updated";
         }
    
       }
    }
    else {
        echo "file type is not allowed ";
    }
    
   
    }
    if($_GET["type"]=="category"){
        $affected_rows= $cat_obj->update('category',$_POST["id"],$_POST["name"]) ;
        if( $affected_rows>0){
            header("Location:categories.php");
        }
       else{
           echo"can not updated";
       }
}
}
else if($_GET["action"]=="add"&&isset($_POST)){
    if($_GET["type"]=="category"){
        $affected_rows= $cat_obj->add('category',$_POST["name"],1) ;
        if( $affected_rows>0){
            header("Location:categories.php");
        }
       else{
           echo"can not added";
       }
  }
  elseif($_GET["type"]=="products"){
    
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
              $affected_rows= $prod_obj->add('products',$_POST["name"], $_POST["price"],$new_file_name,$_POST["description"] ) ;
              if( $affected_rows>0){
                  header("Location:product.php");
              }
             else{
                 echo"can not added";
             }
        }
        
           }
        }
        else {
            echo "file type is not allowed ";
        }
        
        
      
  }


  ?>