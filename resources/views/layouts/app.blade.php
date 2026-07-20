<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turbine UI Core</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @turbineUI
</head>

<body class="{{ session('dark_mode') ? 'bg-gray-900 text-white' : 'bg-gray-100' }}">

    <div class="container mx-auto p-6">

        <div class="mb-6 flex flex-wrap gap-3">

            <a href="/">
                <x-t-button variant="primary">
                    Dashboard
                </x-t-button>
            </a>

            <a href="/settings">
                <x-t-button variant="success">
                    Settings
                </x-t-button>
            </a>

            <a href="/component-preview">
                <x-t-button variant="info">
                    Component Preview
                </x-t-button>
            </a>

            <a href="/variant-builder">
                <x-t-button variant="warning">
                    Variant Builder
                </x-t-button>
            </a>

            <a href="/theme-customizer">
                <x-t-button variant="danger">
                    Theme Customizer
                </x-t-button>
            </a>

            <a href="/about">
                <x-t-button variant="secondary">
                    About
                </x-t-button>
            </a>

            <a href="/toggle-theme">
                <x-t-button variant="secondary">
                    Toggle Dark Mode
                </x-t-button>
            </a>

        </div>

        @yield('content')

    </div>

</body>

</html>