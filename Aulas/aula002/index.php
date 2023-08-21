<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis e Constantes em PHP</title>
</head>
<body>
  <h1>Variáveis e Constantes em PHP</h1>
  <h2>Variáveis</h2>
  <p>
    No PHP, as variáveis são declaradas usando o símbolo de dólar ($) seguido pelo nome da variável. A atribuição de um valor à variável é feita usando o operador de atribuição (=).
    <code>EX:
      $nome = "João";
    </code>
  </p>
  <h2>Constantes</h2>
  <p>
    As constantes, por outro lado, são declaradas usando a função "define()". O nome da constante é uma string e, por convenção, é geralmente escrita em letras maiúsculas. O valor da constante é definido após o nome, usando o operador de atribuição. 
    <code>
      EX: define("MEDIA_MINIMA", 7.0);
    </code>
  </p>

  <h2>Uso das Variáveis e Constantes no PHP</h2>
  <p>
    A principal diferença entre variáveis e constantes no PHP é que as variáveis podem ter seus valores alterados durante a execução do programa, enquanto as constantes têm um valor fixo que não pode ser alterado depois de declarado. As constantes são úteis quando você precisa definir um valor que não deve ser modificado ao longo do programa.
  </p>
  <p>
    No entanto, é importante ressaltar que as constantes são globais por padrão, o que significa que elas podem ser acessadas em qualquer lugar do seu código. Por outro lado, as variáveis têm escopo e podem ser acessadas apenas dentro do bloco de código em que foram declaradas, a menos que sejam declaradas como globais explicitamente usando a palavra-chave "global".
  </p>
  <p>Aqui está um exemplo de como declarar uma variável como global no PHP: 
    <pre>
      $variavelGlobal = 10;
      function minhaFuncao() {
        global $variavelGlobal;
        // Agora a variável $variavelGlobal pode ser usada aqui dentro da função
        echo $variavelGlobal;
      }
      minhaFuncao(); // Saída: 10
      </pre>
  </p>
  <p>Vejamos como pode-se usar variáveis e constantes em diferentes contextos:</p>
  <ol>
    <li>
      Atribuição de valores:
      <ul>
        <li>
          Variável: 
          <pre>
            $nome = "João";
            $idade = 25;
          </pre>
        </li>
        <li>
          Constante:
          <pre>
            define("PI", 3.14);
            define("TAXA_DESCONTO", 0.1);
          </pre>
        </li>
      </ul>
    </li>
    <li>
      Utilização de Expressões:
      <ul>
        <li>
          Variável:
          <pre>
            $total = $preco * $quantidade;
          </pre>
        </li>
        <li>
          Constante:
          <pre>
            $desconto = $total * TAXA_DESCONTO;
          </pre>
        </li>
      </ul>
    </li>
    <li>
      Exibição de valores:
      <ul>
        <li>Variável:
          <pre>
            echo "Olá, " .$nome . "! Você tem " . $idade . " anos."; //Concatenação com .
            echo "Olá, $nome! Você tem $idade anos."; //Sem concatenação
          </pre>
        </li>
        <li>
          Constante:
          <pre>
            echo "O valor da média final tem que ser " . MEDIA_MINIMA;
            /* Constantes só podem ser usadas com concatenação com (.),
            não consegue colocar as mesmas dentro das aspas (""),
            pois o PHP não identifica a mesma como constante. */
          </pre>
        </li>
      </ul>
    </li>
    <li>
      Utilização em estruturas de controle:
      <ul>
        <li>Variável:
          <pre>
            if ($idade >= 18) {
              echo "Você é maior de idade.";
            } else {
              echo "Você é menor de idade.";
            }
          </pre>
        </li>
        <li>Constante:
          <pre>
            if ($nota >= NOTA_MINIMA) {
              echo "Você foi aprovado!";
            } else {
              echo "Você foi reprovado.";
            }
          </pre>
        </li>
      </ul>
    </li>
  </ol>

  <?php 
    $idade = 8;

    function verificarIdade(){
      global $idade;
      if($idade >= 18){
        echo "Você é maior de idade, tem $idade anos. \n";
      }else{
        echo "Você é menor de idade, tem $idade anos. \n";
      }
    }

    verificarIdade();
  ?>
  <?php 
    $nota1 = 7;
    $nota2 = 8;
    $media = ($nota1+$nota2)/2;
    $nomeAluno = "Ricardo";
    function verificarAprovacao($nomeAluno){
      global $media;
      define("MEDIA_MINIMA", 7.0);

      if($media >= MEDIA_MINIMA){
        echo "$nomeAluno, você foi aprovado com a média final de " . MEDIA_MINIMA . "\n";
      }else{
        echo "$nomeAluno, você foi reprovado com a média final de " . MEDIA_MINIMA ."\n";
      }
    }
    verificarAprovacao($nomeAluno)
  ?>
</body>
</html>