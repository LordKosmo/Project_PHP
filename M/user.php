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
		echo("password: " . $data['pwd'] . "<br>");
		echo("post pwd: " . crypt($password, "rl") . "<br>");
		if($data > 0){
			if($data['pwd'] == crypt($password, "rl")){
				$_SESSION['user'] = $data['name'];
				echo ("Welcome ". $_SESSION['user']);
				header('Location: V/accueil.html');
			}
			else{
				echo ("Wrong password");
				header('Location: V/connexion.html');
			}
		}
	}
	else{
		echo ("Name or password invalid");
		header('Location: V/connexion.html');
	}
}
?>