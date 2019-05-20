<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset ($_GET['nom'])){
        $nom=$_GET['nom'];
    $ouvert = fopen('promo1.txt','r');
    while(!feof($ouvert)){
    $line=fgets($ouvert);
    $col=explode(':', $line);
    if($col[1]== $nom){
       if($col[6]=="exclus\n"|| $col[6]=='exclus'){
           
       $modif=$col[0].':'.$col[1].':'.$col[2].':'.$col[3].':'.$col[4].':'.$col[5].':actif'."\n";
    }
       else{
           
       $modif=$col[0].':'.$col[1].':'.$col[2].':'.$col[3].':'.$col[4].':'.$col[5].':exclus'."\n";
    }
    }
    else{
       $modif=$line;
    }
    $new=$new.$modif;
    }
    fclose($ouvert);
    
    $ouvert=fopen('promo1.txt', 'w+');
    fwrite($ouvert,trim($new));
    fclose($ouvert);
    header('location:aprrenant.php');
    }
    
    ?>
</body>
</html>