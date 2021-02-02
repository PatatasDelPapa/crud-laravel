<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Creado</th>
            <th>Editado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $notas as $nota )
        <tr>
            <td>{{ $nota->id }}</td>
            <td>{{ $nota->Nombre }}</td>
            <td>{{ $nota->Descripción }}</td>
            <td>{{ $nota->created_at }}</td>
            <td>{{ $nota->updated_at }}</td>
            <td>Editar | Eliminar</td>
        </tr>
        @endforeach
    </tbody>

</table>