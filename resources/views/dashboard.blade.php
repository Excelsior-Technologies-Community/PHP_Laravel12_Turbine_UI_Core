@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

<h1 class="text-4xl font-bold mb-8">
    PHP Laravel 12 Turbine UI Core
</h1>

{{-- Current Theme --}}
<div class="mb-6 p-4 bg-gray-100 rounded-lg shadow-sm">
    <strong>Current Theme:</strong>
    {{ env('TURBINE_UI_THEME', 'kinetic') }}
</div>

{{-- Success Alert --}}
<x-t-alert
    title="Success"
    variant="success">

    Turbine UI Core installed successfully with
    <strong>{{ ucfirst(env('TURBINE_UI_THEME', 'kinetic')) }}</strong>
    Theme.

</x-t-alert>

{{-- Dashboard Cards --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-lg font-semibold">
            Users
        </h2>

        <p class="text-3xl font-bold mt-3">
            120
        </p>

    </div>

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-lg font-semibold">
            Projects
        </h2>

        <p class="text-3xl font-bold mt-3">
            25
        </p>

    </div>

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-lg font-semibold">
            Revenue
        </h2>

        <p class="text-3xl font-bold mt-3">
            $15K
        </p>

    </div>

</div>

{{-- Button Components --}}
<div class="mt-8 space-x-3">

    <x-t-button variant="primary">
        Primary Button
    </x-t-button>

    <x-t-button variant="success">
        Success Button
    </x-t-button>

    <x-t-button variant="danger">
        Danger Button
    </x-t-button>

</div>


</div>

@endsection
