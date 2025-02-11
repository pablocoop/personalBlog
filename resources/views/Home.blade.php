<x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <h1> Bienvenido a la página principal </h1>

        <x-alert2 type="danger" class='mb-4'>
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert2>

    </div>
</x-app-layout>