<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays no PHP</title>
</head>
<body>
  <section>
    <h1>O que é um array?</h1>
    <p>Um array no PHP é uma variável que pode armazenar múltiplos valores em uma única variável. Esses valores podem ser de diferentes tipos, como números, strings, objetos, ou até mesmo outros arrays. Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Os arrays são úteis para organizar e acessar conjuntos de dados relacionados de maneira eficiente.</p>
    <p>Arrays são amplamente usados para armazenar listas de itens, como números de telefone, nomes de usuários, dados de formulários, e muito mais. Eles são uma estrutura de dados importante em programação e facilitam o armazenamento e a manipulação de dados em grande escala.</p>
    <h2>Sintaxe de um array</h2>
    <p>No PHP, você pode criar um array de várias maneiras, mas a forma mais comum é usando colchetes '[]' ou a função 'array()'. Ele leva qualquer quantidade de pares separados por vírgula ',' e como argumentos 'chave => valor'.</p>
    <p>Array criado usando a função 'array()':
    <pre>
      $nome_do_array1 = array(
        chave => valor,
        chave2 => valor2,
        chave3 => valor3,
        ...
      );
    </pre>
    Array criado usando colchetes '[]':
    <pre>
      $nome_do_array2 = [
        chave => valor,
        chave2 => valor2,
        chave3 => valor3,
      ];
    </pre>
    Obs: A vírgula após o último elemento do array é opcional e pode ser omitida. Isso geralmente é feito para arrays em uma única linha, por exemplo, array(1, 2) é preferível em vez de array(1, 2, ). Para arrays escritos em várias linhas, por outro lado, a vírgula à direita do último elemento é usada frequentemente, para permitir a adição de forma simples de novos elementos ao final.</p>
  </section>
  <section>
    <h2>Criando Arrays</h2>
    <p>Existem várias formas de criar arrays, dependendo das necessidades do seu código. Vamos abordar as formas mais comuns:</p>
    <ol>
      <li>
      <strong>Array Indexado:</strong> Ao se criar um array, as suas chaves (índices) são criadas automaticamente, onde o primeiro elemento do array tem como sua chave o valor 0, o segundo valor 1, o terceiro valor 2 e assim sucessivamente. Então, um array indexado é aquele em que os elementos são acessados por meio de índices numéricos começando do zero. Sua sintaxe é:
      <pre>
        $nome_do_array = [elemento1, elemento2, elemento3];
      </pre>
      Ex:
      <pre>
        $frutas = ["maçã", "banana", "laranja", "manga"];
      </pre>
      Nesse exemplo, $frutas é um array indexado que contém quatro elementos: "maçã", "banana", "laranja", "manga". Os indices (chaves) desses elementos são inseridos automaticamente, onde o primeiro, 'maçã', inicia com 0 e o ultimo, 'manga', tem como indice o 3.
      <pre>
      $frutas = ["maçã", "banana", "laranja", "manga"];
      var_dump($frutas);
      // Saída: array(4) { [0]=> string(6) "maçã" [1]=> string(6) "banana" [2]=> string(7) "laranja" [3]=> string(5) "manga" }
      </pre>
      </li>
      <li>
      <strong>Array Associativo:</strong> Por outro lado, ao criar um array, podemos escolher o valor de suas chaves, sendo int ou string, mas os valores podem ser de qualquer tipo, inclusive um array. Em um array associativo, cada elemento possui uma chave associada a ele. Isso permite que você acesse os elementos por meio de suas chaves em vez de índices numéricos. Sua sintaxe é:
      <pre>
      $nome_do_array = [
        "chave1" => elemento1,
        "chave2" => elemento2,
        "chave3" => elemento3,
      ];
      </pre>
      Ex:
      <pre>
      $aluno = [
        "nome" => "João",
        "idade" => 25,
        "curso" => "PHP"
      ];
      </pre>
        <p>Neste exemplo, $aluno é um array associativo com três elementos, cada um associado a uma chave. Você pode acessar os elementos usando suas chaves, como $aluno["nome"] para obter "João", ou $aluno["idade"] para obter 25.</p>
        <pre>
        $aluno = [
          "nome" => "João",
          "idade" => 25,
          "curso" => "PHP",
        ];
        echo $aluno["curso"]; //Saída: PHP
        </pre>
        Obs: Ao iniciarmos um array com uma chave, como por exemplo, "nome", e a próxima chave não for informada, ou seja associativo, apenas o seu valor, a segunda chave é 0. Ex:
        <pre>
        $carro = [
          "marca" => "Ford",
          "Mustang",
          "ano" => 2020,
          "DDD7A89",
        ];
        var_dump($carro);
        // Saída: array(4) { ["marca"]=> string(4) "Ford" [0]=> string(7) "Mustang" ["ano"]=> int(2020) [1]=> string(7) "DDD7A89" }
        </pre>
        <p>Nesse exemplo encontramos um array de quato elementos, onde o primeiro elemento tem como índice ["marca"], com valor uma string "Ford"; o segundo elemento tem como índice [0], como valor uma string "Mustang"; o terceiro elemento tem como índice ["ano"], com valor um int (2020) e o ultimo elemento tem como índice [1], o valor é uma string "DDD7A89".</p>
        </li>
        <li>
        <strong>Array Multidimensional</strong>, um array multidimensional é um array que contém outros arrays dentro dele. Isso é útil quando você precisa armazenar dados em várias dimensões, como uma matriz. A sua sintaxe é a seguinte:
        <pre>
        $nome_do_array = [
          [elemento1, elemento2, elemento3],
          [elemento4, elemento5, elemento6],
          [elemento7, elemento8, elemento9]
        ];
        </pre>
        Ex:
        <pre>
        $matriz = [
          [1, 2, 3],
          [4, 5, 6],
          [7, 8, 9],
        ];
        </pre>
        Neste exemplo, '$matriz' é um array multidimensional que contém três arrays internos. Para acessar elementos dentro deste tipo de array, você precisa especificar dois índices, o primeiro para selecionar o array interno e o segundo para selecionar o elemento dentro desse array.
        <p>Por exemplo, '$matriz[2][1]' retornaria o valor '8', primeira chave do array '$matriz', '[2]', é o array '[7, 8, 9]' e a segunda chave '[1]' é o valor '8'. Então, se quiser acessar o valor 1, basta usar: $matriz[0][0], ou o valor 9, $matriz[2][2].</p>
        </li>
      </ol>
  </section>
  <section>
    <h2>Como inserir elementos em um array</h2>
  </section>
</body>
</html>