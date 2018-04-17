<?php
function login($login_user, $password){
	/*
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "labphp";
	$link = mysqli_connect($host, $user, $pwd, $db);
	*/
	echo($login_user . PHP_EOL);
	//echo($password);
	//echo(crypt($password,"rl"));
	$link = connect();
	//echo($login_user);
	$req = "select id_user, login_user, pass from user where login_user='$login_user'";
	echo($req);
	$res = mysqli_query($link, $req);

	if($data = mysqli_fetch_assoc($res)){
		//echo("password: " . $data['pwd'] . "<br>");
		//echo("post pwd: " . crypt($password, "rl") . "<br>");
		if($data > 0){
			if($data['pass'] == crypt($password, "rl")){

				$_SESSION['user'] = $data['id_user'];
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


function connect(){
	$host = "localhost";
		$user = "root";
		$pwd = "";
		$db = "bdd";
		$link = mysqli_connect($host, $user, $pwd, $db);
		return $link;
}

function reserveBDD($id_user,$id_travel,$datebeg,$dateend){
	echo("Salut je fais la requete");
	$link = connect();


	$req = "insert into reserve(id_user,id_travel,date_res) values ('"$id_user . "','" .$id_travel  . "','" $datebeg."','" $dateend"')";
//	$res = mysqli_query($link,$res);
}
function registerUser($name, $password){

	$link = mysqli_connect();
	$req = "insert into users (name, pwd) values ('" . $name . "', '" . crypt($password,"rl") . "')";
	$res = mysqli_query($link, $req);
	require('V/connexion.html');
	/*if($data = mysqli_fetch_assoc($res)){
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
	}*/
}

function getPage($country){
	require('V/circuitCountry.html');
}
?>
