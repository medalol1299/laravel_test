@extends('layouts.app')

@section('title', 'Editar Product')

@section('content')
    <form action="{{ route('product.update', $product->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1
    rounded-lg">
        @method('put')
        <h2>Editar producto {{ $product->id }}</h2>
        <input type="text" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Nombre"
               name="name" value="{{ $product->name }}">
        <input type="number" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Precio"
               name="price" value="{{ $product->price }}">
        <input type="text" class="my-2 w-full bg-gray-200 p-2 rounded" placeholder="Description"
               name="description" value="{{ $product->description }}">
        <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">
            Guardar
        </button>
    </form>

@endsection

