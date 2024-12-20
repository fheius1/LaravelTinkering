<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Afegir pel·licula</h1>
    <form action="{{ route('pelicula.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="Nom_pelicula" class="block text-gray-700">Nom pelicula:</label>
            <input type="text" id="Nom_pelicula" name="Nom_pelicula" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="Sinopsis" class="block text-gray-700">Sinopsis:</label>
            <textarea id="Sinopsis" name="Sinopsis" class="w-full px-3 py-2 border rounded" required></textarea>
        </div>
        <div class="mb-4">
            <label for="Pais_origen" class="block text-gray-700">Pais origen:</label>
            <input type="text" id="Pais_origen" name="Pais_origen" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="Durada" class="block text-gray-700">Durada:</label>
            <input type="number" id="Durada" name="Durada" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="Data_estreno" class="block text-gray-700">Data estreno:</label>
            <input type="date" id="Data_estreno" name="Data_estreno" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            <a href="/vehicle" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Tornar a la taula</a>
        </div>
    </form>
</div>
</body>
</html>
