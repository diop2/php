<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h4>Bienvenue dans sonatel academy</h4>
   <div>
       <ul id="menu">
           <li><a href="promo.php">liste des promo</a></li>
           <li><a href="aprrenant.php">liste des apprenants</a></li>
           <li><a href="modifier.php">modification</a></li>
           <li><a href="ajoutpro.php">ajouter</a></li>
           <!--li><a href=""></a></li-->
       </ul>
   </div>
</body>
</html>
<?php
echo  '<table border=5 width= 99% >';
echo '<tr>' ;
   echo '<th>' .'identifiant'. '</th>';
   echo '<th>' .'nom'. '</th>';
   echo '<th>' .'prenom'. '</th>';
   echo  '<th>' .'date_naissance'. '</th>';
   echo  '<th>' .'telephone'. '</th>';
   echo  '<th>' .'email'. '</th>';
   echo  '<th>' .'statut'. '</th>';
echo '</tr>';

$ouvert = fopen('promo1.txt', 'r');
while(!feof($ouvert)){
    echo '<tr>';
        $line = fgets($ouvert);
        $col = explode(":", $line);
        for($i=0; $i<count($col); $i++){
            if($i<=5){
                echo '<td>'.$col[$i].'</td>';
            }
            else{
                echo '<td><a href="controle.php?nom='.$col[1].'"><button>'.$col[$i].'</button></a></td>';
            }
        }
            echo '</tr>';
}         
fclose($ouvert);          
echo '</table>';
?>