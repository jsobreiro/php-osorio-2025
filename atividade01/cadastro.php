<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prátcica 01 - Cadastro</title>
</head>
<body>
    <h1>Atividade Prática 01 - Cadastro</h1>

    <h2>Aparelho Eletrônico Cadastrado</h2>

    <?php 
    // Verificar se form foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Receber os campos do form em suas respectivas variáveis
        $nome        = $_POST['nome']; 
        $consumo_max = $_POST['consumo_max'];
        $horas       = $_POST['horas'];
        $dias        = $_POST['dias'];
        $valor_kwh   = $_POST['valor_kwh'];

        // consumo diário:
        $x = $consumo_max / 1000;
        $consumo_dia = $x * $horas; // x * horas que o aparelho fica ligado por dia

        // consumo mensal:
        $consumo_mes = $consumo_dia * $dias;

        // consumo do aparelho em reais:
        $consumo_real = $consumo_mes * $valor_kwh;

        echo "Nome do aparelho: " . $nome . "<br>";
        echo "Consumo máximo em watts: " . $consumo_max . "<br>";
        echo "Horas que o aparelho fica ligado por dia: " . $horas . "<br>";
        echo "Dias que o aparelho duca ligado no mês: " . $dias . "<br>";
        echo "Valor do KW/h: " . $valor_kwh . "<br>";
        echo "Consumo diário: " . $consumo_dia . " Watts<br>";
        echo "Consumo mensal: " . $consumo_mes . " Watts<br>";
        echo "Consumo mensal em R$: " . $consumo_real . "<br>";

        echo "Categoria de consumo: ";

        if ($consumo_real <= 5) {

            echo "Baixa<br>";
        
        } else if ($consumo_real <= 10) {

            echo "Moderada<br>";
        
        } else {

            echo "Elevada<br>";
        }


    } else {

        echo '<h3>Por favor, preencha o formulário!</h3>';
    }
    
    ?>
    
    <p>
        <a href="index.php">Voltar à home</a>
    </p>

</body>
</html>