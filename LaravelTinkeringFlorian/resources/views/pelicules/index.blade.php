<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
@include('layout.navbar')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Films</h1>
    <a href="{{ route('pelicula.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir pel·licula</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Nom pelicula</th>
{{--            <th class="py-3 px-6 text-left">Durada</th>--}}
            <th class="py-3 px-6 text-center">Data estreno</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        @if ($films->isEmpty())
            <tr>
                <td colspan="5" class="py-3 px-6 text-center">No hi ha pelis disponibles.</td>
            </tr>
        @else
            @foreach ($films as $film)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $film->id }}</td>
                    <td class="py-3 px-6">{{ $film->Nom_pelicula }}</td>
{{--                    <td class="py-3 px-6">{{ $film->Durada }}</td>--}}
                    <td class="py-3 px-6 text-center">{{ $film->Data_estreno }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="{{ route('pelicula.show', $film->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Show</a>
                        <a href="{{ route('pelicula.edit', $film->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                        <a href="{{ route('pelicula.delete', $film->id) }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Delete</a>

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
