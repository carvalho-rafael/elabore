Minha galeria {{$galeria}}


<form method="post" action="{{ url('/painel/images/store') }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type='hidden' id="galeria_id" name="galeria_id" value="{{$galeria->id}}" />
   <input type='file' id="primaryImage" name="primaryImage" accept="image/*" />
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
