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
	
		<input type="hidden" name="datas[sysUsers_Id]" value="<?= $datas['sysUsers_Id'] ?>" />
		<input type="hidden" name="datas[sysProfiles_Id]" value="<?= $datas['sysProfiles_Id'] ?>" />

		Usuario*: <br>
		<?php if(isset($_GET['edit'])) { ?>
			<input type="text" value="<?= $datas['sysUsers_Users'] ?>" readonly disabled /><br>
		<?php } else{ ?>
			<input type="text" name="datas[sysUsers_Users]" value="<?= $datas['sysUsers_Users'] ?>" /><br>
		<?php } ?>
		<br>

		<?php if(isset($_GET['edit'])) { ?>
			<h4>Cambiar la contraseña</h4>
		<?php } ?>

		Contraseña*:<br>
		<input type="password" name='datas[sysUsers_Password]' value="<?= $datas['sysUsers_Password'] ?>" /><br>
		<br>

		Nombre*: <br>
		<input type="text" name="datas[sysUsers_Name]" value="<?= $datas['sysUsers_Name'] ?>" /><br>
		<br>

		Descripción*: <br>
		<input type="text" name="datas[sysUsers_Descriptions]" value="<?= $datas['sysUsers_Descriptions'] ?>" /><br>
		<br>

		Email*: <br>
		<input type="text" name="datas[sysUsers_Email]" value="<?= $datas['sysUsers_Email'] ?>" /><br>
		<br>

		Teléfono*: <br>
		<input type="text" name="datas[sysUsers_Phone]" value="<?= $datas['sysUsers_Phone'] ?>" /><br>
		<br>
		Activar?*:<br>
		<select name="datas[sysUsers_IsActive]">
			<option>Activar</option>
			<option>Desactivar</option>
		</select>
		<br><br>
		Mostrar?*:<br>
		<select name="datas[sysUsers_OnLine]">
			<option>Mostrar</option>
			<option>no mostrar</option>
		</select>
		<br><br>
		<!-- Confirmar contraseña*:<br>
		<input type="password" name='datas[password_confirm]' value="<?= $datas['password_confirm'] ?>" /><br>
		<br> -->

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