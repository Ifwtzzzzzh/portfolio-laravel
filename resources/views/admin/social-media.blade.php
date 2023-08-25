@extends('admin.layouts.base')

@section('title', 'Social Media')

@section('content')

{{-- ========= SUCCESS TOAST ========= --}}
@if (session()->has('success')) 
<div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
 <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
     <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
         <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
     </svg>
     <span class="sr-only">Check icon</span>
 </div>
 <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
 <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
     <span class="sr-only">Close</span>
     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
     </svg>
 </button>
</div>
@endif
{{-- ========= END SUCCESS TOAST ========= --}}

<div id='recipients' class="p-8 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
 {{-- ========= TABLE ========= --}}
 <table id="myTable" class="stripe hover">
  <thead>
   <tr>
    <th data-priority="1">Id</th>
    <th data-priority="2">Name</th>
    <th data-priority="3">Link</th>
    <th data-priority="4">Logo</th>
    <th>Action</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($social_medias as $social_media) 
   <tr>
    <td>{{ $social_media->id }}</td>
    <td>{{ $social_media->name }}</td>
    <td>{{ $social_media->link }}</td>
    <td>
     <img src="{{ asset('storage/image/'.$social_media->logo) }}" alt="" width="50%">
    </td>
    <td>
     <a href="{{ route('admin.social-media.edit', $social_media->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Update</a>
     <form method="POST" action="{{ route('admin.social-media.destroy', $social_media->id) }}">
      @method('DELETE')
      @csrf
      <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mt-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
     </form>
    </td>
   </tr>
   @endforeach
  </tbody>
 </table>
 <div class="mb-6"></div>
 <a href="{{ route('admin.social-media.create') }}" class="button text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Add Achievement</a>
 {{-- ========= END TABLE ========= --}}
</div>
@endsection
