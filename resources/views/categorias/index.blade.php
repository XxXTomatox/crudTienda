@extends('layout.plantilla')

@section('title','categorias')

@section('content')


<div class="row mt-4">
    <div class="col">
        <a href="{{ route('productos.index') }}" class="btn btn-primary">productos</a>
        <a class="btn btn-primary" href="{{route('categorias.create')}}">agregar categoria</a>
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
                    <th scope="col">ver</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $categorias as $categoria)
                        <tr> 
                            <th>{{ $categoria->nombre }}</th>
                            <td>{{ $categoria->descripcion }}</td>
                            <td><a href="{{route('categorias.show',$categoria)}}" class="btn btn-primary">ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection