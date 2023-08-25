<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Médias Aritiméticas</title>
</head>
<body>
  <?php 
    function calcularMediaSimples($valor1, $valor2){
      return number_format(($valor1 + $valor2)/2, 2, ",", '.');
    }
    function calcularMediaPonderada($valor1, $valor2, $peso1, $peso2){
      return number_format(($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2), 2, ",", ".");
    }

    $valor1 = $_POST['valor1'] ?? 0;
    $valor2 = $_POST['valor2'] ?? 0;
    $peso1 = $_POST['peso1'] ?? 1;
    $peso2 = $_POST['peso2'] ?? 1;

    $mediaSimples = calcularMediaSimples($valor1, $valor2);
    $mediaPondeara = calcularMediaPonderada($valor1, $valor2, $peso1, $peso2);
  ?>
  <main>
    <h1>Médias Aritiméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="valor1">1° Valor</label>
      <input type="number" name="valor1" id="valor1" required value="<?=$valor1?>">
      <label for="peso1">1° Peso</label>
      <input type="number" name="peso1" id="peso1" min="1" required value="<?=$peso1?>">
      <label for="valor2">2° Valor</label>
      <input type="number" name="valor2" id="valor2" required value="<?=$valor2?>">
      <label for="peso2">2° Peso</label>
      <input type="number" name="peso2" id="peso2" min="1" required value="<?=$peso2?>">
      <input type="submit" value="Calcular Médias">
    </form>
  </main>
  <section>
    <h2>Calculo das Médias</h2>
    <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
    <ul>
      <li>A <strong>Média Aritimética Simple</strong> entre os valores é igual a <?=$mediaSimples?></li>
      <li>A <strong>Média Aritimética Ponderada</strong> entre os valores é igual a <?=$mediaPondeara?></li>
    </ul>
  </section>
</body>
</html>