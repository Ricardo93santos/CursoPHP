<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorteador de Números</title>
</head>
<body>
  <header>
    <h1>Trabalhando com Números Aleatórios</h1>
  </header>
  <main>
    <form method="post">
      <p>Gerando um número aleatório entre 0 e 100</p>
      <?php 
        $gera = rand(0,100);

        echo "<p>O valor gerado foi $gera</p>"
      ?>
      <input type="submit" value="Gerar Número">

    </form>
  </main>
</body>
</html>