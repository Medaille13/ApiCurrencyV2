<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Admin</title>
</head>
<body style="background-color:burlywood">
    <h2 align="center">Formulaire d'inscription pour administrateur</h2><br>
    <form action={{ route("admininscription") }} method="POST">
        {{ csrf_field() }}

        <div align="center"><input type="text" name="identifiant" placeholder="identifiant" value="{{ old('identifiant') }}"></div><br>
               
        <div align="center"><input type="password" name="password" placeholder="mot de passe"></div><br>
            
        <div align="center"><input type="submit" value="M'inscrire"></div>
</body>
</html>