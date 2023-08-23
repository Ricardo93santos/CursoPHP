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
      <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section>
    <?php 
      function calcularDivisao($dividendo, $divisor){
        $quosiente = intdiv($dividendo, $divisor) ;
        return $quosiente;
      }
      function calcularRestoDivisao($dividendo, $divisor){
        $resto_divisao = $dividendo % $divisor;
        return $resto_divisao;
      }
      $quosiente = calcularDivisao($dividendo, $divisor);
      $resto_divisao = calcularRestoDivisao($dividendo, $divisor);
    ?>
    <table class="divisao">
      <tr>
        <td><?=$dividendo?></td>
        <td><?=$divisor?></td>
      </tr>
      <tr>
        <td><?=$resto_divisao?></td>
        <td><?=$quosiente?></td>
      </tr>
    </table>
  </section>
</body>
</html>