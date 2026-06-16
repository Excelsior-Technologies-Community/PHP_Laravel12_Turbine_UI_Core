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