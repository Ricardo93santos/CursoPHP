<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formatar Números no PHP</title>
</head>
<body>
  <h1>Formatar Números Monetários no PHP</h1>
  <p>No PHP podemos formatar números monetários podemos usar a função <strong>number_format()</strong> e a biblioteca <strong>intl</strong></p>
  <h2>number_format()</h2>
  <p>
    A função <strong>number_format()</strong>, formata um número com os milhares agrupados. Essa função aceita um, dois ou quatro parâmetros (não três). Sua sintaxe é:
    <pre>
      number_format(
        float $number, //O número a ser formatado.
        int $decimal, //A quantidade de casas decimais.
        string $dec_point, //String para definir o separador decimal.
        string $lhousand_sep //Define o separador de milhar. 
      );
    </pre>
  </p>
  <p>Ex:
    <pre>
      $number = 1256.897;

      //Notação Inglesa(padrão)
      $english_format_number = number_format($number);
      echo "$english_format_number" //1,256
      
      //Notação Brasileira
      $br_number_format = number_format($number);
      echo "$br_number_format"; // 1.256,89
    </pre>
  </p>
  <h2>Internalization PHP (intil)</h2>
  <p>A biblioteca <strong>intil</strong>, é usada para formatar números monetários de forma dinâmica.A mesma possue duas funções principais que são usadas para formatar os valores monetários, <strong>numfmt_create(), numfmt_format_currency().</strong></p>
  <ul>
    <li><strong>numfmt_create()</strong>, essa função é usada para criar o padrão internacional da moeda, recebe dois parâmetros, o primeiro é o idioma do país que a moeda vai ser formatada e o segundo o tipo de número a ser formatado.
    <pre>
      ex:
      $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    </pre>
  </li>
    <li><strong>numfmt_format_currency()</strong>, essa função faz a formatação do número selecionado, recebe como parâmetro três valores. O primeiro é o padrão, definido pela função "numfmt_create()", o segundo é o valor a ser formatado, podendo ser uma variável ou valor direto, e por ultimo a sigla da moeda.
    <pre>
      Ex:
      $moeda = 1276.35;
      $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
      echo "numfmt_format_currency($padrao, $moeda,"BRL")"; // R$1.276,36
    </pre>
  </li>
  </ul>
  <p>Para alterar o padão basta alterar o primeiro parâmetro da variável "$padrao", para o idioma do país. EX:
    <pre>
      //Padrão Europeu
      $moeda = 1276.35;
      $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
      echo "numfmt_format_currency($padrao, $moeda,"USD")"; // 1 276,36 US$
    </pre>
  </p>
</body>
</html>