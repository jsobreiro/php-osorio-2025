<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Calculos</title>
</head>
<body>
    
    <h1>Aula 06 - Calculos</h1>

    <?php 
    
    // Testar erros primeiro:

    // verificar se formulário não foi enviado:
    if (!validar_form()) {
        
        echo "Necessário preencher o formulário!";
        exit; // interrompe a execução do script
        // similar ao break em um loop ou return em função
        // outro comando permitido: die
    } 

    // verificar se há algum campo em braco:
    if (!verificar_campos_em_branco()) {

        echo "Os dois valores precisam ser preenchidos!";
        exit;
    }

    // verificar se valores do form são números
    if (!verificar_valor_numerico()) {
        echo "Os dois valores precisam ser valores numéricos!";
        exit;
    }

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $soma = $valor1 + $valor2;
    $subt = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $divi = $valor2 == 0 ? 0 : $valor1 / $valor2; // operador ternário

    echo "Soma: $valor1 + $valor2 = $soma<br>";
    echo "Subtração: $valor1 - $valor2 = $subt<br>";
    echo "Multiplicação: $valor1 * $valor2 = $mult<br>";
    echo "Dvisão: $valor1 / $valor2 = $divi<br>";
    
    ?>



</body>
</html>