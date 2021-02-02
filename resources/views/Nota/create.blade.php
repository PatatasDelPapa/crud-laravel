@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('nota') }}" method="post" class="bg-light">
@csrf
@include('nota.form', ['modo'=>'Crear'])
</form>

</div>
@endsection