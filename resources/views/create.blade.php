<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Participations</title>
</head>
<body>
    <h1>Formulaire de Participations</h1>
    <form action="{{route('create.store')}}" method="POST">
        @csrf
        <label for="name"> Nom:</label>
        <input type="text" name="name" placeholder="Votre Nom" id="name"> <br><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Votre Email" id="email"><br><br> <br>
        <label for="comment">Quelles est votre languages de programmation? <br> Pourquoi ce language?</label><br><br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br> <br>
        <button> Envoyer</button>

    </form>
</body>
</html>