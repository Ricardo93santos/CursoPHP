<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
  <title>Reajustador de Preços</title>
</head>
<body>
  <?php 
    $preco = $_POST['preco'] ?? 0;
    $porcentagem = $_POST['porcentagem'] ?? 0;

    $novo_valor = $preco+($preco*$porcentagem)/100;
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="preco">Preço do produto (R$)</label>
      <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">
      <label for="porcentagem">Qual será o percentual? (<strong><span id="porcento">?</span>%</strong>)</label>
      <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="0.1" value="<?=$porcentagem?>">
      <input type="submit" value="Reajustar">
    </form>
  </main>
  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?> com <strong><?=$porcentagem?>% de aumento</strong>, vai passar a custar <strong>R$<?=number_format($novo_valor, 2, ",", ".")?></strong> a partir de agora.</p>
  </section>
</body>
</html>