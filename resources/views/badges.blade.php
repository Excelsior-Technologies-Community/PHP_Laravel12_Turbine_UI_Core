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