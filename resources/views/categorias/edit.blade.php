@extends('layout.plantilla')

@section('title','Edit')

@section('content')

<h1 class="mb-8 text-amber-900 text-3xl">Paguina para editar categorias</h1>
    
<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{ route('categorias.update',$categorias) }}" method="POST" class="bg-gray-100 p-3">
        @csrf 
        @method('put')

        <label for="" class="form-label">
            nombre: <br>
            <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control">
        </label>
        <label for="" class="form-label">
            descripcion: <br>
            <input type="text" value="{{ old('descripcion') }}" name="descripcion" class="form-control">
        </label>
        <button type="submit" class="btn btn-primary">crear contacto</button>
    </form>
</div>
@endsection