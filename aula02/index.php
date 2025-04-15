<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Aula 02 - Home"; ?></title>
</head>
<body>
    
    <h1>Aula 02 - PHP - Página Inicial</h1>
    
    <?php 
    
        $nome_aluno = "Jason Sobreiro"; // string
        $curso = "ADS"; // string
        $periodo = 3; // int

        // \n = aplica uma quebra de linha para o Interpretador
        // \t = aplica uma tabulação para o Interpretador

        echo "Nome do aluno: " . $nome_aluno . "<br>"; // concatenação
        echo "\n\tCurso: $curso<br>"; // interpolação
        echo "\n\tPeríodo atual: " . $periodo . "<br>";  

    ?>

    <h2>Exemplos e Exercícios</h2>

    <ul>
        <li><a href="exemplo01.php">Exemplo 01</a></li>
    </ul>


</body>
</html>