<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

  <?php require_once("./controllers/menu.php"); ?>

  <h3>Configuraciones</h3>

  <?php if($success !== "") { ?>
		<div class='alert alert-success'><?= $success ?></div>
	<?php } ?>
  
  <?php
  if(count($errors) > 0){
  	 echo "<ul>";
  	 foreach($errors as $error){
  	  	echo "<li>" . $error . "</li>";
  	 }
  	 echo "</ul>";
  }
  ?>

  <form id="my_form" action="" method="post" enctype="multipart/form-data">
  	
  	Nombre*: <br>
    <input type="text" name="datas[name]" value="<?= $datas['name'] ?>" /><br>
    <br>

    Description: <br>
    <input type="text" name="datas[description]" value="<?= $datas['description'] ?>" /><br>
    <br>

    <input type="submit" value="Guardar" class='btn btn-primary' />
  	<input type="button" value="Cancelar" class='btn' />
  </form>
  <br>
  <br>
  <br>
  
</div>

<script>
  $(document).ready(function(){
    $("input[type='button']").click(function(){
      if(confirm("En verdad desea cancelar?")){
        location.href='./index.php?r=settings-settings';
      }
    });
  });
</script>

<?php require_once("./views/footer.php"); ?>