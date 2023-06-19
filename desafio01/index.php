<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 01</title>
</head>
<body>
  <h1>Desafio 01</h1>
  <ol>
    <li>Na função <em>date()</em>, experimente mudar o <em>Y</em> para <em>y</em>. O que acontece?</li>
    <li>Você consegue exibir a hora no formato de 12 horas, am e pm?</li>
    <li>E se você tivesse que exibir o dia da semana? como faria?</li>
    <li>Exiba quantos dias faltam para o próximo sábado. Por exemplo, se hoje for quarta, então faltam 3 dias para sábado.</li>
    <li>Exiba o nome do mês atual.</li>
  </ol>
  <div>
    <h4>Resposta 1:</h4>
    <p>Ao usar Y o ano fica completo, com 4 digitos YYYY, usando y é apresentado a penas os dois ultimos digitos do ano yy.</p>
    <p>
      Com <em>Y</em>:
      <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é " . date("d/m/Y");
      ?>
    </p>
    <p>
      Com <em>y</em>
      <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é " . date("d/m/y");
      ?>
    </p>
  </div>

  <div>
    <h4>Resposta 2:</h4>
    <p>Sim, basta usar na função <em>date("h:i a")</em>, para usar o formato de 12 horas am ou pm, com zero a esquerda se necessário, ou usar <em>date("g:i a")</em>, onde não aparecerá o zero a esquerda.</p>
    <?php      
         date_default_timezone_set("America/Sao_Paulo");
         echo "Agora são " . date("h:i a");
    ?>
  </div>

  <div>
    <h4>Resposta 3:</h4>
    <p>
      Para exibir o dia da semana basta usar na função <em>date()</em> o valor referente ao dia em maiusculo. EX: <em>date("D")</em>
    </p>
    <?php 
      echo "Hoje é " . date("D");
    ?>
  </div>

  <div>
    <h4>Resposta 4:</h4>
    <?php 
      date_default_timezone_set("America/Sao_Paulo");
      $hoje = date("N"); //Obtem o número do dia da semana.
      $dias_restantes = 6-$hoje;

      if($hoje == 6){
        echo "Hojé é Sábado";
      }elseif($hoje>6){
        echo "Faltam " . (7 + $dias_restantes) . " para Sábado.";
      }else{
        echo "Faltam " . $dias_restantes . " para Sábado.";
      };
    ?>
  </div>

  <div>
    <h4>Resposta 5:</h4>
    <p>
      Para exibir o nome do mês atual basta usar na função dade() o valor referente ao mês em maiusculo. EX: <em>date("M")</em>
    </p>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "O mês é " . date("M");   
      ?>
  </div>
</body>
</html>