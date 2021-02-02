<form action="{{ url('/nota/.$nota->id') }}" method="post">
@csrf
{{ method_field('PUT') }}
@include('nota.form', ['modo'=>'Editar'])
</form>