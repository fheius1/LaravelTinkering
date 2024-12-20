<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Editar Vehicle</h1>
    <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="marca" class="block text-gray-700">Marca:</label>
            <input type="text" id="marca" name="marca" value="{{ $vehicle->marca }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="model" class="block text-gray-700">Model:</label>
            <textarea id="model" name="model" class="w-full px-3 py-2 border rounded" required>{{ $vehicle->model }}</textarea>
        </div>
        <div class="mb-4">
            <label for="any_fabricacio" class="block text-gray-700">Any fabricacio:</label>
            <input type="date" id="any_fabricacio" name="any_fabricacio" value="{{ $vehicle->any_fabricacio }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="color_fabrica" class="block text-gray-700">Colors de fabrica:</label>
            <input type="text" id="color_fabrica" name="color_fabrica" value="{{ $vehicle->color_fabrica }}" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="preu" class="block text-gray-700">Preu del model:</label>
            <input type="number" id="preu" name="preu" value="{{ $vehicle->preu }}" step="0.01" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="info_adicional" class="block text-gray-700">Informacio adicional:</label>
            <input type="text" id="info_adicional" name="info_adicional" value="{{ $vehicle->info_adicional }}" class="w-full px-3 py-2 border rounded">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</div>
</body>
</html>
