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
  <h2>Chamando funções no PHP</h2>
  <p>Existem várias maneiras de chamar uma função no PHP. Podemos chamar diretamente, atribuir uma função a uma variável, chamar uma função dentro de uma função, dentro de loops e estruturas condicionais.</p>
  <h3>Chamando uma função diretamente</h3>
  <p>Para chamar uma função diretamente, você simplesmente a referencia pelo nome e passa os argumentos necessários (se houver) entre parênteses. Aqui está um exemplo:
  <pre>
  $nome = "Ricardo";
  function saudar($nome) {
    $mensagem = "Olá, $nome!";
    return $mensagem;
  }

  echo saudar($nome); // Isso imprimirá "Olá, Ricardo!"
  </pre>
  </p>
  <h3>Atribuindo uma função a uma variável</h3>
  <p>Em PHP, você pode atribuir uma função a uma variável. Isso é útil quando você deseja passar a função como argumento para outra função ou quando deseja criar funções anônimas (também conhecidas como closures). Aqui está um exemplo:
  <pre>
  function somar($numero1, $numero2){
    $soma = $numero1 + $numero2;
    return $soma;
  }
  $numero1 = 30;
  $numero2 = 89;
  $soma = somar($numero1, $numero2);
  echo $soma; // Imprime 119
  </pre>
  </p>
  <h3>Chamando uma função dentro de outra função</h3>
  <p>Chamar uma função dentro de outra função em PHP serve para melhorar a organização, modularidade e reutilização de código. Isso permite que você divida sua lógica de programação em partes menores e mais gerenciáveis, cada uma com uma responsabilidade específica. Isso é conhecido como aninhamento de funções. Aqui está um exemplo:
  <pre>
  function calcularIdade($anoNascimento) {
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
  }

  function saudacaoComIdade($nome, $anoNascimento) {
    $idade = calcularIdade($anoNascimento);
    $mensagem = "Olá, $nome! Você tem $idade anos.";
    return $mensagem;
  }

  echo saudacaoComIdade("Ana", 1990); // Isso imprimirá "Olá, Ana! Você tem 33 anos."
  </pre>
  </p>
  <h3>Chamando funções em loops e estruturas condicionais</h3>
  <p>Você pode chamar funções dentro de loops (por exemplo, for, while) e estruturas condicionais (por exemplo, if, else) da mesma maneira que faria em qualquer outra parte do código. Isso permite que você execute a lógica da função repetidamente ou sob certas condições. Aqui está um exemplo com um loop for:
  <pre>
  function dobrarNumero($numero) {
    return $numero * 2;
  }

  for ($i = 1; $i <= 5; $i++) {
    $resultado = dobrarNumero($i);
    echo "O dobro de $i é $resultado&#60;br&#62;";
  }
  </pre>
  Essas são algumas das maneiras comuns de chamar funções em PHP. Você pode chamá-las em diferentes contextos, dependendo das necessidades do seu programa, e também pode criar funções que retornem outras funções, o que é útil para criar abstrações mais avançadas.
  </p>
</body>
</html>