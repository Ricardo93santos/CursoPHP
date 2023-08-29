<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Caixa eletrônico</title>
</head>
<body>
  <?php 
    $valor_saque = $_REQUEST['valor-saque'] ?? 5;
    $resto = $valor_saque;

    //Notas de cem
    $nota_de_cem = floor($resto/100);
    $resto %= 100;
    //Notas de cinquenta
    $nota_de_cinquenta = floor($resto/50);
    $resto %= 50;
    //Notas de dez
    $nota_de_dez = floor($resto/10);
    $resto %= 10;
    //Notas de cinco
    $nota_de_cinco = floor($resto/5);

  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="valor-saque">Qual valor deseja sacar? (R$)<sup>*</sup></label>
      <input type="number" name="valor-saque" id="valor-saque" min="5" step="5" value="<?=$valor_saque?>">
      <p style="font-size: 0.8em;"><sup>*</sup>Notas disponíveis R$100, R$50, R$10 e R$5</p>
      <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <h2>Saque foi de R$<?=number_format($valor_saque, 2, ",", ".")?></h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
      <li><img src="img/100-reais.jpg" alt="Nota de cem reais"> X <?=$nota_de_cem?></li>
      <li><img src="img/50-reais.jpg" alt="Nota de cinquenta reais"> X <?=$nota_de_cinquenta?></li>
      <li><img src="img/10-reais.jpg" alt="Nota de dez reais"> X <?=$nota_de_dez?></li>
      <li><img src="img/5-reais.jpg" alt="Nota de cinco reais"> X <?=$nota_de_cinco?></li>
    </ul>
  </section>
</body>
</html>