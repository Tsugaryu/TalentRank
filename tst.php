<?php
if(isset($_POST['firstname'])==true && isset($_POST['lastname'])==true){
//$user=$_POST['login'];
//$_SESSION['log']=$user;
//$pwd=$_POST['rank'];

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.

//echo "<p>".$_SESSION['log']['borelle']."</p>";
echo 'Thank you '. $_POST['firstname']['borelle'] . ' ' . $_POST['lastname'] . ', says the PHP file';
}


?>