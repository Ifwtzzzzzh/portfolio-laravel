<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<style>
  .dataTables_wrapper select,
  .dataTables_wrapper .dataTables_filter input {
    color: #4a5568;
    line-height: 1.25;
    border-width: 2px;
    border-radius: .25rem;
    border-color: #edf2f7;
    background-color: #edf2f7;
  }
  table.dataTable.hover tbody tr:hover,
  table.dataTable.display tbody tr:hover {
    background-color: #ebf4ff;
  }
  .dataTables_wrapper .dataTables_paginate .paginate_button {
    font-weight: 700;
    border-radius: .25rem;
    border: 1px solid transparent;
  }
  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    color: #fff !important;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    font-weight: 700;
    border-radius: .25rem;
    background: #0d9c20 !important;
    border: 1px solid transparent;
  }
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: #fff !important;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    font-weight: 700;
    border-radius: .25rem;
    background: #0d9c20 !important;
    border: 1px solid transparent;
    
  }

  table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
  table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
    background-color: #667eea !important;
  }
</style>
<body class="bg-gray-100 text-gray-900  leading-normal">
    {{-- ========= SIDEBAR ========= --}}
    @include('admin.layouts.sidebar')

    {{-- ========= CONTENT ========= --}}
    <section class="content p-4 sm:ml-64">
      <div class="p-4 rounded-lg">
      <h2 class="mb-10 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">@yield('title')</h2>
        @yield('content')
      </div>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</html>