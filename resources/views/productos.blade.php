@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-4">Nuestros Productos</h2>

    <!-- Mostrar mensaje de éxito si la orden fue creada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('ordenes.store') }}" method="POST">
        @csrf
        <table class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->name }}</td>
                        <td>${{ number_format($producto->portion_unit_value, 2) }}</td>
                        <td>
                            <input type="number" name="productos[{{ $producto->id }}]" class="form-control" min="1" value="1">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
