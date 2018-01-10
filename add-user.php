<?php
if(isset($_POST['login'])==true && isset($_POST['rank'])==true){
$user=$_POST['login'];
$_SESSION['log']=$user;
//$pwd=$_POST['rank'];

// now this data can be used for any function.

//One can even add this to database.

//We will just echo the data.

echo "<p>".$_SESSION['log']['borelle']."</p>";
}


?>


<?php
//TriFusion PHP
/*function tri($tab,$n){
            $res=mergeSort($tab,0,$n-1);
}
/*function mergeSort($tab,$a,$b){
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
                }*/
    /**
    *@param  $logins le tableau contenant les logins et les noms des votés 
    *@param $notes ,tableau contenant les notes classés et les logins des votés 
    *@return tableau des noms des votés classés selon l'ordre de $notes
    **/

   /* function lierNoteToId($logins,$notes){
        $tab;

        foreach($logins as $nom)
        {
          foreach ($notes as $classement) {
            //si un nom est égal au classement alors ce nom sera placé dans $tab
            if(strcmp($noms,$classement)==0){
                $tab[]=$nom;
            }
              # code...
            }
          }
        }

    
*/
?> 
