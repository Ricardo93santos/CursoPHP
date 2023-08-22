<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Anatomia de uma Divisão</title>
</head>
<body>
  <?php 
    $dividendo = $_POST['dividendo'] ?? 0;
    $divisor = $_POST['divisor'] ?? 1;
  ?>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section>
    <?php 
      function calcularDivisao($dividendo, $divisor){
        $quosiente = $dividendo / $divisor;
        return number_format($quosiente, 0);
      }
      function calcularRestoDivisao($dividendo, $divisor){
        return $resto_divisao = $dividendo % $divisor;
      }

      $quosiente = calcularDivisao($dividendo, $divisor);
      $resto_divisao = calcularRestoDivisao($dividendo, $divisor);
      
      echo "<h2>Estrutura da Divisão</h2>";
      echo "<p>O dividendo é $dividendo</p>";
      echo "<p>O divisor é $divisor</p>";
      echo "<p>O quosiente da divisão é $quosiente</p>";
      echo "<p>O resto da divisão é $resto_divisao</p>";
    ?>
  </section>
</body>
</html>