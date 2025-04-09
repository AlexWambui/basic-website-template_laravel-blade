<x-authenticated-layout class="Dashboard">
    <x-slot name="head">
        @vite(['resources/css/pages/compiled/Dashboard.css'])
        <title>Dashboard</title>
    </x-slot>

    @if(Auth::user()->user_level_label === 'super_admin' || Auth::user()->user_level_label === 'admin')
        @include('dashboards.admin')
    @endif

    @if(Auth::user()->user_level_label === 'user')
        @include('dashboards.user')
    @endif
</x-authenticated-layout>
