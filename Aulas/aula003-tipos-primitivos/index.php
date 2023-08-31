<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos Primitivos no PHP</title>
</head>
<body>
  <h1>Tipos Primitivos no PHP</h1>
  <p>O php é uma linguagem de programação fracamente tipada, ou seja, o seu tipo primitivo é definido de forma dinâmica de acordo é feita a atribuição dos valores. Existe três classes de tipos primitivos no PHP, são: <strong>escalares, compostos e especiais</strong>.</p>
  <ul>
    <li>
    Tipos primitivos escalares:
    <ol>
    <li>
    <strong>String</strong>, é uma cadeia de caracteres, sequencia de letras, números e símbolos, sempre representadas entre aspas simples ou duplas ('' ou " ").
    <pre>
    Ex:
    $string1 = "aluno";
    $string2 = "Ricardo"
    </pre>
    </li>
    <li>
    <strong>int ou intger</strong>, um valor numérico inteiro, positivo ou negativo, aquele que vem sem a parte decimal.
    <pre>
    Ex:
    $int1 = 12;
    $intger1 = -12;
    </pre>
    </li>
    <li>
    <strong>float ou double</strong>, um valor numérico real, positivo ou negativo, que vem com a parte decimal, depois do ponto flutuante ou potencia.
    <pre>
    Ex:
    $float1 = 35.7;
    $float2 = -35.7;
    </pre>
    </li>
    <li>
    <strong>bool ou boolean</strong>, um valor lógico que aceita apenas os valores verdadeiro ou falso (true ou false).
    <pre>
    Ex:
    $bool1 = true;
    $bool2 = false;
    if($bool1 == $bool2){
      echo "Verdadeiro";
    }else{
      echo "Falso";
    }
     // Res Falso
    </pre>
    </li>
    </ol>
    </li>
    <li>
      Tipos primitivos compostos:
      <ol>
        <li>Array</li>
        <li>Object</li>
        </ol>
    </li>
    <li>
      Tipos primitivos especiais:
      <ol>
        <li>null</li>
        <li>resourse</li>
        <li>callbe</li>
        <li>mixed</li>
      </ol>
    </li>
  </ul>
  <h2>var_dump()</h2>
  <p>A função var_dump(), é usada para identificar o tipo e o valor de uma variável.</p>
  <pre>
  Ex:
  $nome = "Ricardo";
  var_dump($nome); // string(7) "Ricardo"
  $idade = 29;
  var_dump($idade); // int(29)
  $peso = 73.8;
  var_dump($peso); // double(73.8)
  $casado = true;
  var_dump($casado); //bool(true)
  </pre>
  <h2>Coerção no PHP</h2>
  <p>A coerção no PHP é usada para trocar os tipos primitivos de uma variável.</p>
  <pre>
  Ex:
  $num_string = "973";
  var_dump($num_string); // string(3) 973
  $num = (int)$num_string;
  var_dump($num); // int(973)
  </pre>
</body>
</html>