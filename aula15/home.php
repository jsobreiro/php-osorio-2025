<?php require_once 'cadeado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Home</title>
</head>
<body>

    <h1>Aula 13 - Home</h1>

    <h2>Bem-vindo, <?= $_SESSION['usuario']; ?>!</h2>

    <p>
        <a href="logout.php">Logout</a>
    </p>
    
</body>
</html>