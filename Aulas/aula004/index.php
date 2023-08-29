<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalahndo com Strings</title>
</head>
<body>
  <h1>Trabalhando com Strings no PHP</h1>
  <p>No PHP existem quatro tipos de Strings:</p>
  <ol>
    <li>Double Quoted</li>
    <li>Single Quoted</li>
    <li>Heredoc</li>
    <li>Nowdoc</li>
  </ol>
  <h3>Double Quoted</h3>
  <p>
    Double Quoted é o formato string escrito entre aspas duplas (""). Permite a interpolação de variáveis, ou seja, escrever uma variável dentro da string, onde a mesma será interpretada.     As aspas duplas, <strong>double quoted</strong>, suporta a sequência de escape, o que significa que pode usar caracteres especiais seguida por uma barra invertida (\). Também permite (\n) para quebra de linha e (\t) para tabulações.
  </p>

  <pre>
    Ex:
    $nome = "Ricardo";
    echo "Olá, $nome! \u{1F600}"; //Saída: Olá, Ricardo!😄
  </pre>
  <h3>Single Quoted</h3>
  <p>
    Single Quoted é o formato string escrito entre aspas simples (''). Não permite a interpolação de variáveis, as variáveis escritas entre elas são tratadas literalmente. As aspas simples, <strong>single quoted</strong>, não suporta a maioria das sequências de escape, com exceção de (\') aspas simples e (\\) barra invertida unica.
  </p>
  <pre>
    Ex:
    $nome = "Ricardo";
    echo 'Olá, $nome! \u{1F600}'; //Saída: Olá, $nome! \u{1F600}
  </pre>
  <p>
    Como as single quoted não faz interpolação, devemos fazer a concatenação das strings usando um ponto (.).
  </p>
  <pre>
    Ex:
    $nome = "Ricardo";
    $apelido = 'Rick';
    echo 'Meu nome é ' . $nome ' . e meu apelido é ' . '\''.$apelido.'\'';
    // Saída: Meu nome é Ricardo e meu apelido é 'Rick'.
  </pre>
  <h3>Heredoc e Nowdoc</h3>
  <p>
    Heredoc e Nowdoc são duas formas de delimitqar strings de múltiplas linhas. Eles oferecem uma maneira conveniente de incluit blocos extensos de texto sem a necessidade de escapar caracteres especiais ou quebras de linhas. A diferenças é que na <strong>Heredoc</strong> permite interpolação de variáveis e suporta sequência de escape, já a <strong>Nowdoc</strong> não permite.
  </p>
  <p>
  A sintaxe das duas também possue diferenças, ambas começam com uma sequencia de três sinais de menor que (<<<) seguida por uma palavra qualquer escrita em letras maiúsculas e finaliza o bloco com a mesma palavra seguuida do ponto e virgula (;). Mas na Nowdoc essa palavra é escrita entre aspas simples.
  </p>
  <pre>
    Ex:
    Heredoc
      $nome = "Ricardo";
      $saudacao = <<< TEXTO
        Olá, $nome!
          Bem vindo ao nosso site!
      TEXTO;
      
      /* Saída:
        Olá, Ricardo!
          Bem vindo ao nosso site!
      */

    Nowdoc
      $nome = "Ricardo";
      $saudacao = <<< 'TEXTO'
        Olá, $nome!
          Bem vindo ao nosso site!
      TEXTO;

      /* Saída:
        Olá, $nome!
          Bem vindo ao nosso site!
      */
  </pre>
</body>
</html>