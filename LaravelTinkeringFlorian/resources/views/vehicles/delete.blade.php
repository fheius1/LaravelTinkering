<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<header>

</header>
<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Delete Vehicle</h1>
    <p class="mb-4">Are you sure you want to delete the vehicle <strong>{{ $vehicle->marca }} {{ $vehicle->model }}</strong>?</p>
    <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="flex justify-end">
            <a href="/vehicle" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 mr-2">Cancel</a>
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
        </div>
    </form>
</div>
</body>
</html>
