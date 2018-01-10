<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Titre de la page</title>
  <script id="rank" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=pagerank.js"></script>
   	    <script id="login" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=logins.js"></script>
<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var fn =logins;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
</head>
<body>
<h2>Ajax Post to PHP and Get Return Data</h2>
First Name: <input id="first_name" name="first_name" type="text">  <br><br>
Last Name: <input id="last_name" name="last_name" type="text"> <br><br>
<input name="myBtn" type="submit" value="Submit Data" onclick="ajax_post();"> <br><br>
<div id="status"></div>
</body>
</html>