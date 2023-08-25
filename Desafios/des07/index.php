<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Desafio das Raízes</title>
</head>
<body>
  <?php 
    function calcularRaizQuadrada($numero){
      return number_format(sqrt($numero), 3, ",", "."); 
    }
    function calcularRaizCubica($numero){
      return number_format($numero ** (1/3), 3, ",", ".");
    }

    $numero = $_POST['numero'] ?? 0;
    $raiz_quadrada = calcularRaizQuadrada($numero);
    $raiz_cubica = calcularRaizCubica($numero);

  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="numero">Número</label>
      <input type="number" name="numero" id="numero" value = "<?=$numero?>">
      <input type="submit" value="Calcular Raiez">
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <p>Analisando o <strong>numero <?=$numero?></strong>, temos:</p>
    <ul>
      <li>A sua raiz quadrada é <strong><?=$raiz_quadrada?></strong></li>
      <li>A sua raiz cúbica é <strong><?=$raiz_cubica?></strong></li>
    </ul>
  </section>
</body>
</html>