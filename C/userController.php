<?php

function accueil(){

	//require ("V/accueil.html");
	//header('Location: V/accueil.html');
	require('V/accueil.tpl');
  //exit();

}

function displayReservation(){
	//$_SESSION['user']="";
	if(!isset($_SESSION['user']) || $_SESSION['user']==""){
		displayConnection();
	}
	else
		header('Location: V/ResGeorge.html');
}

function displayConnection(){
	header('Location: V/connexion.html');
}

function test(){
	echo("It finally works");
	require("M/user.php");
	foreach($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br />';
	$name = isset($_POST['name'])?$_POST['name']:"";
	$pwd = isset($_POST['password'])?$_POST['password']:"";
	login($name, $pwd);
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