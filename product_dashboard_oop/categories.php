<?php
include('DatabaseClass.php');
// $db_obj=new DatabaseClass();
$db_obj=new  catClass();
$result=$db_obj->display('category');
?>


<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Document</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<link rel='stylesheet' href='stylesheets/profile.css'>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>


</head>
<body>

<div class='dashboard_cont'>
<div class='container '>
    <!-- <div class='header_line'> -->
      <header class=''>
     
        <div class='navbar navbar-dark  '>
                    <div class='container nav_container '>
                        <span class='navbar-brand'>
                          <div class='user_img m-auto '>
                            <img  class=''src='/images/profile.jpg' alt=''>
                        </div>
                        </span>
                        <button class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navbar-cont'>
                          <i class='fas fa-bars'>
                          </i>
                        </button>
                        <div class='navbar-collapse collapse ' id='navbar-cont' >
                            <ul class='navbar-nav '>
                                <li class='nav-item'><a href='' class='nav-link active colored'> <i class='fas fa-user'></i><span  > Personal Info</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link '> <i class='fas fa-user'></i><span  > Experince</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > Education</span></a></li>
                                <li class='nav-item'><a href='' class='nav-link'>  <i class='fas fa-user'></i><span  > Courses</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link'><i class='fas fa-user'></i><span  > skills</span> </a></li>
                                <li class='nav-item'><a href='' class='nav-link nav_icons'><i class='fas fa-user'></i><span  > log out</span> </a></li>
    
                            </ul>
                        </div>
                    </div>
                </div>    
        </header>
      
    <!-- </div> -->
    <div class='dashboard d-flex  ' style='gap:70px'>
        
        <div class='form-container  '>
            <div class='skills_info'>
                <h3 class='d-inline'> categories</h3> <a class='add add_skls 'href='add_product.php'> add</a>
                            <div class='row g-2'>
                              
              
                            <!-- data-bs-toggle='modal' data-bs-target='#exampleModal' -->
                              <div class='col-12'>
                              <?php
                              //   $connection_string=mysqli_connect("localhost","root","","e-commerce");
                              //  $result=mysqli_query($connection_string,"select * from products" );
                                $index=0;
                               while($row=mysqli_fetch_assoc($result)){
                                  echo "
                                  <div class='card'>
                                  <div class='card-body'>
                                    <h5 class='card-title'><i  id='icon_cont'>".$row['name']."</i>  </h5>
                                  
                                    <a href='edit_category.php?name=".$row['id']."&&type=category&&action=update' ><i class='fas fa-edit'>update</i></a>  <a href='controls.php?name=".$row['id']."&&type=category&&action=delete' ><i class='fas fa-edit'>delete</i></a>
                                    
                                   
                                  </div>
                              </div>
                            
                              
                             
                              ";$index;
                               }

                              //  <a href='edit_product.php?name=".$row['id']." class=' edit btn edit_icon' ><i class='fas fa-edit'>update</i></a>  <a href='delete.php?name=".$db_obj->delete('products',$row['id'],'product.php')."class=' edit btn edit_icon' ><i class='fas fa-trash'>delete</i></a>

                                    // <a href='edit_product.php?name=".$row['id']." class=' edit btn edit_icon' ><i class='fas fa-edit'>update</i></a>  <a href='' class=' edit btn edit_icon' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fas fa-trash'>delete</i></a>
                               
                                  // <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              //         <div class='modal-dialog'>
                              //           <div class='modal-content'>
                              //             <div class='modal-header'>
                              //               <h5 class='modal-title' id='exampleModalLabel'>Delete</h5>
                              //               <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                              //             </div>
                              //             <div class='modal-body'>
                              //             Are Sure You want to delete
                              //             </div>
                              //             <div class='modal-footer'>
                              //               <button type='button' class='btn btn-success' data-bs-dismiss='modal'>Cancel</button>
                              //               <a href='contact/delete?name='><button type='button' class='btn btn-danger'>Confirm</button></a>
                              //             </div>
                              //           </div>
                              //         </div>
                              //       </div>
                                ?>
                              <?php
                            // print_r($_POST);
                            // print_r($_GET);
                            // print($_POST["id"]);

                            // $product_id=$_GET["name"];
                            // $affected_rows=mysqli_query($connection_string,"delete from products where id='$product_id'" );
                            //     if( $affected_rows>0){
                            //       header("Location:product.php");
                            //     }
                              // $product_name=$_POST["name"];//$_POST['description']
                              // $product_description=$_POST["description"];
                              // $product_price=$_POST["price"];

                              // mysqli_query($connection_string,"insert into products values(null,'$product_name', '$product_price', '$product_description' )" );
                              // $affected_rows=mysqli_affected_rows($connection_string);
                              // echo "$affected_rows";
                              
                              // ?>
                            <?php
  //   $product_id=$_POST["id"];
  //  $product_name=$_POST["name"];
  //  $product_price=$_POST["price"];
  //  $product_desc=$_POST["description"];
  //  $affected_rows=mysqli_query($connection_string,"update products set name='$product_name', price=' $product_price',description='$product_desc' where id='$product_id'" );
  
  ?>
                            
                            </div>
                            
                </div>
              </div>
          </div>
    </div>



 

</div>
</div>
</div>

</body>





