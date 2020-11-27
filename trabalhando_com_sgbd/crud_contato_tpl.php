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
		

		if (count($contatos) > 0) {

			echo "<table border='1'>
						<tr>
							<td>Nome</td>
							<td>Whatsapp</td>
							<td></td>
							<td></td>
						</tr>";

			foreach ($contatos as $contato) {
				echo "<tr>
						<td>{$contato->nome}</td>
						<td>{$contato->whatsapp}</td>
						<td><a href='?page={$_GET['page']}& apagar={$contato->id}'>Apagar</a></td>
						<td><a href='?page={$_GET['page']}& editar={$contato->id}'>Editar</a></td>
					</tr>";
			}

			echo "</table>";
		}
		
	?>

	<form method="post">
		
		<label for="nome">Nome: </label>
		<input type="text" id="nome" name="nome" value=""><br><br>

		<label for="whatsapp">Whatsapp: </label>
		<input type="text" id="whatsapp" name="whatsapp" value=""><br><br>

		
		<?php submit_button('Gravar Novo'); ?>
	</form>

</div>