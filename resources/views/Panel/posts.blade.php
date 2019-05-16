<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table>
        <tr>
            <td>
            <label for="modal-toggle" class="modal-open">Criar Publicação</label>
            <input type="checkbox" name="modal-toggle" id="modal-toggle">
            <div class="modal-container">
                <label for="modal-toggle" class="modal-back"></label>
                <form id="create-form" action="{{route('posts.store')}}" method="POST">
                    <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                    <input type="text" name="title" id="title" value="{{$post->title or old('title')}}" required>
                    <input type="text" name="subtitle" id="subtitle" value="{{$post->subtitle or old('subtitle')}}" required>
                    <input type="text" name="author" id="author" value="{{$post->author or old('author')}}" required>
                    <input type="submit" value="Criar">
                </form>
            </div>
            </td>
        </tr>
            @foreach ($posts as $post)
            <tr>
                <td>
                    {{$post->title}}
                </td>
                <td>
                    <a href="{{route('posts.edit', $post->id)}}">Edit</a>
                </td>
                <td>
                    <a href="{{route('posts.show', $post->id)}}">Show</a>
                </td>
            </tr>
            @endforeach
    </table>
</body>
</html>