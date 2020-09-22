<?php 

  require ('index.php');

?>

<body>
    <div class="container my_container_main mt-5">
      <?php 

        $lista = array (
          1 => "maça",
          2 => "arroz",
          3 => "limão"
        );

        for ($contador = 1; $contador <= 3; $contador++){
          echo '<ul class="list-group text-center">';
          echo '<li class="list-group-item">'
            . $contador . ' => ' . $lista[$contador] 
          . '</li>';
          echo '</ul>';
        }

      ?>
      
        
    </div>

  </body>