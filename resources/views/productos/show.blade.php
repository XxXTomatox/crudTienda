
@extends('layout.plantilla')

@section('title','personajes '.$productos->nombre)

@section('content')


<div class="container m-auto">
    <h1 class="my-5 text-ambre-900 text-3xl">bienvenido a la pagina de <span class="text-blue-500">{{$productos->nombre}}</span> </h1>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">volver a cursos</a>
        <a href="{{ route('productos.edit',$productos) }}" class="btn btn-primary">editando cursos</a>
    <div class="row">

        <p class="text-zinc-800 text-lg">nombre: <strong>{{$productos->nombre}}</strong> </p>
        <p class="text-zinc-800 text-lg">descripcion: <strong>{{$productos->descipcion}}</strong> </p>
        <p class="text-zinc-800 text-lg">categoria: <strong>{{$productos->categorias_id}}</strong> </p>


        <form action="{{ route('productos.destroy',$productos) }}" method="POST" class="mt-8">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">eliminar cursos</button>
        </form>        
    </div>
    <div class="row">
        <canvas id="myChart"></canvas>
    </div>

</div>



@endsection