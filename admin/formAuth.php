<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <script src="main.js"></script>
        </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
        <form action="admin.php" method="POST">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="Login" required>

       
        <!--INPUT Type=Test Name="Password" placeholder="Passord" required-->

        <label><b>Mot de passe</b></label>
         <input type="password" placeholder="Entrer le mot de passe" name="Password" required>


         <!--INPUT Type=SUBMIT Value="Log"-->
        <input type="submit" id='submit' value='CONNEXION' >
        
                       
        </form>
        </div>
    </body>
</html>