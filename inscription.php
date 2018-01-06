<?php 
if (isset($_POST['submit'])){//on appelle cette fonction lorsque l'on appuie sur le bouton valider
	$login=$_POST['login'];
	$password=$_POST['password'];
	sleep(1);
	try{
	$db = new PDO("mysql:host=localhost;charset=UTF8;dbname=durand","durand","ryuusei-77");//connexion à la base de données

	}catch(PDOException $e){// le try catch sert à savoir la connexion marche ou pas
				echo'<pre>';print_r($_POST);
    			echo 'Connexion échouée : ' . $e->getMessage();
		}
			$bool=false;
			$req=$db->prepare("INSERT INTO Personne(login,pswd,etat)VALUES(?,?,?);");//prepare l'insertion à la table utilisateur
			$req->bindParam(1,$login );
			$req->bindParam(2,$password);
			$req->bindParam(3,$bool);

			//$req->execute();
			//header ('Location:../accueil.php');

			if ($req->execute()) {
				header ('Location:connexion.php');//redirection vers la connexion après l'inscription
			}
			else echo "Problème d'insertion";
		}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Inscription-Messagerie</title>
	<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"s />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
 <form action="" method="POST">
				<label class="inscr">Login :</label><input name="login" type="text"><br>
				<label class="inscr">Password</label> <input type="password" name="password"><br>
				<input name="submit" value="Inscrivez vous" type="submit">
			</form>
</body>
</html>