@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ url('nota/create') }}" class="btn btn-success">Crear nueva nota</a>
<br><br>

<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $notas as $nota )
        <tr>
            <td>{{ $nota->id }}</td>
            <td>{{ $nota->Nombre }}</td>
            <td>{{ $nota->Descripción }}</td>
            <td>

            <a href="{{ url('/nota/'.$nota->id.'/edit') }}" class="btn btn-success"><i class="fas fa-edit"></i></a> 
            
        
            <form action="{{ url('/nota/'.$nota->id ) }}" method="post" class="d-inline">
            @csrf
            {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger" onclick="return confirm('Deseas eliminar la nota?')"><i class="fas fa-trash-alt"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $notas->links() !!}
</div>
@endsection