<x-app-layout>
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/MainApp.css'])
        {{ $head ?? '' }}
    </x-slot>

    
    <main {{ $attributes->merge(['class' => 'MainApp']) }}>
        @include('partials.aside')

        <div class="app_content">
            @include('partials.notifications')
            
            {{ $slot }}
        </div>
    </main>

    <x-slot name="scripts">
        {{ $scripts ?? '' }}
    </x-slot>
</x-app-layout>
