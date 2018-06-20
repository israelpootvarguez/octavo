<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

	<?php require_once("./controllers/menu.php"); ?>

	<h3>Formulario usuario</h3>

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
		
		<input type="hidden" name="datas[id]" value="<?= $datas['id'] ?>" />

		Nombre*: <br>
		<input type="text" name="datas[name]" value="<?= $datas['name'] ?>" /><br>
		<br>

		Usuario*: <br>
		<?php if(isset($_GET['edit'])) { ?>
			<input type="text" value="<?= $datas['user'] ?>" readonly disabled /><br>
		<?php } else{ ?>
			<input type="text" name="datas[user]" value="<?= $datas['user'] ?>" /><br>
		<?php } ?>
		<br>

		<?php if(isset($_GET['edit'])) { ?>
			<h4>Cambiar la contraseña</h4>
		<?php } ?>

		Contraseña*:<br>
		<input type="password" name='datas[password]' value="<?= $datas['password'] ?>" /><br>
		<br>
		
		Confirmar contraseña*:<br>
		<input type="password" name='datas[password_confirm]' value="<?= $datas['password_confirm'] ?>" /><br>
		<br>

		<input type="submit" value="Guardar" class='btn btn-primary' />
		<input type="button" value="Cancelar" class='btn' />
	</form>
	
</div>

<script>
	$(document).ready(function(){
		$("input[type='button']").click(function(){
			if(confirm("En verdad desea cancelar?")){
				location.href='./index.php?r=users-users';
			}
		});
	});
</script>
	
<?php require_once("./views/footer.php"); ?>