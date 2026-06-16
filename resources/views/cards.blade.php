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