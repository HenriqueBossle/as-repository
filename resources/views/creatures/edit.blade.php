@extends('layouts.base')

@section('content')


<form class="max-w-sm mx-auto" action="{{ url('creatures/'.$creature->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Name</label>
            <input type="text" name="name" id="name" value="{{ $creature->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="type" class="block mb-2 text-sm font-medium text-white dark:text-white">Species</label>
            <input type="text" name="type" id="type"  value="{{ $creature->species }}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="power" class="block mb-2 text-sm font-medium text-white dark:text-white">Age</label>
            <input type="text" name="power" id="power" value="{{ $creature->age }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="power" class="block mb-2 text-sm font-medium text-white dark:text-white">Habitat</label>
            <input type="text" name="power" id="power" value="{{ $creature->habitat }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div>
            <img class="w-24 h-24 rounded-full shadow-lg" src="{{ asset($creature->image) }}" alt="{{ $creature->name }}">
            <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-white">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <br>
        <button type="submit" class="text-white bg-gradient-to-br from-red-600 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update creature</button>
    </form>
@endsection