@extends('admin.layouts.base')

@section('title', 'Contact')

@section('content')

<div id='recipients' class="p-8 lg:mt-0 rounded shadow bg-white relative overflow-x-auto">
 {{-- ========= TABLE ========= --}}
 <table id="myTable" class="stripe hover">
  <thead>
   <tr>
    <th data-priority="1">Email</th>
    <th data-priority="2">Subject</th>
    <th data-priority="3">Message</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>admin@gmail.com</td>
    <td>Test</td>
    <td>Testing</td>
   </tr>
   <tr>
    <td>admin@gmail.com</td>
    <td>Test</td>
    <td>Testing</td>
   </tr>
  </tbody>
 </table>
 {{-- ========= END TABLE ========= --}}
</div>

@endsection
