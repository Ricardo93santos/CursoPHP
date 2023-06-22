<?php 
  function criar_linha($semana){
    echo "<tr>";
    for($i = 0; $i <=6; $i++){
      if(isset($semana[$i])){
        echo "<td>{$semana[$i]}</td>";
      }else{
        echo "<td></td>";
      }
    }
    echo "</tr>";
  }
?>
<?php 
  function criar_calendario(){
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