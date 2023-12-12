@extends('layout.plantilla')

@section('title','home')

@section('content')

<div class="container text-center">
    
    <div class="row">
        <div class="col">
            <a href="{{ route('productos.index') }}" class="btn btn-primary">productos</a>
        </div>
    </div>
</div>

@endsection