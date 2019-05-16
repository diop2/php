<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  action=""  method="POST">
<input id="" name="prixMx" type="text" placeholder="prixMx" /> <br>
<br>
<input id="" name="prixMn" type="text" placeholder="prixMn" /> <br>
<br>
<input id="" name="quantite" type="text" placeholder="quantite" /> <br>
<br>  
<input id="" name="nom" type="text" placeholder="nom" /> 
<br><br>
<input id="" type="submit" value="Rechercher" name="envoyer" />
</form>
<br>

 <?php
    echo  '<table border=5 width= 99% >';
       echo '<tr>' ;
          echo '<th>' .'Produit'. '</th>';
          echo '<th>' .'Quantité'. '</th>';
          echo '<th>' .'Prix'. '</th>';
          echo  '<th>' .'prix total'. '</th>';
       echo '</tr>';
       $qt =$_POST['quantite'];
       $pmax = $_POST['prixMx'];
       $pmin = $_POST['prixMn'];
       $nom=$_POST['nom'];
       $ouvert = fopen("recherche.txt", "r");
        if (isset($_POST[envoyer])){
             while(!feof($ouvert)){
                $line = fgets($ouvert);
                $tab = explode(":", $line);
                $tab[3] = $tab[2]*$tab[1];
                if($qt >= $tab[1] && $qt > 0){
                    if ($tab[1] < 10 ) {
                        echo '<tr>';
                  for($i=0; $i<count($tab); $i++){
                  echo '<td>'.$tab[$i].'</td>';
                  }echo '</tr>';
                    }
                    else{
                        echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                         echo '<td>'.$tab[$i].'</td>';
                    }   echo '</tr>';}

                }
                elseif($pmax>=$tab[2] && empty($qt) && empty($pmin) && $pmax>0){
                    if ($tab[1] < 10 ) {
                        echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                        echo '<td>'.$tab[$i].'</td>';
                       } echo '</tr>';
                          }
                          else{
                              echo '<tr>';
                              for($i=0; $i<count($tab); $i++){
                               echo '<td>'.$tab[$i].'</td>';
                               }echo '</tr>';
                          }
                }
                elseif($pmax>=$tab[2] && !empty($qt) && !empty($pmin) && $pmax>0){
                    if ($tab[2] < 10 ) { echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                        echo '<td>'.$tab[$i].'</td>';
                        }echo '</tr>';
                          }
                          else{
                              echo '<tr>';
                              for($i=0; $i<count($tab); $i++){
                               echo '<td>'.$tab[$i].'</td>';
                             }echo '</tr>';
                          }
                }
                elseif($pmin<=$tab[2] && empty($qt) && empty($pmax) && $pmin>0){
                    if ($tab[1] < 10 ) {echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                        echo '<td>'.$tab[$i].'</td>';
                        }echo '</tr>';
                          }
                          else{
                            echo '<tr>';
                              for($i=0; $i<count($tab); $i++){  
                               echo '<td>'.$tab[$i].'</td>';
                               }echo '</tr>';
                          }
                }
                elseif($pmin<=$tab[2] && $qt!="" && $pmax!=0 && $pmin>0){
                    if ($tab[1] < 10 ) {
                        echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                        echo '<td>'.$tab[$i].'</td>';
                        }echo '</tr>';
                          }
                          else{
                            echo '<tr>';
                              for($i=0; $i<count($tab); $i++){
                               echo '<td>'.$tab[$i].'</td>';
                               }echo '</tr>';
                          }
                }
                elseif($pmin<$tab[2] && $pmax>=$tab[2] && $pmax>$pmin && $qt!="" && $pmin>0 && $pmax>0){
                    if ($tab[1] < 10 ) {
                        echo '<tr>';
                        for($i=0; $i<count($tab); $i++){
                        echo '<td>'.$tab[$i].'</td>';
                        }echo '</tr>';
                          }
                          else{
                            echo '<tr>';
                              for($i=0; $i<count($tab); $i++){
                               echo '<td>'.$tab[$i].'</td>';
                               }echo '</tr>';
                          }
                }
                elseif($nom == $tab[0]){
                  echo '<tr>';
                     for($i=0; $i<count($tab); $i++)
                    echo '<td>'.$tab[$i].'</td>';
                    }
                  echo '</tr>';
   
             }
      }
      else{
        echo '<tr>';
          for($i=0; $i<count($tab); $i++){
           echo '<td>'.$tab[$i].'</td>';
           echo '</tr>';
           }
      }
    fclose($ouvert); 
        
        
        
    echo '</table>';
 ?>
        
</body>
</html>