<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
@include('layout.navbar')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Vehicles</h1>
    <a href="{{ route('vehicle.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Vehicle</a>
    <table class="min-w-full bg-white mt-4">
        <thead>
        <tr>
            <th class="py-2">Marca</th>
            <th class="py-2">Model</th>
            <th class="py-2">Any fabricacio</th>
            <th class="py-2">Colors de fabrica</th>
            <th class="py-2">Preu</th>
            <th class="py-2">Info adicional</th>
            <th class="py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td class="py-2">{{ $vehicle->marca }}</td>
                <td class="py-2">{{ $vehicle->model }}</td>
                <td class="py-2">{{ $vehicle->any_fabricacio }}</td>
                <td class="py-2">{{ $vehicle->color_fabrica }}</td>
                <td class="py-2">{{ $vehicle->preu }}</td>
                <td class="py-2">{{ $vehicle->info_adicional }}</td>
                <td class="py-2">
{{--                    <a href="{{ route('pelicula.show', $film->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Show</a>--}}
                    <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
{{--                    <a href="{{ route('vehicles.destroy', $vehicle->id) }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Delete</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('layout.footer')
</body>
</html>
