<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Relacionamento entre Tabelas</title>
</head>
<body>

    <h1>Aula 14 - Home</h1>
    <h2>Relacionamento entre tabelas</h2>

    <h3>Pesquisa de Pedidos por E-mail de Cliente</h3>
    <form action="index.php" method="post">

    <p>    
        <label for="email">Informe o e-mail do cliente:</label><br>
        <input type="email" name="email" id="email"><br>
    </p>
    
    <button type="submit">Pesquisar</button>

    </form>

    <?php 
    
        // incluir arquivo de funções
        require_once 'func.php';
    
        // verificar se o form não foi enviado
        if (form_nao_enviado()) {
            exit;
        }

        // verificar se o form não está em branco
        if (form_em_branco()) {
            exit("<h3>Campo e-mail não estar em branco!</h3>");
        }

        // Se passarmos pelas verificações acima:
        // recebemos o email enviado via post
        $email = $_POST['email'];

        // chamar a função para buscar pedidos com base no email informado
        buscar_pedidos($email);

    ?>

    
</body>
</html>