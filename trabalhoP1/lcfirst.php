<?php
    if (isset($_POST["text"])) {
        $text = $_POST["text"];
        $textmod = lcfirst($text);

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
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
            background-color: lightgray;
            border-radius: 15px
        }
        
        div{
            background-color: lightslategray;
            border-radius: 15px;
            padding: 1px 15px 1px 15px;
        }
    </style>
</head>
<body>
<div>
    <h1>RESULTADO DO LCFIRST</h1>
    
    <p>TEXTO DIGITADO: <?php echo $text; ?></p>
    <p>TEXTO ALTERADO PELO LCFIRST:  <?php echo $textmod; ?></p>
    </div>

    

    <a href="/trabalhoP1/index.html">Clique aqui para voltar para o Início</a>

</body>
</html>