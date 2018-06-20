<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

	<?php require_once("./controllers/menu.php"); ?>

	<h3>Tabla sliders</h3>

	<a href="./index.php?r=sliders-slider" class='btn btn-primary'>Agregar</a>
	<br />
	<br />

	<?php if($success !== "") { ?>
		<div class='alert alert-success'><?= $success ?></div>
	<?php } ?>

	<table class='table'>
		<tr>
			<th style='width: 80px;'>Id</th>
			<th style='width: 100px;'>Título</th>
			<th style='width: 100px;'>Imagen</th>
			<th>Enlace</th>
			<th style='width: 100px;'>Orden</th>
			<th style='width: 100px;'>Activado</th>
			<th></th>
			<th style='width: 200px;'>Acciones</th>
		</tr>

		<?php foreach ($list as $item) { ?>
			<tr>
				<td><?= $item['id'] ?></td>
				<td><?= $item['languages'][LANGUAGE]['title'] ?></td>
				<td>
					<?php if($item['languages'][LANGUAGE]['image'] !== ""){ ?>
						<img src="<?= $item['languages'][LANGUAGE]['image'] ?>" alt="" style='width:100px'>
					<?php } ?>
				</td>
				<td>
					<?php if($item['link'] !== ""){ ?>
						<a href="<?= $item['link'] ?>" target="_blank"><?= $item['link'] ?></a>
					<?php } ?>
				</td>
				<td><?= $item['sort'] ?></td>
				<td><?= ($item['isActive'] == "1")? "Si" : "No" ?></td>
				<td></td>
				<td>
					<a href="./index.php?r=sliders-slider&edit&id=<?= $item['id'] ?>">Editar</a> | 
					<a href="#" class='delete' data-id="<?= $item['id'] ?>">Borrar</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>

<script>
	$(document).ready(function(){
		$(".delete").click(function(e){
			var id = $(this).attr("data-id");
			if(confirm("¿En verdad desea eliminar?")){
				location.href = './index.php?r=sliders-sliders&del&id=' + id;
			}
			e.preventDefault();
		});
	});
</script>

<?php require_once("./views/footer.php"); ?>