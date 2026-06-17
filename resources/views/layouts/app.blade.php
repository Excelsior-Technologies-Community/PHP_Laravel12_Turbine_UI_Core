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

        <div class="mb-6 flex gap-3">

            <a href="/">
                <x-t-button variant="primary">
                    Dashboard
                </x-t-button>
            </a>

            <a href="/about">
                <x-t-button variant="success">
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