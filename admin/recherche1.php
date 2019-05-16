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
<p id= "textrecherche"> Recherche prix max, prix min, quantité</p>
 <div>
  <form  action=""  method="POST">
<input id="" name="prixMx" type="text" placeholder="prixMx" /> <br>
<br>
<input id="" name="prixMn" type="text" placeholder="prixMn" /> <br>
<br>
<input id="" name="quantite" type="text" placeholder="quantite" /> <br>
<br>  
<input id="" type="submit" value="Rechercher" name="envoyer" />
</form>
</div>
<?php
if(isset($_POST['envoyer'])){
    $fruit=array(
        array('nom'=>'Pomme','prix'=>1000,'quantite'=>9,'montant'=>900),
        array('nom'=>'Banane','prix'=>1000,'quantite'=>150,'montant'=>100000),
        array('nom'=>'Orange','prix'=>1000,'quantite'=>300,'montant'=>100000),
        array('nom'=>'Mangue','prix'=>1000,'quantite'=>5,'montant'=>100000),
        array('nom'=>'Poivre','prix'=>1000,'quantite'=>90,'montant'=>100000),
        array('nom'=>'Carassole','prix'=>1000,'quantite'=>500,'montant'=>100000),
        array('nom'=>'Goyave','prix'=>1000,'quantite'=>800,'montant'=>100000),
        array('nom'=>'Ananas','prix'=>1000,'quantite'=>95,'montant'=>100000),
        array('nom'=>'Fraise','prix'=>1000,'quantite'=>3,'montant'=>100000),
        array('nom'=>'Grenade','prix'=>1000,'quantite'=>1000,'montant'=>100000)
       ); 
      }
?>

   <table border= 5>
     <tr>
       <th> fruit</th>
       <th>prix</th>
       <th>quantite</th>
      <th>montant</th>
     </tr>
     
   <?php

   $qt =$_POST['quantite'];
   $pmax = $_POST['prixMx'];
   $pmin = $_POST['prixMn'];
  
   for ($i = 0; $i < count($fruit); $i++) {
    if ($qt >= $fruit[$i]['quantite'] && $qt != ""&& $qt > 0) {
        if ($fruit[$i]['quantite'] < 10 ) {

            echo "<tr class='rouge'>
                <td>" . $fruit[$i]["nom"] . "</td>
                <td>" . $fruit[$i]['prix'] . "</td>
                <td>" . $fruit[$i]["quantite"] . "</td>
                <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
            </tr>";
        }
        else{
            echo "<tr>
            <td>" . $fruit[$i]["nom"] . "</td>
            <td>" . $fruit[$i]['prix'] . "</td>
            <td>" . $fruit[$i]["quantite"] . "</td>
            <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
        </tr>";
        }

    } 
    elseif ($pmin <= $fruit[$i]['prix'] && $pmax == "" && $qt == "" && $pmin > 0) {
        if ($fruit[$i]['quantite'] <= 10) {

            echo "<tr class='rouge'>
                <td>" . $fruit[$i]["nom"] . "</td>
                <td>" . $fruit[$i]['prix'] . "</td>
                <td>" . $fruit[$i]["quantite"] . "</td>
                <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
            </tr>";
        }
        else{
            echo "<tr>
            <td>" . $fruit[$i]["nom"] . "</td>
            <td>" . $fruit[$i]['prix'] . "</td>
            <td>" . $fruit[$i]["quantite"] . "</td>
            <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
        </tr>";
        }
    } elseif ($pmax <= $fruit[$i]['prix'] && $pmin == "" && $qt == "" && $pmax > 0) {
        if ($fruit[$i]['quantite'] <= 10) {

            echo "<tr class='rouge'>
                <td>" . $fruit[$i]["nom"] . "</td>
                <td>" . $fruit[$i]['prix'] . "</td>
                <td>" . $fruit[$i]["quantite"] . "</td>
                <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
            </tr>";
        }
        else{
            echo "<tr>
            <td>" . $fruit[$i]["nom"] . "</td>
            <td>" . $fruit[$i]['prix'] . "</td>
            <td>" . $fruit[$i]["quantite"] . "</td>
            <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
        </tr>";
        }
    } elseif ($pmin <= $fruit[$i]['prix'] && $pmax >= $fruit[$i]['prix'] && $pmax > $pmin && $pmax != "" && $pmin != "" && $qt == "" && $pmin > 0 && $pmin > 0) {
        if ($fruit[$i]['quantite'] <= 10 ) {

            echo "<tr class='rouge'>
                <td>" . $fruit[$i]["nom"] . "</td>
                <td>" . $fruit[$i]['prix'] . "</td>
                <td>" . $fruit[$i]["quantite"] . "</td>
                <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
            </tr>";
        }
        else{
            echo "<tr>
            <td>" . $fruit[$i]["nom"] . "</td>
            <td>" . $fruit[$i]['prix'] . "</td>
            <td>" . $fruit[$i]["quantite"] . "</td>
            <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
        </tr>";
        }
    } elseif ($qt <= $fruit[$i]['quantite'] && $pmin <= $fruit[$i]['prix'] && $pmax >= $fruit[$i]['prix'] && $pmax > $pmin && $pmax != "" && $pmin != "" && $qt != "" && $pmin > 0 && $pmin > 0 && $qt > 0) {
        if ($fruit[$i]['quantite'] <= 10) {

            echo "<tr class='rouge'>
                <td>" . $fruit[$i]["nom"] . "</td>
                <td>" . $fruit[$i]['prix'] . "</td>
                <td>" . $fruit[$i]["quantite"] . "</td>
                <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
            </tr>";
        }
        else{
            echo "<tr>
            <td>" . $fruit[$i]["nom"] . "</td>
            <td>" . $fruit[$i]['prix'] . "</td>
            <td>" . $fruit[$i]["quantite"] . "</td>
            <td>" . $fruit[$i]["quantite"] * $fruit[$i]['prix'] . "</td>
        </tr>";
        }
    }

}

?>

</table>

</body>
</html>