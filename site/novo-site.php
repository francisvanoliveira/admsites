<h1>Novo Site</h1>

<?php
include('protect.php');
?>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label>Cliente</label>
    <input type="text" name="cliente" class="form-control">
  </div>
  <div class="mb-3">
    <label>Site</label>
    <input type="text" name="site" class="form-control">
  </div>
  <div class="mb-3">
    <label>Endereço Site</label>
    <input type="text" name="ac_site" class="form-control">
  </div>
  <div class="mb-3">
    <label>Endereço Painel</label>
    <input type="text" name="ac_wp" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>