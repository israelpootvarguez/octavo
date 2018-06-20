<?php

require_once("./models/auth.php");

// Routing and security

if(authIslogued()){

	if(!isset($_GET['r'])){
		require_once("./controllers/dashboard.php");
	}else{

		//dashboard
		if($_GET['r'] == "dashboard"){
			require_once("./controllers/dashboard.php");
			exit();
		}

        //menu logout
		if($_GET['r'] == "menu"){
			require_once("./controllers/menu.php");
			exit();
		}
		
		//plural
		if($_GET['r'] == "users-users"){
			require_once("./controllers/users/users_users.php");
			exit();
		}
		
		//singular
		if($_GET['r'] == "users-user"){
			require_once("./controllers/users/users_user.php");
			exit();
		}
		
		// -------------------

		//plural
		if($_GET['r'] == "sliders-sliders"){
			require_once("./controllers/sliders/sliders_sliders.php");
			exit();
		}

		//singular
		if($_GET['r'] == "sliders-slider"){
			require_once("./controllers/sliders/sliders_slider.php");
			exit();
		}
		
		//--------------------
		
		if($_GET['r'] == "bulletins-bulletin"){
			require_once("./controllers/bulletins/bulletins_bulletin.php");
			exit();
		}
		
		//--------------------
		
		if($_GET['r'] == "settings-settings"){
			require_once("./controllers/settings/settings_settings.php");
			exit();
		}

		//--------------------
		
		if($_GET['r'] == "upload"){
			require_once("./controllers/upload.php");
			exit();
		}
		
		echo "Controlador no válido";
	}
	
} else {
    
	require_once("./controllers/login.php");
	exit();
}

?>