@extends('layout.plantilla')

@section('title','productos')

@section('content')


<div class="row mt-4">
    <div class="col">
        <a class="btn btn-primary" href="{{route('productos.create')}}">agregar producto</a>
        <a href="{{ route('categorias.index') }}" class="btn btn-primary">categorias</a>
    </div>
</div>
<div class="caontainer">
    <div class="row">
        <div class="col mt-4">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">nombre</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">categorias</th>
                    <th scope="col">ver</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $productos as $producto)
                        <tr> 
                            <th>{{ $producto->nombre }}</th>
                            <td>{{ $producto->descipcion }}</td>
                            <td>{{ $producto->categorias_id }}</td>
                            <td><a href="{{route('productos.show',$producto)}}" class="btn btn-primary">ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection