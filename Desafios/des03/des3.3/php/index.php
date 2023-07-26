<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado Converção</title>
  <script src="../js/script.js"></script>
</head>
<body>
  <header>
    <h1>Conversor de Moedas V1.0</h1>
  </header>
  <main>
    <?php 
      $valor = (float)$_POST["valor"] ?? 0;

    
      //Conversão usando a função number_format para fazer formatação monetária.

      function converterMoeda($valor){
        $valorDolar = 5.22;
        $cambio = $valor/$valorDolar;
        return number_format($cambio, 2, ",", ".");
      }
      $cambio = converterMoeda($valor);
      $valor_real = number_format($valor, 2, ",", ".");

      echo "<p> Seus R$$valor_real equivalem a US$$cambio</p>";

     /* 
      //Conversão usando a biblioteca intil, para formatação monetária

      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Para alterar o padrão basta trocar a string do idioma do país, "us", "pt_PT", "ru_RU

      function converterMoeda($valor){
        $valorDolar = 5.22;
        $cambio = $valor/$valorDolar;
        return $cambio;
      }
      $cambio = converterMoeda($valor);

      echo "<p> Seus" .  numfmt_format_currency($padrao, $valor, "BRL") ." equivalem a " . numfmt_format_currency($padrao, $cambio, "USD") ."</p>";
      */
    ?>

    <p><strong>*Cotação fixa de R$5,22</strong></p>
    <input type="button" id="btnVoltar" value="Voltar">
  </main>
</body>
</html>