<?php

function accueil(){

	//require ("V/accueil.html");
	header('Location: V/accueil.html');
  //exit();

}


function verifUtilisateur(){
	$login=isset($_POST['Login'])?$_POST['Login']:"tapez votre login";
	$passe=isset($_POST['Password'])?$_POST['Password']:"tapez votre passe";
	require ("M/Ok.php");
	if (verifLoginBd($login, $passe)) 
		echo ("ok");
	else 
		echo ("ko");
}

?>