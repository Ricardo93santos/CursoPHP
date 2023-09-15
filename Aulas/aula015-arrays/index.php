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
    <h2>Inserindo e removendo elementos em um array</h2>
    <p>No PHP podemos inserir ou remover qualquer elemento em um arrya, após o mesmo ser criado. Podemos inserir no final do array, no início do array ou em qualquer posição específica.</p>
    <ul>
      <li><strong>Inserindo no final do array:</strong> Pode adicionar um elemento ao final de um array indexado usando colchetes vazios '[]' sem especificar um índice. Para arrays associativos, você pode adicionar um novo par chave-valor diretamente.
      <pre>
      Exemplo para array indexado:
      $frutas = ["maçã", "banana", "laranja"];
      var_dump($frutas); //Saída: array(3) { [0]=> string(6) "maçã" [1]=> string(6) "banana" [2]=> string(7) "laranja" }

      $frutas[] = "morango"; // Adiciona "morango" ao final do array

      var_dump($frutas); //Saída: array(4) { [0]=> string(6) "maçã" [1]=> string(6) "banana" [2]=> string(7) "laranja" [3]=> string(7) "morango" }
      </pre>
      <pre>
      Exemplo para array associativo:
      $aluno = [
        "nome" => "João",
        "idade" => 25,
      ];
      var_dump($aluno); // Saída: array(2) { ["nome"]=> string(5) "João" ["idade"]=> int(25) }

      $aluno["curso"] = "PHP"; // Adiciona a chave "curso" com o valor "PHP"

      var_dump($aluno); // Saída: array(3) { ["nome"]=> string(5) "João" ["idade"]=> int(25) ["curso"]=> string(3) "PHP" }
      </pre>
    </li>
    <li><strong>Substituindo em uma posição específica:</strong> Você pode inserir um elemento em uma posição específica de um array indexado usando o operador de atribuição '=' e especificando o índice desejado.
    <pre>
    Ex:
    $frutas = ["pera", "uva", "goiaba"];
    var_dump($frutas); //Saída: array(3) { [0]=> string(4) "pera" [1]=> string(3) "uva" [2]=> string(6) "goiaba" }

    $frutas[1] = "laranja"; //Substitui "uva" por "laranja" no índice 1
    var_dump($frutas); //Saída: array(3) { [0]=> string(4) "pera" [1]=> string(7) "laranja" [2]=> string(6) "goiaba" }
    </pre>
    </li>
    <li><strong>Adicionar um elemento em um índice específico do array sem remover o item existente:</strong> Para adicionar um elemento em um índice específico do array sem remover o item existente, você pode fazer isso usando a função 'array_splice()'. Sua sintaxe é a seguinte:
    <pre>
    array_splices($array_que_sera_adicionado, $indice_onde_sera_adicionado, 0, $elemento_adicionado);

    Obs: O terceiro argumento (0) especifica que nenhum elemento existente será removido, e os elementos existentes serão deslocados para acomodar o novo valor. 
    </pre>
    <pre>
    Ex:
    $frutas = ["pera", "uva", "goiaba"];
    var_dump($frutas); //Saída: array(3) { [0]=> string(4) "pera" [1]=> string(3) "uva" [2]=> string(6) "goiaba" }
    
    array_splice($frutas, 1, 0, "laranja");
    var_dump($frutas); //Saída: array(4) { [0]=> string(4) "pera" [1]=> string(7) "laranja" [2]=> string(3) "uva" [3]=> string(6) "goiaba" }
    </pre>
    </li>
    <li><strong>Inserindo no início do array:</strong> Para adicionar um elemento no início de um array indexado, você pode usar a função 'array_unshift()'. Para arrays associativos, você precisa criar um novo array com a chave desejada e mesclar com o array existente.
    <pre>
    Exemplo de array indexado:

    $frutas = ["maçã", "banana", "laranja"];
    array_unshift($frutas, "morango"); // Adiciona "morango" no início do array

    var_dump($frutas); //Saída: array(4) { [0]=> string(7) "morango" [1]=> string(6) "maçã"[2]=> string(6) "banana" [3]=> string(7) "laranja" }
    </pre>
    <pre>
    Exemplo de array associativo:

    $aluno = [
    "nome" => "João",
    "idade" => 25,
    ];
    $aluno = ["curso" => "PHP"] + $aluno; // Adiciona a chave "curso" no início

    var_dump($aluno) //Saída: array(3) { ["curso"]=> string(3) "PHP" ["nome"]=> string(5) "João" ["idade"]=> int(25) }
    </pre>
    </li>
    <li><strong>Removendo pelo índice ou chave:</strong> Para remover um elemento de um array associativo ou indexado, basta usar a função 'unset()', especificando a chave ou o índice.
    <pre>
    Exemplo com array associativo:

    $aluno = [
    "nome" => "João",
    "idade" => 25,
    "curso" => "PHP"
    ];

    unset($aluno["idade"]);

    var_dump($aluno); //Saída: array(2) { ["nome"]=> string(5) "João" ["curso"]=> string(3) "PHP" }
    </pre>
    <pre>
    Exemplo para array indexado:

    $frutas = ["maçã", "banana", "laranja"];
    unset($frutas[1]);

    var_dump($frutas); //Saída:   array(2) { [0]=> string(6) "maçã" [2]=> string(7) "laranja" }
    </pre>
    </li>
    <li><strong>Removendo o último elemento:</strong> Para remover o último elemento de um array indexado, você pode usar a função 'array_pop()'. Ela remove o elemento com o maior índice numérico e ajusta os índices automaticamente.
    <pre>
    Exemplo para array indexado:

    $frutas = ["maçã", "banana", "laranja"];
    array_pop($frutas);

    var_dump($frutas); //Saída: array(2) { [0]=> string(6) "maçã" [1]=> string(6) "banana" }
    </pre>
    <p>Para remover o último elemento de um array associativo a maneira mais simples de fazer isso é usando a função 'array_slice()' para criar um novo array excluindo o último elemento.</p>
    <pre>
    Exemplo:
    $aluno = [
      "nome" => "João",
      "idade" => 25,
      "curso" => "PHP",
    ];

    $aluno = array_slice($aluno, 0, -1);

    var_dump($aluno); //Saída: array(2) { ["nome"]=> string(5) "João" ["idade"]=> int(25) }
    </pre>
    <p>Neste exemplo, 'array_slice()' é usado para criar um novo array excluindo o último elemento. O terceiro argumento '-1' indica que queremos excluir o último elemento do array. Isso resultará em um novo array associativo sem o último elemento. Para remover o último elemento do array original, você pode atribuir o resultado de 'array_slice()' de volta à variável original, como no exemplo acima.</p>
    </li>
    <li><strong>Removendo o primeiro elemento:</strong> Para remover o primeiro elemento de um array indexado ou associativo, você pode usar a função 'array_shift()'. Ela remove o elemento e retorna o valor removido.
    <pre>
    Exemplo para array indexado:
    $frutas = ["maçã", "banana", "laranja"];
    array_shift($frutas);

    var_dump($frutas) //Saída: array(2) { [0]=> string(6) "banana" [1]=> string(7) "laranja" }
    </pre>
    <pre>
    Exemplo para array associativo:

    $aluno = [
      "nome" => "João",
      "idade" => 25,
      "curso" => "PHP",
    ];
    array_shift($aluno);

    var_dump($aluno); //Saída: array(2) { ["idade"]=> int(25) ["curso"]=> string(3) "PHP" }
    </pre>
    </li>
    </ul>
  </section>
  <section>
    <h2>Como percorrer um array</h2>
    <p>Você pode percorrer um array de várias maneiras, mas as mais comuns são usando loops 'for', 'foreach' e funções de iteração como 'array_map()' e 'array_filter()'.</p>
    <ol>
      <li><strong>Usando Loops</strong>
        <ul>
          <li><strong>Loop 'for' (para arrays indexados):</strong> O loop for é útil quando você tem um array indexado e sabe o número de elementos que deseja percorrer.
          <pre>
          Exemplo com array indexado:
          $frutas = ["maçã", "banana", "laranja"];

          for ($i = 0; $i < count($frutas); $i++) {
            echo $frutas[$i] . "<br>";
          }
          </pre>
          <p>A função 'count()' é usada para verificar o comprimento (ou seja, o número de elementos) de um array. Em outras palavras, 'count($frutas)' retornará o número de elementos no array, que, no caso, é 3, já que o array '$frutas' contém três elementos: "maçã", "banana" e "laranja". Portanto, o loop 'for' irá iterar três vezes, uma vez para cada elemento no array.</p>
          </li>
          <li><strong>Loop 'foreach' (para arrays associativos e indexados):</strong> O loop 'foreach' é muito flexível e é usado para percorrer tanto arrays associativos quanto indexados. Ele simplifica o processo de iteração, pois você não precisa se preocupar com índices ou chaves. Sua sintaxe básica é a seguinte:
          <pre>
          foreach ($array as $valor) {
            // Código a ser executado para cada $valor
          }
          </pre>
          <ol>
            <li>'foreach': Esta é a palavra-chave que inicia a estrutura do loop.</li>
            <li>'$array': Esta é a variável que você está percorrendo. Ela deve ser um array ou um objeto iterável.</li>
            <li>'as': A palavra-chave "as" é usada para atribuir o valor atual do elemento do array ou membro do objeto a uma variável temporária (você pode escolher qualquer nome para essa variável). Essa variável temporária será usada dentro do bloco de código do loop.</li>
            <li>'$valor': É a variável temporária que você cria para armazenar o valor atual do elemento do array ou membro do objeto a cada iteração.</li>
          </ol>
          <pre>
          Exemplo com array indexado:

          $frutas = ["maçã", "banana", "laranja"];

          foreach ($frutas as $fruta) {
            echo $fruta;
          }
          </pre>
          <pre>
          Exemplo com array associativo:

          $aluno = [
            "nome" => "João",
            "idade" => 25,
            "curso" => "PHP",
          ];
          
          foreach($aluno as $chave => $valor){
            echo "$chave: $valor";
          }
          </pre>
          <p>No exemplo acima, o 'foreach' itera sobre o array, atribuindo automaticamente cada valor a '$fruta' (no caso de um array indexado) ou a '$chave' e '$valor' (no caso de um array associativo).</p>
          </li>
        </ul>
      </li>
      <li><strong>Usando Funções de iteração</strong>
        <ul>
          <li><strong>'array_map()' (para transformar os elementos do array):</strong> A função 'array_map()' permite aplicar uma função a cada elemento de um array e retornar um novo array com os resultados.
          <pre>
          Exemplo:

          $frutas = ["maçã", "banana", "laranja"];
          
          $frutas_em_maiusculas = array_map('strtoupper', $frutas);
          print($frutas_em_maiusculas);
          </pre>
          <p>Neste exemplo, 'array_map()' é usada para converter todas as frutas em letras maiúsculas.</p>
          </li>
          <li><strong>'array_filter()' (para filtrar elementos do array):</strong> A função 'array_filter()' permite filtrar elementos de um array com base em uma função de callback.
          <pre>
          Exemplo:

          $idades = [22, 30, 18, 25, 16];

          $adultos = array_filter($idades, function ($idade) {
            return $idade >= 18;
          });

          print($adultos);
          </pre>
          <p>Neste exemplo, 'array_filter()' é usada para encontrar as idades que são maiores ou iguais a 18.</p>
          </li>
        </ul>
      </li>
    </ol>
  </section>
</body>
</html>