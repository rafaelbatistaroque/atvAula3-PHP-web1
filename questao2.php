<?php
    //1. Crie um formulário em HTML que contenha um campo de texto para
    //armazenar o nome de uma pessoa e outro campo para armazenar sua idade.
    
    //2. Crie um código em PHP que receba o formulário do exercício
    //anterior e retorne para o nome da pessoa e se ele pode ou não votar.
        
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $arrResultado['nome'] = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_SPECIAL_CHARS);    
        
        if($idade>=18){
            $arrResultado['podeVotar'] = 'Pode votar';
        }else{
            $arrResultado['podeVotar'] = 'Não pode votar';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Ativ 1 - Aula 3</title>
    </head>
    <body>
        <div class="jumbotron">
            <form class='form-group' action="" method="POST">
                <input type="text" name="nome" placeholder='Seu nome'>
                <input type="" name="idade" placeholder='Sua idade'>
                <input type="submit" class='btn btn-primary'>
            </form>
            <?php
             echo 'Nome: '.$arrResultado['nome']. ' - '.$arrResultado['podeVotar'] ?? null;
            ?>
        </div>
    </body>
</html>