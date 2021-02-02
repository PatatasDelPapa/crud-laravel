<h1>{{ $modo }} Nota </h1>

<label for="NombreCreate">Nombre</label>
<div>
    <input type="text" name="Nombre" id="Nombre" value="{{ isset($nota->Nombre) ? $nota->Nombre : '' }}">
</div>

<label for="Descripción">Descripción</label>
<div>
    <input type="text" name="Descripción" id="Descripción" value="{{ isset($nota->Descripción) ? $nota->Descripción : '' }}">
</div>  

<input type="submit" value="{{ $modo }}">

<a href="{{ url('nota') }}">Regresar</a>