@extends('layout.plantilla')

@section('title','Edit')

@section('content')

<h1 class="mb-8 text-amber-900 text-3xl">Paguina para editar productos</h1>
    
<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{ route('productos.update',$productos) }}" method="POST" class="bg-gray-100 p-3">
        @csrf 
        @method('put')

        <label for="" class="form-label">
            nombre: <br>
            <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control">
        </label>
        <label for="" class="form-label">
            descripcion: <br>
            <input type="text" value="{{ old('descipcion') }}" name="descipcion" class="form-control">
        </label>
        <label for="" class="form-label">
            id de la categoria: <br>
            <input type="text" value="{{ old('categorias_id') }}" name="categorias_id" class="form-control">
        </label>
        <button type="submit" class="btn btn-primary">crear contacto</button>
    </form>
</div>
@endsection