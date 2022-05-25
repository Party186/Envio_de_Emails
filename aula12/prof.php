<?php 
require "config.php";
include TEMPLATE_PATH."/header.php";
require TEMPLATE_PATH."/nav.php";
?>
<section id="professores">
            <h2>PROFESSORES</h2>
        </section>
        <form action="./aula12/contatos.php" method="POST" class="card">
            <p>Digite seu nome</p>
            <input name="nome"></input>
            <p>Digite seu email</p>
            <input name="email"></input>
            <p>Digite sua mensagem:</p>
            <input name="mensagem"></input>
            <br>
            <button>Enviar</button>
    </form>