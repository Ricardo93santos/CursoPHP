<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estruturas de Controle no PHP</title>
</head>
<body>
  <main>
    <section>
      <h1>Estruturas de Controle no PHP</h1>
      <p>Estruturas de controle são elementos fundamentais na programação e em muitos outros campos da computação e engenharia. Elas são usadas para direcionar o fluxo de execução de um programa ou processo, permitindo que você tome decisões com base em condições específicas e controle como as instruções são executadas. Existem três tipos principais de estruturas de controle:</p>
      <ol>
        <li><strong>Estruturas de Controle Sequencial:</strong> Essas estruturas controlam o fluxo de um programa de cima para baixo, executando instruções na ordem em que são escritas. Em linguagens de programação, as instruções são geralmente executadas uma após a outra, a menos que haja uma razão para desviar desse fluxo sequencial.</li>
        <li><strong>Estruturas de Controle de Decisão (Condicionais):</strong> Essas estruturas permitem que você tome decisões com base em condições específicas. As estruturas condicionais incluem instruções "if", "else if" e "else" em muitas linguagens de programação. Com essas estruturas, você pode executar diferentes blocos de código dependendo se uma condição é verdadeira ou falsa.</li>
        <li><strong>Estruturas de Controle de Repetição (Laços):</strong> Essas estruturas permitem que você execute um bloco de código repetidamente enquanto uma condição específica for verdadeira. Os laços mais comuns incluem "for", "while" e "do-while". Eles são usados para automatizar tarefas repetitivas.</li>
      </ol>
    </section>
    <section>
      <h2>Estrutura Condicionais</h2>
      <ul>
        <li>
          <h3>If</h3>
          <p>O construtor <strong>if</strong> é um dos recursos mais importantes em muitas linguagens, inclusive no PHP. Permite a execução condicional de fragmentos de código. O PHP apresenta uma estrutura if semelhante a do C:</p>
          <pre>
          if (expr)
          statement
          </pre>
          <p>Se uma expressão for avaliada como true, o PHP executará a declaração, e se avaliá-la como false - ignorá-la. Ex:</p>
          <pre>
          if ($a > $b){
            echo "$a é maior que $b";
          }
          </pre>
          <p>
            Muitas vezes deseja-se que mais de uma declaração seja condicionalmente executada. É claro que não é necessário envolver cada declaração em uma cláusula if. Em vez disso, pode-se agrupar várias declarações em grupos. Ex:
          </p>
          <pre>
          if ($a > $b) {
          echo "$a é maior que $b";
          $b = $a;
          }
          </pre>
          <p>A declaração If pode ser aninhada indefinidamente dentro de outras declarações if, fornecendo completa flexibilidade para execução condicional de várias partes do programa.</p>
        </li>
        <li>
          <h3>Else</h3>
          <p>Muitas vezes deseja-se executar uma instrução se uma certa condição for válida, e uma instrução diferente se a mesma condição não for válida. Para isso que o <strong>else</strong> serve. O else estende a instrução if para executar outras caso a expressão no if retornar false. Ex:</p>
          <pre>
          if ($a > $b) {
            echo "$a é maior que $b";
          } else {
            echo "$a é menor que b";
          }
          </pre>
          <p>A instrução else só é executada se a expressão de avaliação do if for avaliada como false, e se tiver qualquer expressão elseif - somente se também retornarem false.</p>
        </li>
        <li>
          <h3>Elseif</h3>
          <p><strong>Elseif</strong>, como o nome sugere, é uma combinação do if e else. Como o else, estende um if para executar instruções diferentes no caso da expressão if original ser avaliada como false. Entretanto, diferentemente do else, executará uma expressão alternativa somente se a expressão condicional do elseif for avaliada como true. Ex:</p>
          <pre>
          if ($a > $b) {
            echo "a é maior que b";
          } elseif ($a == $b) {
            echo "a é igual a b";
          } else {
            echo "a é menor que b";
          }
          </pre>
          <p>Pode haver vários elseifs dentro da mesma instrução if. A primeira expressão elseif (se houver) que retornar true será executada. No PHP, pode-se escrever else if (em duas palavras), e o comportamento será idêntico ao do elseif (em uma única palavra). O elseif só é executado se o if precedente ou qualquer elseif for avaliado como false, e o elseif corrente for avaliado como true.</p>
        </li>
        <li>
          <h3>Switch</h3>
          <p>A declaração switch é similar a uma série de declarações IF na mesma expressão. Em muitos casos, se deseja comparar as mesmas variáveis (ou expressões), com diferentes valores, e executar pedaços diferentes de código dependendo de qual valor ela é igual. Esta é exatamente a serventia da declaração switch.</p>
          <p>Sua estrutura inicia com a palavra resenrvada 'switch', seguida a variável ou expressão a ser comprarda em parenteses '()' e após uma chaves '{}', que vai conter a estrutura de comparação com a palavra reservada 'case' seguida pelo que deve ser executado e uma palavra reservada 'break;', que serve para interromper a estrutura condicional, caso seja escrito, o código irá executar toda a estrutura até achar um break. Um case especial é o default. Este case corresponde a tudo que não foi correspondido pelos outros cases. Ex:</p>
          <pre>
          $i = 3;
          switch ($i) {
            case 0:
              echo "i é igual a 0";
              break;
            case 1:
              echo "i é igual a 1";
              break;
            case 2:
              echo "i é igual a 2";
            break;
            default:
              echo "i é maior que 2";
          }
          </pre>
          <p>A lista de declarações de um case também podem estar vazia, passando o controle da lista de declarações para o próximo case. Ex:</p>
          <pre>
          switch ($i) {
            case 0:
            case 1:
            case 2:
              echo "i é menor que 3 mas não é negativo";
            break;
            case 3:
              echo "i é 3";
          }
          </pre>
        </li>
      </ul>
    </section>
    <section>
      <h2>Estrutura de Repetição</h2>
      <ul>
        <li>
          <h3>While</h3>
          <p>O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true. O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida até o final da iteração. Se a expressão do while for avaliada como false desde o início, as declarações aninhadas não serão executadas nenhuma vez. O formato básico de uma declaração while é:</p>
          <pre>
          while (expr)
            statement
          </pre>
          <p>Similar a declaração if, pode-se agrupar múltiplas declarações no mesmo laço while delimitando o grupo de declarações por chaves:
          <pre>
          $i = 1;
          while($i <= 10;){
            echo $i++;  
          } //12345678910
          </pre>
          ou utilizando a sintaxe alternativa, usando dois pontos ":" e ao fiinal um "endwhile;":
          <pre>
          $i = 1;
          while($i <= 10):
            echo $i;
            $i++;
          endwhile; //12345678910
          </pre>
          </p>
        </li>
        <li>
          <h3>Do-While</h3>
          <p>Os laços do-while é muito similar aos laços while, com exceção que a expressão de avaliação é verificada ao final de cada iteração em vez de no começo. A maior diferença para o laço while é que a primeira iteração do laço do-while sempre é executada, considerando que no laço while não é necessariamente executada. Só há uma sintaxe para o laço do-while:</p>
          <pre>
          $i = 0;
          do {
            echo $i;
          } while ($i > 0);
          </pre>
          <p>O laço acima será executado somente uma vez, pois após a primeira iteração, quando a expressão de avaliação for executada, resultará em false ($i não é maior que 0) e a execução do laço será encerrada.</p>
          <pre>
          $i = 0;
          do{
            echo $i;
            $i++;
          }while($i <= 10); //012345678910
          </pre>
        </li>
        <li>
          <h3>For</h3>
          <p>Os laços for são os mais complexos no PHP, a sintaxe do laço for é:</p>
          <pre>
          for (expr1; expr2; expr3)
            statement
          </pre>
          <p>A primeira expressão 'expr1' é executada, uma vez, incondicionalmente, no início do laço. No começo de cada iteração a 'expr2' é avaliada. Se a avaliada como true, o laço continuará e as instruções aninhada serão executadas. Se avaliada como false, a execução do laço terminará. No final de cada iteração, a 'expr3' é executada. No exemplo a seguir será contado de 1 até 10:</p>
          <pre>
          for($i = 1; $i <= 10; $i++;){
            echo $i;
          }
          </pre>
        </li>
      </ul>
    </section>
  </main>
</body>
</html>