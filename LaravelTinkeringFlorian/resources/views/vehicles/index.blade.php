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
    <a href="{{ route('vehicle.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir model</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3">Marca</th>
            <th class="py-3">Model</th>
            <th class="py-3">Any fabricacio</th>
{{--            <th class="py-3">Colors de fabrica</th>--}}
{{--            <th class="py-3">Preu</th>--}}
{{--            <th class="py-3">Info adicional</th>--}}
            <th class="py-3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if ($vehicles->isEmpty())
            <tr>
                <td colspan="5" class="py-3 px-6 text-center">No hi ha vehicles registrats.</td>
            </tr>
        @else
        @foreach($vehicles as $vehicle)
            <tr>
                <td class="py-3 px-6">{{ $vehicle->id }}</td>
                <td class="py-3">{{ $vehicle->marca }}</td>
                <td class="py-3">{{ $vehicle->model }}</td>
                <td class="py-3">{{ $vehicle->any_fabricacio }}</td>
{{--                <td class="py-2">{{ $vehicle->color_fabrica }}</td>--}}
{{--                <td class="py-2">{{ $vehicle->preu }}</td>--}}
{{--                <td class="py-2">{{ $vehicle->info_adicional }}</td>--}}
                <td class="py-3 px-6 text-center">
                    <a href="{{ route('vehicle.show', $vehicle->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Detalls</a>
                    <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Editar</a>
                    <a href="{{ route('vehicle.delete', $vehicle->id) }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</a>
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
@include('layout.footer')
</body>
</html>
