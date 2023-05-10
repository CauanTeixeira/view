<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($perfumes as $perfume)
    <form action="/criacao" method="post">
        @csrf
        @method('PUT');
        {{$perfume}}
    <label>nome:</label>
    <input type="text" name="name" id="" value="{{$perfume->name}}">
    <br><br>
    <label>Valor:</label>
    <input type="number" name="valor" id="" value="{{$perfume->valor}}">
    <br><br>
    <input type="submit" value="Editar">
    </form>
    @endforeach
</body>
</html>