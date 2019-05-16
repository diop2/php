<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <form action="" method="POST" >
        <input type="text" name="nomuser" placeholder="nom"> <br>  <br>
        <input type="text" name="loginuser" placeholder="login"> <br> <br>
        <input type="password" name="pasworduser" placeholder="pasword"> <br> <br>
        <input type="tel" name="teluser" placeholder="telephone"> <br> <br>
        <input type="text" name="adresse" placeholder="adresse"> <br> <br>
        <input type="submit" name="créer" value="créer" id="okk" > <br> <br>
     </form> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
if(isset($_POST['créer'])){
    $existeDeja=false;
    $nom =$_POST['nomuser'];
    $log= $_POST['loginuser'];
    $pass= $_POST['pasworduser'];
    $tel = $_POST['teluser'];
    $adresse =$_POST['adresse'];
$ouvert = fopen('admin.txt', 'r');
 while(!feof($ouvert)){
    $line=fgets($ouvert);
    $col=explode(':', $line);


    if($log==$col[1]){
        $existeDeja=true;
    }
}
fclose($ouvert);


if($existeDeja==false){
    $ouvert = fopen('admin.txt', 'a+');
    $donnée= "\n".$nom.':'.$log.':'.$pass.':'.$tel.':'.$adresse.':'.':actif';
    fwrite($ouvert,$donnée);
    fclose($ouvert);
}


}
$ouvert = fopen("admin.txt", "r");
echo  '<table border=5 width= 80% >';
    echo '<tr>' ;
       echo '<th>'.'nom'.'</th>';
       echo '<th>'.'login'.'</th>';
       echo '<th>'.'mot de passe'.'</th>';
       echo  '<th>'.'telephone'.'</th>';
       echo  '<th>'.'adresse'.'</th>';
       echo  '<th>'.'statut'.'</th>';
       echo  '<th>'.'situation'.'</th>';
    echo '</tr>';
       while(!feof($ouvert)){
            echo '<tr>';
                $line = fgets($ouvert);
                $tab = explode(":", $line);
                for($i=0; $i<count($tab); $i++){
                    if($i<=5){
                        echo '<td>'.$tab[$i].'</td>';
                    }
                    else{
                        echo '<td><a href="controle.php?login='.$tab[1].'"><button>'.$tab[$i].'</button></a></td>';
                    }
                }
                    echo '</tr>';
        }                      
echo '</table>';
    fclose($ouvert)
?>