@extends('components.layout')
 
@section('title', 'Camioneros')
 
@section('content')
<h2>Lista de Camiones</h2>
<a href="{{ url('/camioneros/create') }}">Agregar Camionero</a>
<ul>
<!-- Aquí se listarán los camioneros -->
</ul>
@endsection