@extends('main_leandroramos')

@section('content')

<form method="post" action="/livros_leandroramos">
@csrf
@include('livros_leandroramos.partials.form')
</form>

@endsection
