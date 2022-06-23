<h1>Listar Usuário</h1>
<?php

  include('protect.php');

  $sql = "SELECT * FROM usuarios";

  $res = $mysqli->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<table class='table table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$row->id."</td>";
      print "<td>".$row->nome."</td>";
      print "<td>".$row->email."</td>";
      print "<td>
            <button onclick=\"location.href='?page=editaruser&id=".$row->id."';\" class='btn btn-warning'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarusuario&acao=excluiruser&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
      </td>";
      print "</tr>";
    }
    print "</table>";
  }else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }

?>