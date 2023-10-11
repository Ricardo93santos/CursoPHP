<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular Médias</title>
</head>
<body>
<?php 
  $array_alunos = [
    $aluno1 = [
      "nome" => "Ricardo",
      "nota1" => 6.7,
      "nota2" => 8.3,
      "nota3" => 7.6,
      "nota4" => 9.2,
    ],
    $aluno2 = [
      "nome" => "Aline",
      "nota1" => 8.7,
      "nota2" => 8.0,
      "nota3" => 9.6,
      "nota4" => 9.2,
    ],
    $aluno3 = [
      "nome" => "Asaph",
      "nota1" => 8.9,
      "nota2" => 8.3,
      "nota3" => 6.8,
      "nota4" => 10.0,
    ],
    $aluno4 = [
      "nome" => "Heloisa",
      "nota1" => 7.8,
      "nota2" => 8.9,
      "nota3" => 7.6,
      "nota4" => 9.0,
    ],
    $aluno5 =[
      "nome" => "Antonio",
      "nota1" => 3.8,
      "nota2" => 5.9,
      "nota3" => 7.6,
      "nota4" => 9.0,
    ]
  ];

  function calcularMedias($aluno){
    $notas = [$aluno['nota1'], $aluno['nota2'], $aluno['nota3'], $aluno['nota4']];

    $media = array_sum($notas)/count($notas);
    return $media;

  }
  foreach($array_alunos as $aluno){
    $media_final = calcularMedias($aluno);
      echo '<p>'.$aluno['nome'].'</p>';
      echo '<p>'.$aluno['nota1'].'</p>';
      echo '<p>'.$aluno['nota2'].'</p>';
      echo '<p>'.$aluno['nota3'].'</p>';
      echo '<p>'.$aluno['nota4'].'</p>';
      echo '<p><strong> Média: '. number_format($media_final, 1) .'</strong></p>';
      echo '<hr>';
  }
?>
</body>
</html>