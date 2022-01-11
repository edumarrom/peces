<x-layout>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-5xl font-semibold">Plantilla Laravel</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Denominación
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                                Localidad
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Editar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Borrar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                Tabla de
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                Ejemplo
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="px-4 py-2 text-sm text-white bg-blue-400 rounded">
                                Editar
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('¿Borrar departamento?')"
                                    class="px-4 py-2 text-sm text-white bg-red-400 rounded">
                                    Borrar
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="/depart/create" class=" mt-4 text-white bg-green-400 hover:bg-green-500 focus:ring-4
            focus:ring-green-200 font-medium rounded text-sm px-5 py-2 text-center">
            Nuevo
        </a>
    </div>
</x-layout>
