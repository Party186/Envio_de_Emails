<?php 
require "config.php";
include TEMPLATE_PATH."/header.php";
require TEMPLATE_PATH."/nav.php";
include TEMPLATE_PATH."/contato-html.php";
if(isset($_POST['enviar'])){
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];
    $nome = $_POST['nome'];
    if(empty($titulo && $mensagem && $nome)){
        echo "Email não enviado, preencha todos os campos à cima!";
    }else{
        mail(DEV, $titulo, $mensagem, "Mensagem de ".$nome);
        echo "Seu email foi enviado ao criador do site! Obrigado pelo suporte!";
    } 
}
?>