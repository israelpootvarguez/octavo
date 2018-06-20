<?php require_once("./views/header.php"); ?>

<div class="container-fluid">

  <?php require_once("./controllers/menu.php"); ?>

  <h3>Formulario slider</h3>

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

    <!--
    Título: <br>
    <input type="text" name="datas[title]" value="<?= $datas['title'] ?>" /><br>
    <br>

    Imagen*: <br>
    <input type="file" name="image" data-url-upload='./index.php?r=upload' data-id-form='#my_form' data-value='<?= $datas['image'] ?>' />
    <br>
    -->
    <ul class="nav nav-tabs" role="tablist">

      <?php
      $i = 0;
      foreach ($languages as $language) {
        if($i== 0){
          echo "<li role='presentation' class='active'>";
        }else{
          echo "<li role='presentation'>";
        }
        echo "<a href='#{$language['code']}' aria-controls='{$language['code']}' role='tab' data-toggle='tab'>{$language['name']}</a>";
        echo "</li>";
        $i++;
      }
      ?>
    </ul>

    <div class="tab-content">
      <?php
        $i = 0;
        foreach ($languages as $language) {
          
          if($i== 0){
            echo "<div role='tabpanel' class='tab-pane active' id='{$language['code']}'>";
          }else{
            echo "<div role='tabpanel' class='tab-pane' id='{$language['code']}'>";
          }
          
          echo "titulo {$language['name']}: <br>";
          echo "<input type='text' name='datas[languages][{$language['id']}][title]' value='{$datas['languages'][$language['id']]['title']}'/><br>";
          echo "<br>";

          echo "Imagen {$language['name']} *: <br>";
          echo "<input type='file' name='image{$language['id']}' data-url-upload='./index.php?r=upload' data-id-form='#my_form' data-value='{$datas['languages'][$language['id']]['image']}' />";
          echo "<br>";

          echo "</div>";
          $i++;
        }
        ?>
    </div>

    Enlace: <br>
    <input type="text" name="datas[link]" value="<?= $datas['link'] ?>" /><br>
    <br>

    Es externo: <br>
    <?php if($datas['isExternal'] == "1") { ?>
      <input type="checkbox" name="datas[isExternal]" value="1" checked /><br>
    <?php } else { ?>
      <input type="checkbox" name="datas[isExternal]" value="1" /><br>
    <?php } ?>
    <br>

    Orden*: <br>
    <input type="text" name="datas[sort]" value="<?= $datas['sort'] ?>" /><br>
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

</div>

<script>
  $(document).ready(function(){
    $("input[type='button']").click(function(){
      if(confirm("En verdad desea cancelar?")){
        location.href='./index.php?r=sliders-sliders';
      }
    });
  }); 
</script>

<?php require_once("./views/footer.php"); ?>