Mostrar posts {{$post->title}}
{!! $post->content !!}

<form method="POST" action="{{route('posts.destroy', $post->id)}}">
    {{ csrf_field() }} 
    {{ method_field('DELETE') }} 
    <input type="submit" value="Deletar" class="btn btn-danger" title="Deletar"> 
</form>