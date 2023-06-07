@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full">
            <thead>
            <tr class="bg-indigo-500 text-white">
                <th class="w-20 py-4 ...">ID</th>
                <th class="w-1/2 py-4 ...">Nombre</th>
                <th class="w-1/16 py-4 ...">Precio</th>
                <th class="w-1/16 py-4 ...">Descripción</th>
                <th class="w-28 py-4 ...">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="py-3 px-6">{{ $product->id }}</td>
                    <td class="p-3">{{$product->name}}</td>
                    <td class="p-3 text-center">{{$product->price}}</td>
                    <td class="p-3 text-center">{{$product->description}}</td>
                    <td class="p-3 flex justify-center">
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @method('delete')
                            <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                <i class="fas fa-trash"></i></button>
                        </form>
                        <a href="{{ route('product.edit', $product->id) }}" class="bg-green-500 text-white px-3 py-1
                        rounded-sm mx-1">
                            <i class="fas fa-pen"></i></a>
                        <a href="{{ route('product.show', $product->id) }}" class="bg-blue-500 text-white px-3 py-1
                        rounded-sm mx-1">
                            <i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
