<link rel="stylesheet" href="<?php echo URL_TEMPLATE?>/css/style-contato.css" />
<form action="contatos.php" method="post">
        <div>
            <br>
			<p>Contate o suporte do site!</p>
			<br>
			<p>Assunto</p>
			<input type="text" name="titulo">
            <p>Seu nome:</p>
			<input type="text" name="nome">
            <p>Sua mensagem:</p>
			<input type="text" name="mensagem"></input>
			<br>
			<input type="submit" name="enviar">
    </div>
</form>