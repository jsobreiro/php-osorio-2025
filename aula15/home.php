<?php require_once 'cadeado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 - Minhas Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container">

    <h1>Aula 15 - Minhas Tarefas</h1>

    <h2>Bem-vindo, <?= $_SESSION['usuario']; ?>!</h2>

    <p>
        <a href="logout.php">Logout</a>
    </p>

    <form action="cadastrar_tarefa.php" method="post">

        <p>
            <label for="tarefa">Nome da Tarefa: </label>
            <input type="text" name="tarefa" id="tarefa">   
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
        </p>

    </form>

    <?php 

        require_once 'funcoes.php';

        tratar_erros();

        require_once 'conexao.php';

        $conn = conectar_banco();

        $id = $_SESSION['id'];

        // TODO : EXIBIR TAREFAS DO USUÁRIO LOGADO
        $sql = "SELECT id_tarefa, tarefa FROM tb_tarefas 
                WHERE usuario_id = $id";

        $resultado = mysqli_query($conn, $sql);

        $linhas = mysqli_affected_rows($conn);

        if ($linhas < 0) {
            exit("<h3>Erro ao buscar tarefas do usuário. 
            Tente novamente mais tarde, ou contate o suporte</h3>");
        }

        if ($linhas == 0) {
            exit("<h3>Você não tem tarefas cadastradas!</h3>");
        }

        echo '<div class="row">';
        echo '<div class="col col-md-4">';
        echo '<table class="table table-striped">';

        while ($tarefa_atual = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo    '<td>'.$tarefa_atual['tarefa'].'</td>';
            echo    '<td>';
            echo        '<a href="deletar_tarefa.php?id_tarefa=';
            echo            $tarefa_atual['id_tarefa'];
            echo        '" class="btn btn-outline-danger btn-sm">X  </a>';
            echo    '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '</div>';
        echo '</div>';
    
    ?>

    
</body>
</html>