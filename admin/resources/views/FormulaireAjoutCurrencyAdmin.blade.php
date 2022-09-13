<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des paires</title>
</head>
<body>
    <h2 align="center">Formulaire d'ajout de paires</h2><br>
    <form action={{ session("paire")==""? route("adminpaire"):route("modificationpaire") }} method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div align="center"><input type="text" name="id" placeholder="id" value="{{session("paire")->nom??""}}"></div><br>
        <div align="center"><input type="number" name="Rate" placeholder="Rate" value="{{session("paire")->nom??""}}"></div><br>
        <div align="center"><input type="text" name="Name" placeholder="Name" value="{{session("paire")->taille??""}}"></div><br>
        <div align="center"><input type="number" name="CountUsed" placeholder="CountUsed"  value="{{session("paire")->reference??""}}"></div><br>
        <div align="center"><input type="submit" value="Valider l'ajout d'une paire"></div><br><br><br>
        <div align="center"><a href={{route("accueiladmin")}}>Revenir à la page d'accueil</div><br>

</body>
</html>