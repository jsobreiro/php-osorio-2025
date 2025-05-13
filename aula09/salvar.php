<?php require_once 'validacoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Salvar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">

    <h1>Aula 09 - Salvar Cliente</h1>

    <p>
        <a href="index.php">Voltar à home</a>
    </p>

    <?php 
        // TODO: Inserir validações antes de incluir o arquivo de conexão
        if (form_nao_enviado()) {
            exit('<h3 class="alert alert-warning">Por favor, retorne à home e preencha o form.</h3>');
        }

        if (ha_campos_em_branco($_POST)) {
            exit('<h3 class="alert alert-warning">Por favor, preencha todos os campos do form</h3>');
        }

        require_once 'conexao.php'; // inclui arquivo de conexão

        // armazenar dados do form em variáveis locais:
        $nome  = $_POST['nome'];
        $fone  = $_POST['fone'];
        $email = $_POST['email'];

        // estabelecer conexão com o banco de dados
        $conn = conectar_banco();

        $sql = "INSERT INTO tb_clientes (nome, fone, email) 
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) { // se houver algum erro na estrutura do sql
            exit('<h3 class="alert alert-danger">Erro na preparação da consulta.</h3>');
        }

        // bind (associação) dos parametros
        // Basicamente, vamos substituir as '?' pelos valores das variáveis
        mysqli_stmt_bind_param($stmt, "sss", $nome, $fone, $email);

        // Executa o comando e verifica o retorno
        if (mysqli_stmt_execute($stmt)) {
            echo '<h3 class="alert alert-success">Cliente cadastrado com sucesso!</h3>';
        } else {
            echo '<h3 class="alert alert-danger">Erro ao salvar: ' . mysqli_stmt_error($stmt) . "</h3>";
        }

        mysqli_close($conn); // encerra a conecão com o banco
    

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>