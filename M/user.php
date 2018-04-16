<?php
function login($name, $password){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "labphp";
	$link = mysqli_connect($host, $user, $pwd, $db);
	$req = "select name, pwd from users where name='".$name."'";
	$res = mysqli_query($link, $req);
	if($data = mysqli_fetch_assoc($res)){
		//echo("password: " . $data['pwd'] . "<br>");
		//echo("post pwd: " . crypt($password, "rl") . "<br>");
		if($data > 0){
			if($data['pwd'] == crypt($password, "rl")){
				$_SESSION['user'] = $data['name'];
				//echo ("Welcome ". $_SESSION['user']);
				if(isset($_SESSION['nextPath']) && $_SESSION['nextPath'] != ""){
					$path = $_SESSION['nextPath'];
					$_SESSION['nextPath'] = "";
					require('V/' . $path . '.html');
				}
				else{
					require('V/accueil.html');
				}
			}
			else{
				//echo ("Wrong password");
				require('V/connexion.html');
			}
		}
	}
	else{
		//echo ("Name or password invalid");
		require('V/connexion.html');
	}
}

function registerUser($name, $password){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "labphp";
	$link = mysqli_connect($host, $user, $pwd, $db);
	$req = "insert into users (name, pwd) values ('" . $name . "', '" . crypt($password,"rl") . "')";
	$res = mysqli_query($link, $req);
	require('V/connexion.html');
}

function getPage($country){
	require('V/circuitCountry.html');
}
?>