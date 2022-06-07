
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Soyez les bienvenues sur le site de sondage.</h1>
    <div id="actions">
        <a href="{{route('create.index')}}" class="action_link green">Participer au sondage en cours</a>
        <a href="{{route('create.shows')}}" class="action_link blue">Voir les participants au sondages</a>
    </div>
</body>
</html>