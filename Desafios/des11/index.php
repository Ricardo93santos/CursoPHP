<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Calculadora de Tempo</title>
</head>
<body>
  <?php 
    $segundos_informado = $_POST['segundos-informado'];
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="segundos-informado">Qual o total de segundos?</label>
      <input type="number" name="segundos-informado" id="segundos-informado" value="<?=$segundos_informado?>">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado</h2>
    <p>Analisando o valor digitado, <strong><?=number_format($segundos_informado, 0, ",", ".")?> segundos</strong> equivalem ao total de:</p>
    <?php 
      //Total de Semanas
      $semanas = intdiv($segundos_informado, (7*24*60*60));
      $segundos_informado %= (7*24*60*60);
      // Total de Dias
      $dias = intdiv($segundos_informado, (24*60*60));
      $segundos_informado %= (24*60*60);
      //Total de Horas
      $horas = intdiv($segundos_informado, (60*60));
      $segundos_informado %= (60*60);
      //Total de minutos
      $minutos = intdiv($segundos_informado, 60);
      $segundos_informado %= 60;
      //Total de segundos
      $segundos = $segundos_informado;
    ?>
    <ul>
      <li><?=$semanas?> semanas</li>
      <li><?=$dias?> dias</li>
      <li><?=$horas?> horas</li>
      <li><?=$minutos?> minutos</li>
      <li><?=$segundos?> segundos</li>
    </ul>
  </section>
</body>
</html>