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

			

			<button type="button" onclick="submit_form();">Actualiser Classement</button>

			</form>
			
			

			<script>
	function submit_form()

		{
		var maVar=logins;
		var maVar2=pagerank;

		//var data1=$("#uname").val();

		//var data2=$("#pwd").val();

		var dataTosend='logins='+maVar+'&pagerank='+maVar2;

		$.ajax({

		url: 'add-user.php',

		type: 'POST',

		data:dataTosend,

		async: true,

		success: function (data) {

		alert(data);

		},

		});

					
			</script>


    </body>
</html>