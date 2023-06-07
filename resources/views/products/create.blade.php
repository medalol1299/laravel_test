@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <form action="{{ route('product.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
        <h2>Crear producto</h2>
        <input type="text" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Nombre"
               name="name">
        <input type="number" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Precio"
               name="price">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Description"
               name="description">
        <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">
            Guardar</button>
    </form>

@endsection
