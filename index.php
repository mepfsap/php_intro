<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>FORMULÁRIO DE INSCRIÇÃO</title>
    <meta charset='UTF-8'/>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <form action='script.php' method='POST'>
        <?php 
            $mensagemDeErro = isset( $_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : ' ';
            if (!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }    
        ?>    
    <p>Seu nome:<input type='text' name='nome' /></p>
    <p>Sua idade:<input type='text' name='idade' /></p>
    <p><input type='submit' value='Enviar dados do competidor' /></p>
    <br/>

        <?php 
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : ' ';
            if (!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;   
            }
        ?>
    </form>
</body>
</html>


