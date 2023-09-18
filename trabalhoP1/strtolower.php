<?php
    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        $textmod = strtolower($text);

    } else {
        $text = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
</head>
<body>
    <h1>RESULTADO DO STRTOUPPER</h1>
    <p>TEXTO DIGITADO: <?php echo $text; ?></p>
    <p>TEXTO ALTERADO PELO STRTOUPPER:  <?php echo $textmod; ?></p>

    

    <a href="/trabalhoP1/index.html">Clique aqui para voltar para o Início</a>

</body>
</html>