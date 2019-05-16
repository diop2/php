<?php
 $ouvert = fopen("admin.txt", "r");
 if (isset($_POST['Seconnecter'])){
    $valider=false;
     while(!feof($ouvert)){
         $line=fgets($ouvert);
         $col=explode(":",$line);
         $login=$col[1];
         $pass=$col[2];
         $fonction=$col[5];
         $situatio=$col[6];
         if($_POST['Login']==$login && $_POST['Password']==$pass && $fonction=='admin' && $situatio=="actif" || $_POST['Login']==$login && $_POST['Password']==$pass && $fonction== 'admin' && $situatio=="actif\n"){
            header('location:acceuiladmin.php');
            $valider=true;
        }
         elseif($_POST['Login']==$login && $_POST['Password']==$pass && $fonction== 'user' && $situatio=="actif" || $_POST['Login']==$login && $_POST['Password']==$pass && $fonction== 'user' && $situatio=="actif\n"){
            header('location:acceuiluser.php');
            $valider=true;
         }
     }
 }
 if($valider==false){
    header('location:admin.php');
 }
     fclose($ouvert);

if (isset ($_GET['login'])){
         $login=$_GET['login'];
$ouvert = fopen('admin.txt','r');
while(!feof($ouvert)){
    $line=fgets($ouvert);
    $col=explode(':', $line);
    if($col[1]== $login){
        if($col[6]=="actif\n"|| $col[6]=='actif'){
            
        $modif=$col[0].':'.$col[1].':'.$col[2].':'.$col[3].':'.$col[4].':'.$col[5].':bloquer'."\n";
    }
        else{
            
        $modif=$col[0].':'.$col[1].':'.$col[2].':'.$col[3].':'.$col[4].':'.$col[5].':actif'."\n";
    }
    }
    else{
        $modif=$line;
    }
    $new=$new.$modif;
}
fclose($ouvert);

$ouvert=fopen('admin.txt', 'w+');
fwrite($ouvert,trim($new));
fclose($ouvert);
header('location:ajouteruser.php');
}
