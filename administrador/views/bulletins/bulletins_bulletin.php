<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

  <?php require_once("./controllers/menu.php"); ?>

  <h3>Boletín</h3>

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
  	
  	<input type="hidden" name="datas[id]" value="<?= $datas['id'] ?>" />

  	Imagen PC*: <br>
  	<input type="file" name="image" data-url-upload='./index.php?r=upload' data-id-form='#my_form' data-value='<?= $datas['image'] ?>' />
  	<br>
    
    Imagen movil*: <br>
    <input type="file" name="image_movil" data-url-upload='./index.php?r=upload' data-id-form='#my_form' data-value='<?= $datas['image_movil'] ?>' />
    <br>
    
    Imagen éxito*: <br>
    <input type="file" name="image_success" data-url-upload='./index.php?r=upload' data-id-form='#my_form' data-value='<?= $datas['image_success'] ?>' />
    <br>

    Mensaje de error: <br>
    <input type="text" name="datas[message_error]" value="<?= $datas['message_error'] ?>" /><br>
    <br>

    Mensaje de exitencia: <br>
    <input type="text" name="datas[message_existence]" value="<?= $datas['message_existence'] ?>" /><br>
    <br>

    Contenido de mensaje: <br>
    <textarea rows="4" cols="50" name="datas[message_content]" value="<?= $datas['message_content'] ?>" ></textarea><br>
    <br>

  	Activado*: <br>
  	<?php if($datas['isActive'] == "1") { ?>
  		<input type="checkbox" name="datas[isActive]" value="1" checked /><br>
  	<?php } else { ?>
  		<input type="checkbox" name="datas[isActive]" value="1" /><br>
  	<?php } ?>
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
        location.href='./index.php?r=bulletins-bulletins';
      }
    });
  });
</script>

<?php require_once("./views/footer.php"); ?>