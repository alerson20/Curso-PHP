<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1>Dados do Servidor</h1>
    <?php
        date_default_timezone_set("America/sao_Paulo"); 
        echo"Hoje é dia " . date("d/M/Y");
        echo"e a hora atual é " . date("G:i:s");

    $nome = "Alerson";
    $sobrenome = "Barbosa";
    const PAIS = "Brasil";
    //
    $nome = "Jorge";

    //PAIS = "EUA";

    echo "Muito prazer, $nome $sobrenome! você mora no " . PAIS;
    

    ?>
</body>
</html>