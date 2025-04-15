<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP</title>
</head>
<body>

    <h1>Aula 03 - Página Principal</h1>

    <?php 
    
        // include e require: métodos php para incluir arquivos dentro de outros
        //include_once ('form_cadastro.php');
        // ao usar o include, preferir usar o include_once

        require_once ('form_cadastro.php');
        // ao usar o require, preferir usar o require_once

        // qual usar (include x require): preferencialmente, require

        require_once ('form_pesquisa.php');
        

    ?>
    
</body>
</html>