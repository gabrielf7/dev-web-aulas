<?php 

  require ("connect.php");

?>

<?php 

  $name_register = $_POST['name_register'];
  $cpf_register = $_POST['cpf_register'];
  $descricao_register = $_POST['descricao_register'];

  // echo $name_register;
  // echo $cpf_register;
  // echo $descricao_register;

  $insert = "INSERT INTO tbl_register (name_register, cpf_register, descricao_register)VALUES('$name_register', '$cpf_register', '$descricao_register')";
  $data_db = mysqli_query($myconexao, $insert);

  if($data_db == TRUE) {
    echo '
      <script>
        alert("Concluido com sucesso.");
        window.location.href = "show_register.php";
      </script>
    ';
  }else{
    echo "Ocorreu algum problema. Erro: " . $connectiondb->error;
  }
?>
