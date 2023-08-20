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
      //Função para receber a cotação do dolar
      function receberCotacaoDolar(){
        
        $data_inicial = date("m-d-Y", strtotime("-7 days"));
        $data_final = date("m-d-Y");

        //Variável referente a URL da cotação do Banco Central
        $url_cotacao_dolar_compra = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $data_inicial .'\'&@dataFinalCotacao=\''. $data_final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        //Variável que recebe como array os dados da cotação
        $dados_cotacao = json_decode(file_get_contents($url_cotacao_dolar_compra), true);

        return $dados_cotacao["value"][0]["cotacaoCompra"];
      }

      $valor_dolar = receberCotacaoDolar();

      //Valor do real, inserido pelo usuário via POST
      $valor_real = (float)$_POST["valor"] ?? 0;
   
      //Conversão usando a biblioteca intil, para formatação monetária
      function converterMoeda($valor_real, $valor_dolar){

        $cambio = $valor_real/$valor_dolar;
        
        return $cambio;
      }
      $cambio = converterMoeda($valor_real, $valor_dolar);

      $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); //Para alterar o padrão basta trocar a string do idioma do país, "us", "pt_PT", "ru_RU
      echo "<p> Seus " .  numfmt_format_currency($padrao, $valor_real, "BRL") ." equivalem a " . numfmt_format_currency($padrao, $cambio, "USD") ."</p>";
  
    ?>
    <?php 
      echo "<p>Valor do Dolar <strong>". numfmt_format_currency($padrao, $valor_dolar, "BRL") ."</strong></p>";
    ?>
    <p><strong>*Cotação fornecida por API do <a href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994" target="_blank">Banco Central do Brasil</a></strong></p>
    <input type="button" id="btnVoltar" value="Voltar">
  </main>
</body>
</html>