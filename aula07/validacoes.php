<?php 

    function form_post_nao_enviado() {
        return $_SERVER['REQUEST_METHOD'] != 'POST';
    }

    function validar_campos_form_boletim() {

        $erros = array(); // regostrar na memória o array 'erros'
        foreach ($_POST as $indice => $valor) {
            
            // se o campo for 'Aluno' E seu valor estiver vazio:
            if ($indice == 'Aluno' && empty($valor)) {
                $erros[] = "Nome do aluno não pode estar vazio";
            
            // senão, se o campo NÃO for 'Aluno' E seu valor NÃO for numérico:
            } else if ($indice != 'Aluno' && !is_numeric($valor)){
                $erros[] = "Nota de $indice não pode estar vazia, e deve ser um número";
            }

        }

        // retorna array erros, que pode não conter nenhum erro dentro dele...
        return $erros;

    }

    // função que recebe um array e mostra os valores dentro dele
    function mostrar_array_erros($erros) {

        echo "Verifique os erros abaixo:<br>";
        // percorrer o array recebido
        foreach ($erros as $erro_atual) {
            // mostrar na tela o valor na posiçãio atual do array erros
            echo $erro_atual . "<br>";
        }
    }

    // função para validar intervalo das notas
    function verificar_intervalo_notas() {

        $erros = array(); // prepara array de erros

        // percorrer array $_POST
        foreach ($_POST as $indice => $valor) {

            // se o indice for diferente de 'Aluno' E
            // o valor deste índice for menor que zero OU maior que 10
            if ($indice != 'Aluno' && ($valor < 0 || $valor > 10)) {
                // nova posição no array de erros será criada, com a mensagem abaixo:
                $erros[] = "Nota de $indice deve estar entre 0 e 10";
            }
        }

        // retorna aray de erros, independente se foi preenchido ou não
        return $erros;


    }

    // função que recebe um valor numérico e o retorna formatado com 1 casa decimal
    function formatar_nota($nota) {
        return number_format($nota, 1, ',', '.');
    }

    // função para verificar o conceito do aluno
    function mostrar_conceito($media) {
        // mostrar conceito:
        if ($media <= 4) {
            $conceito = "E";
        } else if ($media < 6) {
            $conceito = "D";
        } else if ($media < 8) {
            $conceito = "C";
        } else if ($media < 9) {
            $conceito = "B";
        } else {
            $conceito = "A";
        }

        return "<strong>Conceito: $conceito</strong>";
    }


?>