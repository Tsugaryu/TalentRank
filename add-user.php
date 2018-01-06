<?php

$user=$_POST['logins'];

$pwd=$_POST['pagerank'];

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.

echo "username=".$user."password=".$pwd;

?>
<?php
//TriFusion PHP
function tri($tab,$n){
            $res=mergeSort($tab,0,$n-1);
}
function mergeSort($tab,$a,$b){
                int $m;
                if($a<$b){
                        $m=($a+$b)/2;
                        mergeSort($tab,$a,$m);
                        mergeSort($tab,$m+1,$b);
                        merge($tab,$a,$m,$b);
                }

                }
function merge($tab,$a,$m,$b){
                        
                        $aux=new int[$b+1];
                        int i,j,k;
                        i=$a;
                        j=$b;
                        k=$a;
                        while(i<$m+1 && j<$b+1){
                        if($tab[i]<$tab[j]){
                                $aux[k]=$tab[i];
                                i++;
                                k++;
                        }
                        else {
                                $aux[k]=$tab[j];
                                j++;
                                k++;
                        }
                        }
                        for(k=i;k<$b+1;k++){
                                $aux[k]=$tab[k];
                        }
                        for(l=i;i<n+1;l++){
                                $aux[k]=$tab[l];
                        }
                        for(k=$a;k<$b+1;k++){
                                $tab[k]=$aux
                                [k];
                                                        }
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
   	</body>
</html>