<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

</head>
<body>
<nav class="h-16 flex justify-end py-4 px-16">
    <a href="{{ route('product.index') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white
    text-blue-500 font-semibold mx-2 hover:bg-blue-600">Listar productos</a>

    <a href="{{ route('product.create') }}" class="text-blue-500 rounded px-4 pt-1 h-10 font-semibold mx-2
    hover:bg-blue-600 border border-blue-500 ">Crear producto</a>

</nav>
<main class="p-16 flex justify-center">
    @yield('content')
</main>
</body>
</html>

