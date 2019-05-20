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
<h4 class="h4">Bienvenue dans sonatel academy</h4>
   <div>
       <ul id="menu">
           <li><a href="promo.php">liste des promo</a></li>
           <li><a href="aprrenant.php">liste des apprenants</a></li>
           <li><a href="modifier.php">modification</a></li>
           <li><a href="ajoutpro.php">ajouter</a></li>
           <!--li><a href=""></a></li-->
       </ul>
   </div>
    <table table border=5 width= 99% >
        <tr>
            <td>code</td>
            <td>promotion</td>
            <td>nom </td>
            <td>mois</td>
            <td>année</td>
            <td>nombre d'apprenant</td>
        </tr>
</body>
</html>
<?php
$ouvert = fopen('listepro.txt', 'r');
while(!feof($ouvert)){
    $line = fgets($ouvert);
    $col = explode(":",$line);
    
    $effectif=0;
    $ouv = fopen('promo1.txt', 'r');
    while(!feof($ouv)){
    $line1 = fgets($ouv);
    $col1 = explode(":",$line1);
        if($col[1]==$col1[0] && $col1[6]=="exclus"|| $col[1]==$col1[0] && $col1[6]=="exclus\n"){
            $effectif++;
        }
        
    }
    $col[5] = $effectif;
    //echo $effectif;
    fclose($ouv);

    echo '<tr>';
for($i=0; $i<count($col); $i++){
 echo '<td>'.$col[$i].'</td>';
}   echo '</tr>';
}
fclose($ouvert);
?>
 </table>