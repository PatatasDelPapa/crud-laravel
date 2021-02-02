<form action="{{ url('nota') }}" method="post">
@csrf
@include('nota.form', ['modo'=>'Crear'])
</form>