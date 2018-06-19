<?php require_once('./catalogo/controladores/cliente/registro.php'); ?>

      <div class="background">
      </div>
      <div class="container">
         <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="#"><?= $texto_registro['txt_descargar'] ?></a></li>
         </ul>
         <div class="row">
            <div id="content" class="col-sm-9">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <h1><?= $texto_registro['txt_descargar'] ?></h1>
                  <p><?= $texto_registro['txt_mensaje'] ?></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <br>
                  <a class="btn btn-primary btn-lg" href="#" role="button"><?= $texto_registro['txt_descargar'] ?></a>
                </div>
              </div>
              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <fieldset id="account">
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname"><?=$Textos_footer['cusCustomers_Name']?></label>
                        <div class="col-sm-10">
                           <input type="text" name="firstname" value="" placeholder="<?=$Textos_footer['cusCustomers_Name']?>" id="input-firstname" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email"><?=$Textos_footer['cusCustomers_Email']?>:</label>
                        <div class="col-sm-10">
                           <input type="email" name="email" value="" placeholder="<?=$Textos_footer['cusCustomers_Email']?>:" id="input-email" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone"><?=$Textos_footer['cusCustomers_Phone']?>:</label>
                        <div class="col-sm-10">
                           <input type="tel" name="telephone" value="" placeholder="<?=$Textos_footer['cusCustomers_Phone']?>:" id="input-telephone" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1"><?=$Textos_footer['cusCustomers_Address']?>:</label>
                        <div class="col-sm-10">
                           <input type="text" name="address_1" value="" placeholder="<?=$Textos_footer['cusCustomers_Address']?>:" id="input-address-1" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1"><?=$Textos_footer['cusCustomers_RFC']?>:</label>
                        <div class="col-sm-10">
                           <input type="text" name="address_1" value="" placeholder="<?=$Textos_footer['cusCustomers_RFC']?>:" id="input-address-1" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1"><?=$Textos_footer['cusCustomers_FacAddress']?>:</label>
                        <div class="col-sm-10">
                           <input type="text" name="address_1" value="" placeholder="<?=$Textos_footer['cusCustomers_FacAddress']?>:" id="input-address-1" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1"><?=$Textos_footer['cusCustomers_FacEmail']?>:</label>
                        <div class="col-sm-10">
                           <input type="text" name="address_1" value="" placeholder="<?=$Textos_footer['cusCustomers_FacEmail']?>:" id="input-address-1" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1"><?=$Textos_footer['cusCustomers_FacPC']?>:</label>
                        <div class="col-sm-10">
                           <input type="text" name="address_1" value="" placeholder="<?=$Textos_footer['cusCustomers_FacPC']?>:" id="input-address-1" class="form-control" />
                        </div>
                     </div>
                     <div class="buttons">
                        <div class="pull-right">He <b>LEIDO</b> y estoy de <b>ACUERDO</b> con la <a class="fancybox" href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information/agree&amp;information_id=3" alt="Aviso de privacidad"><b>Aviso de privacidad</b></a>                        <input type="checkbox" name="agree" value="1" />
                            &nbsp;
                            <input type="submit" value="<?=$Textos_footer['txt_btn']?>" class="btn btn-primary" />
                        </div>
                      </div>
                     <!---->
                </form>
            </div>
         </div>
      </div>
      <!-- <script type="text/javascript">
         // Sort the custom fields
         $('#account .form-group[data-sort]').detach().each(function() {
         	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
         		$('#account .form-group').eq($(this).attr('data-sort')).before(this);
         	}
         
         	if ($(this).attr('data-sort') > $('#account .form-group').length) {
         		$('#account .form-group:last').after(this);
         	}
         
         	if ($(this).attr('data-sort') < -$('#account .form-group').length) {
         		$('#account .form-group:first').before(this);
         	}
         });
         
         $('#address .form-group[data-sort]').detach().each(function() {
         	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {
         		$('#address .form-group').eq($(this).attr('data-sort')).before(this);
         	}
         
         	if ($(this).attr('data-sort') > $('#address .form-group').length) {
         		$('#address .form-group:last').after(this);
         	}
         
         	if ($(this).attr('data-sort') < -$('#address .form-group').length) {
         		$('#address .form-group:first').before(this);
         	}
         });
         
         $('input[name=\'customer_group_id\']').on('change', function() {
         	$.ajax({
         		url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
         		dataType: 'json',
         		success: function(json) {
         			$('.custom-field').hide();
         			$('.custom-field').removeClass('required');
         
         			for (i = 0; i < json.length; i++) {
         				custom_field = json[i];
         
         				$('#custom-field' + custom_field['custom_field_id']).show();
         
         				if (custom_field['required']) {
         					$('#custom-field' + custom_field['custom_field_id']).addClass('required');
         				}
         			}
         
         
         		},
         		error: function(xhr, ajaxOptions, thrownError) {
         			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
         		}
         	});
         });
         
         $('input[name=\'customer_group_id\']:checked').trigger('change');
      </script>
      <script type="text/javascript">
         $('button[id^=\'button-custom-field\']').on('click', function() {
         	var node = this;
         
         	$('#form-upload').remove();
         
         	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
         
         	$('#form-upload input[name=\'file\']').trigger('click');
         
         	if (typeof timer != 'undefined') {
             	clearInterval(timer);
         	}
         
         	timer = setInterval(function() {
         		if ($('#form-upload input[name=\'file\']').val() != '') {
         			clearInterval(timer);
         
         			$.ajax({
         				url: 'index.php?route=tool/upload',
         				type: 'post',
         				dataType: 'json',
         				data: new FormData($('#form-upload')[0]),
         				cache: false,
         				contentType: false,
         				processData: false,
         				beforeSend: function() {
         					$(node).button('loading');
         				},
         				complete: function() {
         					$(node).button('reset');
         				},
         				success: function(json) {
         					$(node).parent().find('.text-danger').remove();
         
         					if (json['error']) {
         						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
         					}
         
         					if (json['success']) {
         						alert(json['success']);
         
         						$(node).parent().find('input').attr('value', json['code']);
         					}
         				},
         				error: function(xhr, ajaxOptions, thrownError) {
         					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
         				}
         			});
         		}
         	}, 500);
         });
      </script>
      <script type="text/javascript">
         $('.date').datetimepicker({
         	pickTime: false
         });
         
         $('.time').datetimepicker({
         	pickDate: false
         });
         
         $('.datetime').datetimepicker({
         	pickDate: true,
         	pickTime: true
         });
      </script>
      <script type="text/javascript">
         $('select[name=\'country_id\']').on('change', function() {
         	$.ajax({
         		url: 'index.php?route=account/account/country&country_id=' + this.value,
         		dataType: 'json',
         		beforeSend: function() {
         			$('select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
         		},
         		complete: function() {
         			$('.fa-spin').remove();
         		},
         		success: function(json) {
         			if (json['postcode_required'] == '1') {
         				$('input[name=\'postcode\']').parent().parent().addClass('required');
         			} else {
         				$('input[name=\'postcode\']').parent().parent().removeClass('required');
         			}
         
         			html = '<option value=""> --- Favor de Seleccionar --- </option>';
         
         			if (json['zone'] && json['zone'] != '') {
         				for (i = 0; i < json['zone'].length; i++) {
         					html += '<option value="' + json['zone'][i]['zone_id'] + '"';
         
         					if (json['zone'][i]['zone_id'] == '') {
         						html += ' selected="selected"';
         					}
         
         					html += '>' + json['zone'][i]['name'] + '</option>';
         				}
         			} else {
         				html += '<option value="0" selected="selected"> --- Ninguno --- </option>';
         			}
         
         			$('select[name=\'zone_id\']').html(html);
         		},
         		error: function(xhr, ajaxOptions, thrownError) {
         			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
         		}
         	});
         });
         
         $('select[name=\'country_id\']').trigger('change');
      </script> -->