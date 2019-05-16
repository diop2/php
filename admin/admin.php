<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<div class="form">
        <form action="controle.php" method="POST">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="Login" required><br><br>
       <label><b>Mot de passe</b></label>
         <input type="password" placeholder="Entrer le mot de passe" name="Password" required><br><br>
        <input type="submit" name='Seconnecter' id='submit' value='CONNEXION' ><br><br>
        <a class="dropdown-item" href="#">Créer Compte</a>
                       
        </form>
        </div>
 
   
</body>
</html> 
