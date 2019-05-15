<form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type='file' id="image" name="image" accept="image/*" />
   <input type="hidden" name="id" value="1">
   <input type="hidden" name="path" value="photos">
   <input type="submit" value="Salvar">
</form>

@foreach($images as $image)
    <img class="imageItem" src="{{url('/storage'.$image->name)}}"></img>
    <form method="POST" action="{{route('image.destroy', $image->id)}}">
        {{ csrf_field() }} 
        {{ method_field('DELETE') }} 
        <input type="submit" value="Deletar" class="btn btn-danger" title="Deletar"> 
    </form>
@endforeach
