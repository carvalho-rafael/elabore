Minha galeria {{$galeria}}


<form method="post" action="{{ url('/painel/images/store') }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type='hidden' id="id" name="id" value="{{$galeria->id}}" />
   <input type='hidden' id="path" name="path" value="galerias" />
   <input type='file' id="image" name="image" accept="image/*" />
  ...
  <button type="submit" class="btn btn-block btn-success">
      <i class="fa fa-save"></i> Salvar
  </button>
</form>

@foreach($images as $image)
    <img src="{{$image->name}}"></img>
@endforeach

<a id="update-button">Renomear</a>

<div id="modal-update">

<form action="{{url('painel/galerias', $galeria->id)}}" method="post">
    {!! method_field('patch') !!}
    <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
    <input type="text" name="name" id="input-galeria-name" value="{{$galeria->name}}" />
    <input type="submit" value="Enviar" />
</form>
