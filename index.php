<?php 

session_start ();

if ((count($_GET)!=0) && !(isset($_GET['controle']) && isset ($_GET['action']))){
		echo ('controle : ' . $controle . ' et <br/> action : ' . $action);
		require ('./V/erreur404.tpl'); //cas d'un appel à index.php avec des paramètres incorrects
		
}
else {

	if (count($_GET)==0)	{ //(! isset($_SESSION['profil'])) || 
		$controle = "userController";   //cas d'une personne non authentifiée
		$action=	"accueil";		//ou d'un appel à index.php sans paramètre
	}
	else {
		if (isset($_GET['controle']) && isset ($_GET['action'])) {
			$controle = $_GET['controle'];   //cas d'un appel à index.php 
			$action = 	 $_GET['action'];	//avec les 2 paramètres controle et action
		}
	}
	//echo ('controle : ' . $controle . ' et <br/> action : ' . $action);	
	require ('C/' . $controle . '.php');
	if(isset($_GET['country'])){
		$action($_GET['country']);
	}
	else{
		$action ();
	}
} 

?>
