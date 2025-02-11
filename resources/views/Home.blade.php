@extends('layouts.app')

@section('title', 'Personal Blog')

{{-- @section('title')

    Laravel 11
    
@endsection --}}

@push('css')
    <style>
        body {
            background-color: rgb(205, 112, 228)
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color:brown
        }
    </style>
    
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1> Bienvenido a la página principal </h1>

        <x-alert2 type="danger" class='mb-4'>
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert2>

    </div>
@endsection
    
