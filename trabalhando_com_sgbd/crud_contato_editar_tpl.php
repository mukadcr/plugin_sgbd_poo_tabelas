<div class="wrap">
	<h1>Crud de contatos do meu plugin</h1>
	<br><br>

	<?php 

	if (isset($msg)) {
		
		echo "<br><br><center><font color='green'>$msg</font></center><br><br>";

	}

	if (isset($erro)) {
		
		echo "<br><br><center><font color='red'>$erro</font></center><br><br>";

	}
	?>
	<br><br>
	<form method="post">

		<input type="hidden" name="id" value="<?php echo $contato[0]->id; ?>"><br><br>
		
		<label for="nome">Nome: </label>
		<input type="text" id="nome" name="nome" value="<?php echo $contato[0]->nome; ?>"><br><br>

		<label for="whatsapp">Whatsapp: </label>
		<input type="text" id="whatsapp" name="whatsapp" value="<?php echo $contato[0]->whatsapp; ?>"><br><br>

		
		<?php submit_button('Salvar'); ?>
	</form>

</div>