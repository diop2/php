<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
      
        $ouvert = fopen("Fruit.txt", "r");
    echo  '<table border=5 width= 99% >';
        echo '<tr>' ;
           echo '<th>' .'fruit'. '</th>';
           echo '<th>' .'Quantité'. '</th>';
           echo '<th>' .'Prix'. '</th>';
           echo  '<th>' .'prix total'. '</th>';
        echo '</tr>';
           while(!feof($ouvert)){
                echo '<tr>';
                    $line = fgets($ouvert);
                    $tab = explode(":", $line);
                    for($i=0; $i<count($tab); $i++)
                    echo '<td>'.$tab[$i].'</td>';
                echo '</tr>';
                            }
    echo '</table>';
        fclose($ouvert)
      
    ?>
</body>
</html>