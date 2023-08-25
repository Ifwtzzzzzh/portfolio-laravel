@extends('admin.layouts.base')

@section('title', 'Create Project')

@section('content')

<div id='recipients' class="p-8 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
  {{-- ========= ALERT ========= --}}
 @if ($errors->any()) 
 <div id="alert" class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
  <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
  </svg>
  <span class="sr-only">Danger</span>
  <div>
    <span class="font-medium">Ensure that these requirements are met:</span>
      <ul class="mt-1.5 ml-4 list-disc list-inside">
       @foreach ($errors->all() as $error) 
       <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
	  <span class="sr-only">Close</span>
	  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
	 	<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
	  </svg>
	</button>
</div>
 @endif
 {{-- ========= END ALERT ========= --}}

 {{-- ========= FORM ========= --}}
 <div class="p-6">             
  <form enctype="multipart/form-data" method="POST" action="{{ route('admin.project.store') }}">
   @csrf
   <div class="mb-6">
     <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
     <input type="text" name="name" id="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter project name" required>
   </div>
   <div class="mb-6">
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
    <input type="text" name="category" id="category" value="{{ old('category') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter category project" required>
  </div>
   <div class="mb-6">
    <label for="tech_stack" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tech Stack</label>
    <input type="text" name="tech_stack" id="tech_stack" value="{{ old('tech_stack') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter all tech stack that using in this project" required>
  </div>
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
    <input id="image" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
  </div>
   <div class="mb-6">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Description</label>
    <textarea name="description" id="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a description...">{{ old('description') }}</textarea>
  </div>
  <div class="mb-6">
   <label for="project_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Link</label>
   <input type="text" name="project_link" id="project_link" value="{{ old('project_link') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter project link" required>
 </div>
 <div class="mb-6">
  <label for="doc_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documentation Link</label>
  <input type="text" name="doc_link" id="doc_link" value="{{ old('doc_link') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter documentation link" required>
</div>
<div class="mb-6">
 <label for="github_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Github Link</label>
 <input type="text" name="github_link" id="github_link" value="{{ old('github_link') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter github link" required>
</div>
  <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
  </form>
</div>
{{-- ========= END FORM ========= --}}
@endsection
