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
		$_SESSION['nextPath'] = "ResGeorge";
		displayConnection();
	}
	else
		require('V/ResGeorge.html');
}

function displayConnection(){
	require('V/connexion.html');
}

function register(){
	require("M/user.php");
	//foreach($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br />';
	$name = isset($_POST['name'])?$_POST['name']:"";
	$pwd = isset($_POST['password'])?$_POST['password']:"";
	$vpwd = isset($_POST['validatePassword'])?$_POST['validatePassword']:"";
	if($pwd==$vpwd)
		registerUser($name, $pwd);
	else
		require('V/registration.html');
}
function logout(){
	$_SESSION['user']="";
	require('V/accueil.tpl');
}

function displayPage($path){
	require('V/' . $path . '.html');
}

function displayCountry(){
	$country = $_GET['country'];
	require('M/user.php');
	getPage($country);
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

function test(){
	//echo("It finally works");
	require("M/user.php");
	//foreach($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br />';
	$name = isset($_POST['name'])?$_POST['name']:"";
	$pwd = isset($_POST['password'])?$_POST['password']:"";
	login($name, $pwd);
}

function reserve(){
	require("M/user.php");
	echo("reservation en cours");
	var_dump( $_SESSION);
	$id_user = $_SESSION['user'];
	$id_travel=$_SESSION['id_travel'];
	$datebeg =$_POST['datebeg'];
	$dateend = $_POST['dateend'];;

	reserveBDD($id_user,$id_travel,$datebeg,$dateend);


	//require("V/accueil.htlm");
}

function getReservation(){
	require("M/user.php");
	getUserReservation();
}

?>
