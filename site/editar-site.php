<h1>Editar Site</h1>
<?php

  include('protect.php');

  $sql = "SELECT * FROM sites WHERE id=".$_REQUEST["id"];
  $res = $mysqli->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Cliente</label>
    <input type="text" name="cliente" value="<?php print $row->cliente; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Site</label>
    <input type="text" name="site" value="<?php print $row->site; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Endereço Site</label>
    <input type="text" name="ac_site" value="<?php print $row->ac_site; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Endereço Painel</label>
    <input type="text" name="ac_wp" value="<?php print $row->ac_wp; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>