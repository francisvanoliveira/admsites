<?php
  switch($_REQUEST["acao"]){
    case 'cadastraruser':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];

      $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Usuario Casdastrador com sucesso!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }else {
        print "<script>alert('Não foi possível cadastrar!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }
    break;
    
    case 'editaruser':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];

      $sql = "UPDATE usuarios SET
                  nome='{$nome}',
                  email='{$email}',
                  senha='{$senha}'
              WHERE
                  id=".$_REQUEST["id"];

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Editado com sucesso!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }else {
        print "<script>alert('Não foi possível Editar!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }
    break;

    case 'excluiruser':
      $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Excluído com sucesso!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }else {
        print "<script>alert('Não foi possível Excluir Usuario!');</script>";
        print "<script>location.href='?page=listarusuario';</script>";
      }
    break;
  }

?>