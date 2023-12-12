@extends('layout.plantilla')

@section('title','crear categoria')

@section('content')

<h1 class="mb-8 text-amber-900 text-3xl">Paguina para crear categoria</h1>

<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <label for="" class="form-label">
        nombre: <br>
        <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control">
    </label>
    <label for="" class="form-label">
        descripcion: <br>
        <input type="text" value="{{ old('descripcion') }}" name="descripcion" class="form-control">
    </label> <br>
    <button type="submit" class="btn btn-primary">crear categorias</button>
</form>
    
@endsection