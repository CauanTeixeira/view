<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>criar</title>
</head>
<body>
        <form action="/criacao" method="post">
            @csrf
        <label>nome:</label>
        <input type="text" name="name" id="">
        <br><br>
        <label>Valor:</label>
        <input type="number" name="valor" id="">
        <br><br>
        <input type="submit" value="Salvar">
        </form>
</body>
</html>