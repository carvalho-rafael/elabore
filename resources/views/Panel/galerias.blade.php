@extends('Panel.panel')
@section('content')

@foreach ($galerias as $galeria)
<div class="galeria-item">
    <a class="galeria-name" href="{{url('painel/galerias', $galeria->id)}}">{{$galeria->name}}</a>
    <form method="POST" action="{{route('galerias.destroy', $galeria->id)}}">
        {{ csrf_field() }} 
        {{ method_field('DELETE') }} 
        <input class="galeria-delete" type="submit" value="x" class="btn btn-danger" title="x"> 
    </form>
</div>
@endforeach

<input type="checkbox" name="toggle" id="toggle">
<label for="toggle"> <a class="galeria-create">+</a> </label>

<div id="modal-create">
    <label for="toggle"> <a class="modal-back">+</a> </label>
    <div class="modal-content">
        <form action="{{url('painel/galerias/store')}}" method="POST">
            <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
            <input type="text" name="name" id="name" value="galeria1" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{URL::asset('css/galeria.css')}}">
@endpush