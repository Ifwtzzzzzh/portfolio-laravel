@extends('admin.layouts.base')

@section('title', 'Achievement')

@section('content')

<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
 <table id="myTable" class="stripe hover">
  <thead>
   <tr>
    <th data-priority="1">Name</th>
    <th data-priority="2">Time</th>
    <th data-priority="3">Description</th>
    <th data-priority="4">Action</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>LKS Provinsi</td>
    <td>2022</td>
    <td>Testing</td>
    <td>
     <button type="button" class="text-white bg-yellow-300 hover:bg-yellow-800 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">Update</button>
     <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </td>
   </tr>
   <tr>
    <td>LKS Provinsi</td>
    <td>2022</td>
    <td>Testing</td>
    <td>
     <button type="button" class="text-white bg-yellow-300 hover:bg-yellow-800 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">Update</button>
     <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-1.5 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </td>
   </tr>
  </tbody>
 </table>
</div>

@endsection
