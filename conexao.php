<?php 
  $con = new \PDO('mysql:host=localhost;dbname=sys', 'root', 'Asaph@123');
  $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  echo"Conexao com Sucesso";