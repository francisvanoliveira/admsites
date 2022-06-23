<?php
include('protect.php');
include("conexao.php");
?>


  

  <div class="container">
    <div class="header">
      <h1>Sites Desenvolvidos</h1>
      <h4>Usuario: <?php echo $_SESSION['nome']; ?></h4>
    </div>
    <?php

      $sql = "SELECT * FROM sites";

      $res = $mysqli->query($sql);

      $qtd = $res->num_rows;

      if($qtd > 0){
        print "<table class='table table-hover'>";
        print "<tr>";
        print "<th>Cliente</th>";
        print "<th>Site</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
          print "<tr>";
          print "<td>".$row->cliente."</td>";
          print "<td>".$row->site."</td>";
          print "<td>
                <a href='$row->ac_site' class='btn btn-primary' target='_blank'>Acessar</a>
                <a href='$row->ac_wp' class='btn btn-secondary' target='_blank'>WordPress</a>
          </td>";
          print "</tr>";
        }
        print "</table>";
      }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
      }

    ?>
  </div>

 