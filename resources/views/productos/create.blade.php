@extends('layout.plantilla')

@section('title','crear producto')

@section('content')

<h1 class="mb-8 text-amber-900 text-3xl">Paguina para crear producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label for="" class="form-label">
        nombre: <br>
        <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control">
    </label>
    <label for="" class="form-label">
        descripcion: <br>
        <input type="text" value="{{ old('descipcion') }}" name="descipcion" class="form-control">
    </label> <br>
    <label for="" class="form-label">
        escriba el id de la categoria: <br>
        <input type="text" value="{{ old('categorias_id') }}" name="categorias_id" class="form-control">
    </label> <br>
    <button type="submit" class="btn btn-primary">crear producto</button>
</form>
    
@endsection