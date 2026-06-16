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