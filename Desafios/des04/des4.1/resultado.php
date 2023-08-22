<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php 
          $numero = $_POST["numero"];
          
          function gerarAntecessor($numero){
           $antecessor = $numero - 1;
           return $antecessor;
          }
          function gerarSucessor($numero){
            $sucessor = $numero + 1;
            return $sucessor;
          }

          define("ANTECESSOR", gerarAntecessor($numero));
          define("SUCESSOR", gerarSucessor($numero));

          echo "<p>O valor informado é $numero.</p>";
          echo "<p>O antecessor é " . ANTECESSOR . ".</p>";
          echo "<p>O antecessor é " . SUCESSOR . ". </p>";
        ?>
        <input type="button" id="btnVoltar" value="Voltar">
    </section>
</body>
</html>