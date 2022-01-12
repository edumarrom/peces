<x-layout>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-5xl font-semibold">Urnas</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Nombre
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Dimensiones
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Grosor
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Capacidad
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Editar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Borrar
                        </th>
                    </tr>
                </thead>
                @foreach ($urnas as $urna)
                    <tbody class="bg-white">
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$urna->nombre}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$urna->ancho}} x {{$urna->alto}} x {{$urna->profundo}} cm
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{$urna->grosor * 10}} mm
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{
                                        round(($urna->ancho - $urna->grosor * 2) *
                                        ($urna->profundo - $urna->grosor * 2) *
                                        ($urna->alto - $urna->grosor)
                                        / 1000)
                                    }} l
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
                @endforeach
            </table>
        </div>

        <a href="/urnas/create" class=" mt-4 text-white bg-green-400 hover:bg-green-500 focus:ring-4
            focus:ring-green-200 font-medium rounded text-sm px-5 py-2 text-center">
            Insertar nueva urna
        </a>
    </div>
</x-layout>
