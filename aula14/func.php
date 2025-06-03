<?php 
require_once 'conexao.php';

function form_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function form_em_branco() {
    return empty($_POST['email']);
}

function buscar_pedidos($email) {

    $conn = conectar_banco();

    $sql = "SELECT c.nome, c.email, p.produto, p.valor 
    FROM tb_pedidos p 
    INNER JOIN tb_clientes c
    ON p.cliente_id = c.id_cliente
    WHERE c.email = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        echo "<h3>Erro na estrutura da consulta SQL</h3>";
        return;
    }

    if (!mysqli_stmt_bind_param($stmt, "s", $email)) {
        echo "<h3>Erro associar e-mail ao parâmetro da pesquisa</h3>";
        return;
    }

    // executar comando sql preparado
    mysqli_stmt_execute($stmt);

    // verificar se o comando executado retornou algo
    mysqli_stmt_store_result($stmt); // registrar resultado da execução

    if (mysqli_stmt_num_rows($stmt) <= 0) {
        echo "<h3>Nenhum pedido associado ao cliente com e-mail $email</h3>";
        return;
    }

    exibir_pedidos($stmt);

}

function exibir_pedidos($stmt) {

    mysqli_stmt_bind_result($stmt, $nome, $email, $produto, $valor);

    echo "<h3>Pedidos do cliente $email</h3>";

    while(mysqli_stmt_fetch($stmt)) {

        echo "Cliente: " . $nome . "<br>";
        echo "E-mail: "  . $email . "<br>";
        echo "Produto: " . $produto . "<br>";
        echo "Valor: R$" . $valor . "<br>";
        echo "-------------------------<br>";
        
    }
}




?>