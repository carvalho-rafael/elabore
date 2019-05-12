<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
    @stack('css')
</head>
<body>
    <span>NAV-BAR</span>
    <a href="{{route('posts.index')}}"> Posts </a>
    <a href="{{route('images')}}"> Fotos </a>
    @section('content')
        <p>Meu painel</p>
    @show
</body>
</html>
