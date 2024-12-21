<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Producto
            </th>
            <th scope="col" class="px-6 py-3">
                Identificación
            </th>
            <th scope="col" class="px-6 py-3">
                Asignado
            </th>
            <th scope="col" class="px-6 py-3">
                Descripción
            </th>
            <th scope="col" class="px-6 py-3">
                Sede
            </th>
            <th scope="col" class="px-6 py-3">
                Estado
            </th>
            <th scope="col" class="px-6 py-3">
                Devolución
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($asignados as $asignado)
            <tr class="bg-white border-b hover:bg-gray-50 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $asignado->id_producto }}
                </th>
                <td class="px-6 py-4">
                    {{ $asignado->id_identificacion }}
                </td>
                <td class="px-6 py-4">
                    {{ $asignado->f_asignacion }}
                </td>
                <td class="px-6 py-4">
                    {{ $asignado->descripcion }}
                </td>
                <td class="px-6 py-4">
                    {{ $asignado->zona_trabajo }}
                </td>
                <td
                    class="px-6 py-4 {{ $asignado->estado === 'Asignado' ? 'asignado' : ($asignado->estado === 'Devolución' ? 'devolucion' : '') }}">
                    {{ $asignado->estado }}
                </td>
                <td class="px-6 py-4">
                    {{ $asignado->f_devolucion }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="pagination">
    {!! $asignados->links() !!}
</div>
