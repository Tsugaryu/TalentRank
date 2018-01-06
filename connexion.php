<?php
if (isset($_POST['submit'])){
	echo "<p>come in</p>";

  if(isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['login']) && !empty($_POST['password'])){
echo "<p>come in</p>";

session_start();


$_SESSION["login"]=htmlspecialchars($_POST['login']);//bloquer injection 
$_SESSION["password"]=$_POST['password'];

	try{
	//on se connecte pour verifier le login 
				$db = new PDO( "mysql:host=localhost;dbname=durand;charset=utf8", "durand", "ryuusei-77" );//connexion à la base de données

			}catch(PDOException $e){// le try catch sert à savoir la connexion marche ou pas
				}
			$req=$db->prepare("SELECT pswd FROM Personne WHERE login=(?)");//prepare verif connexion
			$req->bindParam(1,$_POST[login], PDO::PARAM_STR);
			$req ->execute();
			sleep(1); // Une pause de 1 sec pour embêter de possibles bot
			/*verifie password*/
			$mdp = $req ->fetch();
			if($mdp['pswd']==$_POST['password']){
			//rediriger vers messagerie.php
			header("location:recuperateurInfo.php");//se rediriger	
		}
		else{
		//ferme la session et redirige vers inscription
		session_destroy();
		header("location:inscription.php");//se rediriger	
	}
			

}
}
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>Connexion Talent Rank</title>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</head>
<body>
  <body>
  	<h1>
  		Connexion a Talent Rank
  	</h1>	
    <form method="POST" action=""	>
	    Login : <input type="text" name="login" id="login" /><br />
	    Password : <input type="password" name="password" id="password"><br />
	    <input type="submit" name="submit" value="Se connecter" id="envoi" />
	</form>
<!-- action=""-> http://www.iut-fbleau.fr/sitebp/post.php  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="main.js"></script>
</body>
</html>
