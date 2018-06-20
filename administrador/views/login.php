<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

	<h3>Iniciar sesión</h3>

	<?php
	if(count($errors) > 0){
		echo "<ul>";
		foreach($errors as $error){
			echo "<li>" . $error . "</li>";
		}
		echo "</ul>";
	}
	?>

	<form action="" method="post">

		Usuario: <br>
		<input type="text" name="datas[user]" value="<?= $datas['user'] ?>" /><br>
		<br>

		Contraseña:<br>
		<input type="password" name='datas[password]' value="<?= $datas['password'] ?>" /><br>
		<br>
		
		<input type="submit" value="Enviar datos" class='btn btn-primary' />
	</form>

</div>

<?php require_once("./views/footer.php"); ?>