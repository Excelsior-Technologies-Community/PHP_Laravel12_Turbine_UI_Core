# PHP_Laravel12_Turbine_UI_Core

## Introduction

PHP_Laravel12_Turbine_UI_Core is a Laravel 12 project that demonstrates the integration and usage of the Turbine UI Core component library. The project showcases built-in Turbine themes, custom variants, Blade components, Tailwind CSS integration, and a modern dashboard interface.

This project serves as a learning resource for understanding how Turbine UI Core works with Laravel 12 and how reusable UI components can be used to build professional web applications.

---

## Project Objectives

- Install and configure Turbine UI Core in Laravel 12
- Understand Turbine UI themes and variants
- Create reusable UI components
- Demonstrate Alert, Button, Card, Form, Badge, and Theme components
- Learn Tailwind CSS integration with Laravel 12
- Build a professional UI showcase application

---

## Features

- Laravel 12

- Turbine UI Core Integration

- Tailwind CSS 4

- Blade Components

- Dashboard UI

- Alert Components

- Button Components

- Card Components

- Form Components

- Badge Components

- Theme Switching

- Custom Variant Creation

- Responsive Design

---

## Technology Stack

| Technology | Version |
|------------|----------|
| PHP | 8.2+ |
| Laravel | 12 |
| Tailwind CSS | 4 |
| Vite | Latest |
| Turbine UI Core | Latest |
| Blade Components | Laravel 12 |

---

# Project Setup

## Step 1: Create Laravel 12 Project

```bash
composer create-project laravel/laravel PHP_Laravel12_Turbine_UI_Core
```

Move into project directory:

```bash
cd PHP_Laravel12_Turbine_UI_Core
```

---

## Step 2: Install Turbine UI Core

```bash
composer require brandymedia/turbine-ui-core
```

---

## Step 3: Install Frontend Dependencies

```bash
npm install
npm install @tailwindcss/forms
```

---

## Step 4: Publish Turbine Assets

### Publish JavaScript

```bash
php artisan vendor:publish --tag=turbine-ui-js --force
```

### Publish Themes

```bash
php artisan vendor:publish --tag=turbine-ui-themes
```

---

## Step 5: Environment Configuration

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel12_turbine_ui
DB_USERNAME=root
DB_PASSWORD=

TURBINE_UI_THEME=kinetic
```

Run Database Migrations:

```bash
php artisan migrate
```

---

## Step 6: Create Custom Variant

Generate a custom variant:

```bash
php artisan turbine:create-variant
```

Enter:

```text
corporate
```

Generated file:

```text
resources/views/vendor/turbine-ui/variants/corporate.php
```

---

## Turbine Themes

Turbine UI Core provides built-in themes.

### Kinetic Theme

```env
TURBINE_UI_THEME=kinetic
```

### Primal Theme

```env
TURBINE_UI_THEME=primal
```

Clear cache after changing theme:

```bash
php artisan optimize:clear
```

---

## Step 7: Create Blade Files

### Layout File

#### resources/views/layouts/app.blade.php

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Turbine UI Core</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @turbineUI
</head>

<body class="bg-gray-100">

<div class="container mx-auto p-6">

    @yield('content')

</div>

</body>
</html>
```

### Dashboard Page

#### resources/views/dashboard.blade.php

```blade
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
```

### Alert Components

#### resources/views/alerts.blade.php

```blade
@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-8">
        Alert Components
    </h1>


    <x-t-alert
        title="Success"
        variant="success">

        Operation completed successfully.

    </x-t-alert>


    <div class="mt-5">

        <x-t-alert
            title="Warning"
            variant="warning">

            Please check your information.

        </x-t-alert>

    </div>



    <div class="mt-5">

        <x-t-alert
            title="Danger"
            variant="danger">

            Something went wrong.

        </x-t-alert>

    </div>


</div>

@endsection
```

### Button Components

#### resources/views/buttons.blade.php

```blade
@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6">


    <h1 class="text-4xl font-bold mb-8">
        Button Components
    </h1>



    <div class="space-x-3">


        <x-t-button variant="primary">
            Primary
        </x-t-button>



        <x-t-button variant="secondary">
            Secondary
        </x-t-button>



        <x-t-button variant="success">
            Success
        </x-t-button>



        <x-t-button variant="danger">
            Danger
        </x-t-button>


    </div>


</div>

@endsection
```

### Card Components

#### resources/views/cards.blade.php

```blade
@extends('layouts.app')


@section('content')


<div class="max-w-7xl mx-auto p-6">


    <h1 class="text-4xl font-bold mb-8">
        Card Components
    </h1>



    <div class="grid md:grid-cols-3 gap-6">


        <div class="bg-white shadow rounded-lg p-6">


            <h2 class="text-xl font-bold">
                User Card
            </h2>


            <p class="mt-3">
                Laravel 12 Turbine UI Card Example
            </p>


        </div>



        <div class="bg-white shadow rounded-lg p-6">


            <h2 class="text-xl font-bold">
                Project Card
            </h2>


            <p class="mt-3">
                Component based UI design
            </p>


        </div>



        <div class="bg-white shadow rounded-lg p-6">


            <h2 class="text-xl font-bold">
                Revenue Card
            </h2>


            <p class="mt-3">
                Dashboard statistics
            </p>


        </div>


    </div>


</div>


@endsection
```

