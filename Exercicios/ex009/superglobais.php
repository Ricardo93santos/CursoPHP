<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Superglobais no PHP</title>
</head>
<body>
  <pre>
    <?php 
      setcookie("dia_da_semana", "DOMINGO", time() + 3600);
      session_start();
      $_SESSION['user_id'] = 157;

      echo "<h1>Superglobal GET</h1>";
      var_dump($_GET);

      echo "<h1>Superglobal POST</h1>";
      var_dump($_POST);

      echo "<h1>Superglobal REQUEST</h1>";
      var_dump($_REQUEST);

      echo "<h1>Superglobal SESSION</h1>";
      var_dump($_SESSION);

      echo "<h1>Superglobal COOKIE</h1>";
      var_dump($_COOKIE);

      echo "<h1>Superglobal FILES</h1>";
      var_dump($_FILES);
      echo 'A superglobal $_FILES não tem nenhum array pois não foi enviado nenhum arquivo.';

      echo "<h1>Superglobal SERVER</h1>";
      var_dump($_SERVER);

      echo "<h1>Superglobal ENV</h1>";
      var_dump($_ENV);
    ?>
  </pre>
</body>
</html>