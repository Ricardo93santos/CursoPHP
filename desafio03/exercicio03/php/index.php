<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado Converção</title>
  <script src="js/script.js"></script>
</head>
<body>
  <header>
    <h1>Conversor de Moedas V1.0</h1>
  </header>
  <main>
    <?php 
      $valor = (float)$_POST["valor"];

      function converterMoeda($valor){
        $valorDolar = 5.22;
        $cambio = $valor/$valorDolar;
        return number_format($cambio, 2);
      }
      $cambio = converterMoeda($valor);

      echo "<p> Seus R$ $valor equivalem a U$$ $cambio</p>";
    ?>

    <p><strong>*Cotação fixa de R$5,22</strong></p>
    <input type="button" id="btnVoltar" value="Voltar">
  </main>
</body>
</html>