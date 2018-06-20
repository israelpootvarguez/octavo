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

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#Espanol" aria-controls="Espanol" role="tab" data-toggle="tab">Español</a></li>
      <li role="presentation"><a href="#English" aria-controls="English" role="tab" data-toggle="tab">English</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="Espanol">
        <br><br><br>
        <form id="my_form" action="" method="post" enctype="multipart/form-data">

          <input type="hidden" name="datas[0][sysIdioms_Id]" value="<?= $datas[0]['sysIdioms_Id'] ?>" />

          Nombre: <br>
          <input type="text" name="datas[0][sysEnterprise_Name]" value="<?= $datas[0]['sysEnterprise_Name'] ?>" /><br>
          <br>
          Dirección: <br>
          <input type="text" name="datas[0][sysEnterprise_Address]" value="<?= $datas[0]['sysEnterprise_Address'] ?>" /><br>
          <br>
          Teléfono: <br>
          <input type="text" name="datas[0][sysEnterprise_Phone]" value="<?= $datas[0]['sysEnterprise_Phone'] ?>" /><br>
          <br>
          Email: <br>
          <input type="text" name="datas[0][sysEnterprise_Email]" value="<?= $datas[0]['sysEnterprise_Email'] ?>" /><br>
          <br>
          Horario: <br>
          <input type="text" name="datas[0][sysEnterprise_Schedules]" value="<?= $datas[0]['sysEnterprise_Schedules'] ?>" /><br>
          <br>
          Logo: <br>
          <input type="text" name="datas[0][sysEnterprise_Logo]" value="<?= $datas[0]['sysEnterprise_Logo'] ?>" /><br>
          <br>
          Eslogan: <br>
          <input type="text" name="datas[0][sysEnterprise_Slogan]" value="<?= $datas[0]['sysEnterprise_Slogan'] ?>" /><br>
          <br>
          Método de pago: <br>
          <input type="text" name="datas[0][sysEnterprise_PaymentMethods]" value="<?= $datas[0]['sysEnterprise_PaymentMethods'] ?>" /><br>
          <br>
          Método de pago audio: <br>
          <input type="text" name="datas[0][sysEnterprise_PaymentMethodsAudio]" value="<?= $datas[0]['sysEnterprise_PaymentMethodsAudio'] ?>" /><br>
          <br>
          Tips: <br>
          <input type="text" name="datas[0][sysEnterprise_Tips]" value="<?= $datas[0]['sysEnterprise_Tips'] ?>" /><br>
          <br>
          Tips audio: <br>
          <input type="text" name="datas[0][sysEnterprise_TipsAudio]" value="<?= $datas[0]['sysEnterprise_TipsAudio'] ?>" /><br>
          <br>
          Pregunta: <br>
          <input type="text" name="datas[0][sysEnterprise_Questions]" value="<?= $datas[0]['sysEnterprise_Questions'] ?>" /><br>
          <br>
          Pregunta audio: <br>
          <input type="text" name="datas[0][sysEnterprise_QuestionsAudio]" value="<?= $datas[0]['sysEnterprise_QuestionsAudio'] ?>" /><br>
          <br>
          Quíenes somos: <br>
          <input type="text" name="datas[0][sysEnterprise_AboutUs]" value="<?= $datas[0]['sysEnterprise_AboutUs'] ?>" /><br>
          <br>
          Quíenes somos audio: <br>
          <input type="text" name="datas[0][sysEnterprise_AboutUsAudio]" value="<?= $datas[0]['sysEnterprise_AboutUsAudio'] ?>" /><br>
          <br>
          Aviso de privacidad: <br>
          <input type="text" name="datas[0][sysEnterprise_NoticePrivacy]" value="<?= $datas[0]['sysEnterprise_NoticePrivacy'] ?>" /><br>
          <br>
          Aviso de privacidad audio: <br>
          <input type="text" name="datas[0][sysEnterprise_NoticePrivacyAudio]" value="<?= $datas[0]['sysEnterprise_NoticePrivacyAudio'] ?>" /><br>
          <br>
          Misión y visión: <br>
          <input type="text" name="datas[0][sysEnterprise_MissionVision]" value="<?= $datas[0]['sysEnterprise_MissionVision'] ?>" /><br>
          <br>
          Misión y visión audio: <br>
          <input type="text" name="datas[0][sysEnterprise_MissionVisionAudio]" value="<?= $datas[0]['sysEnterprise_MissionVisionAudio'] ?>" /><br>
          <br>
          Historia: <br>
          <input type="text" name="datas[0][sysEnterprise_History]" value="<?= $datas[0]['sysEnterprise_History'] ?>" /><br>
          <br>
          Historia audio: <br>
          <input type="text" name="datas[0][sysEnterprise_HistoryAudio]" value="<?= $datas[0]['sysEnterprise_HistoryAudio'] ?>" /><br>
          <br>

          <input type="submit" value="Guardar" class='btn btn-primary' />
          <input type="button" value="Cancelar" class='btn' />
        </form>
      </div>
      <!---->
      <div role="tabpanel" class="tab-pane" id="English">
        <br><br><br>      
        <form id="my_form" action="" method="post" enctype="multipart/form-data">

          <input type="hidden" name="datas[1][sysIdioms_Id]" value="<?= $datas[1]['sysIdioms_Id'] ?>" />

          Nombre: <br>
          <input type="text" name="datas[1][sysEnterprise_Name]" value="<?= $datas[1]['sysEnterprise_Name'] ?>" /><br>
          <br>
          Dirección: <br>
          <input type="text" name="datas[1][sysEnterprise_Address]" value="<?= $datas[1]['sysEnterprise_Address'] ?>" /><br>
          <br>
          Teléfono: <br>
          <input type="text" name="datas[1][sysEnterprise_Phone]" value="<?= $datas[1]['sysEnterprise_Phone'] ?>" /><br>
          <br>
          Email: <br>
          <input type="text" name="datas[1][sysEnterprise_Email]" value="<?= $datas[1]['sysEnterprise_Email'] ?>" /><br>
          <br>
          Horario: <br>
          <input type="text" name="datas[1][sysEnterprise_Schedules]" value="<?= $datas[1]['sysEnterprise_Schedules'] ?>" /><br>
          <br>
          Logo: <br>
          <input type="text" name="datas[1][sysEnterprise_Logo]" value="<?= $datas[1]['sysEnterprise_Logo'] ?>" /><br>
          <br>
          Eslogan: <br>
          <input type="text" name="datas[1][sysEnterprise_Slogan]" value="<?= $datas[1]['sysEnterprise_Slogan'] ?>" /><br>
          <br>
          Método de pago: <br>
          <input type="text" name="datas[1][sysEnterprise_PaymentMethods]" value="<?= $datas[1]['sysEnterprise_PaymentMethods'] ?>" /><br>
          <br>
          Método de pago audio: <br>
          <input type="text" name="datas[1][sysEnterprise_PaymentMethodsAudio]" value="<?= $datas[1]['sysEnterprise_PaymentMethodsAudio'] ?>" /><br>
          <br>
          Tips: <br>
          <input type="text" name="datas[1][sysEnterprise_Tips]" value="<?= $datas[1]['sysEnterprise_Tips'] ?>" /><br>
          <br>
          Tips audio: <br>
          <input type="text" name="datas[1][sysEnterprise_TipsAudio]" value="<?= $datas[1]['sysEnterprise_TipsAudio'] ?>" /><br>
          <br>
          Pregunta: <br>
          <input type="text" name="datas[1][sysEnterprise_Questions]" value="<?= $datas[1]['sysEnterprise_Questions'] ?>" /><br>
          <br>
          Pregunta audio: <br>
          <input type="text" name="datas[1][sysEnterprise_QuestionsAudio]" value="<?= $datas[1]['sysEnterprise_QuestionsAudio'] ?>" /><br>
          <br>
          Quíenes somos: <br>
          <input type="text" name="datas[1][sysEnterprise_AboutUs]" value="<?= $datas[1]['sysEnterprise_AboutUs'] ?>" /><br>
          <br>
          Quíenes somos audio: <br>
          <input type="text" name="datas[1][sysEnterprise_AboutUsAudio]" value="<?= $datas[1]['sysEnterprise_AboutUsAudio'] ?>" /><br>
          <br>
          Aviso de privacidad: <br>
          <input type="text" name="datas[1][sysEnterprise_NoticePrivacy]" value="<?= $datas[1]['sysEnterprise_NoticePrivacy'] ?>" /><br>
          <br>
          Aviso de privacidad audio: <br>
          <input type="text" name="datas[1][sysEnterprise_NoticePrivacyAudio]" value="<?= $datas[1]['sysEnterprise_NoticePrivacyAudio'] ?>" /><br>
          <br>
          Misión y visión: <br>
          <input type="text" name="datas[1][sysEnterprise_MissionVision]" value="<?= $datas[1]['sysEnterprise_MissionVision'] ?>" /><br>
          <br>
          Misión y visión audio: <br>
          <input type="text" name="datas[1][sysEnterprise_MissionVisionAudio]" value="<?= $datas[1]['sysEnterprise_MissionVisionAudio'] ?>" /><br>
          <br>
          Historia: <br>
          <input type="text" name="datas[1][sysEnterprise_History]" value="<?= $datas[1]['sysEnterprise_History'] ?>" /><br>
          <br>
          Historia audio: <br>
          <input type="text" name="datas[1][sysEnterprise_HistoryAudio]" value="<?= $datas[1]['sysEnterprise_HistoryAudio'] ?>" /><br>
          <br>

          <input type="submit" value="Guardar" class='btn btn-primary' />
          <input type="button" value="Cancelar" class='btn' />
        </form>
      </div>
      <!---->
    </div>

  </div>
  
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