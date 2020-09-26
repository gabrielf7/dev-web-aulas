<?php 

  require ("connect.php");

?>

<?php 

  $query = "SELECT * FROM tbl_register";
  $sql_c = mysqli_query($myconexao, $query);

  if($sql_c == TRUE){
    while($row = mysqli_fetch_assoc($sql_c)) {
      echo '<div style="margin-top: 100px; display: flex; justify-content: center; ">';
      echo '<p>'. $row['name_register'] .'</p>'. '<br/>';
      echo '<p>'. $row['cpf_register'] .'</p>'. '<br/>';
      echo '<p>'. $row['descricao_register'] .'</p>'. '<br/>';
      echo '</div>';
    }
  }else{
    echo "Ocorreu algum problema. Erro: " . $connectiondb->error;
  }

?>