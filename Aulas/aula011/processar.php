<?php 
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    if($nome == "" || $sobrenome == ""){
      echo "Informe o nome e seu sobrenome";
    }else{
      echo "Olá, <strong>$nome $sobrenome</strong>, seu formulário foi enviado com sucesso!";
    }
  }
?>