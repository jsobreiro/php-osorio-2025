<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Login e Senha</title>
</head>
<body>
    
    <h1>Aula 13 - Sistema de Login</h1>

    <h2>Informe os dados para login:</h2>
    
    <?php 
    
       require_once 'funcoes.php';

       tratar_erros();   
    
    ?>


    <form action="verificar.php" method="post">

        <p>
            <label for="usuario">Usuário:</label><br>
            <input type="text" name="usuario" id="usuario">
        </p>

        <p>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha">
        </p>

        <button type="submit">Login</button>

    </form>

</body>
</html>