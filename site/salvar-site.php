<?php
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $cliente = $_POST["cliente"];
      $site = $_POST["site"];
      $ac_site = $_POST["ac_site"];
      $ac_wp = $_POST["ac_wp"];

      $sql = "INSERT INTO sites (cliente, site, ac_site, ac_wp) VALUES ('{$cliente}', '{$site}', '{$ac_site}', '{$ac_wp}')";

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Site Casdastrador com sucesso!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }else {
        print "<script>alert('Não foi possível cadastrar!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
    break;
    
    case 'editar':
      $cliente = $_POST["cliente"];
      $site = $_POST["site"];
      $ac_site = $_POST["ac_site"];
      $ac_wp = $_POST["ac_wp"];

      $sql = "UPDATE sites SET
                  cliente='{$cliente}',
                  site='{$site}',
                  ac_site='{$ac_site}',
                  ac_wp='{$ac_wp}'
              WHERE
                  id=".$_REQUEST["id"];

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Editado com sucesso!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }else {
        print "<script>alert('Não foi possível Editar!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
    break;

    case 'excluir':
      $sql = "DELETE FROM sites WHERE id=".$_REQUEST["id"];

      $res = $mysqli->query($sql);

      if($res == true){
        print "<script>alert('Excluído com sucesso!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }else {
        print "<script>alert('Não foi possível Excluir!');</script>";
        print "<script>location.href='?page=listar';</script>";
      }
    break;
  }

?>