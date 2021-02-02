@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/nota/'.$nota->id) }}" method="post" class="bg-light">
@csrf
{{ method_field('PATCH') }}
@include('nota.form', ['modo'=>'Editar'])
</form>

</div>
@endsection