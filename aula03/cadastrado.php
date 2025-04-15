<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Cliente Cadastrado</title>
</head>
<body>
    
    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

    <h1>Cliente Cadastrado</h1>


    <?php 
    
    // verificar se a página recebeu dados enviados via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // receber dados enviados via post e mostrar na tela
        $dados = $_POST;

        if(!empty($dados['nome']) &&
           !empty($dados['email']) &&
           !empty($dados['fone']) &&
           !empty($dados['endereco']) ) {

            echo "Nome: " . $dados['nome'] . "<br>";
            echo "E-mail: " . $dados['email'] . "<br>";
            echo "Telefone: " . $dados['fone'] . "<br>";
            echo "Endereço: " . $dados['endereco'] . "<br>";

        } else {  // algum campo está em branco

            echo "<h3>Preencha todos os campos no form da Home</h3>";

        }



        /*echo "<pre>";
        var_dump($_POST);
        echo "</pre>";*/

    } else {
        // mostrar uma mensagem de erro
        echo "<h3>ATENÇÃO:Nenhum dado de cliente foi enviado!</h3>";
    }
    
    ?>


</body>
</html>