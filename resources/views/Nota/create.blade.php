<form action="{{ url('nota') }}" method="post">
@csrf
    <label for="NombreCreate">Nombre</label>
    <div>
        <input type="text" name="Nombre" id="Nombre">
    </div>

    <label for="Descripción">Descripción</label>
    <div>
        <input type="text" name="Descripción" id="Descripción">
    </div>

    <input type="submit" value="Crear">

</form>