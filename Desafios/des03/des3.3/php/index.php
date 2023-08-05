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

      //Valor do dolar, cotação manual via Google
      $valor_dolar = 5.22;

      //Valor do real, inserido pelo usuário via POST
      $valor_real = (float)$_POST["valor"] ?? 0;
    /*
      //Conversão usando a função number_format para fazer formatação monetária.

      function converterMoeda($valor_real, $valor_dolar){
        $cambio = $valor_real/$valor_dolar;
        return number_format($cambio, 2, ",", ".");
      }
      $cambio = converterMoeda($valor_real, $valor_dolar);
      
      $real_format = number_format($valor_real, 2, ",", ".");

      echo "<p> Seus R$$real_format equivalem a US$$cambio</p>";
    */
     
      //Conversão usando a biblioteca intil, para formatação monetária
      function converterMoeda($valor_real, $valor_dolar){

        $cambio = $valor_real/$valor_dolar;
        
        return $cambio;
      }
      $cambio = converterMoeda($valor_real, $valor_dolar);

      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Para alterar o padrão basta trocar a string do idioma do país, "us", "pt_PT", "ru_RU

      echo "<p> Seus" .  numfmt_format_currency($padrao, $valor, "BRL") ." equivalem a " . numfmt_format_currency($padrao, $cambio, "USD") ."</p>";
  
    ?>

    <p><strong>*Cotação fixa de R$5,22</strong></p>
    <input type="button" id="btnVoltar" value="Voltar">
  </main>
</body>
</html>