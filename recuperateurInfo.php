<?php
// indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
//$json = file_get_contents("talent.json");
//$tab=json_decode($json);

//$login=$tab->{'stdClass'};

//$sujet=$tab->{'response'}->{'features'}->{'date'};

//var_dump(json_decode($json));


    echo "<script type=\"text/javascript\">\n";
    echo "  location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}"."&maVar=\" + maVar;\n";
    echo "</script>\n";
    
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title> Talent Rank-Data</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script id="rank" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=pagerank.js"></script>
    <script id="login" src="http://www.iut-fbleau.fr/projet/maths/?rah_external_output=logins.js"></script>
</head>
<body>
<p id="log"></p>
<script >
 var maVar=logins["borelle"];
 alert("dada"+maVar);
</script>
  <body>

    
</html>
