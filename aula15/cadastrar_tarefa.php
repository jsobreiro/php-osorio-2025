<?php require_once 'cadeado.php';

    require_once 'funcoes.php';

    if(form_nao_enviado()){
        header('location:home.php?code=0');
        exit;
    }

    if(tarefa_em_branco()) {
        header('location:home.php?code=2');
        exit;
    }

    $tarefa = $_POST['tarefa']; // tarefa vindo do form (POST)
    $id = $_SESSION['id']; // id vindo sa sessão (SESSION)

    require_once 'conexao.php';

    $conn = conectar_banco();

    $sql = "INSERT INTO tb_tarefas (tarefa, usuario_id) 
            VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        header('location:home.php?code=3');
        exit;
    }

    if(!mysqli_stmt_bind_param($stmt, 'si', $tarefa, $id)) {
        header('location:home.php?code=3');
        exit;
    }

    if(!mysqli_stmt_execute($stmt)) {
        header('location:home.php?code=3');
        exit;
    }

    header('location:home.php');

?>