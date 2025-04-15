<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Home</title>
</head>
<body>
    
    <h1>Aula 06 - Home</h1>

    <h2>Calcular dois valores</h2>
    
    <form action="calculos.php" method="post">

        <p>
            <label for="valor1">Valor 1:</label>    
            <input type="number" name="valor1" id="valor1" required>
        </p>

        <p>
            <label for="valor2">Valor 2:</label>
            <input type="number" name="valor2" id="valor2" required>
        </p>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>