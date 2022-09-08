<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>
<body>
    <h2 align="center">Formulaire d'inscription pour administrateur</h2><br>
    <form action={{ route("adminlogin") }} method="POST">
        {{ csrf_field() }}

        <div align="center"><input type="text" name="identifiant" placeholder="identifiant" value="{{ old('identifiant') }}"></div><br>
        @if($errors->has('identifiant'))
            <p>{{$errors->first('identifiant')}}</p>
        @endif
        <div align="center"><input type="password" name="password" placeholder="mot de passe"></div><br>
        @if($errors->has('password'))
            <p>{{$errors->first('password')}}</p>
        @endif
        <div align="center"><input type="submit" value="Me connecter"></div>
</body>
</html>