<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
@include('layout.navbar')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Edit Film</h1>
    <form action="{{ route('pelicula.update', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="Nom_pelicula" class="block text-gray-700">Nom pelicula:</label>
            <input type="text" id="Nom_pelicula" name="Nom_pelicula" class="w-full px-3 py-2 border rounded" value="{{ $pelicula->Nom_pelicula }}" required>
        </div>
        <div class="mb-4">
            <label for="Sinopsis" class="block text-gray-700">Sinopsis:</label>
            <textarea id="Sinopsis" name="Sinopsis" class="w-full px-3 py-2 border rounded" required>{{ $pelicula->Sinopsis }}</textarea>
        </div>
        <div class="mb-4">
            <label for="Pais_origen" class="block text-gray-700">Pais origen:</label>
            <input type="text" id="Pais_origen" name="Pais_origen" class="w-full px-3 py-2 border rounded" value="{{ $pelicula->Pais_origen }}" required>
        </div>
        <div class="mb-4">
            <label for="Durada" class="block text-gray-700">Durada:</label>
            <input type="number" id="Durada" name="Durada" class="w-full px-3 py-2 border rounded" value="{{ $pelicula->Durada }}" required>
        </div>
        <div class="mb-4">
            <label for="Data_estreno" class="block text-gray-700">Data estreno:</label>
            <input type="date" id="Data_estreno" name="Data_estreno" class="w-full px-3 py-2 border rounded" value="{{ $pelicula->Data_estreno }}" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@include('layout.footer')
</body>
</html>
