@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        Dynamic Component Preview Workspace
    </h1>

    <x-t-alert
        title="Live Preview"
        variant="info">

        Customize components in real-time and copy the generated code.
    </x-t-alert>

    {{-- Component Selector --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mb-6">

        <h2 class="text-2xl font-bold mb-4">
            Select Component
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <button onclick="loadComponent('button')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Button
            </button>

            <button onclick="loadComponent('alert')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Alert
            </button>

            <button onclick="loadComponent('card')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Card
            </button>

            <button onclick="loadComponent('badge')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Badge
            </button>

            <button onclick="loadComponent('input')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Input
            </button>

            <button onclick="loadComponent('modal')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Modal
            </button>

            <button onclick="loadComponent('dropdown')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Dropdown
            </button>

            <button onclick="loadComponent('table')" class="p-4 border rounded-lg hover:bg-gray-100 transition">
                Table
            </button>

        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Configuration Panel --}}
        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-4">
                Configuration
            </h2>

            <div id="config-panel" class="space-y-4">

                <div>

                    <label class="block font-semibold mb-2">
                        Variant
                    </label>

                    <select id="variant" onchange="updatePreview()" class="w-full border rounded p-3">

                        <option value="primary">Primary</option>

                        <option value="secondary">Secondary</option>

                        <option value="success">Success</option>

                        <option value="danger">Danger</option>

                        <option value="warning">Warning</option>

                        <option value="info">Info</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Size
                    </label>

                    <select id="size" onchange="updatePreview()" class="w-full border rounded p-3">

                        <option value="sm">Small</option>

                        <option value="md" selected>Medium</option>

                        <option value="lg">Large</option>

                        <option value="xl">Extra Large</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Border Radius
                    </label>

                    <select id="borderRadius" onchange="updatePreview()" class="w-full border rounded p-3">

                        <option value="none">None</option>

                        <option value="rounded" selected>Rounded</option>

                        <option value="rounded-lg">Rounded Large</option>

                        <option value="rounded-full">Rounded Full</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Shadow
                    </label>

                    <select id="shadow" onchange="updatePreview()" class="w-full border rounded p-3">

                        <option value="none">None</option>

                        <option value="shadow-sm">Small</option>

                        <option value="shadow" selected>Default</option>

                        <option value="shadow-lg">Large</option>

                        <option value="shadow-xl">Extra Large</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Background Gradient
                    </label>

                    <select id="gradient" onchange="updatePreview()" class="w-full border rounded p-3">

                        <option value="">None</option>

                        <option value="bg-gradient-to-r from-blue-500 to-purple-500">Blue to Purple</option>

                        <option value="bg-gradient-to-r from-green-500 to-teal-500">Green to Teal</option>

                        <option value="bg-gradient-to-r from-red-500 to-orange-500">Red to Orange</option>

                        <option value="bg-gradient-to-r from-pink-500 to-rose-500">Pink to Rose</option>

                        <option value="bg-gradient-to-r from-amber-500 to-yellow-500">Amber to Yellow</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Custom Text
                    </label>

                    <input
                        type="text"
                        id="customText"
                        value="Click Me"
                        oninput="updatePreview()"
                        class="w-full border rounded p-3">

                </div>

                <div>

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="disabled"
                            onchange="updatePreview()"
                            class="w-5 h-5">

                        <span class="font-semibold">
                            Disabled
                        </span>

                    </label>

                </div>

                <div>

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="outline"
                            onchange="updatePreview()"
                            class="w-5 h-5">

                        <span class="font-semibold">
                            Outline Style
                        </span>

                    </label>

                </div>

            </div>

        </div>

        {{-- Live Preview Panel --}}
        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-4">
                Live Preview
            </h2>

            <div id="preview-container" class="min-h-48 flex items-center justify-center bg-gray-100 rounded-lg p-8">

                <button id="preview-button" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                    Click Me
                </button>

            </div>

            <div class="mt-6">

                <h3 class="text-lg font-bold mb-2">
                    Generated Code
                </h3>

                <textarea
                    id="generated-code"
                    readonly
                    class="w-full h-32 bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm"></textarea>

                <button onclick="copyCode()" class="mt-3 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                    Copy Code
                </button>

            </div>

        </div>

    </div>

    {{-- Component Library --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Component Library
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Button Variants --}}
            <div class="border rounded-lg p-4">

                <h3 class="font-bold mb-3">Button Variants</h3>

                <div class="space-y-2">

                    <button class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg">Primary</button>

                    <button class="w-full px-4 py-2 bg-gray-500 text-white rounded-lg">Secondary</button>

                    <button class="w-full px-4 py-2 bg-green-500 text-white rounded-lg">Success</button>

                    <button class="w-full px-4 py-2 bg-red-500 text-white rounded-lg">Danger</button>

                    <button class="w-full px-4 py-2 bg-yellow-500 text-white rounded-lg">Warning</button>

                </div>

            </div>

            {{-- Alert Variants --}}
            <div class="border rounded-lg p-4">

                <h3 class="font-bold mb-3">Alert Variants</h3>

                <div class="space-y-2">

                    <div class="p-3 bg-green-100 border border-green-500 rounded-lg text-green-800">
                        Success Alert
                    </div>

                    <div class="p-3 bg-red-100 border border-red-500 rounded-lg text-red-800">
                        Danger Alert
                    </div>

                    <div class="p-3 bg-yellow-100 border border-yellow-500 rounded-lg text-yellow-800">
                        Warning Alert
                    </div>

                </div>

            </div>

            {{-- Badge Variants --}}
            <div class="border rounded-lg p-4">

                <h3 class="font-bold mb-3">Badge Variants</h3>

                <div class="space-y-2">

                    <span class="inline-block px-3 py-1 bg-blue-500 text-white rounded-full">Blue</span>

                    <span class="inline-block px-3 py-1 bg-green-500 text-white rounded-full">Green</span>

                    <span class="inline-block px-3 py-1 bg-red-500 text-white rounded-full">Red</span>

                    <span class="inline-block px-3 py-1 bg-purple-500 text-white rounded-full">Purple</span>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
    let currentComponent = 'button';

    function loadComponent(component) {
        currentComponent = component;
        updatePreview();
    }

    function updatePreview() {
        const variant = document.getElementById('variant').value;
        const size = document.getElementById('size').value;
        const borderRadius = document.getElementById('borderRadius').value;
        const shadow = document.getElementById('shadow').value;
        const gradient = document.getElementById('gradient').value;
        const customText = document.getElementById('customText').value;
        const disabled = document.getElementById('disabled').checked;
        const outline = document.getElementById('outline').checked;

        const previewContainer = document.getElementById('preview-container');
        const generatedCode = document.getElementById('generated-code');

        let classes = '';
        let code = '';

        if (currentComponent === 'button') {
            const sizeClasses = {
                'sm': 'px-3 py-1 text-sm',
                'md': 'px-4 py-2',
                'lg': 'px-6 py-3 text-lg',
                'xl': 'px-8 py-4 text-xl'
            };

            const variantColors = {
                'primary': outline ? 'border-2 border-blue-500 text-blue-500' : 'bg-blue-500 text-white hover:bg-blue-600',
                'secondary': outline ? 'border-2 border-gray-500 text-gray-500' : 'bg-gray-500 text-white hover:bg-gray-600',
                'success': outline ? 'border-2 border-green-500 text-green-500' : 'bg-green-500 text-white hover:bg-green-600',
                'danger': outline ? 'border-2 border-red-500 text-red-500' : 'bg-red-500 text-white hover:bg-red-600',
                'warning': outline ? 'border-2 border-yellow-500 text-yellow-500' : 'bg-yellow-500 text-white hover:bg-yellow-600',
                'info': outline ? 'border-2 border-cyan-500 text-cyan-500' : 'bg-cyan-500 text-white hover:bg-cyan-600'
            };

            classes = `${sizeClasses[size]} ${variantColors[variant]} ${borderRadius} ${shadow} ${gradient} transition ${disabled ? 'opacity-50 cursor-not-allowed' : ''}`;

            code = `<button class="${classes}" ${disabled ? 'disabled' : ''}>${customText}</button>`;

            previewContainer.innerHTML = code;
        }

        generatedCode.value = code;
    }

    function copyCode() {
        const code = document.getElementById('generated-code');
        code.select();
        document.execCommand('copy');
        alert('Code copied to clipboard!');
    }

    // Initialize
    updatePreview();
</script>

@endsection
