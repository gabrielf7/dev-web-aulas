<?php 

  $myconexao = new mysqli("localhost", "root", "", "mydb_primeirosistemaa");

  if($myconexao->connect_error){
    die("Error during connection. Status: Error".$myconexao->connect_error);
      
  }

?>