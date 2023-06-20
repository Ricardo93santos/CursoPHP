<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 02</title>
</head>
<body>
  <?php
    function relogio(){
      // Função para criar o relógio e saudação
      date_default_timezone_set("America/Sao_Paulo");
      $hora_completa = date("H:i:s");

      if($hora_completa < "12:00:00" && $hora_completa >= "05:00:00"){
        echo "Bom dia, agora são " . $hora_completa;
      }else if($hora_completa >= "12:00:00" && $hora_completa < "19:00:00"){
        echo  "Boa tarde, agora são " . $hora_completa;
      }else {
        echo "Boa noite, agora são " . $hora_completa;
      }
    };
    relogio();

    function criar_linha($semana){
      // Função para criar as células referentes aos dias da semana
      echo "<tr>";
      for($i = 0; $i <= 6; $i++){
        echo "<td>";
        if(isset($semana[$i])){
          $dia = $semana[$i];
          $dia_atual = date("d");
          // Condição para deixar os dias do domingo em vermelho
          if($i == 0){
            $dia = "<span style = 'color: red;'>".$dia."</span>";
          }
          //Condição para deixar os dias do sábado em negrito
          if($i == 6){
            $dia = "<strong>$dia</strong>";
          }
          //Condição para idendificar o dia atual da semana e deixar o mesmo em negrito.
          if($dia == $dia_atual){
            echo "<strong>$dia</strong>";
          }else{
            echo $dia;
          }
        }
        echo "</td>";
      }
      echo "</tr>";
    }

    function criar_calendario(){
      // Função responsável para criar os dias da semana e atribui - los em cada semana
      $dia = 1;
      $semana = array();

      while($dia <=31){
        array_push($semana, $dia);
  
        if(count($semana) == 7){
          criar_linha($semana);
          $semana = array();
        }
        $dia++;
      }
      criar_linha($semana);
    }

  ?>
  <table border="1">
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sáb</th>
    <?php criar_calendario();?>
  </table>
</body>
</html>