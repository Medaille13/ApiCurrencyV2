<!DOCTYPE html>
<html lang="fr">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>    
</head>

<body style="background-color:burlywood">
    <div id="loading" style="background-image: url('{{ asset('a-min.jpg') }}')"></div>
    <h2 align="center">Page accueil pour administrateur</h2><br>
    <div align="center"><a href={{route("editpaire")}}>Liste des paires présente / Liste paire utilisée / Edition paire</div><br>
    <div align="center"><a href={{route("formulaire")}}>Formulaire ajout de paires</div><br>       
    <!--<div align="center"><a href="">Liste Utilisateurs et edition</div><br><br><br>-->
    <div align="center"><a href={{route("logoutadmin")}}>Deconnexion</div><br>
</body>
</html>

