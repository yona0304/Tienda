<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Categoria
            </th>
            <th scope="col" class="px-6 py-3">
                Item
            </th>
            <th scope="col" class="px-6 py-3">
                Producto
            </th>
            <th scope="col" class="px-6 py-3">
                Ingreso
            </th>
            <th scope="col" class="px-6 py-3">
                Novedad
            </th>
            <th scope="col" class="px-6 py-3">
                Estado
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $producto->categoria }}
                </th>
                <td class="px-6 py-4">
                    {{ $producto->id_producto }}
                </td>
                <td class="px-6 py-4">
                    {{ $producto->nombre_producto }}
                </td>
                <td class="px-6 py-4">
                    {{ $producto->ingreso }}
                </td>
                <td class="px-6 py-4">
                    {{ $producto->novedad }}
                </td>
                <td
                    class="px-6 py-4 {{ $producto->estado === 'Disponible' ? 'disponible' : ($producto->estado === 'Asignado' ? 'asignado' : ($producto->estado === 'Retirado' ? 'retirado' : ($producto->estado === 'Mantenimiento' ? 'mantenimiento' : ''))) }}">
                    {{ $producto->estado }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="pagination">
    {!! $productos->links() !!}
</div>
