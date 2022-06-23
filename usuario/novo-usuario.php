<h1>Novo Usuário</h1>

<?php
include('protect.php');
?>

<form action="?page=salvarusuario" method="POST">
  <input type="hidden" name="acao" value="cadastraruser">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="mb-3">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control">
  </div>
  
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  
</form>