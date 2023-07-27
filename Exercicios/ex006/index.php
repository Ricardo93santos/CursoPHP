<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores, Exepressões e Funções Aritméticas no PHP</title>
</head>
<body>
  <h1>Operadores Aritméticos do PHP</h1>
  <p>Os operadores aritméticos no PHP são:
    <ol>
      <li>+ (Adição) 5+2 = 7</li>
      <li>- (Subtração) 5-2 = 3</li>
      <li>* (Multiplicação) 5*2 = 10</li>
      <li>/ (Divisão Real) 5/2 = 2.5</li>
      <li>% (Módulo) 5%2 = 1</li>
      <li>** (Potência) 5**2 = 25 "O operador de potência foi adicionado na verção do 5.6 PHP</li>
    </ol>
  </p>
  <h1>Exepressões Aritméticas no PHP</h1>
  <p>Assim como na matemática existe uma ordem de precedência no PHP e em outras linguagens não é diferente.</p>
  <p>Para os operadores a ordem é a seguinte:
    <ol>
      <li>** (Potência)</li>
      <li>* / % (Multiplicação, Divisão ou Módulo)</li>
      <li>+ - (Soma ou Subtração)</li>
    </ol>
  </p>
  <p>Como no exemplo acima primeiro é a potência, depois multiplicação, divisão ou módulo e por ultimo soma ou subtração. Aparecendo os operadores que estão no mesmo nível de precedência realizar o calculo da esquerda para a direita. Se aparecer um parenteses "()" o mesmo vai mudar a ordem deprecedência, ou seja, os operadores que devem ser alculados primeiro são os que estão dentro dos "()".</p>
  <p>
    Ex:
    <pre>
      50/2+3**2 = 34
      50/(2+3)**2 = 2
    </pre>
  </p>
  <h1>Funções Aritméticas no PHP</h1>
  <p>No PHP, as funções aritméticas são utilizadas para realizar operações matemátias com números. Elas permitem que você execute calculos numéricos e manipular valores de diferentes formas.</p>
  <p>Exemplos de algumas funções aritméticas:
    <ol>
      <li><strong>abs()</strong>, a função abs() retorna o valor absoluto de um número, ou seja, o valor positivo do número, ignorando seu sinal.
        <pre>
          $num = -5;
          $resultado = abs($num);
          echo "$resultado;" // Saída 5
        </pre>
      </li>
      <li><strong>round()</strong>, arredonda um número para o valor inteiro mais próximo. Pode-se especificar o número de casas decimais para o arredondamento.
      <pre>
        $num = 3.7;
        echo "round($num)"; //Saída 4
        $num = 3.14159;
        echo "round($num, 2)"; // Saída 3.14
      </pre>
    </li>
      <li><strong>ceil()</strong>, arredonda um número para cima, retornando o próximo número inteiro maior ou igual.
      <pre>
        $num = 4.2;
        echo "ceil($num)"; // 5
      </pre>
    </li>
      <li><strong>floor()</strong>, arredonda um número para baixo, retornando o próximo número inteiro menor ou igual
      <pre>
        $num = 4.8;
        echo "floor($num)"; // 4
      </pre>
    </li>
      <li><strong>sqrt()</strong>, retorna a raiz quadrada de um número.
      <pre>
        $num = 25;
        echo "sqrt($num)"; // 5
      </pre>
    </li>
    </ol>
  </p>
</body>
</html>