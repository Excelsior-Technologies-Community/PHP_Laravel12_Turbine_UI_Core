@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        Integrated Global Color Theme Accent Customizer
    </h1>

    <x-t-alert
        title="Theme Customizer"
        variant="info">

        Real-time theme customization with global color palette and accent controls.
    </x-t-alert>

    {{-- Theme Toggle Panel --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mb-6">

        <h2 class="text-2xl font-bold mb-4">
            Quick Theme Toggle
        </h2>

        <div class="flex gap-4 flex-wrap">

            <button onclick="setTheme('kinetic')" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Kinetic Theme
            </button>

            <button onclick="setTheme('primal')" class="px-6 py-3 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                Primal Theme
            </button>

            <button onclick="toggleDarkMode()" class="px-6 py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
                Toggle Dark Mode
            </button>

        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Color Palette Builder --}}
        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-4">
                Color Palette Builder
            </h2>

            <div class="space-y-4">

                <div>

                    <label class="block font-semibold mb-2">
                        Primary Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="primaryColor"
                            value="#3B82F6"
                            onchange="updatePalette('primary')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="primaryColorHex"
                            value="#3B82F6"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                    <div class="flex gap-2 mt-3">

                        <div class="w-10 h-10 rounded bg-blue-500"></div>

                        <div class="w-10 h-10 rounded bg-blue-400"></div>

                        <div class="w-10 h-10 rounded bg-blue-600"></div>

                        <div class="w-10 h-10 rounded bg-blue-700"></div>

                        <div class="w-10 h-10 rounded bg-blue-800"></div>

                        <div class="w-10 h-10 rounded bg-blue-900"></div>

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Secondary Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="secondaryColor"
                            value="#6B7280"
                            onchange="updatePalette('secondary')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="secondaryColorHex"
                            value="#6B7280"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Accent Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="accentColor"
                            value="#F59E0B"
                            onchange="updatePalette('accent')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="accentColorHex"
                            value="#F59E0B"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Success Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="successColor"
                            value="#10B981"
                            onchange="updatePalette('success')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="successColorHex"
                            value="#10B981"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Danger Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="dangerColor"
                            value="#EF4444"
                            onchange="updatePalette('danger')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="dangerColorHex"
                            value="#EF4444"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Warning Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="warningColor"
                            value="#F59E0B"
                            onchange="updatePalette('warning')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="warningColorHex"
                            value="#F59E0B"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Info Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="infoColor"
                            value="#3B82F6"
                            onchange="updatePalette('info')"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="infoColorHex"
                            value="#3B82F6"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <button onclick="applyPalette()" class="w-full px-4 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition font-semibold">
                    Apply Color Palette
                </button>

            </div>

        </div>

        {{-- Live Theme Preview --}}
        <div class="bg-white text-black shadow rounded-lg p-6">

            <h2 class="text-2xl font-bold mb-4">
                Live Theme Preview
            </h2>

            <div id="theme-preview" class="space-y-4">

                <div class="p-4 bg-blue-500 text-white rounded-lg">
                    <h3 class="font-bold">Primary Component</h3>
                    <p>This uses the primary color</p>
                </div>

                <div class="p-4 bg-gray-500 text-white rounded-lg">
                    <h3 class="font-bold">Secondary Component</h3>
                    <p>This uses the secondary color</p>
                </div>

                <div class="p-4 bg-amber-500 text-white rounded-lg">
                    <h3 class="font-bold">Accent Component</h3>
                    <p>This uses the accent color</p>
                </div>

                <div class="flex gap-3">

                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg">Success</button>

                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg">Danger</button>

                    <button class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Warning</button>

                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Info</button>

                </div>

                <div class="p-4 border-2 border-blue-500 rounded-lg">
                    <h3 class="font-bold">Bordered Component</h3>
                    <p>This uses border styling</p>
                </div>

            </div>

        </div>

    </div>

    {{-- Gradient Builder --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Gradient Builder
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="space-y-4">

                <div>

                    <label class="block font-semibold mb-2">
                        Gradient Start Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="gradientStart"
                            value="#3B82F6"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="gradientStartHex"
                            value="#3B82F6"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Gradient End Color
                    </label>

                    <div class="flex gap-3 items-center">

                        <input
                            type="color"
                            id="gradientEnd"
                            value="#8B5CF6"
                            class="w-16 h-12 rounded cursor-pointer">

                        <input
                            type="text"
                            id="gradientEndHex"
                            value="#8B5CF6"
                            readonly
                            class="flex-1 border rounded p-3 bg-gray-100">

                    </div>

                </div>

                <div>

                    <label class="block font-semibold mb-2">
                        Gradient Direction
                    </label>

                    <select id="gradientDirection" class="w-full border rounded p-3">

                        <option value="to-r">Right</option>

                        <option value="to-l">Left</option>

                        <option value="to-b">Bottom</option>

                        <option value="to-t">Top</option>

                        <option value="to-br">Bottom Right</option>

                        <option value="to-bl">Bottom Left</option>

                        <option value="to-tr">Top Right</option>

                        <option value="to-tl">Top Left</option>

                    </select>

                </div>

                <button onclick="generateGradient()" class="w-full px-4 py-3 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition font-semibold">
                    Generate Gradient
                </button>

            </div>

            <div>

                <label class="block font-semibold mb-2">
                    Gradient Preview
                </label>

                <div id="gradient-preview" class="h-32 rounded-lg bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center text-white font-bold text-xl">
                    Gradient Preview
                </div>

                <div class="mt-4">

                    <label class="block font-semibold mb-2">
                        Generated CSS
                    </label>

                    <textarea
                        id="gradient-css"
                        readonly
                        class="w-full h-20 bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm">background: linear-gradient(to right, #3B82F6, #8B5CF6);</textarea>

                    <button onclick="copyGradient()" class="mt-3 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                        Copy CSS
                    </button>

                </div>

            </div>

        </div>

    </div>

    {{-- Preset Themes --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Preset Themes
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <div onclick="applyPreset('ocean')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-blue-400 to-cyan-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Ocean</h3>

                <p class="text-sm opacity-80">Blue & Cyan</p>

            </div>

            <div onclick="applyPreset('sunset')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-orange-400 to-red-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Sunset</h3>

                <p class="text-sm opacity-80">Orange & Red</p>

            </div>

            <div onclick="applyPreset('forest')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-green-400 to-emerald-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Forest</h3>

                <p class="text-sm opacity-80">Green & Emerald</p>

            </div>

            <div onclick="applyPreset('royal')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-purple-400 to-indigo-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Royal</h3>

                <p class="text-sm opacity-80">Purple & Indigo</p>

            </div>

            <div onclick="applyPreset('midnight')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-gray-700 to-gray-900 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Midnight</h3>

                <p class="text-sm opacity-80">Dark Gray</p>

            </div>

            <div onclick="applyPreset('candy')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-pink-400 to-rose-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Candy</h3>

                <p class="text-sm opacity-80">Pink & Rose</p>

            </div>

            <div onclick="applyPreset('aurora')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-teal-400 to-green-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Aurora</h3>

                <p class="text-sm opacity-80">Teal & Green</p>

            </div>

            <div onclick="applyPreset('lavender')" class="cursor-pointer p-4 rounded-lg bg-gradient-to-br from-violet-400 to-purple-500 text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">Lavender</h3>

                <p class="text-sm opacity-80">Violet & Purple</p>

            </div>

        </div>

    </div>

    {{-- Export Theme --}}
    <div class="bg-white text-black shadow rounded-lg p-6 mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Export Theme Configuration
        </h2>

        <div class="space-y-4">

            <textarea
                id="theme-config"
                readonly
                class="w-full h-48 bg-gray-900 text-green-400 p-4 rounded-lg font-mono text-sm">{
  "primary": "#3B82F6",
  "secondary": "#6B7280",
  "accent": "#F59E0B",
  "success": "#10B981",
  "danger": "#EF4444",
  "warning": "#F59E0B",
  "info": "#3B82F6"
}</textarea>

            <div class="flex gap-3">

                <button onclick="copyThemeConfig()" class="flex-1 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                    Copy JSON
                </button>

                <button onclick="downloadThemeConfig()" class="flex-1 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                    Download JSON
                </button>

                <button onclick="saveThemeToLocalStorage()" class="flex-1 px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                    Save to Browser
                </button>

            </div>

        </div>

    </div>

</div>

<script>
    let currentTheme = {
        primary: '#3B82F6',
        secondary: '#6B7280',
        accent: '#F59E0B',
        success: '#10B981',
        danger: '#EF4444',
        warning: '#F59E0B',
        info: '#3B82F6'
    };

    function updatePalette(colorType) {
        const colorInput = document.getElementById(colorType + 'Color');
        const hexInput = document.getElementById(colorType + 'ColorHex');
        
        currentTheme[colorType] = colorInput.value;
        hexInput.value = colorInput.value;
        
        updateThemePreview();
        updateThemeConfig();
    }

    function updateThemePreview() {
        const preview = document.getElementById('theme-preview');
        
        preview.innerHTML = `
            <div class="p-4 rounded-lg text-white" style="background-color: ${currentTheme.primary}">
                <h3 class="font-bold">Primary Component</h3>
                <p>This uses the primary color</p>
            </div>
            <div class="p-4 rounded-lg text-white" style="background-color: ${currentTheme.secondary}">
                <h3 class="font-bold">Secondary Component</h3>
                <p>This uses the secondary color</p>
            </div>
            <div class="p-4 rounded-lg text-white" style="background-color: ${currentTheme.accent}">
                <h3 class="font-bold">Accent Component</h3>
                <p>This uses the accent color</p>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 rounded-lg text-white" style="background-color: ${currentTheme.success}">Success</button>
                <button class="px-4 py-2 rounded-lg text-white" style="background-color: ${currentTheme.danger}">Danger</button>
                <button class="px-4 py-2 rounded-lg text-white" style="background-color: ${currentTheme.warning}">Warning</button>
                <button class="px-4 py-2 rounded-lg text-white" style="background-color: ${currentTheme.info}">Info</button>
            </div>
            <div class="p-4 rounded-lg border-2" style="border-color: ${currentTheme.primary}">
                <h3 class="font-bold">Bordered Component</h3>
                <p>This uses border styling</p>
            </div>
        `;
    }

    function updateThemeConfig() {
        const config = JSON.stringify(currentTheme, null, 2);
        document.getElementById('theme-config').value = config;
    }

    function applyPalette() {
        updateThemePreview();
        alert('Color palette applied successfully!');
    }

    function generateGradient() {
        const startColor = document.getElementById('gradientStart').value;
        const endColor = document.getElementById('gradientEnd').value;
        const direction = document.getElementById('gradientDirection').value;
        
        document.getElementById('gradientStartHex').value = startColor;
        document.getElementById('gradientEndHex').value = endColor;
        
        const css = `background: linear-gradient(${direction}, ${startColor}, ${endColor});`;
        document.getElementById('gradient-css').value = css;
        
        const preview = document.getElementById('gradient-preview');
        preview.style.background = `linear-gradient(${direction}, ${startColor}, ${endColor})`;
    }

    function copyGradient() {
        const css = document.getElementById('gradient-css');
        css.select();
        document.execCommand('copy');
        alert('Gradient CSS copied to clipboard!');
    }

    function applyPreset(preset) {
        const presets = {
            ocean: { primary: '#0EA5E9', secondary: '#06B6D4', accent: '#22D3EE' },
            sunset: { primary: '#F97316', secondary: '#EF4444', accent: '#FBBF24' },
            forest: { primary: '#22C55E', secondary: '#10B981', accent: '#34D399' },
            royal: { primary: '#8B5CF6', secondary: '#6366F1', accent: '#A78BFA' },
            midnight: { primary: '#374151', secondary: '#1F2937', accent: '#4B5563' },
            candy: { primary: '#EC4899', secondary: '#F43F5E', accent: '#F472B6' },
            aurora: { primary: '#14B8A6', secondary: '#10B981', accent: '#2DD4BF' },
            lavender: { primary: '#8B5CF6', secondary: '#7C3AED', accent: '#A78BFA' }
        };

        const theme = presets[preset];
        if (theme) {
            currentTheme.primary = theme.primary;
            currentTheme.secondary = theme.secondary;
            currentTheme.accent = theme.accent;
            
            document.getElementById('primaryColor').value = theme.primary;
            document.getElementById('primaryColorHex').value = theme.primary;
            document.getElementById('secondaryColor').value = theme.secondary;
            document.getElementById('secondaryColorHex').value = theme.secondary;
            document.getElementById('accentColor').value = theme.accent;
            document.getElementById('accentColorHex').value = theme.accent;
            
            updateThemePreview();
            updateThemeConfig();
            alert(`${preset.charAt(0).toUpperCase() + preset.slice(1)} theme applied!`);
        }
    }

    function copyThemeConfig() {
        const config = document.getElementById('theme-config');
        config.select();
        document.execCommand('copy');
        alert('Theme configuration copied to clipboard!');
    }

    function downloadThemeConfig() {
        const config = document.getElementById('theme-config').value;
        const blob = new Blob([config], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'theme-config.json';
        a.click();
        URL.revokeObjectURL(url);
    }

    function saveThemeToLocalStorage() {
        localStorage.setItem('customTheme', JSON.stringify(currentTheme));
        alert('Theme saved to browser storage!');
    }

    function setTheme(themeName) {
        alert(`${themeName.charAt(0).toUpperCase() + themeName.slice(1)} theme activated!`);
    }

    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        alert('Dark mode toggled!');
    }

    // Initialize
    updateThemePreview();
</script>

@endsection
