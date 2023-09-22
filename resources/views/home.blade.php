@extends('admin.layouts.base')

@section('title', 'Dashboard')

@section('content')
 {{-- ========= COUNT ========= --}}
 <div class="grid grid-cols-5 gap-4 mb-4 mt-10">
  <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700">
   <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $achievement }}</h5>
   <p class="font-normal text-gray-700 dark:text-gray-400">Achievement</p>
  </div>
  <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700">
   <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $project }}</h5>
   <p class="font-normal text-gray-700 dark:text-gray-400">Project</p>
  </div>
  <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700">
   <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $social_media }}</h5>
   <p class="font-normal text-gray-700 dark:text-gray-400">Social Media</p>
  </div>
  <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700">
   <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $review }}</h5>
   <p class="font-normal text-gray-700 dark:text-gray-400">Review</p>
  </div>
 </div>
 {{-- ========= END COUNT ========= --}}

 {{-- ========= TIMELINE ========= --}}
 <div class="grid grid-cols-3 gap-4 mb-4">
  <div class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700"> 
   <h3 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Educations</h3>
   <ol class="relative border-l border-gray-200 dark:border-gray-700">                  
    @foreach ($education as $educations)
    <li class="mb-5 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $educations->time }}</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $educations->name }}</h3>
    </li>
    @endforeach
   </ol>
  </div>
  
  <div class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700"> 
   <h3 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Organizations</h3>
   <ol class="relative border-l border-gray-200 dark:border-gray-700">                  
    @foreach ($organizations as $organization)
    <li class="mb-5 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $organization->time }}</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $organization->name }}</h3>
    </li>
    @endforeach
   </ol>
  </div>
 </div>
 {{-- ========= END TIMELINE ========= --}}
@endsection
