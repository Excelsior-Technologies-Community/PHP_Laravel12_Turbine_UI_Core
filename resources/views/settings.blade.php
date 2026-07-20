@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        Settings
    </h1>

    {{-- App Settings Section --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mb-6">

        <h2 class="text-2xl font-bold mb-4">
            App Settings
        </h2>

        <form action="/settings/app" method="POST" class="space-y-4">

            @csrf

            <div>

                <label class="block font-semibold mb-2">
                    Application Name
                </label>

                <input
                    type="text"
                    name="app_name"
                    value="{{ config('app.name', 'Laravel') }}"
                    class="w-full border rounded p-3">

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Application URL
                </label>

                <input
                    type="text"
                    name="app_url"
                    value="{{ config('app.url', 'http://localhost') }}"
                    class="w-full border rounded p-3">

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Timezone
                </label>

                <select name="timezone" class="w-full border rounded p-3">

                    <option value="UTC" {{ config('app.timezone') === 'UTC' ? 'selected' : '' }}>
                        UTC
                    </option>

                    <option value="Asia/Kolkata" {{ config('app.timezone') === 'Asia/Kolkata' ? 'selected' : '' }}>
                        Asia/Kolkata
                    </option>

                    <option value="America/New_York" {{ config('app.timezone') === 'America/New_York' ? 'selected' : '' }}>
                        America/New_York
                    </option>

                    <option value="Europe/London" {{ config('app.timezone') === 'Europe/London' ? 'selected' : '' }}>
                        Europe/London
                    </option>

                </select>

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Environment
                </label>

                <select name="environment" class="w-full border rounded p-3">

                    <option value="local" {{ app()->environment('local') ? 'selected' : '' }}>
                        Local
                    </option>

                    <option value="production" {{ app()->environment('production') ? 'selected' : '' }}>
                        Production
                    </option>

                </select>

            </div>

            <x-t-button variant="primary">
                Save App Settings
            </x-t-button>

        </form>

    </div>

    {{-- User Preferences Section --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mb-6">

        <h2 class="text-2xl font-bold mb-4">
            User Preferences
        </h2>

        <form action="/settings/user" method="POST" class="space-y-4">

            @csrf

            <div>

                <label class="block font-semibold mb-2">
                    Language
                </label>

                <select name="language" class="w-full border rounded p-3">

                    <option value="en" {{ session('language', 'en') === 'en' ? 'selected' : '' }}>
                        English
                    </option>

                    <option value="gu" {{ session('language', 'en') === 'gu' ? 'selected' : '' }}>
                        Gujarati
                    </option>

                    <option value="hi" {{ session('language', 'en') === 'hi' ? 'selected' : '' }}>
                        Hindi
                    </option>

                </select>

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Items Per Page
                </label>

                <select name="items_per_page" class="w-full border rounded p-3">

                    <option value="10" {{ session('items_per_page', 10) == 10 ? 'selected' : '' }}>
                        10
                    </option>

                    <option value="25" {{ session('items_per_page', 10) == 25 ? 'selected' : '' }}>
                        25
                    </option>

                    <option value="50" {{ session('items_per_page', 10) == 50 ? 'selected' : '' }}>
                        50
                    </option>

                    <option value="100" {{ session('items_per_page', 10) == 100 ? 'selected' : '' }}>
                        100
                    </option>

                </select>

            </div>

            <div>

                <label class="flex items-center gap-2">

                    <input
                        type="checkbox"
                        name="notifications_enabled"
                        {{ session('notifications_enabled', true) ? 'checked' : '' }}
                        class="w-5 h-5">

                    <span class="font-semibold">
                        Enable Notifications
                    </span>

                </label>

            </div>

            <div>

                <label class="flex items-center gap-2">

                    <input
                        type="checkbox"
                        name="compact_mode"
                        {{ session('compact_mode', false) ? 'checked' : '' }}
                        class="w-5 h-5">

                    <span class="font-semibold">
                        Compact Mode
                    </span>

                </label>

            </div>

            <x-t-button variant="success">
                Save User Preferences
            </x-t-button>

        </form>

    </div>

    {{-- Theme Preferences Section --}}
    <div class="bg-white text-black shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Theme Preferences
        </h2>

        <form action="/settings/theme" method="POST" class="space-y-4">

            @csrf

            <div>

                <label class="block font-semibold mb-2">
                    Turbine UI Theme
                </label>

                <select name="turbine_theme" class="w-full border rounded p-3">

                    <option value="kinetic" {{ env('TURBINE_UI_THEME', 'kinetic') === 'kinetic' ? 'selected' : '' }}>
                        Kinetic
                    </option>

                    <option value="primal" {{ env('TURBINE_UI_THEME', 'kinetic') === 'primal' ? 'selected' : '' }}>
                        Primal
                    </option>

                </select>

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Primary Color
                </label>

                <div class="flex gap-3">

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="primary_color"
                            value="blue"
                            {{ session('primary_color', 'blue') === 'blue' ? 'checked' : '' }}
                            class="w-5 h-5">

                        <span class="w-8 h-8 bg-blue-500 rounded-full"></span>

                    </label>

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="primary_color"
                            value="green"
                            {{ session('primary_color', 'blue') === 'green' ? 'checked' : '' }}
                            class="w-5 h-5">

                        <span class="w-8 h-8 bg-green-500 rounded-full"></span>

                    </label>

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="primary_color"
                            value="purple"
                            {{ session('primary_color', 'blue') === 'purple' ? 'checked' : '' }}
                            class="w-5 h-5">

                        <span class="w-8 h-8 bg-purple-500 rounded-full"></span>

                    </label>

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="primary_color"
                            value="red"
                            {{ session('primary_color', 'blue') === 'red' ? 'checked' : '' }}
                            class="w-5 h-5">

                        <span class="w-8 h-8 bg-red-500 rounded-full"></span>

                    </label>

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="primary_color"
                            value="amber"
                            {{ session('primary_color', 'blue') === 'amber' ? 'checked' : '' }}
                            class="w-5 h-5">

                        <span class="w-8 h-8 bg-amber-500 rounded-full"></span>

                    </label>

                </div>

            </div>

            <div>

                <label class="flex items-center gap-2">

                    <input
                        type="checkbox"
                        name="dark_mode"
                        {{ session('dark_mode', false) ? 'checked' : '' }}
                        class="w-5 h-5">

                    <span class="font-semibold">
                        Dark Mode
                    </span>

                </label>

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Border Radius
                </label>

                <select name="border_radius" class="w-full border rounded p-3">

                    <option value="none" {{ session('border_radius', 'rounded') === 'none' ? 'selected' : '' }}>
                        None
                    </option>

                    <option value="rounded" {{ session('border_radius', 'rounded') === 'rounded' ? 'selected' : '' }}>
                        Rounded
                    </option>

                    <option value="rounded-lg" {{ session('border_radius', 'rounded') === 'rounded-lg' ? 'selected' : '' }}>
                        Rounded Large
                    </option>

                    <option value="rounded-full" {{ session('border_radius', 'rounded') === 'rounded-full' ? 'selected' : '' }}>
                        Rounded Full
                    </option>

                </select>

            </div>

            <x-t-button variant="danger">
                Save Theme Preferences
            </x-t-button>

        </form>

    </div>

</div>

@endsection
