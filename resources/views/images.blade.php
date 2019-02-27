<form method="post" action="{{ url('/painel/images/store') }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type='file' id="image" name="image" accept="image/*" />
  ...
  <button type="submit" class="btn btn-block btn-success">
      <i class="fa fa-save"></i> Salvar
  </button>
</form>

@foreach($images as $image)
    <img src="{{$image->name}}"></img>
@endforeach
