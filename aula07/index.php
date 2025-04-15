<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Home</title>
</head>
<body>
    
    <h1>Aula 07 - Home</h1>

    <h2>Boletim Bimestral - 1º Bimestre</h2>

    <form action="medias.php" method="post">
        
    <p>
        <label for="Aluno">Aluno:</label><br>
        <input type="text" name="Aluno" id="Aluno">
    </p>

    <p>
        <label for="Matemática">Nota de matemática:</label><br>
        <input type="number" name="Matemática" id="Matemática" step="0.1">
    </p>

    <p>
        <label for="Física">Nota de física:</label><br>
        <input type="number" name="Física" id="Física" step="0.1">
    </p>

    <p>
        <label for="Química">Nota de química:</label><br>
        <input type="number" name="Química" id="Química" step="0.1">
    </p>

    <p>
        <label for="Biologia">Nota de biologia:</label><br>
        <input type="number" name="Biologia" id="Biologia" step="0.1">
    </p>

    <p>
        <label for="Português">Nota de português:</label><br>
        <input type="number" name="Português" id="Português" step="0.1">
    </p>

    <p>
        <label for="História">Nota de história:</label><br>
        <input type="number" name="História" id="História" step="0.1">
    </p>

    <p>
        <label for="Geografia">Nota de geografia:</label><br>
        <input type="number" name="Geografia" id="Geografia" step="0.1">
    </p>

    <p>
        <label for="Filosofia">Nota de filosofia:</label><br>
        <input type="number" name="Filosofia" id="Filosofia" step="0.1">
    </p>

    <button type="submit">Salvar</button>

    </form>

</body>
</html>