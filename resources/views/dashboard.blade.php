@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        PHP Laravel 12 Turbine UI Core
    </h1>

    <div class="mb-6 p-4 bg-gray-200 rounded-lg shadow">

        <strong>Current Theme:</strong>

        {{ env('TURBINE_UI_THEME', 'kinetic') }}

    </div>

    <x-t-alert
        title="Success"
        variant="success">

        Turbine UI Core installed successfully with

        <strong>
            {{ ucfirst(env('TURBINE_UI_THEME', 'kinetic')) }}
        </strong>

        Theme.

    </x-t-alert>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-lg font-semibold">
                Users
            </h2>

            <p class="text-3xl font-bold mt-3">
                {{ $users }}
            </p>

        </div>

        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-lg font-semibold">
                Projects
            </h2>

            <p class="text-3xl font-bold mt-3">
                {{ $projects }}
            </p>

        </div>

        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-lg font-semibold">
                Revenue
            </h2>

            <p class="text-3xl font-bold mt-3">
                ${{ $revenue }}
            </p>

        </div>

    </div>

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