<?php

if(isset($_POST['login'])==true/* && isset($_POST['rank'])==true*/){
$user=$_POST['login'];
$_SESSION['log']=$user;
//$pwd=$_POST['rank'];

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.

echo "<p>".$_SESSION['log']['borelle']."</p>";
}


?>

<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Titre</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script id="rank" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=pagerank.js"></script>
   	    <script id="login" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=logins.js"></script>

    </head>

    <body>
			<form method="post">

			

			<button id="sub" type="button" onclick="submit_form();">Actualiser Classement</button>

			</form>
			
			

			<script>
	function submit_form()

		{
		var maVar=logins;
		var maVar2=votes;

		//var data1=$("#uname").val();

		//var data2=$("#pwd").val();
		
		

		
 	
		$.ajax({

		url: 'add-user.php',

		type: 'POST',

		data:{login:maVar},

		async: true,

		success: function (data) {

		alert(data);

		}

		});
		      
      
 }

					
			</script>


    </body>
</html>