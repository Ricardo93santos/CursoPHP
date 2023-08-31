<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário retroalimentado no PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Formulário retroalimentado</h1>
  <p>Um formulário retroalimentado usa apenas um arquivo '.php', onde se encontra o formulário que será preenchido pelo usuário e ao ser enviado o resultado é apresentado no mesmo arquivo, sem apagar os dados do formulários.</p>
  <p>A melhor maneira de fazer um formuário envia os resultados para o próprio arquivo '.php' é usar a superglobal <strong>$_SERVER</strong> e seu parametro <strong>'PHP_SELF'</strong>, no atributo 'action' do formulário.</p>
  <pre>
    Ex:
    // Capturando dados do formulário
    &#8249;?php
      $valor1 = $_GET["v1"] ?? 0;
      $valor2 = $_GET["v2"] ?? 0;
    ?&#8250;
    &#8249;h2&#8250;Somar Valores&#8249;/h2&#8250;
    &#8249;form acrion = "&#8249;?=$_SERVER['PHP_SELF']?&#8250;" method = "get"&#8250;
      &#8249;label for="v1"&#8250;Valor 1&#8249;/label&#8250;
      &#8249;input type="number" name="v1" value="&#8249;?=$valor1?&#8250;"&#8250;
      &#8249;label for="v2"&#8250;Valor 2&#8249;/label&#8250;
      &#8249;input type="number" name="v2" value="&#8249;?=$valor2?&#8250;"&#8250;
      &#8249;input type="submit" value="Somar"&#8250;
    &#8249;/form&#8250;

    &#8249;section&#8250;
      &#8249;h3&#8250;Mostrar Resultado&#8249;/h3&#8250;

      &#8249;?php
        function somar($valor1, $valor2){
          retunr $soma = $valor1 + $valor2;
        }
        $soma = somar($valor1,$valor2);

        echo "A soma entre os valores $valor1 e $valor2 é $soma";
      ?&#8250;
    &#8249;/section&#8250;
  </pre>
  <main>
    <?php 
      $valor1 = $_POST["v1"] ?? 0;
      $valor2 = $_POST["v2"] ?? 0;
    ?>
    <section>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Somar">
      </form>
    </section>
    <section>
      <?php 
        function somar($valor1, $valor2){
          return $soma = $valor1 + $valor2;
        }
        $soma = somar($valor1, $valor2);

        echo "<p>A soma entre os valores <strong>$valor2</strong> e <strong>$valor2</strong> é <strong>$soma</strong> </p>";
      ?>
    </section>
  </main>
</body>
</html>