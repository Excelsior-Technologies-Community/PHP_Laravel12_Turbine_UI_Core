@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        Live Custom Asset Variant Builder Matrix
    </h1>

    <x-t-alert
        title="Variant Builder"
        variant="info">

        Create custom component variants with dynamic class resolution and conflict-free styling.
    </x-t-alert>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Variant Configuration --}}
        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-4">
                Variant Configuration
            </h2>

            <div class="space-y-4">

                <div>

                    <label class="block font-semibold mb-2">
                        Variant Name
                    </label>

                    <input
                        type="text"
                        id="variantName"
                        value="custom-variant"
                        class="w-full border rounded p-3">

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Base Component
                    </label>

                    <select id="baseComponent" class="w-full border rounded p-3">

                        <option value="button">Button</option>

                        <option value="alert">Alert</option>

                        <option value="card">Card</option>

                        <option value="input">Input</option>

                        <option value="badge">Badge</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Background Color
                    </label>

                    <div class="grid grid-cols-6 gap-2">

                        <button onclick="setColor('bg', 'bg-white')" class="w-10 h-10 bg-white border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-gray-100')" class="w-10 h-10 bg-gray-100 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-blue-500')" class="w-10 h-10 bg-blue-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-green-500')" class="w-10 h-10 bg-green-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-red-500')" class="w-10 h-10 bg-red-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-purple-500')" class="w-10 h-10 bg-purple-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-yellow-500')" class="w-10 h-10 bg-yellow-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-pink-500')" class="w-10 h-10 bg-pink-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-indigo-500')" class="w-10 h-10 bg-indigo-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-teal-500')" class="w-10 h-10 bg-teal-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-orange-500')" class="w-10 h-10 bg-orange-500 border-2 rounded hover:scale-110 transition"></button>

                        <button onclick="setColor('bg', 'bg-cyan-500')" class="w-10 h-10 bg-cyan-500 border-2 rounded hover:scale-110 transition"></button>

                    </div>

                    <input
                        type="text"
                        id="bgColor"
                        value="bg-blue-500"
                        readonly
                        class="w-full mt-2 border rounded p-3 bg-gray-100">

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Text Color
                    </label>

                    <div class="grid grid-cols-6 gap-2">

                        <button onclick="setColor('text', 'text-white')" class="w-10 h-10 bg-white border-2 rounded hover:scale-110 transition text-black">W</button>

                        <button onclick="setColor('text', 'text-black')" class="w-10 h-10 bg-black border-2 rounded hover:scale-110 transition text-white">B</button>

                        <button onclick="setColor('text', 'text-gray-500')" class="w-10 h-10 bg-gray-500 border-2 rounded hover:scale-110 transition text-white">G</button>

                        <button onclick="setColor('text', 'text-blue-500')" class="w-10 h-10 bg-blue-500 border-2 rounded hover:scale-110 transition text-white">B</button>

                        <button onclick="setColor('text', 'text-green-500')" class="w-10 h-10 bg-green-500 border-2 rounded hover:scale-110 transition text-white">G</button>

                        <button onclick="setColor('text', 'text-red-500')" class="w-10 h-10 bg-red-500 border-2 rounded hover:scale-110 transition text-white">R</button>

                    </div>

                    <input
                        type="text"
                        id="textColor"
                        value="text-white"
                        readonly
                        class="w-full mt-2 border rounded p-3 bg-gray-100">

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Border Color
                    </label>

                    <div class="grid grid-cols-6 gap-2">

                        <button onclick="setColor('border', 'border-transparent')" class="w-10 h-10 bg-gray-200 border-2 rounded hover:scale-110 transition">N</button>

                        <button onclick="setColor('border', 'border-gray-300')" class="w-10 h-10 bg-gray-300 border-2 rounded hover:scale-110 transition">G</button>

                        <button onclick="setColor('border', 'border-blue-500')" class="w-10 h-10 bg-blue-500 border-2 rounded hover:scale-110 transition">B</button>

                        <button onclick="setColor('border', 'border-green-500')" class="w-10 h-10 bg-green-500 border-2 rounded hover:scale-110 transition">G</button>

                        <button onclick="setColor('border', 'border-red-500')" class="w-10 h-10 bg-red-500 border-2 rounded hover:scale-110 transition">R</button>

                        <button onclick="setColor('border', 'border-purple-500')" class="w-10 h-10 bg-purple-500 border-2 rounded hover:scale-110 transition">P</button>

                    </div>

                    <input
                        type="text"
                        id="borderColor"
                        value="border-transparent"
                        readonly
                        class="w-full mt-2 border rounded p-3 bg-gray-100">

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Padding
                    </label>

                    <select id="padding" class="w-full border rounded p-3">

                        <option value="p-1">p-1 (0.25rem)</option>

                        <option value="p-2">p-2 (0.5rem)</option>

                        <option value="p-3" selected>p-3 (0.75rem)</option>

                        <option value="p-4">p-4 (1rem)</option>

                        <option value="p-6">p-6 (1.5rem)</option>

                        <option value="p-8">p-8 (2rem)</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Margin
                    </label>

                    <select id="margin" class="w-full border rounded p-3">

                        <option value="m-0">m-0 (0)</option>

                        <option value="m-1">m-1 (0.25rem)</option>

                        <option value="m-2" selected>m-2 (0.5rem)</option>

                        <option value="m-4">m-4 (1rem)</option>

                        <option value="m-6">m-6 (1.5rem)</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Border Radius
                    </label>

                    <select id="borderRadius" class="w-full border rounded p-3">

                        <option value="rounded-none">None</option>

                        <option value="rounded-sm">Small</option>

                        <option value="rounded" selected>Default</option>

                        <option value="rounded-lg">Large</option>

                        <option value="rounded-xl">Extra Large</option>

                        <option value="rounded-full">Full</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Shadow
                    </label>

                    <select id="shadow" class="w-full border rounded p-3">

                        <option value="shadow-none">None</option>

                        <option value="shadow-sm">Small</option>

                        <option value="shadow" selected>Default</option>

                        <option value="shadow-md">Medium</option>

                        <option value="shadow-lg">Large</option>

                        <option value="shadow-xl">Extra Large</option>

                        <option value="shadow-2xl">2X Large</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Font Size
                    </label>

                    <select id="fontSize" class="w-full border rounded p-3">

                        <option value="text-xs">Extra Small</option>

                        <option value="text-sm">Small</option>

                        <option value="text-base" selected>Base</option>

                        <option value="text-lg">Large</option>

                        <option value="text-xl">Extra Large</option>

                        <option value="text-2xl">2X Large</option>

                    </select>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Font Weight
                    </label>

                    <select id="fontWeight" class="w-full border rounded p-3">

                        <option value="font-light">Light</option>

                        <option value="font-normal" selected>Normal</option>

                        <option value="font-medium">Medium</option>

                        <option value="font-semibold">Semibold</option>

                        <option value="font-bold">Bold</option>

                        <option value="font-extrabold">Extra Bold</option>

                    </select>

                </div>

                <div>

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="gradient"
                            class="w-5 h-5">

                        <span class="font-semibold">
                            Enable Gradient
                        </span>

                    </label>

                </div>

                <div>

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="hoverEffect"
                            class="w-5 h-5">

                        <span class="font-semibold">
                            Enable Hover Effect
                        </span>

                    </label>

                </div>

                <div>

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            id="transition"
                            checked
                            class="w-5 h-5">

                        <span class="font-semibold">
                            Enable Transition
                        </span>

                    </label>

                </div>

                <button onclick="generateVariant()" class="w-full px-4 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition font-semibold">
                    Generate Variant
                </button>

            </div>

        </div>

        {{-- Live Preview & Code --}}
        <div class="space-y-6">

            <div class="bg-white text-black shadow rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-4">
                    Live Preview
                </h2>

                <div id="variant-preview" class="min-h-32 flex items-center justify-center bg-gray-100 rounded-lg p-8">

                    <button class="bg-blue-500 text-white p-3 rounded shadow transition">
                        Preview Component
                    </button>

                </div>

            </div>

            <div class="bg-white text-black shadow rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-4">
                    Generated Classes
                </h2>

                <div class="space-y-4">

                    <div>

                        <label class="block font-semibold mb-2">
                            Tailwind Classes
                        </label>

                        <textarea
                            id="generated-classes"
                            readonly
                            class="w-full h-24 bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm"></textarea>

                    </div>

                    <div>

                        <label class="block font-semibold mb-2">
                            Blade Component Code
                        </label>

                        <textarea
                            id="blade-code"
                            readonly
                            class="w-full h-24 bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm"></textarea>

                    </div>

                    <div class="flex gap-3">

                        <button onclick="copyClasses()" class="flex-1 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                            Copy Classes
                        </button>

                        <button onclick="copyBladeCode()" class="flex-1 px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                            Copy Blade Code
                        </button>

                    </div>

                </div>

            </div>

            <div class="bg-white text-black shadow rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-4">
                    Saved Variants
                </h2>

                <div id="saved-variants" class="space-y-2">

                    <p class="text-gray-500">No saved variants yet.</p>

                </div>

                <button onclick="saveVariant()" class="mt-4 w-full px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition">
                    Save Current Variant
                </button>

            </div>

        </div>

    </div>

    {{-- Conflict Resolution Matrix --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Class Conflict Resolution Matrix
        </h2>

        <div class="overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>

                    <tr class="bg-gray-100">

                        <th class="border p-3 text-left">Property</th>

                        <th class="border p-3 text-left">Applied Class</th>

                        <th class="border p-3 text-left">Conflict Status</th>

                        <th class="border p-3 text-left">Priority</th>

                    </tr>

                </thead>

                <tbody id="conflict-matrix">

                    <tr>

                        <td class="border p-3">Background</td>

                        <td class="border p-3" id="matrix-bg">bg-blue-500</td>

                        <td class="border p-3 text-green-600">No Conflict</td>

                        <td class="border p-3">High</td>

                    </tr>

                    <tr>

                        <td class="border p-3">Text Color</td>

                        <td class="border p-3" id="matrix-text">text-white</td>

                        <td class="border p-3 text-green-600">No Conflict</td>

                        <td class="border p-3">High</td>

                    </tr>

                    <tr>

                        <td class="border p-3">Border</td>

                        <td class="border p-3" id="matrix-border">border-transparent</td>

                        <td class="border p-3 text-green-600">No Conflict</td>

                        <td class="border p-3">Medium</td>

                    </tr>

                    <tr>

                        <td class="border p-3">Padding</td>

                        <td class="border p-3" id="matrix-padding">p-3</td>

                        <td class="border p-3 text-green-600">No Conflict</td>

                        <td class="border p-3">Low</td>

                    </tr>

                    <tr>

                        <td class="border p-3">Margin</td>

                        <td class="border p-3" id="matrix-margin">m-2</td>

                        <td class="border p-3 text-green-600">No Conflict</td>

                        <td class="border p-3">Low</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<script>
    let colors = {
        bg: 'bg-blue-500',
        text: 'text-white',
        border: 'border-transparent'
    };

    function setColor(type, color) {
        colors[type] = color;
        document.getElementById(type + 'Color').value = color;
        updateMatrix();
    }

    function updateMatrix() {
        document.getElementById('matrix-bg').textContent = colors.bg;
        document.getElementById('matrix-text').textContent = colors.text;
        document.getElementById('matrix-border').textContent = colors.border;
        document.getElementById('matrix-padding').textContent = document.getElementById('padding').value;
        document.getElementById('matrix-margin').textContent = document.getElementById('margin').value;
    }

    function generateVariant() {
        const bgColor = colors.bg;
        const textColor = colors.text;
        const borderColor = colors.border;
        const padding = document.getElementById('padding').value;
        const margin = document.getElementById('margin').value;
        const borderRadius = document.getElementById('borderRadius').value;
        const shadow = document.getElementById('shadow').value;
        const fontSize = document.getElementById('fontSize').value;
        const fontWeight = document.getElementById('fontWeight').value;
        const gradient = document.getElementById('gradient').checked;
        const hoverEffect = document.getElementById('hoverEffect').checked;
        const transition = document.getElementById('transition').checked;
        const baseComponent = document.getElementById('baseComponent').value;

        let classes = [bgColor, textColor, borderColor, padding, margin, borderRadius, shadow, fontSize, fontWeight];

        if (gradient) {
            const gradientMap = {
                'bg-blue-500': 'bg-gradient-to-r from-blue-400 to-blue-600',
                'bg-green-500': 'bg-gradient-to-r from-green-400 to-green-600',
                'bg-red-500': 'bg-gradient-to-r from-red-400 to-red-600',
                'bg-purple-500': 'bg-gradient-to-r from-purple-400 to-purple-600',
                'bg-yellow-500': 'bg-gradient-to-r from-yellow-400 to-yellow-600',
                'bg-pink-500': 'bg-gradient-to-r from-pink-400 to-pink-600'
            };
            classes[0] = gradientMap[bgColor] || bgColor;
        }

        if (hoverEffect) {
            classes.push('hover:opacity-80');
            classes.push('hover:scale-105');
        }

        if (transition) {
            classes.push('transition-all');
            classes.push('duration-300');
        }

        const finalClasses = classes.filter(c => c && c !== 'border-transparent').join(' ');

        document.getElementById('generated-classes').value = finalClasses;

        const bladeCode = `<x-t-button variant="custom" class="${finalClasses}">Custom Button</x-t-button>`;
        document.getElementById('blade-code').value = bladeCode;

        // Update preview
        const preview = document.getElementById('variant-preview');
        preview.innerHTML = `<button class="${finalClasses}">Preview Component</button>`;

        updateMatrix();
    }

    function copyClasses() {
        const classes = document.getElementById('generated-classes');
        classes.select();
        document.execCommand('copy');
        alert('Classes copied to clipboard!');
    }

    function copyBladeCode() {
        const code = document.getElementById('blade-code');
        code.select();
        document.execCommand('copy');
        alert('Blade code copied to clipboard!');
    }

    function saveVariant() {
        const name = document.getElementById('variantName').value;
        const classes = document.getElementById('generated-classes').value;

        if (!classes) {
            alert('Please generate a variant first!');
            return;
        }

        const savedVariants = JSON.parse(localStorage.getItem('savedVariants') || '[]');
        savedVariants.push({ name, classes, timestamp: new Date().toISOString() });
        localStorage.setItem('savedVariants', JSON.stringify(savedVariants));

        displaySavedVariants();
        alert('Variant saved successfully!');
    }

    function displaySavedVariants() {
        const savedVariants = JSON.parse(localStorage.getItem('savedVariants') || '[]');
        const container = document.getElementById('saved-variants');

        if (savedVariants.length === 0) {
            container.innerHTML = '<p class="text-gray-500">No saved variants yet.</p>';
            return;
        }

        container.innerHTML = savedVariants.map((variant, index) => `
            <div class="flex items-center justify-between p-3 bg-gray-100 rounded-lg">
                <div>
                    <span class="font-semibold">${variant.name}</span>
                    <span class="text-sm text-gray-500 ml-2">${new Date(variant.timestamp).toLocaleString()}</span>
                </div>
                <button onclick="loadVariant(${index})" class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600">
                    Load
                </button>
            </div>
        `).join('');
    }

    function loadVariant(index) {
        const savedVariants = JSON.parse(localStorage.getItem('savedVariants') || '[]');
        const variant = savedVariants[index];
        document.getElementById('generated-classes').value = variant.classes;
        alert('Variant loaded!');
    }

    // Initialize
    displaySavedVariants();
</script>

@endsection
