<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Parte 2 - Excluir Cliente</title>
</head>
<body>

    <h1>Aula 09 - Parte 02 - Excluir Cliente</h1>

    <p>
        <a href="index.php">Home</a> | 
        <a href="clientes.php">Clientes</a>
    </p>

    <?php 
        if (!isset($_GET['id'])) {
            exit("<h3>ID não informado</h3>");
        }

        require_once 'conexao.php'; // incluir arquivo de conexão com o BD

        $id = (int)$_GET['id']; // type cast para tipo id recebido via get
        // type cast = converter um valor para um tipo específico

        $conn = conectar_banco(); // conecta ao banco de dados
        
        $sql = "DELETE FROM tb_clientes WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) { // se houver algum erro na estrutura do sql
            exit("<h3>Erro na preparação da consulta.</h3>");
        }

        mysqli_stmt_bind_param($stmt, "i", $id);

        // se houver problema no statment, apresenta o erro abaixo e encerra script
        if (!mysqli_stmt_execute($stmt)){
            exit("<h3>Erro ao excluir cliente: " . mysqli_stmt_error($stmt) . "</h3>");
        }
        
        // se, ao executar o comando DELETE, nenhum registro for excluído com base no
        // id fornecido, apresenta o erro abaixo e encerra o script
        if(mysqli_affected_rows($conn) == 0) {
            exit("<h3>Erro ao excluir cliente! Cliente inexistente</h3>");
        }    
            
        // se passou por todas as validações, apresenta msg de sucesso
        echo "<h3>Cliente excluído com sucesso!</h3>";
                
        mysqli_stmt_close($stmt); // encerrar o stmt

        mysqli_close($conn); // encerra a conexao com o bd
    
    
    ?>
    
</body>
</html>