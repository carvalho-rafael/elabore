"aqui é a lista de posts"
<table>
    <tr>
        <a href="{{route('posts.create')}}">Add Post</a>
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