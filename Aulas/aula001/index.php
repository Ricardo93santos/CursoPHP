<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalhando com Data e Hora</title>
</head>
<body>
  <h1>Trabalhando com Data e Hora com PHP</h1>
  <p>
    Para trabalhar com data no PHP devemos usar a função date(""). Dentro dos parenteses '()' e das aspas '""' colocar os valores referente a data: d/D, m/M, y/Y.
  </p>
  <p>Exemplo: date("d/m/Y")</p>
  
  <?php 
    echo "Hoje é " . date("d/m/Y");
  ?>
  
  <p>date("D/M/y")</p>
  <?php 
    echo "Hoje é " . date("D/M/y");
  ?>
  
  <p>
    Para trabalhar com horas também usamos a função date(""), mas colocamos os valores: g/G ou h/H, i, s. Com g as horas são definidas sem 0 a esquerda quando o valor é menor que 10, já com h o é usado um 0 a esquerda quando a hora for menor que 10.
  </p>
  <p>Ex: date("H:i:s"), onde formata as horas em 24h</p>

  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "São " . date("H:i:s");
  ?>

  <p>date("h:i:s"), onde formata as horas em 12h</p>

  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "São " . date("h:i:s");
  ?>

  <p>E o timezone é configurado pelo servidor, mas podemos configurar de forma maual fazendo as alterações no arquivo php.ini ou usando o comando "date_default_timezone_set("America/Sao_Paulo")" direto no script PHP.</p>
  <p>EX: date("G:i:s T")</p>

  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "São " . date("G:i:s T");
  ?>
  <p>E para definir as horas com am ou pm basta usar o comando date no seguinte formato: <em>date("h:i a")</em></p>
  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "Agora são " . date("h:i a");
  ?>
</body>
</html>