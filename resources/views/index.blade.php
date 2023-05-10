<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perfumes</title>
</head>
<body>
    
    <h1>Produtos </h1>
    @foreach ($perfumes as $perfume)
        <ul>
            <li>{{$perfume->name}}</li>
            <li>{{$perfume->valor}}</li>
            <form action="/edit" method="get">
                @csrf
                <input name="codigo" type="text" value="{{$perfume->id}}">
                <input type="submit" value="enviar" >
            </form>
        </ul>
    @endforeach
    <a href="/criar">adicione um perfume</a>
</body>
</html>