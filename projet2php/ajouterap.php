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
<form action="#" method="post">
        <input type="text" name="identifiant" placeholder="identifiant">
        <br> <br>
        <input type="text" name="nom" placeholder="nom">
        <br> <br>
        <input type="text" name="prenom" placeholder="prenom">
        <br> <br>
        <input type="text" name="date" placeholder="date de naissance">
        <br> <br>
        <input type="number" name="telephone" placeholder="numéro de téléphone">
        <br> <br>
        <input type="text" name="email" placeholder="email">
        <br> <br>
        <input type="text" name="statut" placeholder="statut">
        <br> <br>
        <input type="submit" value="ajouter" name="ajouter">
        <br> <br>
    </form>
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


if(isset($_POST['ajouter'])){
    $affichage==false;
    $id =$_POST['identifiant'];
    $nm = $_POST['nom'];
    $pnm = $_POST['prenom'];
    $dn = $_POST['date'];
    $tel = $_POST['telephone'];
    $mail = $_POST['email'];
    $st = $_POST['statut'];
    $ouvert = fopen('promo1.txt', 'a+');
    while(!feof($ouvert)){
        $line = fgets($ouvert);
        $col = explode(":", $line);
    if($nm==$col[1]){
        $affichage=true;
    }   
    }
    if($affichage==false){
        fwrite($ouvert,"\n".$id.":".$nm.":".$pnm.":".$dn.":".$tel.":".$mail.":".$st);
    }

    fclose($ouvert);
    $ouvert = fopen('promo1.txt', 'r');
    while(!feof($ouvert)){
        $line = fgets($ouvert);
        $col = explode(":",$line);
        echo '<tr>';
    for($i=0; $i<count($col); $i++){
     echo '<td>'.$col[$i].'</td>';
    }   echo '</tr>';
    }
    fclose($ouvert);
}

echo'</table>'
?>