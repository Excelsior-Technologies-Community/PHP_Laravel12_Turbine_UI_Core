@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto p-6">

    <h1 class="text-4xl font-bold mb-6">
        About Turbine UI Core
    </h1>

    <div class="bg-white text-black shadow rounded-lg p-6">

        <p class="mb-4">
            This project demonstrates Laravel 12 integration with
            Turbine UI Core package.
        </p>

        <p class="mb-4">
            It showcases reusable Blade components,
            responsive design, Tailwind CSS styling,
            theme management and modern UI development.
        </p>

        <p>
            Features implemented:
        </p>

        <ul class="list-disc ml-6 mt-3">
            <li>Dark Mode Toggle</li>
            <li>Dynamic Dashboard Statistics</li>
            <li>Contact Form Submission</li>
            <li>Theme Demonstration</li>
        </ul>

    </div>

</div>

@endsection