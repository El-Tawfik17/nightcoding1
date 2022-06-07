<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des participants</title>
</head>
<body>
    <h1>Voici les participants au sondages</h1>
    @foreach ($users as $user)
    <h2><a href="{{route('create.show',$user->id)}}">{{$user->name}}</a> <a href="{{route('create.edit',$user->id)}}"> Editer</a>  <a href="{{route('create.delete',$user->id) }}">Suppimer</a></h2>
    @endforeach
</body>
</html>