### Form Components

#### resources/views/forms.blade.php

```blade
@extends('layouts.app')


@section('content')


<div class="max-w-3xl mx-auto p-6">


    <h1 class="text-4xl font-bold mb-8">
        Form Components
    </h1>



    <form class="space-y-5">


        <div>

            <label>
                Name
            </label>


            <input
                type="text"
                class="w-full border rounded p-3">

        </div>



        <div>

            <label>
                Email
            </label>


            <input
                type="email"
                class="w-full border rounded p-3">

        </div>




        <div>

            <label>
                Message
            </label>


            <textarea
                class="w-full border rounded p-3">
           </textarea>


        </div>




        <x-t-button variant="primary">
            Submit
        </x-t-button>



    </form>


</div>


@endsection
```

### Badge Components

#### resources/views/badges.blade.php

```blade
@extends('layouts.app')


@section('content')


<div class="p-6">


    <h1 class="text-4xl font-bold mb-8">
        Badge Components
    </h1>


    <span class="bg-green-500 text-white px-4 py-2 rounded">
        Active
    </span>


    <span class="bg-yellow-500 text-white px-4 py-2 rounded ml-3">
        Pending
    </span>


    <span class="bg-red-500 text-white px-4 py-2 rounded ml-3">
        Failed
    </span>


</div>


@endsection
```

### Theme Page

#### resources/views/theme.blade.php

```blade
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
```
---

## Step 8: Routes

### routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/alerts', 'alerts');

Route::view('/buttons', 'buttons');

Route::view('/cards', 'cards');

Route::view('/forms', 'forms');

Route::view('/badges', 'badges');

Route::view('/theme', 'theme');
```

---

## Step 9: Running The Application

### Start Vite

```bash
npm run dev
```

### Start Laravel Server

```bash
php artisan serve
```

### Open Browser

```text
http://127.0.0.1:8000
```

---

## Available Pages

| URL | Description |
|------|-------------|
| / | Dashboard |
| /alerts | Alert Components |
| /buttons | Button Components |
| /cards | Card Components |
| /forms | Form Components |
| /badges | Badge Components |
| /theme | Theme Demonstration |

---

## Theme Switching

### Kinetic Theme

```env
TURBINE_UI_THEME=kinetic
```

### Primal Theme

```env
TURBINE_UI_THEME=primal
```

Clear cache:

```bash
php artisan optimize:clear
```

Refresh browser to see changes.

---

## Screenshots

### Dashboard (kinetic)

<img width="1912" height="1027" alt="Screenshot 2026-06-16 152018" src="https://github.com/user-attachments/assets/e5236c37-7dcb-4992-ada5-202637da0d8b" />

### Kinetic Theme

<img width="1918" height="1031" alt="Screenshot 2026-06-16 152033" src="https://github.com/user-attachments/assets/074db26a-638f-4687-b0a0-6a3a9323f525" />

### Alert (Kinetic)

<img width="1918" height="1027" alt="Screenshot 2026-06-16 152121" src="https://github.com/user-attachments/assets/9d1582cb-c0d4-4bf2-b6c6-e7316c81c3e7" />

### Dashboard (primal)

<img width="1918" height="1030" alt="Screenshot 2026-06-16 152328" src="https://github.com/user-attachments/assets/431a94ad-2123-4edb-bfce-73bbf9907995" />

### Primal Theme

<img width="1917" height="1027" alt="Screenshot 2026-06-16 152344" src="https://github.com/user-attachments/assets/b335e133-29f4-4913-a3ac-c1b2548b09c3" />

### Alert (primal)

<img width="1917" height="1026" alt="Screenshot 2026-06-16 152406" src="https://github.com/user-attachments/assets/07114079-dd22-4639-a669-463b54807f3d" />

---

## Project Structure

```text
PHP_Laravel12_Turbine_UI_Core
│
├── app
├── bootstrap
├── config
├── public
├── resources
│   ├── css
│   │   └── app.css
│   │
│   ├── js
│   │   └── app.js
│   │
│   └── views
│       ├── layouts
│       │   └── app.blade.php
│       │
│       ├── dashboard.blade.php
│       ├── alerts.blade.php
│       ├── buttons.blade.php
│       ├── cards.blade.php
│       ├── forms.blade.php
│       ├── badges.blade.php
│       └── theme.blade.php
│
├── routes
│   └── web.php
│
├── vendor
│
├── .env
└── README.md
```

---

## Learning Outcomes

After completing this project, you will understand:

- Laravel 12 Project Structure
- Package Installation
- Turbine UI Core Integration
- Blade Components
- Tailwind CSS Styling
- Theme Management
- Custom Variant Creation
- Responsive UI Design
- Component-Based Development

---


## Conclusion

PHP_Laravel12_Turbine_UI_Core demonstrates how to integrate Turbine UI Core into Laravel 12 and build reusable, modern UI components using Blade and Tailwind CSS. The project showcases theme switching, component-based development, and responsive user interface design, making it an excellent learning resource for Laravel developers.
