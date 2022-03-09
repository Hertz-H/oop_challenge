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
    public function display($tb){
        $result=mysqli_query( $this->connection_string,"select * from $tb" );
        return  $result;
         
    }

    public function delete($tb,$id){
        $affected_rows=mysqli_query($this->connection_string,"delete from $tb where id=$id" );
        return  $affected_rows;
        
    }
    public function update($tb,$id,$name,$price,$description){
        // $affected_rows=mysqli_query($this->connection_string,"update $tb set price=$price  where id=$id" );
        $affected_rows=mysqli_query($this->connection_string,"update $tb set name='$name' , price=$price ,description='$description' where id=$id" );
        return  $affected_rows;
        
    }
}


?>