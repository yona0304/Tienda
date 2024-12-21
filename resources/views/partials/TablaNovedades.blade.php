<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Item
            </th>
            <th scope="col" class="px-6 py-3">
                Descripción
            </th>
            <th scope="col" class="px-6 py-3">
                Tipo Novedad
            </th>
            <th scope="col" class="px-6 py-3">
                Fecha Novedad
            </th>
            <th scope="col" class="px-6 py-3">
                Estado
            </th>
            {{-- <th scope="col" class="px-6 py-3">
                Acción
            </th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($novedades as $nvoe)
            <tr
                class="  border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $nvoe->id_producto }}
                </th>
                <td class="px-6 py-4">
                    {{ $nvoe->descripcion }}
                </td>
                <td class="px-6 py-4">
                    {{ $nvoe->tipo_novedad }}
                </td>
                <td class="px-6 py-4">
                    {{ $nvoe->f_novedad }}
                </td>
                <td
                    class="px-6 py-4 {{ $nvoe->estado === 'Retirado' ? 'retirado' : ($nvoe->estado === 'Mantenimiento' ? 'mantenimiento' : ($nvoe->estado === 'Disponible' ? 'disponible' : '')) }}">
                    {{ $nvoe->estado }}
                </td>
                {{-- <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600  hover:underline">Editar</a>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="pagination">
    {!! $novedades->links() !!}
</div>
