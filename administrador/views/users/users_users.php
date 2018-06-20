<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

	<?php require_once("./controllers/menu.php"); ?>

	<h3>Tabla usuarios</h3>
	
	<a href="./index.php?r=users-user" class='btn btn-primary'>Agregar</a>
	<br />
	<br />

	<?php if($success !== "") { ?>
		<div class='alert alert-success'><?= $success ?></div>
	<?php } ?>

	<table class='table'>
		<tr>
			<th style='width: 80px;'>
				Id 
				<?= render_filter('id', $sorts['id']) ?>
				<input type="text" name='filters[id]' class='filter form-control' value='<?= $filters['id'] ?>'/>
			</th>
			<th style='width: 200px;'>
				Nombre 
				<?= render_filter('name', $sorts['name']) ?>
				<input type="text" name='filters[name]' class='filter form-control' value='<?= $filters['name'] ?>'/>
			</th>
			<th></th>
			<th style='width: 200px;'>
			Acciones </br>
			<input type="button" id='filter' value="Filtrar" class='btn btn-primary' />
			</th>
		</tr>

		<?php foreach ($datas as $item) { ?>
			<tr>
				<td><?= $item['id'] ?></td>
				<td><?= $item['name'] ?></td>
				<td></td>
				<td>
					<a href="./index.php?r=users-user&edit&id=<?= $item['id'] ?>">Editar</a> | 
					<a href="#" class='delete' data-id="<?= $item['id'] ?>">Borrar</a>
				</td>
			</tr>
		<?php } ?>
	</table>

	<?php
		echo  render_pagination(array(
			"quantity" => $quantity,
			"page"     => $page,
			"start"    => $start,
			"end"      => $end,
			"total"    => $total,
			"pages"    => $pages,
		));
	?>

</div>

<script>
	$(document).ready(function(){
		
		var page = <?= $page ?>;
		var URL = './index.php?r=users-users';

		$(".delete").click(function(e){
			if(confirm("¿En verdad desea eliminar?")){
				location.href = URL + '&del&id=' + $(this).attr("data-id");
			}
			e.preventDefault();
		});
		
		//El filtrado: No conserva ni el orden ni la paginacion.
		$("#filter").click(function(){

			var url = URL;

			$('.filter').each(function(index, element){
				url += "&" + $(element).attr("name") + "=" + $(element).val();
			});

			location.href = url;
		});
		
		//La ordenacion: Conserva el filtrado y no la paginacion.
		$(".sorts").click(function(e){
			
			var url = URL;

			$('.filter').each(function(index, element){
				url += "&" + $(element).attr("name") + "=" + $(element).val();
			});

			url += "&sorts[" + $(this).attr("data-field") + "]=" + $(this).attr("data-value");

			location.href = url;
		});

		//La paginacion: Conserva el filtrado y el orden.
		$("#pagination_back").click(function(){

			paginate(page - 1);
		});

		$(".pagination_page").click(function(){

			paginate($(this).html());
		});

		$("#pagination_next").click(function(){

			paginate(page + 1);
		});

		function paginate(page){

			var url = URL;
			
			$('.filter').each(function(index, element){
				url += "&" + $(element).attr("name") + "=" + $(element).val();
			});
			
			if($(".sort").size() == 1){
				url += "&sorts[" + $(".sort").attr("data-field") + "]=" + $(".sort").attr("data-value");
			}
			
			url += "&page=" + page;

			location.href = url;
		}
	});
</script>

<?php require_once("./views/footer.php"); ?>