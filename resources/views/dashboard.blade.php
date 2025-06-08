<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col text-center items-center text-center">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-2 w-full">{{ __("Hello," . ' ' . Auth::user()->name . '. Welcome to your workout tracker!') }}</h2>
                    <br>
                    <h3 class="text-xl text-gray-600 w-full">{{__("Ready to smash your fitness goals?")}}</h3>
                    <a href={{route('workout.create')}} class="w-full flex justify-center">
                        <button class="w-3/4 mt-5 py-4 bg-blue-600 hover:bg-blue-700 transition rounded-lg text-white font-semibold">View Workout</button>
                    </a>
                    <br>
                    <a href={{route('workout.index')}} class="w-full flex justify-center">
                    <button class="w-3/4 py-4 bg-green-600 hover:bg-green-700 transition rounded-lg text-white font-semibold">Create Workout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
