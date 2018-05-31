// Carga un archivo JS
$(document).ready(function(){
    /*
    se crea un array de objertos, 
    este contiene varios objetos con las siguientes caracateristicas:
        
    */
    var menu = []

    if(localStorage.getItem("perfilId") == "1" ){
        menu.push({clave:"dashboard",     icono:"fa fa-home",              texto:"Inicio",       ruta:"hola mundo"   });
        menu.push({clave:"login",         icono:"fa fa-power-off",         texto:"Salir",        ruta:"hola mundo"   });
    }else if(localStorage.getItem("perfilId") == "3"){
        menu.push({clave:"dashboard",     icono:"fa fa-home",              texto:"Inicio",       ruta:"hola mundo"   });
        menu.push({clave:"users",         icono:"fa fa-users",             texto:"Usuarios",     ruta:"hola mundo"   });
        menu.push({clave:"medicines",     icono:"fa fa-eyedropper",        texto:"Medicamentos", ruta:"hola mundo"   });
        menu.push({clave:"allergies",     icono:"fa fa-frown-o",           texto:"Alergias",     ruta:"hola mundo"   });
        menu.push({clave:"login",         icono:"fa fa-power-off",         texto:"Salir",        ruta:"hola mundo"   });
    }
    var HTML="";
    var ERROR=true;
    HTML="\
        <menu>\
        <nav>\
        <ul>\
        "
    for(var i=0; i< menu.length; i++){
        var active = "";
        if(util.getParam("r","") == menu[i].clave){
            active = "active";
            ERROR=false;
        }
        HTML+="<li><a class=' " + active + " '  href='../"  +menu[i].clave+ "/"  +menu[i].clave+ ".html?r="  +menu[i].clave+ "'> <i class='"  +menu[i].icono+ "' aria-hidden='true'></i> " + menu[i].text + "</a></li>";
    }
    HTML+="\
        </ul>\
        </nav>\
        </menu>\
        "
    $( "miMenu" ).replaceWith(HTML);
});
