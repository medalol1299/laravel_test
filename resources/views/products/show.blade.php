@extends('layouts.app')

@section('title', 'Listar Product')

@section('content')
    <div class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
        <h2>Listar producto {{ $product->id }}</h2>
        <div class="my-2 w-full bg-gray-200 p-2 rounded">{{ $product->name }}</div>
        <div class="my-2 w-full bg-gray-200 p-2 rounded">{{ $product->price }}</div>
        <div class="my-2 w-full bg-gray-200 p-2 rounded">{{ $product->description }}</div>
    </div>

@endsection
