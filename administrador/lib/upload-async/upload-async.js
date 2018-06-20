$(document).ready(function(){
	$("input[type=file]").each(function(index, element){

        var field_name = $(element).attr("name");
        var url_upload = $(element).attr("data-url-upload");
        var id_form    = $(element).attr("data-id-form");
        var value      = $(element).attr("data-value");

        var src = "https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-image-128.png";
        if(value !== ""){
        	src = value;
        }
        
        var template = '';
        template += "<img   id='img_" + field_name + "' src='" + src + "' style='cursor: pointer; width: 100px;' />";
        template += "<input id='input_" + field_name + "' type='file' name='" + field_name + "' style='display: none' />";
        template += "<input id='hidden_" + field_name + "' type='hidden' name='" + field_name + "_filename' value='" + value + "'/>";
        
        $(element).replaceWith(template);

        // ---------------
        
        $("#img_" + field_name).click(function(){
        	$("#input_" + field_name).click();
        });

        // ---------------
        
        var form = $(id_form);
        
        $("#input_" + field_name).change(function(){

			form.append("<input type='hidden' name='hidden_filename' value='" + field_name + "' />");

			// respaldar el estado iniciar del form.
			var action = form.attr("action");
			var value  = $("#hidden_" + field_name).val();
			var src    = $("#img_" + field_name).attr("src");

			// crear un iframe oculto temporal,
			// cambiar el action del form por el que procesa la imagen y
			// redireccionar el target al iframe creado.
			$("body").append("<iframe id='iframe_" + field_name + "' name='iframe_" + field_name + "' style='display: none'></iframe>");
			form.attr("target", "iframe_" + field_name);
			form.attr("action", url_upload);

			// agregar un handler para procesar la respuesta.
			$("#iframe_" + field_name).load(function(){

			// recuperar la respuesta y transformarla a json.
			var html = $("#iframe_" + field_name).contents().find('body').html();
			var response = JSON.parse(html); 

			// procesar la respuesta.
			if(response.status == "OK"){

				//actualizar el valor y la miniatura.
				$("#hidden_" + field_name).val(response.datas);
				$("#img_" + field_name).attr("src", response.datas);
			}else{

				//mostrar mensaje de error y regresar a los valores anteriores.
				alert(response.messages[0]);
				$("#hidden_" + field_name).val(value);
				$("#img_" + field_name).attr("src", src);
			}

				// regresar el form a su estado inicial.
				form.attr("action", action);
				form.attr("target", "_self");
				$("input[name='hidden_filename']").remove();
				$("#iframe_" + field_name).remove();
			});

			// subir archivo.
			form.submit();
        });
    });
});