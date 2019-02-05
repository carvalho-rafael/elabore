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
    <p>NAV-BAR</p>
    <a href="{{route('posts.index')}}"> Posts </a>
    <a href="{{url('/painel/galerias')}}"> Álbuns </a>
    @section('content')
        <p>Meu painel</p>
    @show
</body>
</html>
