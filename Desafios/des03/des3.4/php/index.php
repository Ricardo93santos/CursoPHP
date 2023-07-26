<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor V2.0</title>
  <script src="../js/script.js"></script>
</head>
<body>
  <header>
    <h1>Conversor V2.0</h1>
  </header>
  <main>
    <?php 
      $valorDolar = file_get_contents("https://api.hgbrasil.com/weather?woeid=452041");
      echo "$valorDolar"
    ?>
    <p><strong>*Cotação recebida pela API do Banco Central do Brasil</strong></p>
    <input type="button" id="btnVoltar" value="Voltar">
  </main>
</body>
</html>