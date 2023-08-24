<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Cálculo Salarial</title>
</head>
<body>
  <?php 
    $salarioMinimo = 1380.60;
    $salario = $_POST["salario"] ?? $salarioMinimo;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="salario">Salário (R$)</label>
      <input type="number" name="salario" min="0" id="salario" step="0.01" value = "<?=$salario?>">
      <p>Considerando o salário minimo de <strong>R$<?=number_format($salarioMinimo, 2, ",", ".")?></strong></p>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
      <h2>Resultado Final</h2>
      <?php
        $quantidadeDeSalariosMinimo = (int) ($salario / $salarioMinimo);

        $fracaoDoSalario = ($salario * 100) % ($salarioMinimo * 100) / 100; //Multiplicar e dividir por 100 para melhorar a precisão do float.
        
        echo "<p>O seu salário é de <strong>R$" . number_format($salario, 2, ",", ".") . "</strong> e a quantidade de salários minimo que voce recebe é de<strong> " .$quantidadeDeSalariosMinimo ."</strong> + <strong>R$" . number_format($fracaoDoSalario, 2, ",", ".")."</strong></p>";
      ?>
    </section>
</body>
</html>