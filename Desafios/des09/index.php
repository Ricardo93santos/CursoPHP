<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Máquina do Tempo</title>
</head>
<body>
  <?php 
    function calcularIdade($ano, $ano_nascimento){
      return $ano - $ano_nascimento;
    }
    $ano_atual = date("Y");
    $ano_nascimento = $_POST['ano-nascimento'] ?? 2000;
    $ano = $_POST['ano'] ?? $ano_atual;

    $idade = calcularIdade($ano, $ano_nascimento);
  ?>
  <main>
    <h1>Calculando sua Idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="ano-nascimento">Em que ano voce nasceu?</label>
      <input type="number" name="ano-nascimento" id="ano-nascimento" max="<?=$ano_atual-1?>" value="<?=$ano_nascimento?>">
      <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
      <input type="number" name="ano" id="ano" value="<?=$ano_atual?>">
      <input type="submit" value="Calcular Idade">
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <?php 
      if($idade === 1){
        echo "<p>Quem nasceu em $ano_nascimento vai ter $idade ano em $ano.</p>";
      }else{
        echo "<p>Quem nasceu em $ano_nascimento vai ter $idade anos em $ano.</p>";
      }
    ?>
    
  </section>
</body>
</html>