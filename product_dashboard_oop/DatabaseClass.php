<?php
class DatabaseClass {
    private $host = "localhost";
    private $username = "root"; 
    private $password = ""; 
    private $db = "e-commerce"; 
    private $connection_string;
    public  function __construct(){
        try{
            $this->connection_string=mysqli_connect($this->host,$this->username,$this->password,$this->db) ;

        }
   catch(error){
        echo" error in connection";
   }
    }
    public function display_product($tb){
        $result=mysqli_query( $this->connection_string,"select * from $tb where active=1 and cat_id in ( select id from category where active=1 )" );
            // select p.cat_id ,p.name ,p.price ,p.description ,c.name , c.id from $tb p join category c 
            //  on p.cat_id = c.id  where p.active=1 and c.active =1");
        return  $result;
         
    }
    public function display_cat($tb){
        $result=mysqli_query( $this->connection_string,"select * from $tb where active=1" );
        return  $result;
         
    }
    public function display_selected($tb,$id){
        $result=mysqli_query( $this->connection_string,"select * from $tb where id=$id" );
        return  $result;
         
    }
    public function delete($tb,$id){
        $affected_rows=mysqli_query($this->connection_string,"update $tb set active =0" );
        return  $affected_rows;
        
    }
    public function update($tb,$id,$name,$price,$description){
        // $affected_rows=mysqli_query($this->connection_string,"update $tb set price=$price  where id=$id" );
        $affected_rows=mysqli_query($this->connection_string,"update $tb set name='$name' , price=$price ,description='$description' where id=$id" );
        return  $affected_rows;
        
    }
    public function update_cat($tb,$id,$name){
        // $affected_rows=mysqli_query($this->connection_string,"update $tb set price=$price  where id=$id" );
        $affected_rows=mysqli_query($this->connection_string,"update $tb set name='$name'  where id=$id" );
        return  $affected_rows;
        
    }
}


?>