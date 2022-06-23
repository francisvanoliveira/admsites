<h1>Editar Usuario</h1>
<?php

  include('protect.php');

  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $res = $mysqli->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=salvarusuario" method="POST">
  <input type="hidden" name="acao" value="editaruser">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Emial</label>
    <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" value="<?php print $row->senha; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>