<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des paires</title>
</head>
<body>
    <h2 align="center">Affichage et édition des paires</h2><br>
    <br>
    <table align="center">
        <tr align="center">
            <td align="center">id</td>
            <td align="center">Name</td>
            <td align="center">Rate</td>
            <td align="center">CountUsed</td>
        </th>
        @forelse ($currences as $currency)
        <tr>            
            <td align="center">{{$currency->id}}</td>
            <td align="center">{{$currency->Name}}</td>
            <td align="center">{{$currency->Rate}}</td>
            <td align="center">{{$currency->CountUsed}}</td>
            <td align="center"><a href="{{route("deletepaire",[$currency->id])}}">supprimer</a></td>
            <td align="center"><a href="{{route("modificationpaire",[$currency->id])}}">editer</a></td>
        </tr>
        @empty
        @endforelse
    </table>
    <br><br>
    <div align="center"><a href={{route("accueiladmin")}}>Revenir à la page d'accueil administrateur</a></div>
</body>
</html>