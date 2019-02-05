@extends('Panel.panel')
@section('content')

@foreach ($galerias as $galeria)
    <a href="{{url('painel/galerias', $galeria->id)}}">{{$galeria->name}}</a>
@endforeach

<a id="create-galeria">+</a>

<div id="modal-create">
<form action="{{url('painel/galerias/store')}}" method="POST">
        <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
        <input type="text" name="name" id="name" value="galeria1" required>
        <input type="submit" value="Enviar">
    </form>

</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{URL::asset('css/galeria.css')}}">
@endpush