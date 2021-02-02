<h1>{{ $modo }} Nota </h1>

@if(count($errors) > 0)

    <div class="alert alert-danger">
        <ul>
        @foreach( $errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif
<div class="form-group">
    
    <label for="NombreCreate">Nombre</label>
    <div class="input-group">

        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-tasks"></i></span>
        </div>

        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese Nombre" value="{{ isset($nota->Nombre) ? $nota->Nombre : old('Nombre') }}">
    
    </div>

</div>

<div class="form-group">

    <label for="Descripción">Descripción</label>
    <div class="input-group">

        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
        </div>

        <input type="text" class="form-control" name="Descripción" id="Descripción" placeholder="Ingrese Descripción" value="{{ isset($nota->Descripción) ? $nota->Descripción : old('Descripción') }}">
    </div>

</div>  

<input type="submit" class="btn btn-success" value="{{ $modo }}">

<a href="{{ url('nota') }}" class="btn btn-primary">Regresar</a>