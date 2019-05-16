<?php
ini_set("display_errors",1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br> <br>
<form  action="#"  method="POST">
<input id="" name="produit" type="text" placeholder="produit" /> <br>
<br>
<input id="" name="quantite" type="text" placeholder="quantite" /> <br>
<br> 
<input id="" name="prix" type="text" placeholder="prix" /> <br>
<br> 
<input id="" type="submit" value="Ajouter" name="Ajouter" />
</form>
<br>
</body>
</html>
<?php
if(isset($_POST['Ajouter'])){
    $produit = $_POST['produit'];
    $prix = $_POST['prix'];
    $qt =$_POST['quantite'];
    $ouvert=fopen('recherche.txt' ,'a+');
    $affichage=false;
    while(!feof($ouvert)){
        
        $line =fgets($ouvert);
        $tab = explode(':', $line);
        if ($produit == $tab[0]) {
            $affichage = true;
        }
        
    }
    if($affichage==false){
        fwrite($ouvert,"\n".$produit.":".$qt.":".$prix.":".'');
    }
    fclose($ouvert);
    $ouvert = fopen('recherche.txt', 'r');
    echo  "<table border=5 width= 99% >";
    echo "<tr>" ;
    echo "<th>Produit</th>";
    echo "<th>Quantité</th>";
    echo "<th>Prix</th>";
    echo  "<th>prix total</th>";
    echo "</tr>";
    while(!feof($ouvert)){
        
        $line =fgets($ouvert);
        $tab = explode(':', $line);
        echo '<tr>';
        for($i=0; $i<count($tab); $i++){  
        echo '<td>'.$tab[$i].'</td>';
        $tab[3] = $tab[2]*$tab[1];
        }  
        echo '</tr>';
    }
    echo  "</table>";
    fclose($ouvert);
}
else {
    $ouvert = fopen('recherche.txt', 'r');
    echo  "<table border=5 width= 99% >";
    echo "<tr>" ;
    echo "<th>Produit</th>";
    echo "<th>Quantité</th>";
    echo "<th>Prix</th>";
    echo  "<th>prix total</th>";
    echo "</tr>";
    while(!feof($ouvert)){
        
        $line =fgets($ouvert);
        $tab = explode(':', $line);
        echo '<tr>';
        for($i=0; $i<count($tab); $i++){
            $tab[3] = $tab[2]*$tab[1];  
        echo '<td>'.$tab[$i].'</td>';
        }
        echo '</tr>';
    }
    fclose($ouvert);
    echo  "</table>";
}
?>