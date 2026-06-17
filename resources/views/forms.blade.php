@extends('layouts.app')

@section('content')

    <div class="max-w-3xl mx-auto p-6">

        <h1 class="text-4xl font-bold mb-8">
            Contact Form
        </h1>

        @if(session('success'))

            <x-t-alert title="Success" variant="success">

                {{ session('success') }}

            </x-t-alert>

        @endif

        <form action="/contact" method="POST" class="space-y-5">

            @csrf

            <div>

                <label class="block mb-2">
                    Name
                </label>

                <input type="text" name="name" class="w-full border rounded p-3">

            </div>

            <div>

                <label class="block mb-2">
                    Email
                </label>

                <input type="email" name="email" class="w-full border rounded p-3">

            </div>

            <div>

                <label class="block mb-2">
                    Message
                </label>

                <textarea name="message" rows="5" class="w-full border rounded p-3"></textarea>

            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Submit
            </button>

        </form>

    </div>

@endsection