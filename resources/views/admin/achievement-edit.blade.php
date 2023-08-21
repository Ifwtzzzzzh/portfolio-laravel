@extends('admin.layouts.base')

@section('title', 'Edit Achievement')

@section('content')

<div id='recipients' class="p-8 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
 <div class="p-6">             
  <form enctype="multipart/form-data" method="POST" action="{{ route('admin.achievement.update', $achievement->id) }}">
   @method('PUT')
   @csrf
   <div class="mb-6">
     <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Achievement Name</label>
     <input type="text" name="name" id="name" value="{{ $achievement->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="The First Winner of LKS ITSSB Lampung Province" required>
   </div>
   <div class="mb-6">
    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Year Achievement was Held</label>
    <input id="text" name="time" id="time" value="{{ $achievement->time }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2023" required>
  </div>
   <div class="mb-6">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Achievement Description</label>
    <textarea name="description" id="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a description...">{{ $achievement->description }}</textarea>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload E-Certificate</label>
    <input id="image" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
  </div>
  <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
  </form>
</div>

@endsection
