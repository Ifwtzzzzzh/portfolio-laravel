<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- ========= FLOWBITE ========= --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- ========= NAVBAR ========= --}}
    @include('admin.layouts.navbar')
    {{-- ========= END NAVBAR ========= --}}

    {{-- ========= SIDEBAR ========= --}}
    {{-- ========= END SIDEBAR ========= --}}

    {{-- ========= CONTENT ========= --}}
    {{-- ========= END CONTENT ========= --}}
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</html>