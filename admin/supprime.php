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
    <form  action=""  method="POST">
    <input id="" name="nom" type="text" placeholder="nom" /> 
    <input id="" type="submit" value="SUP" name="SUP" />
    </form> <br>
    <?php

 $var = "";
    $ouvert = fopen('recherche.txt', 'r' );
    if(isset($_POST["SUP"])){
        while(!feof($ouvert)){
           $line =fgets($ouvert);
            $tab = explode(':', $line);
            $tab[3] = $tab[2]*$tab[1];
            if ($tab[0] == $_POST["nom"]){
                $newline = "";
              
            }
            else{
                $newline = $line;
               
            }
            $var = $var.$newline;
        }
        
    }
  fclose($ouvert);
  $ouvert=fopen('recherche.txt', 'w+');
   fwrite($ouvert,$var );
   fclose($ouvert);
   echo  "<table border=5 width= 99% >";
   echo "<tr>" ;
      echo "<th>Produit</th>";
      echo "<th>Quantité</th>";
      echo "<th>Prix</th>";
      echo  "<th>prix total</th>";
   echo "</tr>";
   $ouvert=fopen('recherche.txt', 'r');
   while(!feof($ouvert))
   {
    echo '<tr>';
          $line =fgets($ouvert);
            $tab = explode(':', $line);
    for($i=0; $i<count($tab); $i++){
        $tab[3] = $tab[2]*$tab[1];  
     echo '<td>'.$tab[$i].'</td>';
     }
    echo '</tr>';
   } 
   fclose($ouvert);
   
    ?>
    
</body>
</html>