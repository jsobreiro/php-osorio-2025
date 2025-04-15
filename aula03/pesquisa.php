<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Resultado da Pesquisa</title>
</head>
<body>
    
    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

    <h1>Resultado da Pesquisa</h1>

    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        //Recebe o nome do produto e o procura dentro de um array de produtos
        if (!empty($_GET['produto'])) {

            $produto = $_GET['produto'];

            // criar um array de produtos
            $produtos = [
                "Notebook Gamer",
                "Sabonete",
                "Camisa Xadrez",
                "Pano de prato",
                "Jogo de pratos",
                "Guitarra Gibson",
                "Lava-rápido Hot Wheels",
                "Impressora HPeste",
                "Poly Station 5",
                "Notebook Dell"
            ];
           
            /*echo "Array Produtos<br><pre>";
            print_r($produtos);
            echo "</pre>";*/

            // procurar o produto recebido no array de produtos

            $encontrou = false; // ainda não encontrou nada
            
            // foreach: laço próprio pra percorrer arrays
            foreach ($produtos as $tempProduto) {

                // o produto que digitei no form, existe aqui dentro?

                /*
                str_contains = verificar se, dentro de uma string (primeiro
                argumento da função), CONTÉM o valor da outra string (segundo
                argumento da função)

                str_contains($palheiro, $agulha)
                */  

                if (str_contains($tempProduto, $produto)) {
                    echo "<h4>Produto encontrado: " . $tempProduto . "</h4>";
                    $encontrou = true; // encontramos algo
                }

            }

            // verificar se NÃO ENCONTROU nada
            if(!$encontrou) { // encontrou == false

                echo "<h4>Produto com o termo " . $produto . 
                " não encontrado</h4>";
            }


        } else {

            echo "<h3>Campo produto não pode estar em branco!</h3>";
        }
        

    } else {

        echo "<h3>Nenhuma pesquisa foi enviada!</h3>";
    }
    
    ?>


</body>
</html>