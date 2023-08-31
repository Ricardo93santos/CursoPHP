<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de Incremento e Decremento</title>
  <style>
    table, thead, tbody, tr, th, td{
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px 10px;
    }
    th{
      background-color: lightgray;
    }
  </style>
</head>
<body>
  <h1>Operadores de Incremento e Decremento no PHP</h1>
  <p>O PHP suporta operadores de pré e pós-incremento e decremento no estilo C. <strong>OBS:</strong> <em>Os operadores incremento/decremento afetam apenas números e strings. Arrays, objetos, booleanos e recursos não são afetados. Decrementar null não gera efeitos, mas incrementar resulta em 1.</em></p>
  <table>
    <thead>
      <tr>
        <th>Exemplo</th>
        <th>Nome</th>
        <th>Efeito</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>++$a</td>
        <td>Pré-Incremento</td>
        <td>Incrementa $a em um, então retorna $a. (++a == ($a = $a + 1;))</td>
      </tr>
      <tr>
        <td>--$a</td>
        <td>Pré-Decremento</td>
        <td>Decrementa $a em um, então retorna $a. (--a == ($a = $a - 1;))</td>
      </tr>
      <tr>
        <td>$a++</td>
        <td>Pós-Incremento</td>
        <td>Retorna $a, e então incrementa $a em um.</td>
      </tr>
      <tr>
        <td>$a--</td>
        <td>Pós-Decremento</td>
        <td>Retona $a, e então decrementa $a em um.</td>
      </tr>
    </tbody>
  </table>
</body>
</html>