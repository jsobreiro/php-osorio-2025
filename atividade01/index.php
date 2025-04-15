<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática 01</title>
</head>
<body>
    
    <h1>Atividade Prática 01 - Home</h1>

    <h2>Cadastro de Aparelho Eletrônico</h2>

    <form action="cadastro.php" method="post">

        <p>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" placeholder="Nome do aparelho" required>
        </p>

        <p>
            <label for="consumo_max">Consumo máximo em watts</label><br>
            <input type="number" name="consumo_max" id="consumo_max" placeholder="Consumo máximo" required min="1">
        </p>

        <p>
            <label for="horas">Horas que o aparelho fica ligado no dia</label><br>
            <input type="number" name="horas" id="horas" placeholder="Horas" required
            min="1" max="24">
        </p>

        <p>
            <label for="dias">Dias que o parelho fica ligado no mês</label><br>
            <input type="number" name="dias" id="dias" placeholder="Dias" required min="1" max="31">
        </p>

        <p>
            <label for="valor_kwh">Valor do Kilowatt-hora</label><br>
            <input type="number" name="valor_kwh" id="valot_kwh" placeholder="Valor Kw-h" required min="0.01" step="0.01">
        </p>


        <button type="submit">Cadastrar</button>


    </form>

</body>
</html>