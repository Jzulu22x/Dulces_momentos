@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="display-4">¡Bienvenidos a Dulces Momentos! 🍰</h1>
        <p class="lead">Descubre nuestras deliciosas creaciones reposteras.</p>
        <img src="{{ asset('assets/images/welcome.jpg') }}" alt="Delicias Reposteras" class="img-fluid rounded shadow my-4">
        <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg">Ver Nuestros Productos</a>
    </div>
@endsection
