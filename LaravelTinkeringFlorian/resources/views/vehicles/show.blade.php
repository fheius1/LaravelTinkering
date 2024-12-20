<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalls del model</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
@include('layout.navbar')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-6">{{ $vehicle->model }}</h1>
    <div class="space-y-4">
        <p><strong>Marca:</strong> {{ $vehicle->marca }}</p>
        <p><strong>Any fabricacio:</strong> {{ $vehicle->any_fabricacio }}</p>
        <p><strong>Colors de fabrica:</strong> {{ $vehicle->color_fabrica }}</p>
        <p><strong>Preu:</strong> {{ $vehicle->preu }}</p>
        <p><strong>Informacio adicional:</strong> {{ $vehicle->info_adicional }}</p>
    </div>
    <a href="{{ route('vehicle.index') }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        Taula amb els models
    </a>
</div>
@include('layout.footer')
</body>
</html>
