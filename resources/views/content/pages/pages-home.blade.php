@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<h4>Este contenido es publico</h4>
@role('Administrador')
<h4>Este contenido es para el admin</h4>
@endrole
@role('Supervisor')
<h4>Este contenido es para el supervisor</h4>
@endrole
@role('Vendedor')
<h4>Este contenido es para el vendedor</h4>
@endrole

@endsection
