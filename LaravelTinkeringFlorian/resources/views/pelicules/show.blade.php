<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
@include('layout.navbar')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-6">{{ $pelicula->Nom_pelicula }}</h1>
    <p class="mb-4"><strong>Sinopsis:</strong> {{ $pelicula->Sinopsis }}</p>
    <p class="mb-4"><strong>Pais origen:</strong> {{ $pelicula->Pais_origen }}</p>
    <p class="mb-4"><strong>Durada:</strong> {{ $pelicula->Durada }} minutes</p>
    <p class="mb-4"><strong>Data estreno:</strong> {{ $pelicula->Data_estreno }}</p>
    <a href="{{ route('pelicula.index') }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
        Taula amb pel·licules
    </a>
</div>
@include('layout.footer')
</body>
</html>
