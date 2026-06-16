@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold">
        Theme Showcase
    </h1>

    <p class="mt-5 text-lg">
        This project uses a custom Turbine UI variant.
    </p>

    {{-- Current Active Theme --}}
    <div class="mt-5 p-4 bg-gray-100 rounded-lg shadow-sm">
        <strong>Current Theme:</strong>
        {{ env('TURBINE_UI_THEME', 'kinetic') }}
    </div>

    <div class="mt-5">
        <x-t-alert
            title="Theme Active"
            variant="success">

            Current active theme is:
            <strong>{{ env('TURBINE_UI_THEME', 'kinetic') }}</strong>

        </x-t-alert>
    </div>

</div>

@endsection