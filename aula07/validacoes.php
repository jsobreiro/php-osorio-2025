<?php 

    function form_post_nao_enviado() {
        return $_SERVER['REQUEST_METHOD'] != 'POST';
    }

    function validar_campos_form_boletim() {

        $erros = array();
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
        return count($erros) > 0 ? $erros : "";

    }


?>