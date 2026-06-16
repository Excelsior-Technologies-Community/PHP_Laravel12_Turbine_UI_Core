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