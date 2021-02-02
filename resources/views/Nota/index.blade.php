@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
<br>
@endif

<a href="{{ url('nota/create') }}">Crear nueva nota</a>

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
            <td>

            <a href="{{ url('/nota/'.$nota->id.'/edit') }}">Editar</a> 
            
            | 
        
            <form action="{{ url('/nota/'.$nota->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Deseas eliminar la nota?')" value="Eliminar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>