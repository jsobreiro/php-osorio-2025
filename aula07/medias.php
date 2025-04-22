<?php require_once 'validacoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Boletim</title>
</head>
<body>
    
    <h1>Aula 07 - Boletim</h1>

    <?php 
    
        // Se chegamos nesta página via GET ao invés de chegar pelo envio do
        // form via POST
        if (form_post_nao_enviado()) {
            echo "<h3>Por favor, retorne à home e preencha o formulário</h3>";
            exit; // encerra o script por aqui
        }

        // Se o form foi enviado e chegamos nesta página via POST, 
        // o próximo passo é verifificar se algum campo do form ficou vazio:
        if (!empty($erros = validar_campos_form_boletim())) {
            
            // se '$erros' não está vazio, significa que temos ao menos uma mensagem de erro
            // para exibir. Neste caso, enviamos o array 'erros' para a função que irá
            // exibir todos os erros armazenados neste array:
            mostrar_array_erros($erros);
            exit; // depois de mostrar as mensagens encerramos a execução do script
        }

        // se o form foi enviado via POST E não há campos vazios, o próximo passo é
        // verificar se os campos de notas estão dentro do intervalo correto (entre 0 e 10)
        if (!empty($erros = verificar_intervalo_notas())) {
            
            // Se '$erros' não está vazio, significa que temos ao menos um campo de nota com
            // valor numérico fora do intervalo estabelecido. enviamos o array 'erros' 
            // para a função que irá exibir todos os erros armazenados neste array:
            mostrar_array_erros($erros);
            exit; // depois de mostrar as mensagens encerramos a execução do script
        }

        // se passarmos por todas essas verificações, então, enfim, poderemos prosseguir
        // como nosso código.
        
        // armazenar localmente os dados registrados no array superglobal $_POST
        $aluno = $_POST; // todos os dados de '$_POST' estão agora em '$aluno'

        $media = 0;
        $maior = 0;
        $indice_maior = "";
        $menor = 10;
        $indice_menor = "";
        // percorrer array dados
        echo "<h2>Boletim - 1º Bimestre</h2>";
        foreach ($aluno as $indice => $valor) {

            // somando as notas para posteriormente calular a média:
            // para somar apenas as notas e excluir da conta o nome do aluno, temos duas abordagens:
            // 1 - verificar se o $valor é numérico (isso excluir o nome do aluno do processo)
                // if (is_numeric($valor))
            // 2 - verificar se o '$indice' não é 'Aluno' (também ecluirá o nome do aluno do processo)
                // if ($indice != 'Aluno')
            
            if (is_numeric($valor)) {
                
                $media += $valor; // 'media' recebe seu proprio valor + valor atual de '$valor'
                
                if ($valor < $menor)  {
                    $menor = $valor; // define nova menor nota
                    $indice_menor = $indice; // copia o índice onde a menor nota está armazenada
                }
    
                if ($valor > $maior) {
                    $maior = $valor; // define a nova maior nota
                    $indice_maior = $indice; // copia o índice onde a maior nota está armazenada
                }

                // mnostrando nota atual do aluno
                echo "$indice: " . formatar_nota($valor) . "<br>";
            
            } else {
                echo "$indice: $valor<br>"; // mostrar nome do aluno
            }


        } 

        // finalizar o calculo da média
        $media /= 8; // '$media' recebe seu proprio valor dividido por 8 (disciplinas)

        // Mostrar a média:
        echo "Média bimestral: " . formatar_nota($media) . "<br>";
        // mostrar menor nota
        echo "Menor nota:  $menor<br>";
        // mostrar maior nota
        echo "Maior nota:  $maior<br>";

        echo mostrar_conceito($media);
    
    ?>

    <p>
        <a href="index.php">Voltar à Home</a>
    </p>


</body>
</html>