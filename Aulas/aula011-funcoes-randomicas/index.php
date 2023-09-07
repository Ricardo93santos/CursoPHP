<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções Randômicas no PHP</title>
</head>
<body>
  <h1>Trabalhando com Funções Randômicas no PHP</h1>
  <p>No PHP existe três funções para gerar números aleatórios, as funções são: <strong><u>rand()</u></strong>, <strong><u>mt_rand()</u></strong> e <strong><u>random_int()</u></strong>. Todas recebem dois valores como parâmetros, o primeiro é o <u>mínimo</u> e o segundo é o <u>máximo</u>, que correspondem ao intervalor do gerador. Podemos usar variáveis ou valores diretamente como parâmetros.</p>
  <p>
    Ex:
    <pre>
    $valor_rand = rand(0, 100); 
    echo "$valor_rand"
    // ou
    $min = 0;
    $max = 100;
    $valor_rand() = rand($min, $max);
    echo "$valor_rand"
    </pre>
  </p>
  <ul>
    <li><strong>rand()</strong>, essa função usa um algoritmo de 1951, chamado de <i>Linear Congrential Generator</i>, o mesmo não é mais confiável e é muito lento.</li>
    <li><strong>mt_rand()</strong>, essa função usa um algoritmo de 1997, chamado de <i>Mersenne Twister</i>, sendo 4x mais ráido e mais confiável que a função rand().</li>
    <p>OBS: A função rand() pode receber o valor mínimo menor que o valor máximo, mas na função mt_rand() é retornado um erro.</p>
    <li><strong>random_int()</strong>, é uma função que gera números aleatórios criptografados, sendo mais seguro, porem é o mais lento, ideal para criação de senhas.</li>
  </ul>
  <p>EX:</p>
  <form method="post">
      <p>Gerando um número aleatório entre 0 e 100</p>
      <?php 
        $gera = rand(0,100);

        echo "<p>O valor gerado foi $gera</p>"
      ?>
      <p>Aperte F5 para erar novo número.</p>
    </form>
</body>
</html>