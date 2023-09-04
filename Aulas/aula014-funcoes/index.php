<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções no PHP</title>
</head>
<body>
  <h1>Funções</h1>
  <p>As funções são blocos de código que executam uma tarefa específica e podem ser reutilizados em diferentes partes de um programa. Elas desempenham um papel fundamental na organização e modularização do código, tornando-o mais legível e fácil de manter. Qualquer código PHP válido pode aparecer dentro de uma função, mesmo outras funções e definições de classes.</p>
  <h2>Sintaxe básica de uma função</h2>
  <p>Uma função pode ser definida usando a seguinte sintaxe:
   <pre>
    function nomeDaFuncao($parametro1, $parametro2, ...){
      // Corpo da função, onde esceve o código que a função executará
      return $resultado; // Opcional, se a função retornar um valor
    }
   </pre>
  Explicando a sintaxe:
  <ol>
    <li><strong>'function'</strong>: A palavra-chave function é usada para declarar um função no PHP.</li>
    <li><strong>'nomeDaFuncao'</strong>: Em seguida informamos o nome da função, deve começar com uma letra e pode conter letras maiúsculas e minúsculas, números e sublinhados (_).</li>
    <li><strong>'($parametro1, $parametro2, ...)'</strong>: Entre os parenteses '()', após o nome da função, de forma opcional definimos os parametros da função. Os parâmetros são valores que podem ser passados para a função quando ela é chamada. Dentro da função, você pode usá-los como variáveis locais.</li>
    <li><strong>'{}'</strong>Dentro das chaves "{}", onde esceve o código que a função executará. Este é o lugar onde define a lógica da função.</li>
    <li><strong>'return $resultado;'</strong>A palavra-chave return é usada para retornar um valor da função. Isso é opcional. Se a função não retornar nada, você pode omitir o return.</li>
  </ol>
  Ex:
  <pre>
  $numero1 = 10;
  $numero2 = 15;
  function somar($numero1, $numero2){
    $soma = $numero1 + $numero2;
    return $soma;
  }
  echo somar($numero1, $numero2); // Imprime 25
  </pre>
  </p>
</body>
</html>