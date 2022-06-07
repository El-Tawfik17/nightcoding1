<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition</title>
</head>
<body>
    <h1>Modification</h1>
    <form action="{{route('create.update',$user->id)}}" method="POST">
        @csrf
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" placeholder="{{$user->name}}">
        <label for="email">Email:</label>
        <input type="text" id="emai" name="email" placeholder="{{$user->email}}">
        <label for="comment">Commentaire</label>
        <textarea name="comment" id="comment" placeholder="{{$user->comment}}" cols="30" rows="10"></textarea>
        <button>Modifier</button>
    </form>
</body>
</html>