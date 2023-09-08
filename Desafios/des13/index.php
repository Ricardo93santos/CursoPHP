<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Verificador de Idade</title>
</head>
<body>
  <?php
    $ano_atual = date("Y");
    $ano_nascimento = $_POST['ano-nascimento'] ?? $ano_atual - 1; 
  ?>
  <main>
    <h1>Verificador de Idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="ano-nascimento">Em que ano você nasceu?</label>
      <input type="number" name="ano-nascimento" id="ano-nascimento" value="<?=$ano_nascimento?>" max="<?=$ano_atual - 1?>">      
      <p>Ano atual: <?=$ano_atual?> <strong>*Ano atual baseado no sistema</strong></p>
      <input type="submit" value="Varificar">
    </form>
  </main>
  <section>
    <?php 
      function calcularIdade($ano_atual, $ano_nascimento){
        return $ano_atual - $ano_nascimento;
      }
      function verificarIdade($idade){
        if($idade >= 18){
          $resultado = "Voce tem $idade anos e é maior de idade";
          return $resultado;
        }elseif($idade === 1){
          $resultado = "Voce tem $idade ano e é menor de idade";
          return $resultado;
        }else{
          $resultado = "Voce tem $idade anos e é menor de idade";
          return $resultado;
        }
      }
      $idade = calcularIdade($ano_atual, $ano_nascimento);
      $verificacao_idade = verificarIdade($idade);
    ?>
    <p><?=$verificacao_idade?></p>
  </section>
</body>
</html>