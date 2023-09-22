@extends('admin.layouts.base')

@section('title', 'Education')

@section('content')

<div id='recipients' class="p-8 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
 {{-- ========= TABLE ========= --}}
 <table id="myTable" class="stripe hover">
  <thead>
   <tr>
    <th data-priority="1">Id</th>
    <th data-priority="2">Name</th>
    <th data-priority="3">Time</th>
    <th data-priority="4">Description</th>
    <th>Action</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($educations as $education) 
   <tr>
    <td>{{ $education->id }}</td>
    <td>{{ $education->name }}</td>
    <td>{{ $education->time }}</td>
    <td>{{ $education->description }}</td>
    <td>
     <a href="{{ route('admin.education.edit', $education->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Update</a>
     <form method="POST" action="{{ route('admin.education.destroy', $education->id) }}">
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
 <a href="{{ route('admin.education.create') }}" class="button text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Add Educations</a>
 {{-- ========= END TABLE ========= --}}
</div>

@endsection
