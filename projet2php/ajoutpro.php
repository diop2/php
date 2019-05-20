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
<form  action="#"  method="POST">
<input id="" name="promo" type="text" placeholder="promo" /> <br>
<br>
<input id="" name="nom" type="text" placeholder="nom de la promo" /> <br>
<br> 
<input id="" name="mois" type="text" placeholder="mois de la promo" /> <br>
<br>
<input id="" name="an" type="text" placeholder="année de la promo" /> <br>
<br> 
<input id="" type="submit" value="Ajouter" name="Ajouter" />
</form>
<br>
<table table border=5 width= 99% >
        <tr>
            <td>code</td>
            <td>promotion</td>
            <td>nom </td>
            <td>mois</td>
            <td>année</td>
        </tr>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajouterap.php"> Ajouter apprenant</a>
                  </div>
</body>
</html>
<?php
if(isset($_POST['Ajouter'])){
    $promo = $_POST['promo'];
    $nom = $_POST['nom'];
    $mois = $_POST['mois'];
    $an = $_POST['an'];
    $affichage=false;
    $ouvert = fopen('listepro.txt', 'a+');
    while(!feof($ouvert)){
        $line = fgets($ouvert);
        $col = explode(":", $line);
    if($promo==$col[0]){
        $affichage=true;
    }   
    }
    if($affichage==false){
        fwrite($ouvert,"\n".$promo.":".$nom.":".$mois.":".$an);
    }

    fclose($ouvert);
    $ouvert = fopen('listepro.txt', 'r');
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
?>
</table>