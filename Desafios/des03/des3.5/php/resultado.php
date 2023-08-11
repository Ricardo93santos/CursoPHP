<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisador de Números Real - Resultado</title>
  <script src="../js/script.js"></script>
</head>
<body>
  <?php 
    $numero = $_POST["numero"] ?? 0;
    $numero_inteiro = (int) $numero;
    $numero_fracionado = $numero - $numero_inteiro;

    $numero_formatado = number_format($numero, 3, ",", ".");
    $numero_fracionado_formatado = number_format($numero_fracionado, 3, ",", ".");
    $numero_inteiro_formatado = number_format($numero_inteiro, 0, ",", ".");

    
    echo "<p>O número analisado é <strong>$numero_formatado</strong></p>";
    echo "
      <ul>
        <li>A parte inteira é <strong>$numero_inteiro_formatado</strong></li>
        <li>A parte fracionada é <strong>$numero_fracionado_formatado</strong></li>
      </ul>
    ";

  ?>
  <input type="button" id="btnVoltar" value="Voltar">
</body>
</html>