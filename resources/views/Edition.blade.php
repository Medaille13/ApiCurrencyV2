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
    <br><br>
    <div align="center"><a href={{route("accueiladmin")}}>Revenir à la page d'accueil administrateur</a></div><br><br>
    
    <table>
        <th>
            <td>id</td>
            <td>Name</td>
            <td>Rate</td>
            <td>CountUsed</td>
        </th>
        @forelse ($currencies as $currency)
        <tr>            
            <td>{{$currency->id}}</td>
            <td>{{$currency->Name}}</td>
            <td>{{$currency->To}}</td>
            <td>{{$currency->Rate}}</td>
            <td>{{$currency->CountUsed}}</td>
            <td><a href="{{route("deletepair",[$currency->id])}}">supprimer</a></td>
            <td><a href="{{route("modifpair",[$currency->id])}}">editer</a></td>
        </tr>
        @empty
        @endforelse
    </table>
    
</body>
</html>